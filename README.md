# WP Starter Theme

Lightweight custom WordPress starter theme — no page builders, clean architecture, TailwindCSS + Playwright ready.

## Setup

```bash
# 1. Clone into WordPress themes folder
git clone https://github.com/DEIN-USERNAME/wp-starter.git wp-content/themes/wp-starter

# 2. Install dependencies
npm install

# 3. Start Tailwind watcher
npm run dev

# 4. Activate theme in WordPress Admin
```

## Development

```bash
npm run dev       # Tailwind watch mode
npm run build     # Production CSS (minified)
npm test          # All Playwright tests
npm run test:responsive   # Responsive tests only
npm run test:a11y         # Accessibility tests only
npm run test:report       # Open HTML test report
```

## Folder Structure

```
wp-starter/
├── assets/           # CSS, JS, Images
├── builder/          # Sections + Components
│   ├── sections/     # hero.php, cta.php, features.php...
│   └── components/   # buttons, cards, navs...
├── template-parts/   # header.php, footer.php
├── inc/              # PHP includes
│   ├── setup/
│   ├── functions/
│   └── optimizations/
├── templates/        # Custom page templates
└── tests/            # Playwright test suite
```

## New Project Workflow

```bash
git clone https://github.com/DEIN-USERNAME/wp-starter.git new-project-name
cd new-project-name
npm install
npm run dev
```

## Environment Variables

For Playwright against live sites:
```bash
BASE_URL=https://client-site.com npm test
```
