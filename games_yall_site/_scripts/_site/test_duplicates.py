#!/usr/bin/env python3
"""
Test script to debug duplicate detection for Tahitian Driftin games
"""

import os
import re
import yaml

def normalize_title_for_comparison(title):
    """Normalize a title for comparison by removing/standardizing punctuation and spacing"""
    if not title:
        return ""
    
    print(f"  Normalizing: '{title}'")
    
    # Convert to lowercase and strip
    normalized = title.lower().strip()
    print(f"  After lowercase/strip: '{normalized}'")
    
    # Remove common punctuation that might vary between submissions
    normalized = re.sub(r"['\"\.,!?:;-]", "", normalized)
    print(f"  After punctuation removal: '{normalized}'")
    
    # Normalize whitespace (multiple spaces become single space)
    normalized = re.sub(r'\s+', ' ', normalized)
    print(f"  After whitespace normalization: '{normalized}'")
    
    # Strip again after normalization
    normalized = normalized.strip()
    print(f"  Final normalized: '{normalized}'")
    
    return normalized

def test_duplicate_detection(games_dir):
    """Test if our duplicate detection would work on the Tahitian Driftin files"""
    
    # Test titles
    new_title = "Tahitian Driftin'"
    existing_title = "Tahitian Driftin"
    
    print("=== TESTING TITLE NORMALIZATION ===")
    print(f"New title: '{new_title}'")
    new_normalized = normalize_title_for_comparison(new_title)
    
    print(f"\nExisting title: '{existing_title}'")
    existing_normalized = normalize_title_for_comparison(existing_title)
    
    print(f"\n=== COMPARISON RESULT ===")
    print(f"New normalized:      '{new_normalized}'")
    print(f"Existing normalized: '{existing_normalized}'")
    print(f"Would match: {new_normalized == existing_normalized}")
    
    # Now test actual file detection
    print(f"\n=== TESTING ACTUAL FILE DETECTION ===")
    if not os.path.exists(games_dir):
        print(f"Games directory not found: {games_dir}")
        return
    
    tahitian_files = []
    for filename in os.listdir(games_dir):
        if 'tahitian' in filename.lower() and (filename.endswith('.md') or filename.endswith('.html')):
            tahitian_files.append(filename)
    
    print(f"Found Tahitian files: {tahitian_files}")
    
    for filename in tahitian_files:
        file_path = os.path.join(games_dir, filename)
        try:
            with open(file_path, 'r', encoding='utf-8') as f:
                content = f.read()
            
            # Extract front matter
            front_matter_match = re.match(r"---\n(.*?)\n---", content, re.DOTALL)
            if front_matter_match:
                front_matter = yaml.safe_load(front_matter_match.group(1))
                title = front_matter.get('title', '')
                normalized = normalize_title_for_comparison(title)
                print(f"\nFile: {filename}")
                print(f"  Title: '{title}'")
                print(f"  Normalized: '{normalized}'")
                
        except Exception as e:
            print(f"Error reading {filename}: {e}")

if __name__ == "__main__":
    import sys
    
    if len(sys.argv) > 1:
        games_dir = sys.argv[1]
    else:
        games_dir = "../_games"  # Default path - adjusted for your structure
    
    print(f"Looking in games directory: {games_dir}")
    test_duplicate_detection(games_dir)