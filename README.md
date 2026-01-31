# Games Y'all Website

This repository contains the Games Y'all website, built with Jekyll. Games are imported from a form csv file placed in /games_yall_site/_scripts/_data using the process_games_data.py python script

## Repository Structure

The repository is structured as follows:

```
.
├── deploy
│   ├── hooks
│   │   └── pre-push
│   └── scripts
│       ├── deploy-to-production.sh
│       └── deploy-to-staging.sh
├── design_docs
│   ├── Desktop.png
│   ├── gy_ia.png
│   └── Mobile.png
├── games_yall_site
│   ├── _config.yml
│   ├── _events
│   │   ├── 2019-04-04.md
│   │   │//...
│   │   └── 2025-08-15-event-august-2025.md
│   ├── _games
│   │   ├── 2022-04-01-j-s-joust.md
│   │   │//...
│   │   └── 2025-08-15-tahitian-driftin.md
│   ├── _includes
│   │   ├── footer.html
│   │   └── header.html
│   ├── _layouts
│   │   ├── about.html
│   │   ├── default.html
│   │   ├── event.html
│   │   ├── events-archive.html
│   │   ├── events.html
│   │   ├── game.html
│   │   ├── games.html
│   │   ├── home.html
│   │   ├── page.html
│   │   └── post.html
│   ├── _people
│   │   ├── franco_ramos.md
│   │   │//...
│   ├── _posts
│   │   ├── 2011-04-25-story-of-the-juegos-rancheros.html
│   │   │//...
│   │   └── 2019-03-04-juegos-rancheros-presents-nyu-no-quarter.html
│   ├── _sass
│   │   ├── _base.scss
│   │   ├── _components.scss
│   │   ├── _layout.scss
│   │   ├── _mixins.scss
│   │   ├── _type.scss
│   │   ├── _variables.scss
│   │   ├── _views.scss
│   │   ├── components
│   │   │   ├── _feature-list.scss
│   │   │   ├── _footer.scss
│   │   │   ├── _gallery.scss
│   │   │   ├── _header-nav.scss
│   │   │   └── _pagination.scss
│   │   └── views
│   │       ├── _about.scss
│   │       ├── _event.scss
│   │       ├── _events-archive.scss
│   │       ├── _events.scss
│   │       ├── _game.scss
│   │       ├── _games.scss
│   │       ├── _home.scss
│   │       ├── _page404.scss
│   │       └── _post.scss
│   ├── _scripts
│   │   ├── _data
│   │   │   └── games_data.csv
│   │   ├── create_missing_events.py
│   │   └── process_games_data.py
│   ├── 404.html
│   ├── about.md
│   ├── css
│   │   └── main.scss
│   ├── donate.md
│   ├── events-archive.md
│   ├── events.md
│   ├── favicon.gif
│   ├── favicon.ico
│   ├── favicons
│   │   ├── android-chrome-192x192.png
│   │   │//...
│   ├── fonts
│   │   ├── norwester-webfont.woff
│   │   │//...
│   ├── games.md
│   ├── Gemfile
│   ├── Gemfile.lock
│   ├── images
│   │   ├── Archived-img
│   │   │   ├── April-2022
│   │   │   │   └── games
│   │   │   │       ├── Johann-Sebastian-Joust-img.jfif
│   │   │   │       │//...
│   │   │   ├── April-2023
│   │   │   │   ├── games
│   │   │   │   │   ├── aatnc.png
│   │   │   │   │   │//...
│   │   │   │   └── photos
│   │   │   │       ├── GY-apr-1.png
│   │   │   │       │//...
│   │   │   │//...
│   │   ├── event-img
│   │   │   ├── DA-Banner-a-happy-new-23.gif
│   │   │   │//...
│   │   │//...
│   │   ├── horse-img
│   │   │   ├── horse-feedback.png
│   │   │   │//...
│   │   ├── jr-archive
│   │   │   ├── 11910183_755094477951608_1241211132_n-1024x784.jpg
│   │   │   │//...
│   │   │   └── zodiacmall-1024x354.png
│   │   ├── lassos
│   │   │   ├── rope_pattern-10.svg
│   │   │   │//...
│   │   ├── misc-img
│   │   │   ├── about-us.png
│   │   │   │//...
│   │   ├── pdf
│   │   │   └── gy_roundup.pdf
│   │   │//...
│   │   ├── Social-buttons
│   │   │   ├── bluesky-button.png
│   │   │   │//...
│   │   └── sponsors
│   │       ├── devolver-digital.png
│   │       └── mighty-coconut.png
│   ├── index.md
│   └── javascripts
│       └── gallery.js
├── LICENSE
├── README.md
├── requirements.txt
├── site_structure.txt
└── Tools
    ├── _site
    │   ├── depricated
    │   │   ├── convert_events.py
    │   │   │//...
    │   ├── games.csv
    │   ├── old_events
    │   │   ├── connectiquest.php
    │   │   │//...
    │   ├── process_games_data.py
    │   └── rope-drawing-tool
    │       └── paperjs version
    │           └── paper-rope-generator.html
    ├── depricated
    │   ├── convert_events.py
    │   │//...
    ├── old_events
    │   ├── connectiquest.php
    │   │//...
    └── rope-drawing-tool
        └── paperjs version
            └── paper-rope-generator.html


```

## Development Setup

0. Install Ruby and Jekyll
see <https://jekyllrb.com/docs/installation/>

1. Clone this repository:

```bash
git clone https://github.com/The-Museum-of-Human-Achievement/gamesyall.com
cd games-yall
```

2. Install dependencies:

```bash
# Install Ruby dependencies
cd games_yall_site
bundle install

# Install Python dependencies
cd ..
pip install -r requirements.txt
```

3. Run the Jekyll site locally:

```bash
bundle exec jekyll serve
```

## Local Testing

Before deploying, test your changes locally:

```bash
cd games_yall_site
bundle exec jekyll serve
```

This starts a local server at `http://localhost:4000` where you can preview changes.

## Deployment

The deployment script requires a Unix-like environment. See the appropriate section for your operating system.

### Mac/Linux Deployment

#### Initial Setup (one time)

1. Create a `.env` file with the necessary credentials:

```bash
cp deploy/.env.example deploy/.env
```

2. Edit the `.env` file with the actual credentials (never commit this file to git).

3. Set up the Git pre-push hook:

```bash
cp deploy/hooks/pre-push .git/hooks/
chmod +x .git/hooks/pre-push
```

#### Deploying to Production

1. Test your changes locally with `bundle exec jekyll serve`

2. Commit and push to main:

```bash
git add .
git commit -m "Your commit message"
git push origin main
```

3. When prompted, type `y` to confirm deployment to production.

### Windows Deployment (using WSL)

Windows users must use WSL (Windows Subsystem for Linux) to run the deployment scripts.

#### WSL Initial Setup (one time)

1. **Install WSL** - Open PowerShell as Administrator and run:

```powershell
wsl --install
```

2. **Restart your computer** when prompted.

3. **Set up Ubuntu** - After restart, Ubuntu will open automatically. Create a username and password when prompted.

4. **Install required tools in WSL** - Open the WSL terminal (search "Ubuntu" in Start menu) and run:

```bash
sudo apt update
sudo apt install -y ruby-full build-essential zlib1g-dev lftp git
```

5. **Install Jekyll** in WSL:

```bash
echo 'export GEM_HOME="$HOME/gems"' >> ~/.bashrc
echo 'export PATH="$HOME/gems/bin:$PATH"' >> ~/.bashrc
source ~/.bashrc
gem install jekyll bundler
```

6. **Navigate to your project** - Your Windows files are accessible at `/mnt/c/`. For example:

```bash
cd /mnt/c/Users/YourUsername/path/to/gamesyall.com
```

7. **Set up the environment file**:

```bash
cp deploy/.env.example deploy/.env
nano deploy/.env  # Edit with your credentials, then Ctrl+X to save
```

8. **Set up the Git hook**:

```bash
cp deploy/hooks/pre-push .git/hooks/
chmod +x .git/hooks/pre-push
```

#### Deploying from Windows

**Option A: Deploy via Git push (recommended)**

1. Open WSL terminal (search "Ubuntu" in Start menu)

2. Navigate to your project:

```bash
cd /mnt/c/Users/YourUsername/path/to/gamesyall.com
```

3. Run the git commands:

```bash
git add .
git commit -m "Your commit message"
git push origin main
```

4. When prompted, type `y` to confirm deployment.

**Option B: Deploy manually**

If the git hook isn't working, you can run the deploy script directly:

```bash
cd /mnt/c/Users/YourUsername/path/to/gamesyall.com
bash deploy/scripts/deploy-to-production.sh
```

#### WSL Troubleshooting

- **"Permission denied" errors**: Make sure the script is executable with `chmod +x deploy/scripts/deploy-to-production.sh`
- **"lftp: command not found"**: Run `sudo apt install lftp`
- **Line ending issues**: If you see errors about `\r`, the files have Windows line endings. Fix with:
  ```bash
  sudo apt install dos2unix
  dos2unix deploy/scripts/deploy-to-production.sh
  dos2unix deploy/hooks/pre-push
  ```
- **Git hook not triggering**: Make sure you're running git commands from WSL, not from Windows CMD/PowerShell or VS Code's built-in terminal

### Alternative: SFTP Client

If you cannot use the command-line scripts, you can deploy manually using an SFTP client like [FileZilla](https://filezilla-project.org/):

1. Build the site locally: `bundle exec jekyll serve` (or just `bundle exec jekyll build`)
2. Connect to the production server using the credentials in `.env`
3. Upload the contents of `games_yall_site/_site/` to the server

## Game Data Processing

The game info for updating the site is currently kept on a google sheet where it can be easily updated.

[https://docs.google.com/spreadsheets/d/1Ldflx47KhCiZyLdX3tE40-GqxHYIcf7JYC_rtQ4Id78/edit?usp=drivesdk&single=true&output=csv](https://docs.google.com/spreadsheets/d/1Ldflx47KhCiZyLdX3tE40-GqxHYIcf7JYC_rtQ4Id78/edit?usp=drivesdk&single=true&output=csv)

### How Game Data Processing Works

1. Download the csv to games_yall_site/_scripts/_data and name it games_data.csv
2. navigate to the games_yall_site/_scripts/ in a terminal and run  `python process_new_games.py` script.
2. The script creates game files for new entries without overwriting existing ones
3. It also updates event files based on the game data.
4. Another shortcut to create new event files with corresponding games from the spreadsheet is `python process_games_data.py`. You can then edit the new event in games_yall_site/_events/ to add details or corrections.

## Adding New Events

To add a new event, create a markdown file in `games_yall_site/_events/` with the naming pattern `YYYY-MM-DD-event-name.md`.

### Event Front Matter Fields

```yaml
---
layout: event
title: "Event Title"
date: 2026-03-21
time: "7-9pm"
location: "Venue Address"
description: "Short description shown in upcoming events table"
featured_image: /images/event-img/banner.png
announced: false
archived: false
rsvp-link: https://withfriends.events/...
game_slugs:
  - 2026-01-03-game-slug
  - 2026-01-06-another-game
gallery-images:
  - /images/Archived-img/Month-Year/photos/photo1.jpg
---
```

### Key Fields Explained

| Field | Required | Description |
|-------|----------|-------------|
| `date` | Yes | Event date in YYYY-MM-DD format. Determines if event appears in upcoming events. |
| `announced` | No | Controls button display on home page (see below). Defaults to `true`. |
| `archived` | No | Set to `true` after event has passed. Excludes event from latest-event and upcoming events sections. |
| `rsvp-link` | No | External RSVP URL (e.g., withfriends.events). |
| `game_slugs` | No | Array of game file slugs (without .md) to link featured games. |
| `gallery-images` | No | Array of photo paths for post-event gallery. |

### The `announced` Field

The `announced` field controls what button appears on the home page latest-event section:

| `announced` | `rsvp-link` | Button Shown |
|-------------|-------------|--------------|
| `false` | exists | "RSVP for Event" (links to rsvp-link) |
| `false` | empty | No button |
| `true` or not set | any | "View Event Details" (links to event page) |

**Typical workflow:**
1. Create event with `announced: false` and `rsvp-link` set → Shows RSVP button before details are ready
2. Update to `announced: true` when event page is complete → Shows "View Event Details" button
3. After event passes, set `archived: true` → Event excluded from home page sections

### Home Page Image Carousel

The home page featured event section can display either a static `featured_image` or an auto-rotating carousel of curated photos from past events.

**Behavior:**
- If the event has a `featured_image` set → displays that static image
- If `featured_image` is empty or not set → displays the carousel
- The carousel rotates automatically every 4 seconds with a fade transition

**To update carousel images:**

Edit `_data/carousel_images.yml`:

```yaml
images:
  - /images/Archived-img/January-2026/photos/jan-gy-photo-1.jpg
  - /images/Archived-img/August-2025/photos/gy-august-2.jpg
  - /images/Archived-img/July-2025/photos/GY-july-3.jpg
  # Add 3-5 of your favorite photos from past events
```

**To use a static image instead of the carousel:**

Set `featured_image` in the event's front matter:

```yaml
featured_image: /images/event-img/GY-Banner-Feb-26.png
```

## Adding New Games

The recommended way to add new games is through the Google Sheets spreadsheet. This ensures consistency and automates the process.

However, if you need to add or edit a game manually:

1. Create or edit a markdown file in the `jekyll/_games/` directory
2. Follow the existing front matter format (most fields are optional, more fields can be added as needed):

```yaml
---
layout: game
title: Game Title
date: 2023-05-15
developer: Developer Name
website: https://game-website.com
description: "Game description goes here"
image: /path/to/image.jpg
social_links:
  - platform: twitter
    url: https://twitter.com/developer
    handle: '@developer'
---

Additional game description or content...
```

3. If needed, associate the game with an event by adding the game slug to the event's `game_slugs` front matter array.

## Troubleshooting

If you encounter deployment issues:

- Check the `.env` file to ensure credentials are correct
- Verify that the Git hooks are properly set up
- Check that all dependencies are installed (Ruby and Python)
- Look for error messages in the deployment logs
- Ensure the SFTP server is accessible
