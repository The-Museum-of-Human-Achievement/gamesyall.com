#!/usr/bin/env python3
"""
create_missing_events.py

This script scans the _games directory for games and creates event stub files
for any months that have games but no corresponding event file.

Usage:
    python _scripts/create_missing_events.py [--dry-run] [--debug]

Arguments:
    --dry-run    Show what would be created without actually creating files
    --debug      Print detailed debug information
"""

import os
import re
import yaml
import argparse
from datetime import datetime
from collections import defaultdict
from pathlib import Path

def get_script_dir():
    """Get the directory where this script is located"""
    return os.path.dirname(os.path.abspath(__file__))

def get_site_root():
    """Get the Jekyll site root directory"""
    script_dir = get_script_dir()
    # Assume script is in site_root/_scripts/
    return os.path.dirname(script_dir)

def parse_game_file(game_path, debug=False):
    """
    Parse a game file to extract date and slug information
    
    Returns:
        dict: {'date': 'YYYY-MM-DD', 'slug': 'filename-without-extension', 'title': 'Game Title'}
        None: If file couldn't be parsed
    """
    try:
        filename = os.path.basename(game_path)
        slug = os.path.splitext(filename)[0]
        
        # Try to extract date from filename first (format: YYYY-MM-DD-title)
        date_match = re.match(r'(\d{4}-\d{2}-\d{2})-', filename)
        file_date = date_match.group(1) if date_match else None
        
        # Read the file to get frontmatter
        with open(game_path, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # Extract frontmatter
        frontmatter_match = re.match(r'^---\s*\n(.*?)\n---', content, re.DOTALL)
        if not frontmatter_match:
            if debug:
                print(f"No frontmatter found in {filename}")
            return None
        
        try:
            frontmatter = yaml.safe_load(frontmatter_match.group(1))
        except yaml.YAMLError as e:
            if debug:
                print(f"YAML error in {filename}: {e}")
            return None
        
        # Get date from frontmatter (prefer this over filename date)
        fm_date = frontmatter.get('date')
        if fm_date:
            if isinstance(fm_date, datetime):
                final_date = fm_date.strftime('%Y-%m-%d')
            else:
                final_date = str(fm_date)
        else:
            final_date = file_date
        
        if not final_date:
            if debug:
                print(f"No date found for {filename}")
            return None
        
        # Get title
        title = frontmatter.get('title', slug)
        
        return {
            'date': final_date,
            'slug': slug,
            'title': title,
            'filename': filename
        }
        
    except Exception as e:
        if debug:
            print(f"Error parsing {game_path}: {e}")
        return None

def get_month_year_from_date(date_str):
    """
    Convert date string to month-year tuple
    
    Args:
        date_str (str): Date in YYYY-MM-DD format
        
    Returns:
        tuple: (year, month_num, month_name) e.g., (2025, 5, 'May')
        None: If date couldn't be parsed
    """
    try:
        # Handle various date formats
        for fmt in ['%Y-%m-%d', '%Y/%m/%d', '%m/%d/%Y']:
            try:
                date_obj = datetime.strptime(date_str.strip(), fmt)
                break
            except ValueError:
                continue
        else:
            return None
        
        month_names = [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ]
        
        return (date_obj.year, date_obj.month, month_names[date_obj.month - 1])
    except Exception:
        return None

def find_existing_events(events_dir, debug=False):
    """
    Find all existing event files and extract their month/year
    
    Returns:
        set: Set of (year, month_num) tuples for existing events
    """
    existing_events = set()
    
    if not os.path.exists(events_dir):
        if debug:
            print(f"Events directory doesn't exist: {events_dir}")
        return existing_events
    
    for filename in os.listdir(events_dir):
        if not filename.endswith(('.md', '.html')):
            continue
        
        # Try to extract date from filename (format: YYYY-MM-DD-event-...)
        date_match = re.match(r'(\d{4})-(\d{2})-\d{2}-event', filename)
        if date_match:
            year = int(date_match.group(1))
            month = int(date_match.group(2))
            existing_events.add((year, month))
            if debug:
                print(f"Found existing event: {filename} -> {year}-{month:02d}")
        elif debug:
            print(f"Couldn't parse event filename: {filename}")
    
    return existing_events

def create_event_file(events_dir, year, month_num, month_name, game_slugs, dry_run=False, debug=False):
    """
    Create a new event file for the given month/year
    
    Args:
        events_dir (str): Directory to create event in
        year (int): Year
        month_num (int): Month number (1-12)
        month_name (str): Month name (e.g., 'May')
        game_slugs (list): List of game slugs for this month
        dry_run (bool): If True, don't actually create the file
        debug (bool): Print debug information
    """
    # Create filename: YYYY-MM-15-event-monthname-year.md
    filename = f"{year}-{month_num:02d}-15-event-{month_name.lower()}-{year}.md"
    filepath = os.path.join(events_dir, filename)
    
    # Create the event content
    event_data = {
        'date': f'{year}-{month_num:02d}-15',
        'featured_image': f'/images/event-img/GY-Banner-{month_name.lower()}-{str(year)[2:]}.png',
        'gallery-images': [
            f'/images/Archived-img/{month_name}-{year}/photos/{month_name.lower()}-gy-photo-1.jpg',
            f'/images/Archived-img/{month_name}-{year}/photos/{month_name.lower()}-gy-photo-2.jpg',
            f'/images/Archived-img/{month_name}-{year}/photos/{month_name.lower()}-gy-photo-3.jpg',
            f'/images/Archived-img/{month_name}-{year}/photos/{month_name.lower()}-gy-photo-4.jpg',
            f'/images/Archived-img/{month_name}-{year}/photos/{month_name.lower()}-gy-photo-5.jpg',
            f'/images/Archived-img/{month_name}-{year}/photos/{month_name.lower()}-gy-photo-6.jpg',
        ],
        'game_slugs': sorted(game_slugs),  # Sort for consistency
        'layout': 'event',
        'title': f'Games Y\'all {month_name} {year}'
    }
    
    content = f"""---
{yaml.dump(event_data, default_flow_style=False, allow_unicode=True).rstrip()}
---

# Games Y'all {month_name} {year}

Join us for an evening of indie games featuring the titles below!
"""
    
    if dry_run:
        print(f"[DRY RUN] Would create: {filepath}")
        if debug:
            print(f"Content would be:\n{content}")
        return
    
    # Create directory if it doesn't exist
    os.makedirs(events_dir, exist_ok=True)
    
    # Write the file
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
    
    print(f"Created event file: {filepath}")
    if debug:
        print(f"  Game slugs: {game_slugs}")

def main():
    parser = argparse.ArgumentParser(description='Create missing event files for games')
    parser.add_argument('--dry-run', action='store_true',
                        help='Show what would be created without actually creating files')
    parser.add_argument('--debug', action='store_true',
                        help='Print detailed debug information')
    parser.add_argument('--games-dir', default=None,
                        help='Path to games directory (default: site_root/_games)')
    parser.add_argument('--events-dir', default=None,
                        help='Path to events directory (default: site_root/_events)')
    
    args = parser.parse_args()
    
    # Determine paths
    site_root = get_site_root()
    games_dir = args.games_dir or os.path.join(site_root, '_games')
    events_dir = args.events_dir or os.path.join(site_root, '_events')
    
    if args.debug:
        print(f"Site root: {site_root}")
        print(f"Games directory: {games_dir}")
        print(f"Events directory: {events_dir}")
        print(f"Dry run: {args.dry_run}")
        print("-" * 40)
    
    # Check if games directory exists
    if not os.path.exists(games_dir):
        print(f"ERROR: Games directory doesn't exist: {games_dir}")
        return 1
    
    # Group games by month/year
    games_by_month = defaultdict(list)
    processed_games = 0
    skipped_games = 0
    
    print(f"Scanning games in: {games_dir}")
    
    for filename in os.listdir(games_dir):
        if not filename.endswith(('.md', '.html')):
            continue
        
        game_path = os.path.join(games_dir, filename)
        game_info = parse_game_file(game_path, args.debug)
        
        if not game_info:
            skipped_games += 1
            continue
        
        # Get month/year info
        month_info = get_month_year_from_date(game_info['date'])
        if not month_info:
            if args.debug:
                print(f"Couldn't parse date for {filename}: {game_info['date']}")
            skipped_games += 1
            continue
        
        year, month_num, month_name = month_info
        month_key = (year, month_num, month_name)
        games_by_month[month_key].append(game_info['slug'])
        processed_games += 1
        
        if args.debug:
            print(f"  {filename} -> {year}-{month_num:02d} ({month_name})")
    
    print(f"Processed {processed_games} games, skipped {skipped_games}")
    print(f"Found games across {len(games_by_month)} months")
    
    # Find existing events
    existing_events = find_existing_events(events_dir, args.debug)
    print(f"Found {len(existing_events)} existing events")
    
    # Create missing events
    events_created = 0
    
    for (year, month_num, month_name), game_slugs in games_by_month.items():
        if (year, month_num) in existing_events:
            if args.debug:
                print(f"Event already exists for {month_name} {year}")
            continue
        
        print(f"\nMissing event for {month_name} {year} ({len(game_slugs)} games)")
        create_event_file(events_dir, year, month_num, month_name, game_slugs, 
                         args.dry_run, args.debug)
        events_created += 1
    
    if events_created == 0:
        print("\nNo missing events found. All months with games already have event files!")
    else:
        action = "would be created" if args.dry_run else "created"
        print(f"\n{events_created} event file(s) {action}")
    
    return 0

if __name__ == '__main__':
    exit(main())