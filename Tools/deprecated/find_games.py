import csv
import argparse
import re

def find_games_in_csv(csv_file, game_names, case_sensitive=False):
    """
    Search for specific games in a CSV file and print their details
    
    Args:
        csv_file (str): Path to the CSV file
        game_names (list): List of game names to search for
        case_sensitive (bool): Whether the search should be case-sensitive
    """
    # Prepare game names for search
    if not case_sensitive:
        search_names = [name.lower() for name in game_names]
    else:
        search_names = game_names
    
    # Track which games we've found
    found_games = {name: False for name in game_names}
    
    # Load CSV data
    with open(csv_file, 'r', encoding='utf-8-sig') as f:
        reader = csv.DictReader(f)
        
        # Print column names
        print(f"CSV columns: {reader.fieldnames}")
        
        # Track row count
        row_count = 0
        
        for row in reader:
            row_count += 1
            
            # Get game title from row
            title = row.get('Game Title', '').strip()
            if not title:
                continue
            
            # Check if this title matches any of our search names
            check_title = title if case_sensitive else title.lower()
            
            # Look for exact matches
            exact_match = False
            for i, name in enumerate(search_names):
                if check_title == name:
                    found_games[game_names[i]] = True
                    exact_match = True
                    
                    print(f"\n=== FOUND EXACT MATCH: '{title}' (Row {row_count}) ===")
                    for key, value in row.items():
                        print(f"{key}: {value}")
                    print("=" * 50)
            
            # If we didn't find an exact match, look for partial matches
            if not exact_match:
                for i, name in enumerate(search_names):
                    # Check if the name appears as a substring
                    if name in check_title or check_title in name:
                        print(f"\n--- FOUND PARTIAL MATCH: '{title}' for '{game_names[i]}' (Row {row_count}) ---")
                        print(f"Game Title: {title}")
                        print(f"Month/Year: {row.get('Month/Year', '')}")
                        print("-" * 50)
    
    # Print summary
    print(f"\nSearched through {row_count} rows")
    print("\nSearch results:")
    for name, found in found_games.items():
        status = "✅ FOUND" if found else "❌ NOT FOUND"
        print(f"{status}: '{name}'")
    
    # If any games weren't found, offer suggestions
    not_found = [name for name, found in found_games.items() if not found]
    if not_found:
        print("\nFor games not found, check if:")
        print("1. The game name might be spelled differently in the CSV")
        print("2. The game might be listed under a different column")
        print("3. The CSV encoding might be causing issues with special characters")
        print("4. The game might not be in the CSV at all")

if __name__ == "__main__":
    parser = argparse.ArgumentParser(description='Find specific games in a CSV file')
    parser.add_argument('--csv', required=True, help='Path to the CSV file')
    parser.add_argument('--games', nargs='+', required=True, help='Names of games to search for')
    parser.add_argument('--case-sensitive', action='store_true', help='Make the search case-sensitive')
    
    args = parser.parse_args()
    
    find_games_in_csv(args.csv, args.games, args.case_sensitive)