import os
import re
import html2text
from bs4 import BeautifulSoup
from datetime import datetime
import argparse

def extract_date_parts(text):
    """
    Extract all date-related parts from a string.
    This is a more flexible approach that first identifies all date components
    and then assembles them into a proper date.
    """
    # Extract year - look for a 4-digit year
    year_pattern = r"\b(20\d{2})\b"
    year_match = re.search(year_pattern, text)
    year = year_match.group(1) if year_match else None
    
    # If no year, return None
    if not year:
        return None, None, None
    
    # Extract month - look for month names or numbers
    month_names = {
        'january': 1, 'jan': 1,
        'february': 2, 'feb': 2,
        'march': 3, 'mar': 3,
        'april': 4, 'apr': 4,
        'may': 5,
        'june': 6, 'jun': 6,
        'july': 7, 'jul': 7,
        'august': 8, 'aug': 8,
        'september': 9, 'sep': 9, 'sept': 9,
        'october': 10, 'oct': 10,
        'november': 11, 'nov': 11,
        'december': 12, 'dec': 12
    }
    
    # Try to find month name
    month_name_pattern = r"\b(" + "|".join(month_names.keys()) + r")\b"
    month_match = re.search(month_name_pattern, text.lower())
    
    # If found, convert to number
    if month_match:
        month = month_names[month_match.group(1)]
    else:
        # Try to find month number (1-12)
        month_num_pattern = r"\b(1[0-2]|0?[1-9])[/-]"
        month_num_match = re.search(month_num_pattern, text)
        if month_num_match:
            month = int(month_num_match.group(1))
        else:
            # Default to first month of the year if no month is found
            month = 1
    
    # Extract day - look for day numbers
    # First look for patterns like "November 12-13"
    day_range_pattern = r"\b(?:" + "|".join(month_names.keys()) + r")\s+(\d{1,2})(?:(?:st|nd|rd|th)?[-,+]\s*\d{1,2})"
    day_range_match = re.search(day_range_pattern, text.lower())
    
    if day_range_match:
        day = int(day_range_match.group(1))
    else:
        # Look for standard day patterns
        day_pattern = r"\b(\d{1,2})(?:st|nd|rd|th)?\b"
        day_matches = re.findall(day_pattern, text)
        
        # Filter out non-day numbers (keep only 1-31)
        days = [int(d) for d in day_matches if 1 <= int(d) <= 31]
        
        if days:
            # Use the first likely day number found
            day = days[0]
        else:
            # Default to first day of the month if no day is found
            day = 1
    
    return year, month, day

def format_date(year, month, day):
    """Format year, month, day into YYYY-MM-DD"""
    if year and month and day:
        return f"{year}-{month:02d}-{day:02d}"
    return None

def extract_date_from_text(text):
    """
    Extract date from text using a more flexible approach
    """
    # First, try specific date formats
    
    # Pattern for "Month Day-Day + Day-Day, Year" like "November 12-13 + 19-20, 2022"
    special_pattern = r"([A-Za-z]+)\s+(\d{1,2})(?:-\d{1,2})?\s*(?:\+\s*\d{1,2}-\d{1,2})?,?\s*(\d{4})"
    match = re.search(special_pattern, text)
    if match:
        month_str, day, year = match.groups()
        month_names = {
            'january': 1, 'jan': 1,
            'february': 2, 'feb': 2,
            'march': 3, 'mar': 3,
            'april': 4, 'apr': 4,
            'may': 5,
            'june': 6, 'jun': 6,
            'july': 7, 'jul': 7,
            'august': 8, 'aug': 8,
            'september': 9, 'sep': 9, 'sept': 9,
            'october': 10, 'oct': 10,
            'november': 11, 'nov': 11,
            'december': 12, 'dec': 12
        }
        month_str = month_str.lower()
        if month_str in month_names:
            month_num = month_names[month_str]
            try:
                return f"{year}-{month_num:02d}-{int(day):02d}"
            except (ValueError, TypeError):
                pass
    
    # If specific patterns don't match, try the more flexible approach
    year, month, day = extract_date_parts(text)
    return format_date(year, month, day)

def extract_date_from_title(title):
    """Specifically extract date from page title"""
    return extract_date_from_text(title)

def extract_date_from_breadcrumbs(soup):
    """
    Extract date from breadcrumbs navigation
    """
    # Look for breadcrumbs - often contains dates
    breadcrumbs = soup.find('div', class_='col-4', style=lambda value: value and 'justify-content: left' in value)
    if breadcrumbs:
        breadcrumb_text = breadcrumbs.get_text()
        return extract_date_from_text(breadcrumb_text)
    
    return None

def extract_date_from_h_tags(soup):
    """
    Extract date from h1, h2 tags which often contain event dates
    """
    for tag in soup.find_all(['h1', 'h2', 'h3']):
        date = extract_date_from_text(tag.get_text())
        if date:
            return date
    return None

def extract_date_from_event_content(soup):
    """
    Search through the event content for date mentions
    """
    # Try to find date in various content sections
    content_sections = soup.find_all(['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'])
    for section in content_sections:
        text = section.get_text()
        date = extract_date_from_text(text)
        if date:
            return date
    
    return None

def extract_date_from_filename(filename):
    """
    Extract date from filename patterns
    """
    # Common month names
    months = {
        'january': 1, 'jan': 1,
        'february': 2, 'feb': 2,
        'march': 3, 'mar': 3,
        'april': 4, 'apr': 4,
        'may': 5,
        'june': 6, 'jun': 6,
        'july': 7, 'jul': 7,
        'august': 8, 'aug': 8,
        'september': 9, 'sep': 9, 'sept': 9,
        'october': 10, 'oct': 10,
        'november': 11, 'nov': 11,
        'december': 12, 'dec': 12
    }
    
    # Look for month-year pattern in filename (e.g., "event-april-2022.html")
    pattern = r"event-([a-z]+)-(\d{4})\.html"
    match = re.search(pattern, filename.lower())
    if match:
        month_str, year = match.groups()
        if month_str in months:
            month_num = months[month_str]
            return f"{year}-{month_num:02d}-01"
    
    # Look for year first in filename (e.g., "event-2022-11.html")
    pattern2 = r"event-(\d{4})-(\d{2})\.html"
    match = re.search(pattern2, filename.lower())
    if match:
        year, month = match.groups()
        return f"{year}-{month}-01"
    
    # Look for specific month names in filename (e.g., "event-november-2022.html")
    for month_name, month_num in months.items():
        if month_name in filename.lower() and re.search(r"\d{4}", filename):
            year_match = re.search(r"(\d{4})", filename)
            if year_match:
                year = year_match.group(1)
                return f"{year}-{month_num:02d}-01"
    
    return None

def convert_html_to_md(html_folder, output_folder):
    """
    Convert HTML files in a folder to Jekyll markdown files for an Events collection.
    
    Args:
        html_folder (str): Path to folder containing HTML files
        output_folder (str): Path to output folder for markdown files
    """
    # Create output folder if it doesn't exist
    os.makedirs(output_folder, exist_ok=True)
    
    # HTML to Markdown converter
    converter = html2text.HTML2Text()
    converter.ignore_links = False
    converter.body_width = 0  # Don't wrap lines
    
    # Process each HTML file in the folder
    for filename in os.listdir(html_folder):
        if filename.endswith('.html'):
            file_path = os.path.join(html_folder, filename)
            
            with open(file_path, 'r', encoding='utf-8') as file:
                html_content = file.read()
            
            # Parse HTML content
            soup = BeautifulSoup(html_content, 'html.parser')
            
            # Extract metadata
            title = soup.title.string if soup.title else "Untitled Event"
            
            # Try multiple methods to extract the date
            formatted_date = None
            
            # 1. Try to extract from page title
            if title:
                formatted_date = extract_date_from_title(title)
                
            # 2. Try to extract from h1/h2 tags (often contain event dates)
            if not formatted_date:
                formatted_date = extract_date_from_h_tags(soup)
            
            # 3. Try to extract from breadcrumbs
            if not formatted_date:
                formatted_date = extract_date_from_breadcrumbs(soup)
            
            # 4. If not found, try to extract from event content
            if not formatted_date:
                formatted_date = extract_date_from_event_content(soup)
            
            # 5. If still not found, try to extract from filename
            if not formatted_date:
                formatted_date = extract_date_from_filename(filename)
            
            # 6. If all else fails, look for specific date patterns in the entire document
            if not formatted_date:
                formatted_date = extract_date_from_text(html_content)
            
            # 7. Last resort: default date with the correct year if possible
            if not formatted_date:
                # Try to at least get the year right
                year_match = re.search(r"\b(20\d{2})\b", html_content)
                if year_match:
                    year = year_match.group(1)
                    formatted_date = f"{year}-01-01"
                    print(f"Warning: Could only extract year for {filename}, using {formatted_date}")
                else:
                    formatted_date = "2000-01-01"  # Default date
                    print(f"Warning: Could not extract date for {filename}, using default date")
            
            # Extract main event description
            event_desc = ""
            desc_div = soup.find('div', class_='col-4')
            if desc_div:
                desc_p = desc_div.find_all('p')
                if desc_p:
                    event_desc = " ".join([p.get_text().strip() for p in desc_p])
            
            # Extract event image
            event_img = ""
            img_div = soup.find('div', class_='col-8')
            if img_div:
                img_tag = img_div.find('img')
                if img_tag and img_tag.get('src'):
                    event_img = img_tag['src']
                    # Convert to relative path if needed
                    event_img = event_img.replace('../', '/')
            
            # Extract featured games
            games = []
            game_cards = soup.find_all('div', class_='game-card-long')
            
            for card in game_cards:
                game = {}
                
                # Game title
                title_tag = card.find('h4')
                game['title'] = title_tag.get_text() if title_tag else "Unknown Game"
                
                # Game image
                img_tag = card.find('img')
                game['image'] = img_tag['src'].replace('../', '/') if img_tag and img_tag.get('src') else ""
                
                # Game description
                desc_tag = card.find_all('div')[1].find('p')
                game['description'] = desc_tag.get_text().strip() if desc_tag else ""
                
                # Game URL
                button = card.find('button')
                if button:
                    link = button.find('a')
                    if link and link.get('href'):
                        game['url'] = link['href']
                
                # Developer info
                dev_div = card.find_all('div')[2]
                dev_name = dev_div.find('h6')
                game['developer'] = dev_name.get_text().strip() if dev_name else "Unknown Developer"
                
                # Developer bio
                dev_bio = dev_div.find('p')
                game['developer_bio'] = dev_bio.get_text().strip() if dev_bio and dev_bio.get_text().strip() else ""
                
                # Social links
                social_divs = dev_div.find_all('div', class_='dev-social')
                game['social_links'] = []
                
                for social in social_divs:
                    handle = social.find('h6')
                    link = social.find('a')
                    if handle and link and link.get('href'):
                        game['social_links'].append({
                            'handle': handle.get_text().strip(),
                            'url': link['href']
                        })
                
                games.append(game)
            
            # Create Jekyll front matter
            yaml_front_matter = "---\n"
            yaml_front_matter += f"layout: event\n"
            yaml_front_matter += f"title: \"{title}\"\n"
            yaml_front_matter += f"date: {formatted_date}\n"
            yaml_front_matter += f"featured_image: \"{event_img}\"\n"
            
            # Add games to front matter
            if games:
                yaml_front_matter += "games:\n"
                for game in games:
                    yaml_front_matter += f"  - title: \"{game['title']}\"\n"
                    yaml_front_matter += f"    image: \"{game['image']}\"\n"
                    
                    # Handle description with proper indentation
                    description_lines = game['description'].split('\n')
                    yaml_front_matter += f"    description: |\n"
                    for line in description_lines:
                        yaml_front_matter += f"      {line}\n"
                    
                    if 'url' in game:
                        yaml_front_matter += f"    url: \"{game['url']}\"\n"
                    yaml_front_matter += f"    developer: \"{game['developer']}\"\n"
                    
                    # Handle developer bio with proper indentation
                    if game['developer_bio']:
                        bio_lines = game['developer_bio'].split('\n')
                        yaml_front_matter += f"    developer_bio: |\n"
                        for line in bio_lines:
                            yaml_front_matter += f"      {line}\n"
                    
                    if game['social_links']:
                        yaml_front_matter += "    social_links:\n"
                        for social in game['social_links']:
                            yaml_front_matter += f"      - handle: \"{social['handle']}\"\n"
                            yaml_front_matter += f"        url: \"{social['url']}\"\n"
            
            yaml_front_matter += "---\n\n"
            
            # Extract content
            # For event pages with more complex content structure, try to gather content from various sections
            content_sections = []
            
            # First try the standard content location
            content_div = soup.find('div', class_='col-4')
            if content_div:
                content_html = str(content_div)
                content_sections.append(converter.handle(content_html))
            
            # Also try to get content from other likely locations
            additional_content = soup.find('div', class_='col-10')
            if additional_content:
                additional_html = str(additional_content)
                content_sections.append(converter.handle(additional_html))
            
            # Combine all content sections
            content_md = "\n\n".join(content_sections)
            
            # Clean up markdown content
            content_md = re.sub(r'\n{3,}', '\n\n', content_md)  # Remove excessive newlines
            
            # Create markdown file content
            md_content = yaml_front_matter + content_md
            
            # Create output filename
            output_filename = f"{formatted_date}-{filename.replace('.html', '.md')}"
            output_path = os.path.join(output_folder, output_filename)
            
            # Write markdown file
            with open(output_path, 'w', encoding='utf-8') as output_file:
                output_file.write(md_content)
            
            print(f"Converted {filename} to {output_filename}")

if __name__ == "__main__":
    parser = argparse.ArgumentParser(description='Convert HTML files to Jekyll markdown for an Events collection')
    parser.add_argument('--input', default='html_files', help='Input folder containing HTML files')
    parser.add_argument('--output', default='_events', help='Output folder for markdown files')
    
    args = parser.parse_args()
    
    convert_html_to_md(args.input, args.output)
    
    print(f"\nConversion complete! Files have been saved to {args.output}/")
    print("Remember to add this collection to your Jekyll _config.yml:")
    print("""
collections:
  events:
    output: true
    permalink: /events/:path/
    """)