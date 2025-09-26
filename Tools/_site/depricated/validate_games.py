import os
import re
import yaml
import argparse
from datetime import datetime

def validate_date(date_str):
    """Validate that a date string is in correct format"""
    try:
        if date_str:
            datetime.fromisoformat(date_str)
            return True
    except (ValueError, TypeError):
        return False
    return False

def check_game_files(games_dir):
    """
    Check all game files for issues with dates, missing fields, etc.
    
    Args:
        games_dir (str): Directory containing game files
    """
    issues = {
        'missing_date': [],
        'invalid_date': [],
        'missing_title': [],
        'missing_developer': [],
        'empty_description': []
    }
    
    total_files = 0
    
    for filename in os.listdir(games_dir):
        if filename.endswith('.md'):
            total_files += 1
            file_path = os.path.join(games_dir, filename)
            
            with open(file_path, 'r', encoding='utf-8') as f:
                content = f.read()
            
            # Extract front matter
            front_matter_match = re.search(r'---\n(.*?)\n---', content, re.DOTALL)
            if front_matter_match:
                front_matter_yaml = front_matter_match.group(1)
                try:
                    # Parse YAML front matter
                    front_matter = yaml.safe_load(front_matter_yaml)
                    
                    # Check for issues
                    slug = os.path.splitext(filename)[0]
                    
                    # Check date
                    if 'date' not in front_matter or not front_matter['date']:
                        issues['missing_date'].append(slug)
                    elif not validate_date(front_matter['date']):
                        issues['invalid_date'].append((slug, front_matter['date']))
                    
                    # Check title
                    if 'title' not in front_matter or not front_matter['title']:
                        issues['missing_title'].append(slug)
                    
                    # Check developer
                    if 'developer' not in front_matter or not front_matter['developer']:
                        issues['missing_developer'].append(slug)
                    
                    # Check description
                    if 'description' not in front_matter or not front_matter['description']:
                        # Also check if there's content after the front matter
                        content_after_fm = re.sub(r'---\n.*?\n---', '', content, flags=re.DOTALL).strip()
                        if not content_after_fm:
                            issues['empty_description'].append(slug)
                
                except Exception as e:
                    print(f"Error parsing {filename}: {e}")
    
    # Print report
    print(f"\nValidated {total_files} game files in {games_dir}/")
    print("\n=== VALIDATION REPORT ===")
    
    if issues['missing_date']:
        print(f"\n{len(issues['missing_date'])} files with missing dates:")
        for slug in issues['missing_date'][:10]:
            print(f"  - {slug}")
        if len(issues['missing_date']) > 10:
            print(f"  - ... and {len(issues['missing_date']) - 10} more")
    
    if issues['invalid_date']:
        print(f"\n{len(issues['invalid_date'])} files with invalid dates:")
        for slug, date in issues['invalid_date'][:10]:
            print(f"  - {slug}: '{date}'")
        if len(issues['invalid_date']) > 10:
            print(f"  - ... and {len(issues['invalid_date']) - 10} more")
    
    if issues['missing_title']:
        print(f"\n{len(issues['missing_title'])} files with missing titles:")
        for slug in issues['missing_title'][:10]:
            print(f"  - {slug}")
        if len(issues['missing_title']) > 10:
            print(f"  - ... and {len(issues['missing_title']) - 10} more")
    
    if issues['missing_developer']:
        print(f"\n{len(issues['missing_developer'])} files with missing developer info:")
        for slug in issues['missing_developer'][:10]:
            print(f"  - {slug}")
        if len(issues['missing_developer']) > 10:
            print(f"  - ... and {len(issues['missing_developer']) - 10} more")
    
    if issues['empty_description']:
        print(f"\n{len(issues['empty_description'])} files with no description or content:")
        for slug in issues['empty_description'][:10]:
            print(f"  - {slug}")
        if len(issues['empty_description']) > 10:
            print(f"  - ... and {len(issues['empty_description']) - 10} more")
    
    # Overall assessment
    total_issues = sum(len(issue_list) for issue_list in issues.values())
    if total_issues == 0:
        print("\n✅ All game files look good!")
    else:
        print(f"\n❌ Found {total_issues} issues across {total_files} files.")
        print("\nTo fix date issues, run:")
        print("python fix_game_dates.py --games \"_games\"")

if __name__ == "__main__":
    parser = argparse.ArgumentParser(description='Validate game files for common issues')
    parser.add_argument('--games', default='_games', help='Directory containing game files')
    
    args = parser.parse_args()
    
    check_game_files(args.games)