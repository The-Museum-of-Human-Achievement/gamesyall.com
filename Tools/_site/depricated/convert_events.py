import os
import re
import yaml
import argparse
from slugify import slugify
from datetime import datetime

def load_game_slugs(games_dir):
    """
    Load all existing game slugs and create a lookup table by title
    """
    game_lookup = {}
    
    for filename in os.listdir(games_dir):
        if filename.endswith('.md'):
            file_path = os.path.join(games_dir, filename)
            
            with open(file_path, 'r', encoding='utf-8') as f:
                content = f.read()
            
            # Extract front matter
            front_matter_match = re.search(r'---\n(.*?)\n---', content, re.DOTALL)
            if front_matter_match:
                front_matter = front_matter_match.group(1)
                try:
                    game_data = yaml.safe_load(front_matter)
                    if 'title' in game_data:
                        # Get slug from filename
                        slug = os.path.splitext(filename)[0]
                        
                        # Store in lookup table - both by title and lowercase title
                        game_lookup[game_data['title']] = slug
                        game_lookup[game_data['title'].lower()] = slug
                except Exception as e:
                    print(f"Error parsing front matter in {filename}: {e}")
    
    return game_lookup

def update_event_files(events_dir, games_dir):
    """
    Update event files to use game slugs
    """
    # Load game slugs
    game_lookup = load_game_slugs(games_dir)
    
    # Process each event file
    for filename in os.listdir(events_dir):
        if filename.endswith('.md'):
            file_path = os.path.join(events_dir, filename)
            
            with open(file_path, 'r', encoding='utf-8') as f:
                content = f.read()
            
            # Extract front matter
            front_matter_match = re.search(r'---\n(.*?)\n---', content, re.DOTALL)
            if front_matter_match:
                front_matter_yaml = front_matter_match.group(1)
                try:
                    # Parse YAML front matter
                    front_matter = yaml.safe_load(front_matter_yaml)
                    
                    # Check if event has games
                    if 'games' in front_matter and front_matter['games']:
                        # Create game_slugs array
                        game_slugs = []
                        
                        for game in front_matter['games']:
                            # Find matching game by title
                            if 'title' in game:
                                # Try exact match
                                if game['title'] in game_lookup:
                                    game_slugs.append(game_lookup[game['title']])
                                # Try lowercase match
                                elif game['title'].lower() in game_lookup:
                                    game_slugs.append(game_lookup[game['title'].lower()])
                                else:
                                    # Create a new slug for this game (not ideal but prevents data loss)
                                    if 'date' in front_matter:
                                        # Use event date for the game date
                                        try:
                                            date_obj = datetime.fromisoformat(front_matter['date'])
                                            date_str = date_obj.strftime('%Y-%m-%d')
                                        except:
                                            date_str = front_matter['date']
                                    else:
                                        # Extract date from filename (common Jekyll pattern)
                                        date_match = re.search(r'(\d{4}-\d{2}-\d{2})', filename)
                                        date_str = date_match.group(1) if date_match else None
                                    
                                    # Generate a slug
                                    if date_str:
                                        slug = slugify(f"{date_str}-{game['title']}")
                                    else:
                                        slug = slugify(game['title'])
                                    
                                    # Log the missing game
                                    print(f"Game not found in games collection: {game['title']} in {filename}")
                                    print(f"  Generated slug: {slug}")
                                    print(f"  Consider creating a game file for this game.")
                                    
                                    # Add to slugs array
                                    game_slugs.append(slug)
                        
                        # Add game_slugs to front matter if any were found
                        if game_slugs:
                            front_matter['game_slugs'] = game_slugs
                        
                        # Write updated front matter
                        updated_front_matter = yaml.dump(front_matter, default_flow_style=False, allow_unicode=True)
                        updated_content = re.sub(r'---\n.*?\n---', f'---\n{updated_front_matter}---', content, flags=re.DOTALL)
                        
                        # Write updated content back to file
                        with open(file_path, 'w', encoding='utf-8') as f:
                            f.write(updated_content)
                        
                        print(f"Updated {filename} with game_slugs")
                    
                except Exception as e:
                    print(f"Error updating {filename}: {e}")

if __name__ == "__main__":
    parser = argparse.ArgumentParser(description='Update event files to use game slugs')
    parser.add_argument('--events', default='_events', help='Directory containing event files')
    parser.add_argument('--games', default='_games', help='Directory containing game files')
    
    args = parser.parse_args()
    
    update_event_files(args.events, args.games)
    
    print("\nConversion complete!")
    print("Remember to check for any missing games that need to be created.")