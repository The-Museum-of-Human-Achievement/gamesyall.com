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

## Deployment Workflow

This project uses a two-environment deployment workflow:

1. **Staging** for testing and review
2. **Production** for the live site

### Initial Setup

One time, before using the deployment system, you need to:

1. Create a `.env` file with the necessary credentials:

```bash
cp deploy/.env.example deploy/.env
```

2. Edit the `.env` file with the actual credentials (never commit this file to git, it should be added to the ignore file).

3. Set up Git hooks to enable automated deployments:

```bash
cp deploy/hooks/pre-push .git/hooks/
chmod +x .git/hooks/pre-push
```

### Staging Deployment

The staging deployment happens automatically when you push to the `staging` branch:

```bash
git checkout -b staging
git add .
git commit -m "Update for staging"
git push origin staging
```

You can also use the GitHub client to switch to staging, and make a commit before pushing in the terminal.

This will:

1. Push your code to the staging branch
2. Trigger the pre-push hook
3. Run the staging deployment script
4. Process new game data from Google Sheets
5. Build the Jekyll site
6. Deploy to the staging server

You can then review the changes at [https://dev.gamesyall.com](https://dev.gamesyall.com).

### Production Deployment

To deploy to production:

1. Merge your changes to the main branch:

```bash
git checkout main
git merge staging
git push origin main
```

2. When prompted, confirm that you want to deploy to production.

Alternatively, you can manually trigger a production deployment:

```bash
bash deploy/scripts/deploy-to-production.sh
```

## Game Data Processing

The system automatically processes game data from a Google Sheets spreadsheet during deployment. The spreadsheet is published as a CSV at:

[https://docs.google.com/spreadsheets/d/1Ldflx47KhCiZyLdX3tE40-GqxHYIcf7JYC_rtQ4Id78/edit?usp=drivesdk&single=true&output=csv](https://docs.google.com/spreadsheets/d/1Ldflx47KhCiZyLdX3tE40-GqxHYIcf7JYC_rtQ4Id78/edit?usp=drivesdk&single=true&output=csv)

### How Game Data Processing Works

1. Download the csv to games_yall_site/_scripts/_data and name it games_data.csv
2. navigate to the games_yall_site/_scripts/ in a terminal and run  `python process_new_games.py` script.
2. The script creates game files for new entries without overwriting existing ones
3. It also updates event files based on the game data.
4. Another shortcut to create new event files with corresponding games from the spreadsheet is `python process_games_data.py`. You can then edit the new event in games_yall_site/_events/ to add details or corrections.

## Adding New Games

The recommended way to add new games is through the Google Sheets spreadsheet. This ensures consistency and automates the process.

However, if you need to add or edit a game manually:

1. Create or edit a markdown file in the `jekyll/_games/` directory
2. Follow the existing front matter format:

```yaml
---
layout: game
title: Game Title
date: 2023-05-15
developer: Developer Name
website: https://game-website.com
description: Game description goes here
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
