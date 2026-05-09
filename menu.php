<?php
require_once 'includes/config.php';
$page_title = 'Our Menu';
$meta_desc  = 'Full menu at Dee & Bean Coffee — Coffee House Classics, Tea & Chocolate, Fresh Juices, Mocktails, Mojitos, Smoothies, Signatures & Snacks. Freshly prepared daily in Kampala, Uganda.';

$extra_css = '<style>
/* ══ MENU PAGE ══════════════════════════════════════════ */

/* Hero */
.menu-page-hero {
  position: relative;
  background: var(--forest-deep);
  padding: 160px 0 90px;
  overflow: hidden;
  text-align: center;
}
.menu-page-hero-bg {
  position: absolute;
  inset: 0;
  background-image: url("/assets/images/hero-bukoto.jpg");
  background-size: cover;
  background-position: center 40%;
  opacity: 0.18;
}
.menu-page-hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(15,34,25,0.6) 0%, rgba(15,34,25,0.85) 100%);
}
.menu-page-hero-content { position: relative; z-index: 2; }
.menu-page-hero .menu-tag-row {
  display: flex; gap: 10px; justify-content: center; flex-wrap: wrap; margin-bottom: 28px;
}
.menu-page-tag {
  display: inline-flex; align-items: center; gap: 7px;
  background: rgba(201,146,42,0.15);
  border: 1px solid rgba(201,146,42,0.3);
  border-radius: 30px;
  padding: 7px 18px;
  font-family: var(--font-body);
  font-size: 0.68rem;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--gold-light);
}
.menu-page-hero h1 {
  font-family: var(--font-display);
  font-size: clamp(2.5rem, 6vw, 4.5rem);
  color: var(--cream);
  line-height: 1.1;
  margin-bottom: 20px;
}
.menu-page-hero h1 em { color: var(--gold-light); font-style: italic; }
.menu-page-hero p {
  font-family: var(--font-accent);
  font-style: italic;
  font-size: 1rem;
  color: rgba(247,240,227,0.6);
  max-width: 500px;
  margin: 0 auto 36px;
  line-height: 1.8;
}
.menu-hero-actions { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }

/* Sticky category nav */
.menu-sticky-nav {
  position: sticky;
  top: 0;
  z-index: 88;
  background: var(--forest-deep);
  border-bottom: 2px solid rgba(201,146,42,0.4);
  box-shadow: 0 4px 24px rgba(0,0,0,0.35);
}
.menu-sticky-tabs {
  display: flex;
  overflow-x: auto;
  scrollbar-width: none;
  -webkit-overflow-scrolling: touch;
}
.menu-sticky-tabs::-webkit-scrollbar { display: none; }
.menu-sticky-tab {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  padding: 17px 22px;
  font-family: var(--font-body);
  font-size: 0.68rem;
  font-weight: 700;
  letter-spacing: 0.09em;
  text-transform: uppercase;
  color: rgba(247,240,227,0.45);
  white-space: nowrap;
  border-bottom: 3px solid transparent;
  transition: all 0.22s;
  text-decoration: none;
  margin-bottom: -2px;
  cursor: pointer;
}
.menu-sticky-tab i { font-size: 0.8rem; }
.menu-sticky-tab:hover { color: var(--gold-light); border-bottom-color: rgba(201,146,42,0.4); }
.menu-sticky-tab.active { color: var(--gold-light); border-bottom-color: var(--gold); }

/* Section scaffold */
.menu-cat-section {
  padding: 88px 0 72px;
  scroll-margin-top: 58px;
}

/* Category header */
.menu-cat-header {
  display: flex;
  align-items: center;
  gap: 22px;
  margin-bottom: 52px;
}
.menu-cat-icon-wrap {
  width: 60px; height: 60px;
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  font-size: 1.4rem;
  flex-shrink: 0;
}
.menu-cat-icon-wrap.on-light { background: var(--forest); color: var(--gold-light); }
.menu-cat-icon-wrap.on-dark  { background: rgba(201,146,42,0.15); color: var(--gold); border: 1px solid rgba(201,146,42,0.3); }
.menu-cat-title-wrap { flex: 1; }
.menu-cat-label {
  font-family: var(--font-body);
  font-size: 0.65rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  margin-bottom: 4px;
}
.menu-cat-label.on-light { color: var(--gold); }
.menu-cat-label.on-dark  { color: var(--gold); }
.menu-cat-title {
  font-family: var(--font-display);
  font-size: clamp(1.6rem, 3vw, 2.2rem);
  font-style: italic;
  line-height: 1.15;
  margin: 0;
}
.menu-cat-title.on-light { color: var(--forest-deep); }
.menu-cat-title.on-dark  { color: var(--cream); }
.menu-cat-rule {
  flex: 1;
  height: 1px;
  min-width: 40px;
}
.menu-cat-rule.on-light { background: linear-gradient(to right, var(--gold), transparent); }
.menu-cat-rule.on-dark  { background: linear-gradient(to right, rgba(201,146,42,0.5), transparent); }

/* Item grid */
.menu-items-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 3px;
  border-radius: 18px;
  overflow: hidden;
}
.menu-items-grid.cols-1 { grid-template-columns: 1fr; }

/* Item row */
.menu-item {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;
  padding: 22px 30px;
  transition: background 0.2s;
}
.menu-item.on-light { background: var(--ivory); }
.menu-item.on-light:hover { background: var(--cream); }
.menu-item.on-dark  { background: rgba(45,90,66,0.55); }
.menu-item.on-dark:hover  { background: rgba(45,90,66,0.85); }

.menu-item-info { flex: 1; min-width: 0; }
.menu-item-name {
  font-family: var(--font-display);
  font-size: 0.92rem;
  font-weight: 700;
  margin-bottom: 4px;
  display: flex; align-items: center; gap: 8px; flex-wrap: wrap;
}
.menu-item-name.on-light { color: var(--forest-deep); }
.menu-item-name.on-dark  { color: var(--cream); }
.menu-item-sub {
  font-family: var(--font-accent);
  font-size: 0.76rem;
  font-style: italic;
  line-height: 1.5;
}
.menu-item-sub.on-light { color: rgba(42,42,42,0.48); }
.menu-item-sub.on-dark  { color: rgba(247,240,227,0.4); }

.menu-item-right {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  gap: 9px;
  flex-shrink: 0;
}
.menu-item-price {
  font-family: var(--font-display);
  font-size: 1rem;
  font-weight: 700;
  white-space: nowrap;
}
.menu-item-price.on-light { color: var(--forest); }
.menu-item-price.on-dark  { color: var(--gold-light); }
.menu-item-price .ugx {
  font-family: var(--font-body);
  font-size: 0.6rem;
  font-weight: 600;
  letter-spacing: 0.06em;
  margin-right: 2px;
  opacity: 0.55;
}
.menu-item-price .sep { opacity: 0.4; margin: 0 3px; font-size: 0.8rem; }

.menu-item-btn {
  display: inline-flex; align-items: center; gap: 5px;
  font-family: var(--font-body);
  font-size: 0.62rem;
  font-weight: 700;
  letter-spacing: 0.07em;
  text-transform: uppercase;
  text-decoration: none;
  border-radius: 24px;
  padding: 6px 13px;
  transition: all 0.22s;
  white-space: nowrap;
}
.menu-item-btn.on-light {
  color: var(--forest);
  border: 1.5px solid rgba(27,58,45,0.35);
}
.menu-item-btn.on-light:hover {
  background: var(--forest);
  color: var(--cream);
  border-color: var(--forest);
}
.menu-item-btn.on-dark {
  color: var(--gold);
  border: 1.5px solid rgba(201,146,42,0.4);
}
.menu-item-btn.on-dark:hover {
  background: var(--gold);
  color: var(--forest-deep);
}

/* Badge */
.m-badge {
  display: inline-block;
  font-family: var(--font-body);
  font-size: 0.55rem;
  font-weight: 700;
  letter-spacing: 0.07em;
  text-transform: uppercase;
  border-radius: 20px;
  padding: 2px 8px;
}
.m-badge.gold { background: var(--gold); color: var(--forest-deep); }
.m-badge.green { background: var(--forest); color: var(--cream); }
.m-badge.red { background: #b84040; color: #fff; }

/* Snacks cards */
.snacks-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}
.snack-card {
  background: var(--ivory);
  border-radius: 20px;
  padding: 40px 28px;
  text-align: center;
  border: 1px solid rgba(201,146,42,0.15);
  transition: all 0.25s var(--ease);
}
.snack-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 16px 48px rgba(27,58,45,0.12);
  border-color: rgba(201,146,42,0.3);
}
.snack-icon { font-size: 2.8rem; margin-bottom: 18px; display: block; }
.snack-card h4 {
  font-family: var(--font-display);
  font-size: 1rem;
  font-style: italic;
  color: var(--forest-deep);
  margin-bottom: 12px;
}
.snack-card p {
  font-family: var(--font-accent);
  font-size: 0.8rem;
  font-style: italic;
  color: rgba(42,42,42,0.5);
  line-height: 1.7;
}
.snack-note {
  margin-top: 32px;
  text-align: center;
  font-family: var(--font-accent);
  font-style: italic;
  font-size: 0.82rem;
  color: rgba(42,42,42,0.45);
}
.snack-note i { color: var(--gold); margin-right: 6px; }

/* Divider line */
.menu-divider {
  height: 1px;
  background: linear-gradient(to right, transparent, rgba(201,146,42,0.25), transparent);
  margin: 0;
  border: none;
}

/* Responsive */
@media (max-width: 900px) {
  .menu-items-grid { grid-template-columns: 1fr; }
  .snacks-grid { grid-template-columns: 1fr 1fr; }
  .menu-cat-section { padding: 64px 0 52px; }
  .menu-item { padding: 18px 22px; }
}
@media (max-width: 600px) {
  .snacks-grid { grid-template-columns: 1fr; }
  .menu-sticky-tab { padding: 14px 16px; font-size: 0.65rem; }
  .menu-page-hero { padding: 130px 0 70px; }
  .menu-cat-rule { display: none; }
}
</style>';

include 'includes/header.php';
?>

<!-- ══════════════════════════════════════════
     HERO
══════════════════════════════════════════ -->
<div class="menu-page-hero">
  <div class="menu-page-hero-bg" aria-hidden="true"></div>
  <div class="menu-page-hero-overlay" aria-hidden="true"></div>
  <div class="container menu-page-hero-content">

    <nav class="breadcrumb" style="justify-content:center;margin-bottom:28px;">
      <a href="/">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Our Menu</span>
    </nav>

    <div class="menu-tag-row">
      <span class="menu-page-tag"><i class="fa-solid fa-location-dot"></i> Ntinda · Bukoto, Kampala</span>
      <span class="menu-page-tag"><i class="fa-solid fa-clock"></i> Open Daily 7:00am – 11:00pm</span>
      <span class="menu-page-tag"><i class="fa-solid fa-leaf"></i> 100% Ugandan Origin</span>
    </div>

    <h1>Our <em>Menu</em></h1>
    <p>Freshly prepared daily. Every cup tells a story from Uganda's highlands.</p>

    <div class="menu-hero-actions">
      <a href="<?= wa_link("Hi! I'd like to order from Dee & Bean Coffee.") ?>" target="_blank" class="btn btn-gold">
        <i class="fa-brands fa-whatsapp"></i> Order via WhatsApp
      </a>
      <a href="#coffee-classics" class="btn btn-outline-light">
        <i class="fa-solid fa-mug-hot"></i> Browse Menu
      </a>
    </div>

  </div>
</div>

<!-- ══════════════════════════════════════════
     STICKY NAV
══════════════════════════════════════════ -->
<div class="menu-sticky-nav" id="menuStickyNav">
  <div class="container" style="padding:0;">
    <div class="menu-sticky-tabs" role="navigation" aria-label="Menu categories">
      <a href="#coffee-classics" class="menu-sticky-tab active" data-section="coffee-classics">
        <i class="fa-solid fa-mug-hot"></i> Coffee Classics
      </a>
      <a href="#tea-chocolate" class="menu-sticky-tab" data-section="tea-chocolate">
        <i class="fa-solid fa-mug-saucer"></i> Tea &amp; Choc
      </a>
      <a href="#fresh-juices" class="menu-sticky-tab" data-section="fresh-juices">
        <i class="fa-solid fa-lemon"></i> Fresh Juices
      </a>
      <a href="#mocktails" class="menu-sticky-tab" data-section="mocktails">
        <i class="fa-solid fa-glass-water-droplet"></i> Mocktails
      </a>
      <a href="#mojitos" class="menu-sticky-tab" data-section="mojitos">
        <i class="fa-solid fa-leaf"></i> Mojitos
      </a>
      <a href="#smoothies" class="menu-sticky-tab" data-section="smoothies">
        <i class="fa-solid fa-blender"></i> Smoothies
      </a>
      <a href="#signatures" class="menu-sticky-tab" data-section="signatures">
        <i class="fa-solid fa-star"></i> Signatures
      </a>
      <a href="#snacks" class="menu-sticky-tab" data-section="snacks">
        <i class="fa-solid fa-bread-slice"></i> Snacks
      </a>
    </div>
  </div>
</div>

<?php

/* ── Helper: render one menu item ─────────────────────────── */
function menu_item(string $name, string $price, string $desc = '', string $badge = '', string $theme = 'on-light'): void {
    $wa = wa_link("Hi! I'd like to order: $name");
    $badge_html = $badge
        ? "<span class=\"m-badge gold\">$badge</span>"
        : '';
    echo <<<HTML
    <div class="menu-item $theme">
      <div class="menu-item-info">
        <div class="menu-item-name $theme">$name $badge_html</div>
        <div class="menu-item-sub $theme">$desc</div>
      </div>
      <div class="menu-item-right">
        <div class="menu-item-price $theme"><span class="ugx">UGX</span>$price</div>
        <a href="$wa" target="_blank" class="menu-item-btn $theme">
          <i class="fa-brands fa-whatsapp"></i> Order
        </a>
      </div>
    </div>
    HTML;
}

/* ── Helper: section open ──────────────────────────────────── */
function section_open(string $id, string $bg_class, string $icon_fa, string $label, string $title, string $theme = 'on-light'): void {
    $icon_class = $theme === 'on-dark' ? 'on-dark' : 'on-light';
    $rule_class  = $icon_class;
    echo <<<HTML
    <section class="menu-cat-section $bg_class" id="$id" aria-label="$title">
      <div class="container">
        <div class="menu-cat-header">
          <div class="menu-cat-icon-wrap $icon_class"><i class="$icon_fa"></i></div>
          <div class="menu-cat-title-wrap">
            <div class="menu-cat-label $icon_class">$label</div>
            <h2 class="menu-cat-title $icon_class">$title</h2>
          </div>
          <div class="menu-cat-rule $rule_class"></div>
        </div>
        <div class="menu-items-grid">
    HTML;
}

function section_close(): void {
    echo '</div></div></section>';
}
?>

<!-- ══════════════════════════════════════════
     1 · COFFEE HOUSE CLASSICS
══════════════════════════════════════════ -->
<?php section_open('coffee-classics', '', 'fa-solid fa-mug-hot', 'Hot Drinks', 'Coffee House Classics'); ?>
  <?php menu_item('Americano',           '10,000', 'Rich espresso diluted with hot water — bold, clean, and deeply satisfying.'); ?>
  <?php menu_item('Espresso',            '7,000',  'Concentrated shot of our signature Ugandan dark roast with silky crema.', 'Best Seller'); ?>
  <?php menu_item('Espresso Macchiato',  '8,000',  'A bold espresso "stained" with a dash of perfectly steamed milk foam.'); ?>
  <?php menu_item('Cappuccino',          '10,000 <span class="sep">/</span> 12,000', 'Equal parts espresso, steamed milk, and velvety foam. Small or Double.'); ?>
  <?php menu_item('Cafe Latte',          '10,000 <span class="sep">/</span> 12,000', 'Smooth espresso with generous steamed milk and a light foam crown. Small or Double.'); ?>
  <?php menu_item('Latte Macchiato',     '9,000',  'Layers of steamed milk and espresso — creamy, balanced, beautiful.'); ?>
  <?php menu_item('Cafe Mocha',          '12,000', 'Espresso melded with rich dark chocolate and steamed milk. Pure indulgence.'); ?>
  <?php menu_item('Flat White',          '10,000', 'Velvety microfoam poured over a ristretto shot. The barista\'s favourite.'); ?>
  <?php menu_item('Classic Black Coffee','9,000',  'Smooth, full-bodied brewed Ugandan highland coffee. No frills, all flavour.'); ?>
  <?php menu_item('Affogato Delight',    '12,000', 'A shot of hot espresso poured over creamy vanilla ice cream. Dessert &amp; coffee in one.', 'Fan Favourite'); ?>
  <?php menu_item('African Brew',        '12,000', 'Our house interpretation of traditional East African spiced coffee. Warm and aromatic.'); ?>
<?php section_close(); ?>

<hr class="menu-divider">

<!-- ══════════════════════════════════════════
     2 · TEA & CHOCOLATE
══════════════════════════════════════════ -->
<?php section_open('tea-chocolate', 'bg-linen', 'fa-solid fa-mug-saucer', 'Hot Drinks', 'Tea &amp; Chocolate'); ?>
  <?php menu_item('Chai Latte',        '12,000', 'Aromatic spiced tea blended with steamed milk. Warming and deeply comforting.'); ?>
  <?php menu_item('Dawa Tea',          '12,000', 'Traditional East African honey-ginger tea with fresh lemon. A soothing classic.'); ?>
  <?php menu_item('Black Currant Tea', '12,000', 'Vibrant black currant infusion — rich in flavour, naturally refreshing.'); ?>
  <?php menu_item('Hot Chocolate',     '12,000', 'Rich Belgian-style cocoa with steamed milk and a dusting of fine chocolate.', 'Fan Favourite'); ?>
  <?php menu_item('African Tea',       '10,000', 'Classic locally-grown tea brewed strong and served with milk. Pure comfort.'); ?>
  <?php menu_item('Vanilla Tea',       '12,000', 'Delicate black tea infused with natural vanilla. Smooth and fragrant.'); ?>
  <?php menu_item('Peppermint Tea',    '12,000', 'Cooling peppermint leaves steeped fresh. Naturally caffeine-free and uplifting.'); ?>
  <?php menu_item('Lemon Tea',         '12,000', 'Bright black tea with fresh lemon and a touch of honey. Zesty and reviving.'); ?>
  <?php menu_item('Black Tea',         '8,000',  'Pure, unfussy brewed black tea. The simplest pleasure, done perfectly.'); ?>
<?php section_close(); ?>

<hr class="menu-divider">

<!-- ══════════════════════════════════════════
     3 · FRESH JUICES
══════════════════════════════════════════ -->
<?php section_open('fresh-juices', '', 'fa-solid fa-lemon', 'Cold Drinks', 'Fresh Juices'); ?>
  <?php menu_item('Passion Juice',      '12,000', 'Freshly squeezed Ugandan passion fruit — sweet, tangy, and impossibly fresh.', 'Best Seller'); ?>
  <?php menu_item('Pineapple Juice',    '12,000', 'Cold-pressed golden pineapple. Bright, tropical, and naturally sweet.'); ?>
  <?php menu_item('Mango Juice',        '12,000', 'Ripe Ugandan mangoes blended smooth. Thick, golden, and irresistible.'); ?>
  <?php menu_item('Watermelon Juice',   '12,000', 'Chilled and pressed watermelon — light, hydrating, and perfectly sweet.'); ?>
  <?php menu_item('Mint Juice',         '12,000', 'Cool blended mint with a hint of lemon. Refreshing from the first sip.'); ?>
<?php section_close(); ?>

<hr class="menu-divider">

<!-- ══════════════════════════════════════════
     4 · MOCKTAILS
══════════════════════════════════════════ -->
<?php section_open('mocktails', 'bg-linen', 'fa-solid fa-glass-water-droplet', 'Cold Drinks', 'Mock Tails'); ?>
  <?php menu_item('Minted Pineapple Cooler', '14,000', 'Fresh pineapple, zesty mint, and a citrus splash over crushed ice. Pure refreshment.'); ?>
  <?php menu_item('Passion Melon Fizz',      '14,000', 'Tropical passion fruit and melon with a sparkling finish. Vibrant and fruity.'); ?>
  <?php menu_item('Island Splash',           '14,000', 'A colourful blend of tropical fruits with coconut notes and a citrus twist.', 'Fan Favourite'); ?>
  <?php menu_item('Sunset Squeeze',          '13,000', 'Layered orange, mango, and grenadine — as beautiful to look at as it is to sip.'); ?>
  <?php menu_item('Zesty Island Kick',       '14,000', 'Pineapple, ginger, lime, and a hint of chilli for a fun tropical kick.'); ?>
<?php section_close(); ?>

<hr class="menu-divider">

<!-- ══════════════════════════════════════════
     5 · MOJITOS
══════════════════════════════════════════ -->
<?php section_open('mojitos', 'bg-forest', 'fa-solid fa-leaf', 'Cold Drinks', 'Mojitos', 'on-dark'); ?>
  <?php menu_item('Zesty Mojito Classic',  '16,000', 'Fresh lime, mint, sparkling water, and a touch of sugar. The timeless classic.', '', 'on-dark'); ?>
  <?php menu_item('Tropic Twist Mojito',   '18,000', 'Classic mojito elevated with mango and passion fruit. A tropical reimagining.', '', 'on-dark'); ?>
  <?php menu_item('Peachy Breeze Mojito',  '20,000', 'Ripe peach purée, fresh mint, and lime fizz. Sweet, floral, and perfectly chilled.', 'Fan Favourite', 'on-dark'); ?>
  <?php menu_item('Berry Mint Fizz',       '20,000', 'Mixed berries muddled with mint and sparkling water. Vibrant, tart, refreshing.', '', 'on-dark'); ?>
<?php section_close(); ?>

<hr class="menu-divider">

<!-- ══════════════════════════════════════════
     6 · SMOOTHIES & SHAKES
══════════════════════════════════════════ -->
<?php section_open('smoothies', '', 'fa-solid fa-blender', 'Cold Drinks', 'Smoothies &amp; Shakes'); ?>
  <?php menu_item('Tropical Mango Burst',   '15,000', 'Mango, banana, and pineapple blended smooth with coconut milk.', 'Best Seller'); ?>
  <?php menu_item('Passion Paradise',       '15,000', 'Passion fruit, mango, and yoghurt blended into a thick tropical dream.'); ?>
  <?php menu_item('Power Fuel Blend',       '16,000', 'Banana, peanut butter, oats, honey, and milk. Fuel your day the delicious way.'); ?>
  <?php menu_item('Classic Vanilla Dream',  '18,000', 'Creamy vanilla ice cream, milk, and our house vanilla bean. Simply perfect.'); ?>
  <?php menu_item('Berry Bliss',            '23,000', 'Strawberries, blueberries, raspberries, and Greek yoghurt — antioxidant-rich and indulgent.', 'Premium'); ?>
  <?php menu_item('Espresso Chill',         '20,000', 'Cold brew blended with ice cream and espresso. Coffee lovers — this one is yours.', 'Fan Favourite'); ?>
  <?php menu_item('Mocha Rush',             '20,000', 'Chocolate, espresso, and creamy milk blended iced. Rich, bold, satisfying.'); ?>
  <?php menu_item('Biscotti Bliss',         '20,000', 'Espresso, biscotti crumble, and vanilla cream blended to dessert perfection.'); ?>
  <?php menu_item('Cookies &amp; Cream Crush', '20,000', 'Oreo cookies, vanilla ice cream, and milk — crushed, blended, and crowned with cream.'); ?>
<?php section_close(); ?>

<hr class="menu-divider">

<!-- ══════════════════════════════════════════
     7 · DEE & BEAN SIGNATURES
══════════════════════════════════════════ -->
<section class="menu-cat-section bg-forest" id="signatures" aria-label="Dee &amp; Bean Signatures"
         style="position:relative;overflow:hidden;">
  <!-- subtle texture -->
  <div style="position:absolute;inset:0;background-image:url('/assets/images/hero-bukoto.jpg');background-size:cover;background-position:center;opacity:0.06;" aria-hidden="true"></div>
  <div style="position:absolute;inset:0;background:linear-gradient(135deg,rgba(15,34,25,0.9),rgba(15,34,25,0.75));" aria-hidden="true"></div>

  <div class="container" style="position:relative;z-index:2;">

    <div class="menu-cat-header">
      <div class="menu-cat-icon-wrap on-dark"><i class="fa-solid fa-star"></i></div>
      <div class="menu-cat-title-wrap">
        <div class="menu-cat-label on-dark">House Creations</div>
        <h2 class="menu-cat-title on-dark">Dee &amp; Bean <em>Signatures</em></h2>
      </div>
      <div class="menu-cat-rule on-dark"></div>
    </div>

    <p style="font-family:var(--font-accent);font-style:italic;color:rgba(247,240,227,0.55);font-size:0.9rem;max-width:560px;line-height:1.8;margin-bottom:44px;">
      Crafted exclusively in-house. These are Dee's own recipes — flavour combinations you won't find anywhere else in Kampala.
    </p>

    <div class="menu-items-grid cols-1" style="max-width:760px;">
      <?php menu_item(
          'Sticky Bun Latte',
          '13,000',
          'Cinnamon, caramel &amp; vanilla syrup blended into a silky espresso latte. Warm, sweet, and utterly irresistible.',
          'Signature',
          'on-dark'
      ); ?>
      <?php menu_item(
          'Iced Vanilla Mocha',
          '13,000',
          'Cold espresso with rich chocolate, house vanilla bean syrup, and milk over ice. The café\'s coolest creation.',
          'Signature',
          'on-dark'
      ); ?>
    </div>

  </div>
</section>

<hr class="menu-divider">

<!-- ══════════════════════════════════════════
     8 · SNACKS, CAKES & SWEET TREATS
══════════════════════════════════════════ -->
<section class="menu-cat-section bg-linen" id="snacks" aria-label="Snacks, Cakes &amp; Sweet Treats">
  <div class="container">

    <div class="menu-cat-header">
      <div class="menu-cat-icon-wrap on-light"><i class="fa-solid fa-bread-slice"></i></div>
      <div class="menu-cat-title-wrap">
        <div class="menu-cat-label on-light">Food Menu</div>
        <h2 class="menu-cat-title on-light">Snacks, Cakes &amp; <em>Sweet Treats</em></h2>
      </div>
      <div class="menu-cat-rule on-light"></div>
    </div>

    <div class="snacks-grid stagger">

      <div class="snack-card reveal">
        <span class="snack-icon">🥪</span>
        <h4>Light Bites &amp; Savory Snacks</h4>
        <p>Freshly made sandwiches, wraps, and hot savory bites to pair with your coffee. The perfect mid-morning or afternoon pick-me-up.</p>
        <a href="<?= wa_link("Hi! I'd like to know about today's light bites & savory snacks at Dee & Bean Coffee.") ?>" target="_blank" class="btn btn-outline" style="margin-top:20px;font-size:0.65rem;padding:10px 18px;">
          <i class="fa-brands fa-whatsapp"></i> Ask Today's Selection
        </a>
      </div>

      <div class="snack-card reveal">
        <span class="snack-icon">🎂</span>
        <h4>Freshly Baked Cakes &amp; Pastries</h4>
        <p>Baked in-house daily — from flaky butter croissants to rich chocolate cake slices, Belgian waffles, and seasonal pastry specials.</p>
        <a href="<?= wa_link("Hi! I'd like to know about today's freshly baked cakes & pastries at Dee & Bean Coffee.") ?>" target="_blank" class="btn btn-outline" style="margin-top:20px;font-size:0.65rem;padding:10px 18px;">
          <i class="fa-brands fa-whatsapp"></i> Ask Today's Bakes
        </a>
      </div>

      <div class="snack-card reveal">
        <span class="snack-icon">🍰</span>
        <h4>Delightful Sweet Treats</h4>
        <p>Glazed doughnuts, cookies, brownies, and rotating seasonal desserts — handcrafted to satisfy every sweet craving, any time of day.</p>
        <a href="<?= wa_link("Hi! I'd like to know about today's sweet treats at Dee & Bean Coffee.") ?>" target="_blank" class="btn btn-outline" style="margin-top:20px;font-size:0.65rem;padding:10px 18px;">
          <i class="fa-brands fa-whatsapp"></i> Ask Today's Treats
        </a>
      </div>

    </div>

    <p class="snack-note">
      <i class="fa-solid fa-circle-info"></i>
      Selection &amp; pricing varies daily. Ask your barista or message us on WhatsApp for today's full snacks &amp; bakes menu.
    </p>

  </div>
</section>

<!-- ══════════════════════════════════════════
     CTA BAND
══════════════════════════════════════════ -->
<div class="cta-band">
  <div class="cta-band-pattern" aria-hidden="true"></div>
  <div class="container">
    <div class="cta-content reveal">
      <div class="eyebrow" style="justify-content:center;color:var(--gold);">Ready to Order?</div>
      <h2 class="headline light" style="font-size:clamp(2rem,5vw,3.2rem);margin-bottom:18px;">
        Your Perfect Cup <em>Awaits</em>
      </h2>
      <p class="subhead light" style="max-width:520px;margin:0 auto;">
        Walk in at Shell Select Ntinda or Bukoto · Order on Glovo · Or message us on WhatsApp.
        Open daily 7:00am – 11:00pm.
      </p>
      <div class="cta-actions" style="margin-top:36px;">
        <a href="<?= wa_link("Hi! I'd like to order from Dee & Bean Coffee.") ?>" target="_blank" class="btn btn-gold">
          <i class="fa-brands fa-whatsapp"></i> Order via WhatsApp
        </a>
        <a href="/contact" class="btn btn-outline-light">
          <i class="fa-solid fa-location-dot"></i> Find Us
        </a>
        <a href="/gallery" class="btn btn-outline-light">
          <i class="fa-regular fa-images"></i> See Our Space
        </a>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SCROLL SPY JS
══════════════════════════════════════════ -->
<script>
(function () {
  const tabs = document.querySelectorAll('.menu-sticky-tab[data-section]');
  const sections = Array.from(tabs).map(t => document.getElementById(t.dataset.section)).filter(Boolean);

  function updateActive() {
    const scrollY = window.scrollY + 120;
    let current = sections[0];
    sections.forEach(s => { if (s.offsetTop <= scrollY) current = s; });
    tabs.forEach(t => {
      t.classList.toggle('active', t.dataset.section === (current && current.id));
    });
  }

  window.addEventListener('scroll', updateActive, { passive: true });
  updateActive();

  // Smooth scroll on tab click (already handled by CSS scroll-behavior, but ensure offset)
  tabs.forEach(tab => {
    tab.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.getElementById(this.dataset.section);
      if (target) {
        const offset = document.getElementById('menuStickyNav').offsetHeight + 10;
        window.scrollTo({ top: target.offsetTop - offset, behavior: 'smooth' });
      }
    });
  });
})();
</script>

<?php include 'includes/footer.php'; ?>
