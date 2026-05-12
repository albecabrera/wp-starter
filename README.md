# WP Starter Theme

Lightweight custom WordPress starter theme — no page builders, clean architecture, TailwindCSS + Playwright ready.

## New Project

```bash
bash new-wp-project.sh client-name
```

That's it. The script clones the starter, resets git history, installs dependencies, and drops the theme in your local WordPress themes folder.

## Prerequisites

- macOS with XAMPP at `/Applications/XAMPP/xamppfiles/`
- WordPress installed at `htdocs/`
- Node.js + npm

## Development

```bash
npm run dev              # Tailwind watch mode
npm run build            # Production CSS (minified)
npm test                 # All Playwright tests
npm run test:responsive  # Responsive tests only
npm run test:a11y        # Accessibility tests only
npm run test:report      # Open HTML test report
```

For Playwright against a live site:

```bash
BASE_URL=https://client-site.com npm test
```

## Folder Structure

```
wp-starter/
├── assets/             # CSS, JS
├── builder/
│   └── sections/       # hero.php, cta.php...
├── template-parts/     # header.php, footer.php
├── inc/
│   ├── setup/          # theme-setup.php, enqueue.php
│   ├── functions/      # helpers.php
│   └── optimizations/  # cleanup.php
└── new-wp-project.sh   # Project bootstrap script
```
