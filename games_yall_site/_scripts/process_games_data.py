#!/usr/bin/env python3
# process_games_data.py
#
# Updated to handle duplicate games by title and work with existing event system
# Special handling for "Welcome to my Homepage" entries - saves to _homepages directory
# This script processes game data from "Games Y'all Metadata Request Form" responses
# It automatically downloads promotional images from Google Drive and stores them locally
#
# Required packages:
#   pip install pyyaml requests python-slugify

import csv
import os
import re
import yaml
import argparse
import sys
import requests
from io import StringIO
from datetime import datetime
try:
    from slugify import slugify
except ImportError:
    print("ERROR: python-slugify is required")
    print("Install it with: pip install python-slugify")
    sys.exit(1)
import urllib.parse
from pathlib import Path

# Default values
DEFAULT_CSV_URL = "https://docs.google.com/spreadsheets/d/1Ldflx47KhCiZyLdX3tE40-GqxHYIcf7JYC_rtQ4Id78/edit?usp=drivesdk&single=true&output=csv"
DEFAULT_GAMES_DIR = "../_games"
DEFAULT_HOMEPAGES_DIR = "../_homepages"
DEFAULT_EVENTS_DIR = "../_events"
DEFAULT_LOCAL_CSV = "_data/Games Y'all Metadata Request Form (Responses) - Form Responses 1-2.csv"

def sanitize_string(s):
    """Sanitize a string for use in YAML"""
    if not s:
        return ""
    # Replace quotes that might break YAML
    s = s.replace('"', '\\"')
    return s

def is_homepage_entry(title):
    """Check if this is a homepage entry based on title"""
    if not title:
        return False
    return "welcome to my homepage" in title.lower()

def parse_timestamp(timestamp_str):
    """Parse timestamp string into a proper date"""
    if not timestamp_str or timestamp_str.strip() == '':
        return None
    
    try:
        # Try different timestamp formats
        for fmt in ['%m/%d/%Y %H:%M:%S', '%m/%d/%Y %H:%M', '%m/%d/%Y']:
            try:
                # Split to get just the date part if there's a space
                date_part = timestamp_str.strip().split(' ')[0]
                date_obj = datetime.strptime(date_part, fmt)
                return date_obj.strftime('%Y-%m-%d')  # Format as YYYY-MM-DD
            except ValueError:
                continue
        
        return None
    except Exception as e:
        print(f"Error parsing timestamp: {e}")
        return None

def get_month_name_from_timestamp(timestamp_str):
    """Extract month name from timestamp for event organization"""
    if not timestamp_str or timestamp_str.strip() == '':
        return None
    
    try:
        # Try different timestamp formats
        for fmt in ['%m/%d/%Y %H:%M:%S', '%m/%d/%Y %H:%M', '%m/%d/%Y']:
            try:
                # Split to get just the date part if there's a space
                date_part = timestamp_str.strip().split(' ')[0]
                date_obj = datetime.strptime(date_part, fmt)
                return date_obj.strftime('%B')  # Format as month name
            except ValueError:
                continue
        
        return None
    except Exception:
        return None

def normalize_title_for_comparison(title, debug=False):
    """Normalize a title for comparison by removing/standardizing punctuation and spacing"""
    if not title:
        return ""
    
    if debug:
        print(f"    Normalizing: '{title}'")
    
    # Convert to lowercase and strip
    normalized = title.lower().strip()
    if debug:
        print(f"    After lowercase/strip: '{normalized}'")
    
    # Remove common punctuation that might vary between submissions
    # Explicitly handle apostrophes, quotes, periods, etc.
    normalized = re.sub(r"['\"\.,!?:;-]", "", normalized)
    if debug:
        print(f"    After punctuation removal: '{normalized}'")
    
    # Normalize whitespace (multiple spaces become single space)
    normalized = re.sub(r'\s+', ' ', normalized)
    if debug:
        print(f"    After whitespace normalization: '{normalized}'")
    
    # Strip again after normalization
    normalized = normalized.strip()
    if debug:
        print(f"    Final normalized: '{normalized}'")
    
    return normalized

def find_existing_game_by_title(title, target_dir, debug=False):
    """Find existing game or homepage file by title with fuzzy matching for punctuation variations
    
    Returns:
        tuple: (file_path, slug) if found, (None, None) if not found
    """
    if not os.path.exists(target_dir):
        return None, None
    
    title_normalized = normalize_title_for_comparison(title, debug)
    
    if debug:
        print(f"  Looking for existing file with normalized title: '{title_normalized}'")
    
    # Sort filenames to ensure consistent ordering and find oldest files first
    filenames = sorted(os.listdir(target_dir))
    
    for filename in filenames:
        if not (filename.endswith('.md') or filename.endswith('.html')):
            continue
            
        file_path = os.path.join(target_dir, filename)
        try:
            with open(file_path, 'r', encoding='utf-8') as f:
                content = f.read()
            
            # Extract front matter
            front_matter_match = re.match(r"---\n(.*?)\n---", content, re.DOTALL)
            if front_matter_match:
                front_matter = yaml.safe_load(front_matter_match.group(1))
                existing_title = front_matter.get('title', '')
                existing_title_normalized = normalize_title_for_comparison(existing_title, debug and 'homepage' in title.lower())
                
                if debug and 'homepage' in title.lower() and existing_title_normalized:
                    print(f"    Comparing with file: {filename}")
                    print(f"    Existing title: '{existing_title}' -> '{existing_title_normalized}'")
                    print(f"    Match check: '{title_normalized}' == '{existing_title_normalized}' = {existing_title_normalized == title_normalized}")
                
                if existing_title_normalized == title_normalized and title_normalized:
                    slug = os.path.splitext(filename)[0]
                    if debug:
                        print(f"  ✓ Found existing file match!")
                        print(f"    New: '{title}' -> '{title_normalized}'")
                        print(f"    Existing: '{existing_title}' -> '{existing_title_normalized}'")
                        print(f"    File: {filename}")
                    return file_path, slug
                    
        except Exception as e:
            if debug:
                print(f"    Error reading {filename}: {e}")
            continue
    
    if debug:
        print(f"  No existing file found for: '{title}'")
    return None, None

def update_existing_game(file_path, new_data, new_date, debug=False):
    """Update existing game file with new information
    
    Returns:
        bool: True if updated, False if failed
    """
    try:
        if debug:
            print(f"    Attempting to update: {file_path}")
        
        # Read existing file
        with open(file_path, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # Extract front matter and body
        front_matter_match = re.match(r"---\n(.*?)\n---\n?(.*)", content, re.DOTALL)
        if not front_matter_match:
            print(f"ERROR: Could not parse front matter in {file_path}")
            return False
        
        try:
            existing_front_matter = yaml.safe_load(front_matter_match.group(1))
        except yaml.YAMLError as e:
            print(f"ERROR: YAML parsing failed for {file_path}: {e}")
            return False
        
        if not existing_front_matter:
            existing_front_matter = {}
        
        existing_body = front_matter_match.group(2) if front_matter_match.group(2) else ""
        
        # Track which events this game has been featured in
        featured_dates = existing_front_matter.get('featured_dates', [])
        if isinstance(featured_dates, str):
            featured_dates = [featured_dates]
        elif not isinstance(featured_dates, list):
            featured_dates = []
        
        # Add new date if not already present
        if new_date and new_date not in featured_dates:
            featured_dates.append(new_date)
            if debug:
                print(f"    Added new featured date: {new_date}")
        
        # Update front matter with new information (only if not empty and field is empty)
        updated = False
        for key, value in new_data.items():
            if key in ['layout', 'title']:  # Don't update these core fields
                continue
            if value and str(value).strip():  # Only update if new value is not empty
                if key not in existing_front_matter or not existing_front_matter.get(key):
                    existing_front_matter[key] = value
                    updated = True
                    if debug:
                        print(f"    Updated {key}: {value}")
        
        # Always update featured_dates and use the most recent date as primary date
        if featured_dates:
            existing_front_matter['featured_dates'] = sorted(featured_dates, reverse=True)
            existing_front_matter['date'] = featured_dates[0]
        
        # Write updated file
        with open(file_path, 'w', encoding='utf-8') as f:
            f.write('---\n')
            yaml.dump(existing_front_matter, f, default_flow_style=False, allow_unicode=True, sort_keys=False)
            f.write('---\n')
            if existing_body.strip():
                f.write('\n' + existing_body)
        
        if debug:
            print(f"    Successfully updated existing file: {file_path}")
            print(f"    Featured dates: {featured_dates}")
        
        return True
        
    except Exception as e:
        print(f"ERROR: Failed to update {file_path}: {e}")
        import traceback
        traceback.print_exc()
        return False

def extract_social_links(social_text):
    """Extract social media links into a structured format"""
    if not social_text or social_text.strip() == '':
        return []
    
    social_links = []
    
    # Split by lines and commas to handle multiple formats
    links = re.split(r'[\n,]+', social_text)
    
    for link in links:
        link = link.strip()
        if not link:
            continue
        
        # Try to determine the platform
        platform = 'website'  # Default
        
        # Extract domain name to guess platform
        domain_match = re.search(r'https?://(?:www\.)?([^/]+)', link)
        if domain_match:
            domain = domain_match.group(1).lower()
            
            # Check for common social platforms
            if 'twitter.com' in domain or 'x.com' in domain:
                platform = 'twitter'
            elif 'instagram' in domain:
                platform = 'instagram'
            elif 'facebook' in domain:
                platform = 'facebook'
            elif 'youtube' in domain:
                platform = 'youtube'
            elif 'twitch' in domain:
                platform = 'twitch'
            elif 'itch.io' in domain:
                platform = 'itch'
            elif 'github' in domain:
                platform = 'github'
            elif 'linkedin' in domain:
                platform = 'linkedin'
            elif 'discord' in domain:
                platform = 'discord'
            elif 'tiktok' in domain:
                platform = 'tiktok'
            elif 'mastodon' in domain:
                platform = 'mastodon'
            elif 'bluesky' in domain or 'bsky.app' in domain:
                platform = 'bluesky'
        
        # Create the social link entry
        social_links.append({
            'platform': platform,
            'url': link,
            'handle': link  # Use the full URL as handle for now
        })
    
    return social_links

def fetch_csv_from_url(url, debug=False):
    """Fetch CSV data from a published URL with browser-like headers"""
    try:
        # Add headers to mimic a browser request
        headers = {
            'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36',
            'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
            'Accept-Language': 'en-US,en;q=0.5',
            'Referer': 'https://docs.google.com/',
            'Connection': 'keep-alive',
            'Upgrade-Insecure-Requests': '1',
            'Cache-Control': 'max-age=0'
        }
        
        if debug:
            print(f"Attempting to fetch URL: {url}")
            print(f"Using headers: {headers}")
        
        response = requests.get(url, headers=headers)
        
        if debug:
            print(f"Response status code: {response.status_code}")
            print(f"Response headers: {response.headers}")
        
        response.raise_for_status()  # Raise exception for HTTP errors
        
        # Return CSV content as string
        return response.text
    except requests.exceptions.RequestException as e:
        if debug:
            print(f"Error details: {str(e)}")
        raise Exception(f"Error fetching CSV from URL: {str(e)}")

def test_url_accessibility(url, debug=False):
    """Test if a URL is accessible"""
    try:
        headers = {
            'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36',
        }
        response = requests.head(url, headers=headers, timeout=10)
        return response.status_code == 200
    except requests.exceptions.RequestException:
        if debug:
            print(f"URL {url} is not accessible")
        return False

def process_games_data(csv_source, games_dir, homepages_dir=None, events_dir=None, is_url=False, debug=False, site_root=None):
    """
    Process games from Google Form CSV, updating existing games instead of creating duplicates
    Updated to handle "Welcome to my Homepage" entries in a separate _homepages directory
    """
    # Determine site root if not provided
    if site_root is None:
        # Try to infer from games_dir
        if '_games' in games_dir:
            site_root = games_dir.split('_games')[0].rstrip('/')
        else:
            site_root = os.path.dirname(games_dir)
    
    # Determine homepages directory if not provided
    if homepages_dir is None:
        # Default to _homepages in the same parent directory as _games
        if '_games' in games_dir:
            homepages_dir = games_dir.replace('_games', '_homepages')
        else:
            homepages_dir = os.path.join(os.path.dirname(games_dir), '_homepages')
    
    # Create directories if they don't exist
    os.makedirs(games_dir, exist_ok=True)
    os.makedirs(homepages_dir, exist_ok=True)
    if events_dir:
        os.makedirs(events_dir, exist_ok=True)
    
    if debug:
        print(f"Games directory: {games_dir}")
        print(f"Homepages directory: {homepages_dir}")
        print(f"Site root: {site_root}")
    
    # Get CSV data
    if is_url:
        if debug:
            print(f"Fetching CSV from URL: {csv_source}")
            
        # Test URL accessibility first
        if not test_url_accessibility(csv_source, debug):
            print("\nWARNING: The URL appears to be inaccessible or returning an error.")
            print("Suggestion: Download the CSV manually and use the --local flag.")
            print("Example: python process_games_data.py --local --csv downloaded_data.csv\n")
            
            # Ask if user wants to continue
            if not debug:  # In automated/debug mode, just try anyway
                try:
                    response = input("Do you want to try accessing the URL anyway? (y/n): ")
                    if response.lower() != 'y':
                        print("Aborting process.")
                        sys.exit(1)
                except:
                    # If running non-interactively, just continue
                    pass
        
        try:
            csv_data = fetch_csv_from_url(csv_source, debug)
            csv_file = StringIO(csv_data)
        except Exception as e:
            print(f"\nERROR: {str(e)}")
            print("Suggestion: Download the CSV manually and use the --local flag.")
            print("Example: python process_games_data.py --local --csv downloaded_data.csv")
            print("Aborting process.")
            sys.exit(1)
    else:
        if debug:
            print(f"Reading CSV from file: {csv_source}")
        
        if not os.path.exists(csv_source):
            print(f"ERROR: Local CSV file '{csv_source}' not found.")
            print("Please make sure the file exists and the path is correct.")
            sys.exit(1)
        
        csv_file = open(csv_source, 'r', encoding='utf-8-sig')
    
    # Track new games and homepages by month/year for event creation
    games_by_month = {}
    homepages_by_month = {}
    new_games_count = 0
    new_homepages_count = 0
    updated_games_count = 0
    updated_homepages_count = 0
    images_downloaded = 0
    
    try:
        # Process CSV data
        reader = csv.DictReader(csv_file)
        
        # Check if we got any rows
        rows = list(reader)
        if not rows:
            print("ERROR: The CSV file is empty or could not be parsed correctly.")
            if is_url:
                print("This could indicate the URL is not returning a proper CSV file.")
                print("Try downloading the CSV manually and using the --local flag.")
            return
        
        # Print the column headers to help with debugging
        if debug and rows:
            print("CSV Columns found:")
            print(", ".join(rows[0].keys()))
        
        # Process each game
        # Sort rows by timestamp to ensure oldest entries are processed first
        def get_timestamp_for_sorting(row):
            timestamp_str = row.get('Timestamp', '')
            for fmt in ['%m/%d/%Y %H:%M:%S', '%m/%d/%Y %H:%M', '%m/%d/%Y']:
                try:
                    date_part = timestamp_str.strip().split(' ')[0]
                    return datetime.strptime(date_part, fmt)
                except ValueError:
                    continue
            return datetime.max  # Put unparseable dates at the end
        
        sorted_rows = sorted(rows, key=get_timestamp_for_sorting)
        
        if debug:
            print(f"Processing {len(sorted_rows)} rows in chronological order...")
            print("First few entries:")
            for i, row in enumerate(sorted_rows[:3]):
                title = row.get('What is the title of your project', '')
                timestamp = row.get('Timestamp', '')
                print(f"  {i+1}: {timestamp} - {title}")
        
        # Process each game in chronological order
        for row in sorted_rows:
            # Skip empty rows - check for game title using the actual field name
            game_title_field = 'What is the title of your project'
            game_title = row.get(game_title_field, '').strip()
            
            if not game_title:
                if debug:
                    print("Skipping row with empty Game Title")
                    print(f"Available fields: {list(row.keys())}")
                continue
            
            # Skip the example entries
            if game_title in ["Coby's Good Good Example Game", "The Sequel"]:
                if debug:
                    print(f"Skipping example game: {game_title}")
                continue
            
            # Determine if this is a homepage entry
            is_homepage = is_homepage_entry(game_title)
            entry_type = "homepage" if is_homepage else "game"
            target_dir = homepages_dir if is_homepage else games_dir
            
            if debug:
                print(f"\n--- Processing {entry_type}: {game_title} ---")
                print(f"Target directory: {target_dir}")
            
            # Parse timestamp for date information
            timestamp_field = 'Timestamp'
            timestamp_str = row.get(timestamp_field, '')
            if not timestamp_str:
                if debug:
                    print(f"Could not find timestamp field for {game_title}")
                    print(f"Available fields: {list(row.keys())}")
                continue
            
            date_str = parse_timestamp(timestamp_str)
            if not date_str:
                if debug:
                    print(f"Could not parse timestamp for {game_title}: {timestamp_str}")
                continue
            
            # Check if this is for a specific event month
            event_month_field = 'Which month have you been selected to show at?'
            event_month = row.get(event_month_field, '').strip()
            
            # Get month name for event organization (use event month if specified, otherwise timestamp month)
            if event_month and event_month != 'N/A' and event_month != '':
                month_name = event_month
            else:
                month_name = get_month_name_from_timestamp(timestamp_str)
            
            # Check if entry already exists by title
            if debug:
                print(f"\n--- CHECKING FOR DUPLICATES ---")
                print(f"New {entry_type} title: '{game_title}'")
            
            existing_file_path, existing_slug = find_existing_game_by_title(game_title, target_dir, debug)
            
            if debug:
                if existing_file_path:
                    print(f"DUPLICATE DETECTED: Will update existing file")
                else:
                    print(f"NO DUPLICATE: Will create new file")
                print(f"--- END DUPLICATE CHECK ---\n")
            
            # Get fields from the Google Form CSV format
            developer = row.get('Developer Name', '').strip()
            description = row.get('Game Description for Website', '').strip()
            developer_bio = row.get('Developer Bio for Info Sheet', '').strip()
            website = row.get('Call to action link', '').strip()
            call_to_action_text = row.get('Call to action text', '').strip()
            pronunciation = row.get('How is the title of your project pronounced?', '').strip()
            credits = row.get('What are the names, name pronunciations, and pronouns of the developers you want credited during announcements?', '').strip()
            info_sheet_description = row.get('Game Description for Info Sheet', '').strip()
            
            # Create data structure
            entry_data = {
                'layout': 'homepage' if is_homepage else 'game',
                'title': sanitize_string(game_title),
                'date': date_str,
                'developer': sanitize_string(developer),
                'website': website,
                'description': sanitize_string(description),
                'developer_bio': sanitize_string(developer_bio),
            }
            
            # Add optional fields if they exist
            if pronunciation:
                entry_data['pronunciation'] = sanitize_string(pronunciation)
            
            if credits:
                entry_data['credits'] = sanitize_string(credits)
            
            if call_to_action_text:
                entry_data['call_to_action_text'] = sanitize_string(call_to_action_text)
            
            if info_sheet_description and info_sheet_description != description:
                entry_data['info_sheet_description'] = sanitize_string(info_sheet_description)
            
            # Add image URL if provided
            image_field = 'Promotional Image'
            image_url = row.get(image_field, '').strip()
            if image_url:
                # Process promotional image (download if from Google Drive)
                local_image_path, was_downloaded = process_promotional_image(
                    image_url, 
                    game_title, 
                    timestamp_str, 
                    site_root, 
                    debug
                )
                if local_image_path:
                    entry_data['image'] = local_image_path
                    if was_downloaded:
                        images_downloaded += 1
                elif debug:
                    print(f"No image path generated for {game_title}")
            
            # Extract social media links
            social_field = 'Additional Links or Social Media Handles'
            social_media = row.get(social_field, '').strip()
            if social_media:
                social_links = extract_social_links(social_media)
                if social_links:
                    entry_data['social_links'] = social_links
            
            # Determine slug for event tracking
            if existing_file_path:
                # Update existing entry
                if update_existing_game(existing_file_path, entry_data, date_str, debug):
                    if is_homepage:
                        updated_homepages_count += 1
                    else:
                        updated_games_count += 1
                    entry_slug = existing_slug
                    print(f"Updated existing {entry_type}: {game_title} ({existing_slug})")
                else:
                    print(f"Failed to update existing {entry_type}: {game_title}")
                    continue
            else:
                # Create new entry with appropriate slug format
                if is_homepage:
                    # For homepages, use title-only slug without date
                    entry_slug = slugify(game_title)
                else:
                    # For games, use the current slug format to match existing files
                    entry_slug = slugify(f"{date_str}-{game_title}")
                
                # Ensure unique slug if there's a collision
                base_slug = entry_slug
                counter = 1
                while os.path.exists(os.path.join(target_dir, f"{entry_slug}.md")) or \
                      os.path.exists(os.path.join(target_dir, f"{entry_slug}.html")):
                    entry_slug = f"{base_slug}-{counter}"
                    counter += 1
                
                # Add featured_dates to track multiple events
                entry_data['featured_dates'] = [date_str]
                
                output_file = os.path.join(target_dir, f"{entry_slug}.md")
                with open(output_file, 'w', encoding='utf-8') as out:
                    out.write('---\n')
                    yaml.dump(entry_data, out, default_flow_style=False, allow_unicode=True)
                    out.write('---\n\n')
                    
                    # Add content if we have a description
                    if entry_data.get('description'):
                        out.write(entry_data['description'])
                
                print(f"Created new {entry_type} file: {output_file}")
                if is_homepage:
                    new_homepages_count += 1
                else:
                    new_games_count += 1
            
            # Add to monthly tracking for events
            if events_dir and month_name:
                # Use "Month Year" format for grouping
                month_year = f"{month_name} {date_str[:4]}"
                
                if is_homepage:
                    if month_year not in homepages_by_month:
                        homepages_by_month[month_year] = []
                    homepages_by_month[month_year].append(entry_slug)
                else:
                    if month_year not in games_by_month:
                        games_by_month[month_year] = []
                    games_by_month[month_year].append(entry_slug)
    
    finally:
        # Close file if it's not a StringIO object
        if not is_url:
            csv_file.close()
    
    # Create or update event files if needed
    if events_dir and (games_by_month or homepages_by_month):
        # Combine all months that have either games or homepages
        all_months = set(list(games_by_month.keys()) + list(homepages_by_month.keys()))
        
        for month_year in all_months:
            # Split month_year more carefully
            parts = month_year.split(' ')
            if len(parts) >= 2:
                # Take the last part as year, everything else as month
                year = parts[-1]
                month_name = ' '.join(parts[:-1])
            else:
                if debug:
                    print(f"Skipping malformed month_year: {month_year}")
                continue
            
            # Get game and homepage slugs for this month
            game_slugs = games_by_month.get(month_year, [])
            homepage_slugs = homepages_by_month.get(month_year, [])
            
            # Check for existing event file
            matching_events = []
            if os.path.exists(events_dir):
                for filename in os.listdir(events_dir):
                    if re.match(rf"{year}-\d{{2}}-.*-event-{month_name.lower()}-{year}\.(md|html)$", filename):
                        matching_events.append(filename)
            
            if matching_events:
                # Event file exists - update it by adding new games and homepages
                event_file = os.path.join(events_dir, matching_events[0])
                
                with open(event_file, 'r', encoding='utf-8') as f:
                    content = f.read()
                
                # Extract front matter
                front_matter_match = re.match(r"---\n(.*?)\n---", content, re.DOTALL)
                if front_matter_match:
                    try:
                        front_matter = yaml.safe_load(front_matter_match.group(1))
                        
                        # Add new games to existing game_slugs
                        existing_game_slugs = front_matter.get('game_slugs', [])
                        if existing_game_slugs is None:
                            existing_game_slugs = []
                        
                        # Make sure we don't add duplicates
                        for slug in game_slugs:
                            if slug not in existing_game_slugs:
                                existing_game_slugs.append(slug)
                        
                        # Add new homepages to existing homepage_slugs
                        existing_homepage_slugs = front_matter.get('homepage_slugs', [])
                        if existing_homepage_slugs is None:
                            existing_homepage_slugs = []
                        
                        # Make sure we don't add duplicates
                        for slug in homepage_slugs:
                            if slug not in existing_homepage_slugs:
                                existing_homepage_slugs.append(slug)
                        
                        # Update front matter
                        front_matter['game_slugs'] = existing_game_slugs
                        if homepage_slugs:  # Only add homepage_slugs if there are homepages
                            front_matter['homepage_slugs'] = existing_homepage_slugs
                        
                        # Write updated file
                        with open(event_file, 'w', encoding='utf-8') as out:
                            out.write('---\n')
                            yaml.dump(front_matter, out, default_flow_style=False, allow_unicode=True)
                            out.write('---\n\n')
                            
                            # Preserve content after front matter
                            content_after_front_matter = re.sub(r"---\n.*?\n---\n", "", content, 1, re.DOTALL)
                            out.write(content_after_front_matter)
                        
                        print(f"Updated event file with new entries: {event_file}")
                    except Exception as e:
                        print(f"Error updating event file {event_file}: {str(e)}")
            else:
                # No event file exists - create one
                # The exact day is less important since it will be set manually later
                try:
                    month_num = ["january", "february", "march", "april", "may", "june", 
                                 "july", "august", "september", "october", "november", "december"].index(month_name.lower()) + 1
                except ValueError:
                    if debug:
                        print(f"Warning: Unknown month name '{month_name}', skipping event creation")
                    continue
                    
                event_date = f"{year}-{month_num:02d}-15"  # Default to middle of month
                event_slug = f"{event_date}-event-{month_name.lower()}-{year}"
                event_file = os.path.join(events_dir, f"{event_slug}.md")
                
                event_data = {
                    'layout': 'event',
                    'title': f"Games Y'all {month_name} {year}",
                    'date': event_date,
                }
                
                if game_slugs:
                    event_data['game_slugs'] = game_slugs
                if homepage_slugs:
                    event_data['homepage_slugs'] = homepage_slugs
                
                with open(event_file, 'w', encoding='utf-8') as out:
                    out.write('---\n')
                    yaml.dump(event_data, out, default_flow_style=False, allow_unicode=True)
                    out.write('---\n\n')
                    out.write(f"# Games Y'all {month_name} {year}\n\n")
                    out.write("Join us for an evening of indie games featuring the titles below!\n\n")
                
                print(f"Created new event file: {event_file}")
    
    # Summary
    total_new = new_games_count + new_homepages_count
    total_updated = updated_games_count + updated_homepages_count
    
    if total_new > 0 or total_updated > 0:
        print(f"\n=== PROCESSING COMPLETE ===")
        print(f"New games created: {new_games_count}")
        print(f"New homepages created: {new_homepages_count}")
        print(f"Existing games updated: {updated_games_count}")
        print(f"Existing homepages updated: {updated_homepages_count}")
        print(f"Events processed: {len(set(list(games_by_month.keys()) + list(homepages_by_month.keys())))}")
        if images_downloaded > 0:
            print(f"Images downloaded: {images_downloaded}")
    else:
        print("No entries were processed. This could mean either:")
        print("1. All entries in the CSV already exist with the same information")
        print("2. There were issues with parsing the CSV data")
        if debug:
            print("Check debug output above for more details")
    
    return new_games_count, updated_games_count, images_downloaded

def download_google_drive_image(drive_url, local_path, debug=False):
    """Download image from Google Drive URL and save locally
    
    Returns:
        'downloaded' if image was downloaded
        'exists' if image already exists
        None if download failed
    """
    try:
        # Check if file already exists
        if os.path.exists(local_path) and os.path.getsize(local_path) > 0:
            if debug:
                print(f"Image already exists: {local_path}")
            return 'exists'
        
        # Extract file ID from various Google Drive URL formats
        file_id = None
        
        # Format 1: https://drive.google.com/open?id=FILE_ID
        if 'open?id=' in drive_url:
            file_id = drive_url.split('open?id=')[1].split('&')[0]
        # Format 2: https://drive.google.com/file/d/FILE_ID/view
        elif '/file/d/' in drive_url:
            file_id = drive_url.split('/file/d/')[1].split('/')[0]
        # Format 3: https://drive.google.com/uc?id=FILE_ID
        elif 'uc?id=' in drive_url:
            file_id = drive_url.split('uc?id=')[1].split('&')[0]
        
        if not file_id:
            if debug:
                print(f"Could not extract file ID from URL: {drive_url}")
            return None
        
        # Create direct download URL
        download_url = f"https://drive.google.com/uc?export=download&id={file_id}"
        
        if debug:
            print(f"Attempting to download from: {download_url}")
            print(f"Saving to: {local_path}")
        
        # Create directory if it doesn't exist
        os.makedirs(os.path.dirname(local_path), exist_ok=True)
        
        # Download the file
        response = requests.get(download_url, stream=True, allow_redirects=True)
        
        # Check if we got a warning page (for large files)
        if b'confirm=' in response.content[:1000]:
            # Extract confirmation token
            for line in response.content.decode('utf-8').split('\n'):
                if 'confirm=' in line:
                    confirm_match = re.search(r'confirm=([0-9A-Za-z_]+)', line)
                    if confirm_match:
                        confirm_token = confirm_match.group(1)
                        download_url = f"{download_url}&confirm={confirm_token}"
                        response = requests.get(download_url, stream=True)
                        break
        
        # Save the file
        with open(local_path, 'wb') as f:
            for chunk in response.iter_content(chunk_size=8192):
                if chunk:
                    f.write(chunk)
        
        if debug:
            print(f"Successfully downloaded image to: {local_path}")
        
        return 'downloaded'
        
    except Exception as e:
        if debug:
            print(f"Error downloading image: {str(e)}")
        return None

def process_promotional_image(image_url, game_title, timestamp_str, base_path, debug=False):
    """Process promotional image: download from Google Drive and return local path
    
    Returns:
        tuple: (local_path, was_downloaded) where was_downloaded is True if newly downloaded
    """
    if not image_url or not image_url.strip():
        return None, False
    
    # Skip if it's not a Google Drive URL
    if 'drive.google.com' not in image_url:
        # Return as-is if it's already a local path or other URL
        if image_url.startswith('/') or image_url.startswith('http'):
            return image_url, False
        return None, False
    
    # Parse timestamp to get month and year
    date_obj = None
    for fmt in ['%m/%d/%Y %H:%M:%S', '%m/%d/%Y %H:%M', '%m/%d/%Y']:
        try:
            date_part = timestamp_str.strip().split(' ')[0]
            date_obj = datetime.strptime(date_part, fmt)
            break
        except ValueError:
            continue
    
    if not date_obj:
        if debug:
            print(f"Could not parse date for image storage: {timestamp_str}")
        return None, False
    
    # Create folder path: /images/Archived-img/Month-Year/
    month_year = date_obj.strftime('%B-%Y')  # e.g., "May-2025"
    
    # Create filename from game title
    safe_filename = slugify(game_title)
    # Try common image extensions
    extensions = ['.jpg', '.jpeg', '.png', '.gif', '.webp']
    
    # Try to download with different extensions
    for ext in extensions:
        filename = f"{safe_filename}{ext}"
        local_path = os.path.join(base_path, 'images', 'Archived-img', month_year, filename)
        web_path = f"/images/Archived-img/{month_year}/{filename}"
        
        # Try to download or check if exists
        result = download_google_drive_image(image_url, local_path, debug)
        
        if result == 'downloaded':
            return web_path, True
        elif result == 'exists':
            return web_path, False
    
    # If all attempts failed, return None
    print(f"WARNING: Could not download image for {game_title}")
    print(f"  URL: {image_url}")
    print("  You may need to download this image manually.")
    return None, False

def main():
    parser = argparse.ArgumentParser(description='Process games from Google Form CSV, handling duplicates by title. Homepage entries are saved to _homepages directory.')
    parser.add_argument('--csv', 
                        default=None,
                        help=f'Path to the CSV file or published URL (default: {DEFAULT_CSV_URL})')
    parser.add_argument('--url', action='store_true', 
                        help='Indicate that the CSV source is a URL (auto-detected if not specified)')
    parser.add_argument('--local', action='store_true',
                        help='Force treating the CSV source as a local file')
    parser.add_argument('--games', 
                        default=DEFAULT_GAMES_DIR,
                        help=f'Directory where game files are stored (default: {DEFAULT_GAMES_DIR})')
    parser.add_argument('--homepages', 
                        default=None,
                        help=f'Directory where homepage files are stored (default: auto-derived from games dir)')
    parser.add_argument('--events', 
                        default=None,
                        help=f'Directory for event files (default: {DEFAULT_EVENTS_DIR})')
    parser.add_argument('--debug', action='store_true', 
                        help='Print detailed debug information')
    parser.add_argument('--site-root', 
                        default=None,
                        help='Root directory of the site (for image storage paths, auto-detected if not provided)')
    
    args = parser.parse_args()
    
    # If no CSV specified, use defaults
    if args.csv is None:
        # Use default local CSV file by default
        args.csv = DEFAULT_LOCAL_CSV
        is_url = False
        print(f"Using default local CSV: {args.csv}")
    else:
        # Determine if it's a URL based on the content or flags
        if args.local:
            is_url = False
        elif args.url:
            is_url = True
        else:
            # Auto-detect based on whether it starts with http
            is_url = args.csv.startswith('http://') or args.csv.startswith('https://')
    
    # If no events directory specified but user wants event processing, use default
    if args.events is None and not args.local:
        # Only auto-enable events directory for URL mode (not local files)
        args.events = DEFAULT_EVENTS_DIR
        print(f"Using default events directory: {args.events}")
    
    try:
        print("\n=== Starting Games Y'all Data Processing (Homepage Support) ===")
        print(f"CSV Source: {args.csv}")
        print(f"Source Type: {'URL' if is_url else 'Local File'}")
        print(f"Games Directory: {args.games}")
        homepages_display = args.homepages if args.homepages else "Auto-derived from games directory"
        print(f"Homepages Directory: {homepages_display}")
        if args.events:
            print(f"Events Directory: {args.events}")
        print(f"Debug Mode: {'ON' if args.debug else 'OFF'}")
        site_root_display = args.site_root if args.site_root else "Auto-detected from games directory"
        print(f"Site Root: {site_root_display}")
        print("Note: Entries with 'Welcome to my Homepage' will be saved to _homepages directory")
        print("=" * 70 + "\n")
        
        process_games_data(args.csv, args.games, args.homepages, args.events, is_url, args.debug, args.site_root)
    except KeyboardInterrupt:
        print("\nProcess interrupted by user. Exiting.")
        sys.exit(1)
    except Exception as e:
        print(f"\nERROR: An unexpected error occurred: {str(e)}")
        if is_url:
            print("\n=== CSV DOWNLOAD INSTRUCTIONS ===")
            print("1. Open the Google Sheet URL in your browser")
            print("2. File > Download > Comma-separated values (.csv)")
            print("3. Save the file to your local machine")
            print("4. Run this script with the --local flag:")
            print("   python process_games_data.py --local --csv path/to/downloaded/file.csv\n")
        if args.debug:
            import traceback
            traceback.print_exc()
        sys.exit(1)

if __name__ == "__main__":
    main()