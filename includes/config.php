<?php
// ============================================================
// DEE & BEAN COFFEE — Site Configuration
// Source: Website content - Dee and Bean.docx + Company Profile
// ============================================================

define('SITE_NAME',    'Dee & Bean Coffee');
define('SITE_TAGLINE', 'Brewed from the Heart, Rooted in Home');
define('SITE_URL',     'https://deeandbeancoffee.com');
define('SITE_EMAIL',   'deebeancoffee@gmail.com');
define('PHONE_1',      '+256-774-792-810');
define('PHONE_2',      '+256-703-803-616');
define('ADDRESS',        'Shell Select, Kigobe Road, Opp NCHE, Ntinda, Kampala, Uganda');
define('ADDRESS_SHORT',  'Ntinda, Kigobe Road, Kampala');
define('ADDRESS_2',      'Shell Select Bukoto, after Oryx, Opp Kirabo Complex, Kampala');
define('ADDRESS_SHORT_2','Bukoto, Kampala');
define('WHATSAPP',     '+256774792810');
define('INSTAGRAM',    'https://instagram.com/deebeancoffee');
define('TIKTOK',       'https://tiktok.com/@deebeancoffee');
define('TWITTER',      'https://twitter.com/deebeancoffee');
define('FACEBOOK',     'https://facebook.com/deeandbeancoffee');
define('FOUNDER',      'Doreen Ahebwa');
define('FOUNDER_TITLE','Proprietor & Founder');
define('MISSION',      'To brew connections one cup at a time by uplifting women farmers and sharing the soul of Ugandan coffee.');
define('VISION',       'A world where every sip supports sustainable livelihoods and celebrates cultural heritage.');

// Google Drive Image Base URL — real photos from the folder
define('DRIVE_IMG', 'https://lh3.googleusercontent.com/d/');

// Image map: Google Drive IDs or local paths (local paths start with '/')
$SITE_IMAGES = [
    'hero'      => '/assets/images/hero-bukoto.jpg',      // Branch - Shell Bukoto — hero
    'hero2'     => '1iXOWQ5k1ULkZSAW3EdKrMo-sz0cpqKT_', // DeeBean(21)
    'about'     => '/assets/images/product1.jpg',         // product(1) — story/about
    'product1'  => '/assets/images/product1.jpg',         // product(1)
    'about2'    => '1wj29aRw063W3AerTZBuWJx9XaC0zKd7N', // DeeBean(9)
    'brand'     => '1l_IfjhXuyAi8u278P6QaTVvjpGF-1K0e', // DeeBean(30) - signage/logo
    'cafe'      => '1B3zcbE9t8gk7NHuuiJveYNHl3SY7SH7x', // DeeBean(31)
    'gallery1'  => '134Zq6K-YbjOIKrImULrXBY1PH7lg0bPD', // DeeBean(28)
    'gallery2'  => '1SoFc-TP_Dq96gwQfAiqx6huXlA_ZsjUk', // DeeBean(27)
    'gallery3'  => '1w899uERpZqrchYj9cRHnqHQeDXJbuDIS', // DeeBean(29)
    'gallery4'  => '1o2pHGF3FPhB_Cb18csCzIZcjCMVzwhJI', // DeeBean(36)
    'gallery5'  => '101ZecfoG_8BvrZ8tnDiF4xbbt-B5nodK', // DeeBean(39)
    'gallery6'  => '1DrsOun5DZueXIBoeUWajjW90NHbYMoy5', // DeeBean(35)
    'gallery7'  => '1sGjAvhllXUIsosat1Ej3Eb8L222lS2e9', // DeeBean(5)
    'gallery8'  => '1IbusJm9nS1ygDOgawgENn-COiK20KKt_', // DeeBean(38)
    'gallery9'  => '11VsU0G28vJeKDaEndJhfbpy2ou6T9dKu', // DeeBean(34)
    'gallery10' => '1NpQ7-hTyCDyCHAW4bnhAu440o8QH8Xjg', // DeeBean(37)
    'gallery11' => '1H1ZpB7t_GpSc8pM35pwMmXLmDogS2VrW', // DeeBean(3)
    'gallery12' => '1BevLdridp3zduyy91PV-KAoF_vuHrAjE', // DeeBean(33)
    'gallery13' => '13yexCgQvpm_g_itxQjM8K6S2FoLTX_mM', // DeeBean(4)
    'gallery14' => '1zxwdPdGiGVUaeCa5KJs_9B736d_2vRjf', // DeeBean(32)
    'gallery15' => '1gpy8I-qiE7olg3X7OwLNGpBXQksl69nj', // DeeBean(8)
    'gallery16' => '1ZRLuXyhgoctdEzTRDP6-nbLQ0PeyK6OZ', // DeeBean(7)
    'gallery17' => '1DZ6uDJ3rO5tvdDoHbsRtBrLPNAapfPMA', // DeeBean(6)
];

function img(string $key): string {
    global $SITE_IMAGES;
    $val = $SITE_IMAGES[$key] ?? '';
    if ($val !== '' && $val[0] === '/') return $val;
    return DRIVE_IMG . $val . '=w1200';
}

function wa_link(string $msg = ''): string {
    $text = $msg ?: "Hello Dee & Bean Coffee! I'd like to get in touch.";
    return 'https://wa.me/' . WHATSAPP . '?text=' . urlencode($text);
}
