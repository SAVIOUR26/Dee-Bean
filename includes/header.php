<?php
// includes/header.php
require_once __DIR__ . '/config.php';
$page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= isset($meta_desc) ? $meta_desc : 'Dee & Bean Coffee — Brewed from the Heart, Rooted in Home. Premium Ugandan artisan coffee at Ntinda, Kigobe Road, Kampala.' ?>">
  <meta name="keywords" content="Dee Bean Coffee, coffee Kampala, specialty coffee Uganda, artisan coffee Ntinda, Ugandan coffee, deeandbeancoffee">
  <meta property="og:title" content="<?= isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_NAME . ' — ' . SITE_TAGLINE ?>">
  <meta property="og:description" content="<?= SITE_TAGLINE ?>. Premium Ugandan artisan coffee at Ntinda, Kampala.">
  <meta property="og:url" content="<?= SITE_URL ?>">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <title><?= isset($page_title) ? htmlspecialchars($page_title) . ' | ' . SITE_NAME : SITE_NAME . ' — ' . SITE_TAGLINE ?></title>
  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
  <link rel="alternate icon" href="/assets/images/favicon.ico">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Josefin+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,600&family=Lora:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- Site CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <?php if (isset($extra_css)) echo $extra_css; ?>
</head>
<body>

<!-- Grain overlay -->
<div class="grain" aria-hidden="true"></div>

<!-- WhatsApp FAB -->
<a href="<?= wa_link() ?>" class="whatsapp-fab" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp">
  <i class="fa-brands fa-whatsapp"></i>
  <span class="whatsapp-fab-tip">Chat with us</span>
</a>

<!-- Back to top -->
<button class="back-to-top" id="backToTop" aria-label="Back to top">
  <i class="fa-solid fa-arrow-up"></i>
</button>

<!-- Toast -->
<div class="toast" id="toast" role="alert" aria-live="polite">
  <i class="fa-solid fa-circle-check"></i>
  <span id="toastMsg">Done!</span>
</div>

<!-- Mobile Nav Overlay -->
<div class="mobile-nav-overlay" id="mobileOverlay" onclick="closeMobileNav()"></div>

<!-- Mobile Nav Drawer -->
<nav class="mobile-nav" id="mobileNav" aria-label="Mobile navigation">
  <button class="mobile-close" onclick="closeMobileNav()" aria-label="Close menu">
    <i class="fa-solid fa-xmark"></i>
  </button>
  <a href="/" class="mobile-nav-link <?= $page === 'index' ? 'active' : '' ?>">Home</a>
  <a href="/menu" class="mobile-nav-link <?= $page === 'menu' ? 'active' : '' ?>">Our Menu</a>
  <a href="/about" class="mobile-nav-link <?= $page === 'about' ? 'active' : '' ?>">About Us</a>
  <a href="/story" class="mobile-nav-link <?= $page === 'story' ? 'active' : '' ?>">Our Story</a>
  <a href="/gallery" class="mobile-nav-link <?= $page === 'gallery' ? 'active' : '' ?>">Gallery</a>
  <a href="/contact" class="mobile-nav-link <?= $page === 'contact' ? 'active' : '' ?>">Contact</a>
  <div class="mobile-nav-cta">
    <a href="<?= wa_link("Hi! I'd like to order from Dee & Bean Coffee.") ?>" target="_blank" class="btn btn-gold" style="width:100%;justify-content:center;">
      <i class="fa-brands fa-whatsapp"></i> Order via WhatsApp
    </a>
  </div>
</nav>

<!-- ══════════════════════════════════
     NAVBAR
══════════════════════════════════ -->
<header class="navbar" id="navbar">

  <!-- Announcement bar -->
  <div class="nav-announcement" id="navAnnouncement">
    <i class="fa-solid fa-location-dot"></i>
    <?= ADDRESS_SHORT ?>
    &nbsp;·&nbsp;
    <i class="fa-solid fa-phone"></i>
    <a href="tel:<?= preg_replace('/[^0-9+]/', '', PHONE_1) ?>"><?= PHONE_1 ?></a>
    &nbsp;·&nbsp;
    <i class="fa-brands fa-glide-g"></i> Available on
    <a href="#" style="color:var(--gold-light);">Glovo</a>
  </div>

  <!-- Main bar -->
  <div class="nav-main-bar">
    <div class="container">
      <div class="nav-inner">

        <!-- Logo -->
        <a href="/" class="nav-logo" aria-label="<?= SITE_NAME ?> Homepage">
          <div class="nav-logo-mark">
            Dee <span class="amp">&</span> Bean
          </div>
          <div class="nav-logo-sub">Coffee &nbsp;·&nbsp; Kampala, Uganda</div>
        </a>

        <!-- Desktop Nav Links -->
        <nav class="nav-links" aria-label="Main navigation">
          <a href="/" class="nav-link <?= $page === 'index' ? 'active' : '' ?>">Home</a>
          <div class="nav-dropdown">
            <a href="/menu" class="nav-link <?= $page === 'menu' ? 'active' : '' ?>">
              Menu <i class="fa-solid fa-chevron-down" style="font-size:0.5rem;margin-left:3px;"></i>
            </a>
            <div class="nav-dropdown-panel">
              <a href="/menu#hot-drinks">Hot Drinks</a>
              <a href="/menu#cold-drinks">Cold Drinks</a>
              <a href="/menu#food">Food & Pastries</a>
              <a href="/menu#specialty">Ugandan Blends</a>
            </div>
          </div>
          <a href="/about" class="nav-link <?= $page === 'about' ? 'active' : '' ?>">About</a>
          <a href="/story" class="nav-link <?= $page === 'story' ? 'active' : '' ?>">Our Story</a>
          <a href="/gallery" class="nav-link <?= $page === 'gallery' ? 'active' : '' ?>">Gallery</a>
          <a href="/contact" class="nav-link <?= $page === 'contact' ? 'active' : '' ?>">Contact</a>
        </nav>

        <!-- Right Controls -->
        <div class="nav-right">
          <a href="<?= INSTAGRAM ?>" target="_blank" rel="noopener" class="nav-icon-btn" aria-label="Instagram">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a href="<?= TIKTOK ?>" target="_blank" rel="noopener" class="nav-icon-btn" aria-label="TikTok">
            <i class="fa-brands fa-tiktok"></i>
          </a>
          <a href="<?= wa_link("Hi! I'd like to order.") ?>" target="_blank" class="btn btn-gold" style="padding:11px 20px;font-size:0.66rem;">
            <i class="fa-brands fa-whatsapp"></i> Order Now
          </a>
          <!-- Hamburger -->
          <button class="hamburger" id="hamburger" onclick="openMobileNav()" aria-label="Open navigation" aria-expanded="false">
            <span></span><span></span><span></span>
          </button>
        </div>

      </div>
    </div>
  </div>
</header>
