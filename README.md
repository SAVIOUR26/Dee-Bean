# Dee & Bean Coffee — Website

**Live:** https://deeandbeancoffee.com  
**Stack:** PHP 8.4 · Vanilla CSS/JS · No frameworks  
**Deploy:** GitHub Actions FTP → cPanel  

## Structure
```
/
├── index.php          # Homepage
├── about.php          # About Us
├── story.php          # Founder Story & Projects
├── menu.php           # Full Menu (to be created)
├── gallery.php        # Photo Gallery
├── contact.php        # Contact + Map
├── 404.php            # Error page
├── .htaccess          # Clean URLs + Security
├── includes/
│   ├── config.php     # Brand config, image IDs, helpers
│   ├── header.php     # Nav, meta, head
│   └── footer.php     # Footer, scripts
├── assets/
│   ├── css/style.css  # Full design system
│   ├── js/main.js     # Interactions
│   └── images/        # favicon.svg + local images
├── api/
│   ├── contact.php    # Contact form handler
│   └── newsletter.php # Newsletter subscribe
└── .github/
    └── workflows/
        └── deploy.yml # Auto FTP deploy on push to main
```

## Deploy Secrets Required
In GitHub Settings → Secrets → Actions:
- `FTP_HOST` — your cPanel FTP server (e.g. `ftp.deeandbeancoffee.com`)
- `FTP_USERNAME` — cPanel FTP username
- `FTP_PASSWORD` — cPanel FTP password

## Images
All images are served from Google Drive CDN using file IDs in `includes/config.php`.
Replace `$SITE_IMAGES` values with actual hosted image URLs once assets are uploaded to cPanel.
