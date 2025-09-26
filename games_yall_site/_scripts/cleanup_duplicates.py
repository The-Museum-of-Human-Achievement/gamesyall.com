#!/usr/bin/env python3
# cleanup_duplicates.py
#
# Script to find and merge duplicate game files, then update event references
# Keeps the oldest file as canonical and merges newer information into it

import os
import re
import yaml
import argparse
import sys
from pathlib import Path
from datetime import datetime
try:
    from slugify import slugify
except ImportError:
    print("ERROR: python-slugify is required")
    print("Install it with: pip install python-slugify")
    sys.exit(1)

def normalize_title_for_comparison(title, debug=False):
    """Normalize a title for comparison by removing/standardizing punctuation and spacing"""
    if not title:
        return ""
    
    if debug:
        print(f"    Normalizing: '{title}'")
    
    # Convert to lowercase and strip
    normalized = title.lower().strip()
    
    # Remove common punctuation that might vary between submissions
    # Use a safe approach to handle various punctuation marks
    punctuation_to_remove = [
        "'", '"', ".", ",", "!", "?", ":", ";", "-",
        chr(8211), chr(8212),  # en-dash, em-dash
        chr(8216), chr(8217),  # left/right single quotes
        chr(8220), chr(8221),  # left/right double quotes
    ]
    
    for punct in punctuation_to_remove:
        normalized = normalized.replace(punct, "")
    
    # Normalize whitespace (multiple spaces become single space)
    normalized = re.sub(r'\s+', ' ', normalized)
    
    # Strip again after normalization
    normalized = normalized.strip()
    
    if debug:
        print(f"    Result: '{normalized}'")
    
    return normalized

def find_duplicate_games(games_dir, debug=False):
    """Find all duplicate games grouped by normalized title
    
    Returns:
        dict: {normalized_title: [list of game file info]}
    """
    if not os.path.exists(games_dir):
        print(f"Games directory does not exist: {games_dir}")
        return {}
    
    files = sorted([f for f in os.listdir(games_dir) if f.endswith('.md') or f.endswith('.html')])
    games_by_normalized_title = {}
    
    print(f"Analyzing {len(files)} game files...")
    
    for filename in files:
        file_path = os.path.join(games_dir, filename)
        try:
            with open(file_path, 'r', encoding='utf-8') as f:
                content = f.read()
            
            # Extract front matter
            front_matter_match = re.match(r"---\n(.*?)\n---", content, re.DOTALL)
            if front_matter_match:
                front_matter = yaml.safe_load(front_matter_match.group(1))
                title = front_matter.get('title', '')
                date = front_matter.get('date', '')
                
                # Parse date for sorting
                date_obj = None
                if date:
                    try:
                        if isinstance(date, str):
                            date_obj = datetime.strptime(date, '%Y-%m-%d')
                        else:
                            date_obj = date
                    except ValueError:
                        pass
                
                # Normalize title for grouping
                normalized_title = normalize_title_for_comparison(title)
                
                if normalized_title:  # Only process if we have a valid normalized title
                    if normalized_title not in games_by_normalized_title:
                        games_by_normalized_title[normalized_title] = []
                    
                    # Extract body content
                    body_match = re.match(r"---\n.*?\n---\n?(.*)", content, re.DOTALL)
                    body = body_match.group(1).strip() if body_match else ""
                    
                    games_by_normalized_title[normalized_title].append({
                        'filename': filename,
                        'file_path': file_path,
                        'title': title,
                        'date': date,
                        'date_obj': date_obj,
                        'front_matter': front_matter,
                        'body': body,
                        'slug': os.path.splitext(filename)[0]
                    })
                    
        except Exception as e:
            print(f"Error reading {filename}: {e}")
            if debug:
                import traceback
                traceback.print_exc()
    
    # Sort each group by date (oldest first)
    for normalized_title, games in games_by_normalized_title.items():
        games.sort(key=lambda x: x['date_obj'] or datetime.min)
    
    # Return only groups with duplicates
    duplicates = {k: v for k, v in games_by_normalized_title.items() if len(v) > 1}
    
    return duplicates

def merge_game_data(canonical_game, duplicate_games, debug=False):
    """Merge data from duplicate games into the canonical game
    
    Returns:
        dict: Updated front matter for canonical game
    """
    merged_front_matter = canonical_game['front_matter'].copy()
    
    if debug:
        print(f"    Merging data into canonical game: {canonical_game['filename']}")
    
    # Track all dates this game was featured
    featured_dates = merged_front_matter.get('featured_dates', [])
    if isinstance(featured_dates, str):
        featured_dates = [featured_dates]
    elif not isinstance(featured_dates, list):
        featured_dates = []
    
    # Add canonical date if not present
    if canonical_game['date'] and canonical_game['date'] not in featured_dates:
        featured_dates.append(canonical_game['date'])
    
    # Merge information from duplicates
    for dup in duplicate_games:
        if debug:
            print(f"      Merging from: {dup['filename']}")
        
        # Add duplicate's date to featured dates
        if dup['date'] and dup['date'] not in featured_dates:
            featured_dates.append(dup['date'])
        
        # Merge fields (prefer non-empty values, and newer values for some fields)
        for key, value in dup['front_matter'].items():
            if key in ['layout', 'title']:  # Don't update these core fields
                continue
                
            if value and str(value).strip():  # Only consider non-empty values
                current_value = merged_front_matter.get(key)
                
                # For these fields, prefer newer/longer/more detailed values
                if key in ['description', 'developer_bio', 'website', 'image']:
                    if not current_value or len(str(value)) > len(str(current_value)):
                        merged_front_matter[key] = value
                        if debug:
                            print(f"        Updated {key}: {value}")
                
                # For social_links, merge arrays
                elif key == 'social_links':
                    current_links = merged_front_matter.get('social_links', [])
                    if isinstance(value, list):
                        # Add new links that aren't already present
                        for link in value:
                            if link not in current_links:
                                current_links.append(link)
                        merged_front_matter['social_links'] = current_links
                        if debug:
                            print(f"        Merged social_links")
                
                # For other fields, only update if current is empty
                elif not current_value:
                    merged_front_matter[key] = value
                    if debug:
                        print(f"        Added {key}: {value}")
    
    # Update featured_dates and use most recent as primary date
    if featured_dates:
        featured_dates = sorted(list(set(featured_dates)), reverse=True)  # Remove dupes and sort newest first
        merged_front_matter['featured_dates'] = featured_dates
        merged_front_matter['date'] = featured_dates[0]  # Most recent date as primary
    
    return merged_front_matter

def find_event_references(events_dir, debug=False):
    """Find all references to game slugs in event files
    
    Returns:
        dict: {slug: [list of event files that reference it]}
    """
    if not os.path.exists(events_dir):
        print(f"Events directory does not exist: {events_dir}")
        return {}
    
    slug_references = {}
    event_files = [f for f in os.listdir(events_dir) if f.endswith('.md') or f.endswith('.html')]
    
    print(f"Scanning {len(event_files)} event files for game references...")
    
    for filename in event_files:
        file_path = os.path.join(events_dir, filename)
        try:
            with open(file_path, 'r', encoding='utf-8') as f:
                content = f.read()
            
            # Extract front matter
            front_matter_match = re.match(r"---\n(.*?)\n---", content, re.DOTALL)
            if front_matter_match:
                front_matter = yaml.safe_load(front_matter_match.group(1))
                game_slugs = front_matter.get('game_slugs', [])
                
                if isinstance(game_slugs, list):
                    for slug in game_slugs:
                        if slug not in slug_references:
                            slug_references[slug] = []
                        slug_references[slug].append({
                            'filename': filename,
                            'file_path': file_path
                        })
                        
        except Exception as e:
            print(f"Error reading event file {filename}: {e}")
            if debug:
                import traceback
                traceback.print_exc()
    
    return slug_references

def update_event_references(slug_references, slug_mapping, debug=False):
    """Update event files to use canonical slugs instead of duplicate slugs
    
    Args:
        slug_references: dict from find_event_references
        slug_mapping: dict {old_slug: new_canonical_slug}
    """
    updated_files = 0
    
    for old_slug, new_slug in slug_mapping.items():
        if old_slug in slug_references:
            print(f"Updating event references: {old_slug} -> {new_slug}")
            
            for event_ref in slug_references[old_slug]:
                try:
                    file_path = event_ref['file_path']
                    
                    with open(file_path, 'r', encoding='utf-8') as f:
                        content = f.read()
                    
                    # Extract and update front matter
                    front_matter_match = re.match(r"---\n(.*?)\n---\n?(.*)", content, re.DOTALL)
                    if front_matter_match:
                        front_matter = yaml.safe_load(front_matter_match.group(1))
                        body = front_matter_match.group(2) if front_matter_match.group(2) else ""
                        
                        # Update game_slugs
                        game_slugs = front_matter.get('game_slugs', [])
                        if isinstance(game_slugs, list):
                            # Replace old slug with new slug
                            game_slugs = [new_slug if slug == old_slug else slug for slug in game_slugs]
                            front_matter['game_slugs'] = game_slugs
                            
                            # Write updated file
                            with open(file_path, 'w', encoding='utf-8') as f:
                                f.write('---\n')
                                yaml.dump(front_matter, f, default_flow_style=False, allow_unicode=True, sort_keys=False)
                                f.write('---\n')
                                if body.strip():
                                    f.write('\n' + body)
                            
                            updated_files += 1
                            if debug:
                                print(f"  Updated {event_ref['filename']}")
                            
                except Exception as e:
                    print(f"Error updating event file {event_ref['filename']}: {e}")
                    if debug:
                        import traceback
                        traceback.print_exc()
    
    return updated_files

def cleanup_duplicates(games_dir, events_dir=None, dry_run=False, debug=False):
    """Main function to cleanup duplicate games and update event references"""
    
    # Find duplicates
    print("=== FINDING DUPLICATES ===")
    duplicates = find_duplicate_games(games_dir, debug)
    
    if not duplicates:
        print("No duplicate games found!")
        return
    
    print(f"\nFound {len(duplicates)} sets of duplicate games:")
    for normalized_title, games in duplicates.items():
        print(f"  '{normalized_title}': {len(games)} files")
        for game in games:
            print(f"    - {game['filename']} ({game['date']})")
    
    # Find event references
    slug_references = {}
    if events_dir:
        print(f"\n=== SCANNING EVENT REFERENCES ===")
        slug_references = find_event_references(events_dir, debug)
    
    # Process each set of duplicates
    print(f"\n=== PROCESSING DUPLICATES ===")
    slug_mapping = {}  # old_slug -> canonical_slug
    files_to_delete = []
    files_updated = 0
    
    for normalized_title, games in duplicates.items():
        print(f"\nProcessing duplicates for '{normalized_title}':")
        
        # Canonical game is the oldest one
        canonical_game = games[0]
        duplicate_games = games[1:]
        
        print(f"  Canonical: {canonical_game['filename']} ({canonical_game['date']})")
        print(f"  Duplicates: {[g['filename'] for g in duplicate_games]}")
        
        # Merge data
        merged_front_matter = merge_game_data(canonical_game, duplicate_games, debug)
        
        # Track slug mapping for event updates
        canonical_slug = canonical_game['slug']
        for dup in duplicate_games:
            slug_mapping[dup['slug']] = canonical_slug
            files_to_delete.append(dup['file_path'])
        
        # Update canonical file with merged data
        if not dry_run:
            try:
                with open(canonical_game['file_path'], 'w', encoding='utf-8') as f:
                    f.write('---\n')
                    yaml.dump(merged_front_matter, f, default_flow_style=False, allow_unicode=True, sort_keys=False)
                    f.write('---\n')
                    if canonical_game['body'].strip():
                        f.write('\n' + canonical_game['body'])
                
                files_updated += 1
                print(f"  ✓ Updated canonical file: {canonical_game['filename']}")
                
            except Exception as e:
                print(f"  ✗ Error updating {canonical_game['filename']}: {e}")
        else:
            print(f"  [DRY RUN] Would update: {canonical_game['filename']}")
    
    # Update event references
    if events_dir and slug_mapping:
        print(f"\n=== UPDATING EVENT REFERENCES ===")
        if not dry_run:
            events_updated = update_event_references(slug_references, slug_mapping, debug)
            print(f"Updated {events_updated} event files")
        else:
            print("[DRY RUN] Event reference updates:")
            for old_slug, new_slug in slug_mapping.items():
                if old_slug in slug_references:
                    event_files = [ref['filename'] for ref in slug_references[old_slug]]
                    print(f"  {old_slug} -> {new_slug} in: {event_files}")
    
    # Delete duplicate files
    print(f"\n=== REMOVING DUPLICATE FILES ===")
    files_deleted = 0
    for file_path in files_to_delete:
        if not dry_run:
            try:
                os.remove(file_path)
                files_deleted += 1
                print(f"  ✓ Deleted: {os.path.basename(file_path)}")
            except Exception as e:
                print(f"  ✗ Error deleting {os.path.basename(file_path)}: {e}")
        else:
            print(f"  [DRY RUN] Would delete: {os.path.basename(file_path)}")
    
    # Summary
    print(f"\n=== CLEANUP SUMMARY ===")
    print(f"Duplicate sets found: {len(duplicates)}")
    print(f"Files updated: {files_updated}")
    print(f"Files deleted: {files_deleted}")
    if events_dir:
        events_updated = len([old for old in slug_mapping.keys() if old in slug_references])
        print(f"Event files updated: {events_updated}")
    
    if dry_run:
        print("\n[DRY RUN] No files were actually modified. Run without --dry-run to apply changes.")

def main():
    parser = argparse.ArgumentParser(description='Cleanup duplicate game files and update event references')
    parser.add_argument('--games', 
                        default="../_games",
                        help='Directory where game files are stored')
    parser.add_argument('--events', 
                        default="../_events",
                        help='Directory where event files are stored')
    parser.add_argument('--dry-run', action='store_true',
                        help='Show what would be done without making changes')
    parser.add_argument('--debug', action='store_true', 
                        help='Print detailed debug information')
    
    args = parser.parse_args()
    
    print("=== GAMES Y'ALL DUPLICATE CLEANUP ===")
    print(f"Current working directory: {os.getcwd()}")
    print(f"Games directory: {args.games}")
    print(f"Absolute games path: {os.path.abspath(args.games)}")
    print(f"Events directory: {args.events}")
    print(f"Mode: {'DRY RUN' if args.dry_run else 'LIVE UPDATES'}")
    print(f"Debug: {'ON' if args.debug else 'OFF'}")
    print("=" * 50)
    
    if not os.path.exists(args.games):
        print(f"ERROR: Games directory does not exist: {args.games}")
        print(f"Absolute path tried: {os.path.abspath(args.games)}")
        
        # Suggest alternative paths
        print("\nTrying to find the correct path...")
        alternative_paths = [
            "_games",
            "../_games"
        ]
        
        for path in alternative_paths:
            if os.path.exists(path):
                try:
                    files = [f for f in os.listdir(path) if f.endswith('.md')]
                    if len(files) > 100:  # Likely the right directory
                        print(f"Found games directory at: {path} ({len(files)} files)")
                        print(f"Use: python cleanup_duplicates.py --games {path}")
                        break
                except:
                    pass
        
        sys.exit(1)
    
    try:
        cleanup_duplicates(args.games, args.events, args.dry_run, args.debug)
    except KeyboardInterrupt:
        print("\nProcess interrupted by user. Exiting.")
        sys.exit(1)
    except Exception as e:
        print(f"\nERROR: An unexpected error occurred: {str(e)}")
        if args.debug:
            import traceback
            traceback.print_exc()
        sys.exit(1)

if __name__ == "__main__":
    main()