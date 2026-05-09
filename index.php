<?php
require_once 'includes/config.php';
$page_title = 'Brewed from the Heart, Rooted in Home';
$meta_desc  = 'Dee & Bean Coffee — Premium Ugandan artisan coffee at Ntinda, Kigobe Road, Kampala. Ethically sourced from highland farmers, expertly roasted, lovingly brewed.';
include 'includes/header.php';
?>

<!-- ══════════════════════════════════════════
     HERO
══════════════════════════════════════════ -->
<section class="hero" aria-label="Welcome">

  <!-- Background image — DeeBean(30) with cinematic slow-zoom -->
  <div class="hero-bg-image" id="heroBg" style="background-image:url('<?= img('hero') ?>');" aria-hidden="true"></div>
  <div class="hero-texture" aria-hidden="true"></div>

  <!-- Floating live emojis -->
  <div class="hero-floats" aria-hidden="true">
    <span class="hero-float" style="--x:8%;  --d:0s;   --dur:11s; --s:1.3rem; --r0:-6deg;  --r1:14deg;">☕</span>
    <span class="hero-float" style="--x:22%; --d:2.4s; --dur:9s;  --s:1.1rem; --r0:5deg;   --r1:-12deg;">🌿</span>
    <span class="hero-float" style="--x:38%; --d:1s;   --dur:13s; --s:1.5rem; --r0:-10deg; --r1:8deg;">⭐</span>
    <span class="hero-float" style="--x:55%; --d:3.5s; --dur:10s; --s:1.2rem; --r0:8deg;   --r1:-15deg;">🍃</span>
    <span class="hero-float" style="--x:70%; --d:0.6s; --dur:12s; --s:1.4rem; --r0:-4deg;  --r1:10deg;">☕</span>
    <span class="hero-float" style="--x:83%; --d:2s;   --dur:8.5s;--s:1.0rem; --r0:12deg;  --r1:-8deg;">🌿</span>
    <span class="hero-float" style="--x:15%; --d:4.5s; --dur:14s; --s:1.2rem; --r0:-8deg;  --r1:6deg;">✨</span>
    <span class="hero-float" style="--x:93%; --d:1.8s; --dur:9.5s;--s:1.1rem; --r0:6deg;   --r1:-10deg;">🫙</span>
    <span class="hero-float" style="--x:48%; --d:5s;   --dur:11s; --s:1.3rem; --r0:-12deg; --r1:9deg;">👩🏾‍🌾</span>
    <span class="hero-float" style="--x:65%; --d:3s;   --dur:15s; --s:1.0rem; --r0:4deg;   --r1:-11deg;">🔥</span>
  </div>

  <div class="container">
    <div class="hero-content">

      <div class="hero-badge reveal" style="transition-delay:0.1s;">
        <i class="fa-solid fa-leaf"></i>
        Ugandan Highland Coffee &nbsp;·&nbsp; Est. Kampala
        <i class="fa-solid fa-leaf"></i>
      </div>

      <h1 class="hero-title reveal" style="transition-delay:0.2s;">
        Dee <span style="color:var(--gold-light);font-style:italic;">&amp;</span> Bean
        <span class="italic">Coffee</span>
      </h1>

      <p class="hero-tagline reveal" style="transition-delay:0.3s;">
        "Brewed from the Heart, Rooted in Home."
      </p>

      <p style="font-family:var(--font-accent);font-size:1rem;font-style:italic;color:rgba(247,240,227,0.65);max-width:500px;line-height:1.8;margin-bottom:0;" class="reveal" style="transition-delay:0.35s;">
        From the fertile highlands of Uganda to your cup — every sip carries the story of the women who grow it, 
        the hands that roast it, and the love poured into every brew.
      </p>

      <div class="hero-actions reveal" style="margin-top:36px;transition-delay:0.45s;">
        <a href="/menu" class="btn btn-gold">
          <i class="fa-solid fa-mug-hot"></i> Explore Menu
        </a>
        <a href="/story" class="btn btn-outline-light">
          <i class="fa-solid fa-seedling"></i> Our Story
        </a>
        <a href="<?= wa_link("Hi! I'd like to order from Dee & Bean Coffee.") ?>" target="_blank" class="btn btn-outline-light">
          <i class="fa-brands fa-whatsapp"></i> Order via WhatsApp
        </a>
      </div>

      <div class="hero-stats reveal" style="transition-delay:0.55s;">
        <div class="hero-stat">
          <div class="hero-stat-num" data-count="50" data-suffix="+">50+</div>
          <div class="hero-stat-label">Smallholder Farmers</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-num" data-count="100" data-suffix="%">100%</div>
          <div class="hero-stat-label">Ugandan Origin</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-num" data-count="10" data-suffix="K+">10K+</div>
          <div class="hero-stat-label">Happy Guests</div>
        </div>
      </div>

    </div>
  </div>

  <div class="hero-scroll-cue" aria-hidden="true">
    <div class="hero-scroll-line"></div>
    <span>Scroll</span>
  </div>
</section>

<!-- ══════════════════════════════════════════
     TICKER
══════════════════════════════════════════ -->
<div class="ticker" aria-hidden="true">
  <div class="ticker-track">
    <?php
    $t = [
      ['☕', 'Specialty Ugandan Coffee'],
      ['🌿', 'Ethically Sourced'],
      ['👩🏾‍🌾', 'Women Farmers Empowered'],
      ['🔥', 'Expert Roasters'],
      ['🍃', 'Highland Grown'],
      ['⭐', 'Premium Quality'],
      ['🫙', 'Fresh Daily Roasts'],
      ['📍', 'Ntinda, Kampala'],
      ['📱', 'Available on Glovo'],
      ['☕', 'Specialty Ugandan Coffee'],
      ['🌿', 'Ethically Sourced'],
      ['👩🏾‍🌾', 'Women Farmers Empowered'],
      ['🔥', 'Expert Roasters'],
      ['🍃', 'Highland Grown'],
      ['⭐', 'Premium Quality'],
      ['🫙', 'Fresh Daily Roasts'],
      ['📍', 'Ntinda, Kampala'],
      ['📱', 'Available on Glovo'],
    ];
    foreach ($t as [$ico, $lbl]):
    ?>
    <span class="ticker-item">
      <?= $ico ?> <?= $lbl ?> <i class="fa-solid fa-diamond"></i>
    </span>
    <?php endforeach; ?>
  </div>
</div>

<!-- ══════════════════════════════════════════
     ABOUT SNAPSHOT
══════════════════════════════════════════ -->
<section class="section">
  <div class="container">
    <div class="about-grid">

      <!-- Media -->
      <div class="about-media-wrap reveal-left">
        <div class="about-img-main-wrap">
          <img src="<?= img('about') ?>" alt="Dee and Bean Coffee — Our Story" class="about-img-main" loading="lazy">
        </div>
        <div class="about-border-deco" aria-hidden="true"></div>
        <div class="about-tag">
          <div class="about-tag-num" data-count="50" data-suffix="+">50+</div>
          <div class="about-tag-label">Highland Farmers</div>
        </div>
      </div>

      <!-- Content -->
      <div class="about-body reveal-right">
        <div class="eyebrow left-only">Our Story</div>
        <h2 class="headline" style="margin-bottom:18px;">
          Passion Rooted in<br><em>Uganda's Highlands</em>
        </h2>
        <p class="subhead" style="margin-bottom:20px;">
          Born from love — of people, of purpose, and of a single coffee seedling planted in a father's backyard.
        </p>
        <p>
          In the lush highlands of Uganda, where the sun kisses the hills and the mornings are wrapped in mist, 
          a visionary woman named <strong><?= FOUNDER ?></strong> — known simply as "Dee" — planted her first coffee seedling. 
          That seedling became the "Bean" at the heart of everything we do.
        </p>
        <p>
          Dee &amp; Bean Coffee is more than a brand; it is a journey from <strong>soil to soul</strong>. 
          We work directly with over 50 smallholder farmers — mostly women — to grow and harvest beans that are 
          rich, bold, and full of story.
        </p>

        <div class="about-values stagger" style="margin-top:32px;">
          <div class="about-value-item">
            <i class="fa-solid fa-seedling"></i>
            <div>
              <h5>Farm to Cup</h5>
              <p>Fresh, handpicked beans traced from seed to your cup.</p>
            </div>
          </div>
          <div class="about-value-item">
            <i class="fa-solid fa-heart"></i>
            <div>
              <h5>Women-Led</h5>
              <p>Empowering female farmers through fair trade &amp; microfinance.</p>
            </div>
          </div>
          <div class="about-value-item">
            <i class="fa-solid fa-leaf"></i>
            <div>
              <h5>Sustainable</h5>
              <p>Eco-friendly practices &amp; reforestation of highland farms.</p>
            </div>
          </div>
          <div class="about-value-item">
            <i class="fa-solid fa-star"></i>
            <div>
              <h5>Premium Quality</h5>
              <p>Every batch cupped and approved by our master roasters.</p>
            </div>
          </div>
        </div>

        <div style="margin-top:36px;display:flex;gap:14px;flex-wrap:wrap;">
          <a href="/about" class="btn btn-primary">
            <i class="fa-solid fa-arrow-right"></i> Read Full Story
          </a>
          <a href="/story" class="btn btn-outline">
            <i class="fa-solid fa-users"></i> Meet the Team
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     IMPACT BAND
══════════════════════════════════════════ -->
<div class="impact-band">
  <div class="container">
    <div class="impact-grid stagger">
      <div class="impact-item">
        <div class="impact-num" data-count="50" data-suffix="+">50+</div>
        <div class="impact-label">Farmer Partners</div>
      </div>
      <div class="impact-item">
        <div class="impact-num" data-count="10000" data-suffix="+">10K+</div>
        <div class="impact-label">Trees to be Planted</div>
      </div>
      <div class="impact-item">
        <div class="impact-num" data-count="100" data-suffix="%">100%</div>
        <div class="impact-label">Women-Focused Program</div>
      </div>
      <div class="impact-item">
        <div class="impact-num" data-count="10" data-suffix="%">10%</div>
        <div class="impact-label">Profits to Communities</div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     MENU PREVIEW
══════════════════════════════════════════ -->
<section class="section bg-cream" id="menu-preview">
  <div class="container">

    <div class="text-center reveal" style="margin-bottom:56px;">
      <div class="eyebrow" style="justify-content:center;">What We Brew</div>
      <h2 class="headline" style="margin-bottom:16px;">
        A Taste of Our <em>Menu</em>
      </h2>
      <p class="subhead" style="max-width:560px;margin:0 auto;">
        From bold Ugandan espresso to tropical smoothies and our famous Signatures — every cup is freshly prepared, every day.
      </p>
    </div>

    <!-- Category Tabs -->
    <div class="menu-categories">
      <button class="menu-cat-btn" data-panel="panel-hot">
        <i class="fa-solid fa-mug-hot"></i> Coffee Classics
      </button>
      <button class="menu-cat-btn" data-panel="panel-tea">
        <i class="fa-solid fa-mug-saucer"></i> Tea &amp; Choc
      </button>
      <button class="menu-cat-btn" data-panel="panel-cold">
        <i class="fa-solid fa-blender"></i> Cold Drinks
      </button>
      <button class="menu-cat-btn" data-panel="panel-signatures">
        <i class="fa-solid fa-star"></i> Signatures
      </button>
    </div>

    <?php
    $hot = [
      ['cat'=>'Espresso',    'name'=>'Espresso',          'desc'=>'Concentrated shot of our Ugandan dark roast with silky crema. Pure boldness.', 'price'=>'7,000',  'badge'=>'Best Seller','img'=>'brand'],
      ['cat'=>'Cappuccino',  'name'=>'Cappuccino',         'desc'=>'Equal parts espresso, steamed milk, and silky foam. S / D available.', 'price'=>'10,000 / 12,000','badge'=>'Fan Favourite','img'=>'cafe'],
      ['cat'=>'Cafe Mocha',  'name'=>'Cafe Mocha',         'desc'=>'Espresso with rich dark chocolate and steamed milk. Indulgence in a cup.', 'price'=>'12,000', 'badge'=>null,'img'=>'gallery1'],
      ['cat'=>'Americano',   'name'=>'Americano',          'desc'=>'Bold espresso diluted with hot water — clean, full-bodied, and satisfying.', 'price'=>'10,000', 'badge'=>null,'img'=>'gallery2'],
      ['cat'=>'Flat White',  'name'=>'Flat White',         'desc'=>'Velvety microfoam poured over a ristretto shot. The barista\'s favourite.', 'price'=>'10,000', 'badge'=>null,'img'=>'about2'],
      ['cat'=>'African Brew','name'=>'African Brew',       'desc'=>'Our house spiced East African coffee. Warm, aromatic, and deeply soulful.', 'price'=>'12,000', 'badge'=>'House Special','img'=>'gallery3'],
    ];
    $tea = [
      ['cat'=>'Tea',       'name'=>'Chai Latte',       'desc'=>'Aromatic spiced tea blended with steamed milk. Warming and comforting.', 'price'=>'12,000','badge'=>null,'img'=>'gallery7'],
      ['cat'=>'Tea',       'name'=>'Dawa Tea',          'desc'=>'Traditional East African honey-ginger tea with fresh lemon. A soothing classic.','price'=>'12,000','badge'=>null,'img'=>'gallery8'],
      ['cat'=>'Chocolate', 'name'=>'Hot Chocolate',     'desc'=>'Rich cocoa with steamed milk and a fine chocolate dusting.', 'price'=>'12,000','badge'=>'Fan Favourite','img'=>'gallery9'],
      ['cat'=>'Tea',       'name'=>'Black Currant Tea', 'desc'=>'Vibrant black currant infusion — rich in flavour, naturally refreshing.', 'price'=>'12,000','badge'=>null,'img'=>'gallery10'],
      ['cat'=>'Tea',       'name'=>'Peppermint Tea',    'desc'=>'Fresh peppermint steeped light. Naturally caffeine-free and uplifting.', 'price'=>'12,000','badge'=>null,'img'=>'gallery11'],
      ['cat'=>'Tea',       'name'=>'African Tea',       'desc'=>'Locally-grown tea brewed strong and served with milk. Pure comfort.', 'price'=>'10,000','badge'=>null,'img'=>'gallery12'],
    ];
    $cold = [
      ['cat'=>'Smoothie',  'name'=>'Tropical Mango Burst',  'desc'=>'Mango, banana, and pineapple blended with coconut milk. Sunshine in a glass.','price'=>'15,000','badge'=>'Best Seller','img'=>'gallery4'],
      ['cat'=>'Smoothie',  'name'=>'Espresso Chill',         'desc'=>'Cold brew blended with ice cream and espresso. Coffee lovers — this is yours.','price'=>'20,000','badge'=>'Fan Favourite','img'=>'gallery5'],
      ['cat'=>'Mocktail',  'name'=>'Island Splash',          'desc'=>'Tropical fruits, coconut notes and a citrus twist over crushed ice.','price'=>'14,000','badge'=>null,'img'=>'gallery6'],
      ['cat'=>'Mojito',    'name'=>'Peachy Breeze Mojito',   'desc'=>'Ripe peach purée, fresh mint, and lime fizz. Sweet, floral, perfectly chilled.','price'=>'20,000','badge'=>null,'img'=>'gallery13'],
      ['cat'=>'Juice',     'name'=>'Passion Juice',          'desc'=>'Freshly squeezed Ugandan passion fruit — sweet, tangy, impossibly fresh.','price'=>'12,000','badge'=>null,'img'=>'gallery14'],
      ['cat'=>'Smoothie',  'name'=>'Berry Bliss',            'desc'=>'Strawberries, blueberries, raspberries &amp; Greek yoghurt. Rich and antioxidant-packed.','price'=>'23,000','badge'=>'Premium','img'=>'gallery15'],
    ];
    $signatures = [
      ['cat'=>'Signature', 'name'=>'Sticky Bun Latte',   'desc'=>'Cinnamon, caramel &amp; vanilla syrup in a silky espresso latte. Dee\'s original creation.','price'=>'13,000','badge'=>'Signature','img'=>'hero2'],
      ['cat'=>'Signature', 'name'=>'Iced Vanilla Mocha', 'desc'=>'Espresso, dark chocolate, house vanilla syrup &amp; cold milk over ice. Café\'s coolest creation.','price'=>'13,000','badge'=>'Signature','img'=>'gallery16'],
      ['cat'=>'Cold Brew', 'name'=>'Affogato Delight',   'desc'=>'A shot of hot espresso poured over creamy vanilla ice cream. Dessert &amp; coffee in one.','price'=>'12,000','badge'=>'Fan Favourite','img'=>'gallery17'],
      ['cat'=>'Blend',     'name'=>'Mocha Rush',          'desc'=>'Chocolate, espresso, and creamy milk blended iced. Rich, bold, deeply satisfying.','price'=>'20,000','badge'=>null,'img'=>'cafe'],
      ['cat'=>'Shake',     'name'=>'Cookies &amp; Cream Crush','desc'=>'Oreo cookies, vanilla ice cream &amp; milk crushed and blended. Crowned with whipped cream.','price'=>'20,000','badge'=>null,'img'=>'about'],
      ['cat'=>'Shake',     'name'=>'Biscotti Bliss',      'desc'=>'Espresso, biscotti crumble, and vanilla cream blended to dessert-like perfection.','price'=>'20,000','badge'=>null,'img'=>'gallery6'],
    ];
    $panels = [
      'panel-hot'        => $hot,
      'panel-tea'        => $tea,
      'panel-cold'       => $cold,
      'panel-signatures' => $signatures,
    ];
    foreach ($panels as $pid => $items):
    ?>
    <div class="menu-panel stagger" id="<?= $pid ?>">
      <?php foreach ($items as $item): ?>
      <article class="menu-card">
        <div class="menu-card-thumb">
          <img src="<?= img($item['img']) ?>" alt="<?= htmlspecialchars($item['name']) ?>" loading="lazy"
               onerror="this.style.display='none';this.parentElement.style.background='var(--parchment)';">
          <?php if ($item['badge']): ?>
          <span class="menu-card-badge"><?= htmlspecialchars($item['badge']) ?></span>
          <?php endif; ?>
        </div>
        <div class="menu-card-body">
          <div class="menu-card-cat"><?= htmlspecialchars($item['cat']) ?></div>
          <h3 class="menu-card-name"><?= htmlspecialchars($item['name']) ?></h3>
          <p class="menu-card-desc"><?= $item['desc'] ?></p>
          <div class="menu-card-footer">
            <div class="menu-card-price">UGX <?= $item['price'] ?></div>
            <a href="<?= wa_link("Hi! I'd like to order: {$item['name']}") ?>" target="_blank" class="menu-card-order-btn">
              Order <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <?php endforeach; ?>

    <div class="text-center reveal" style="margin-top:52px;">
      <a href="/menu" class="btn btn-primary">
        <i class="fa-solid fa-list"></i> View Full Menu
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     OUR STORY — DARK SECTION
══════════════════════════════════════════ -->
<section class="section bg-forest">
  <div class="container">
    <div class="story-grid">

      <div class="reveal-left">
        <div class="eyebrow no-lines" style="color:var(--gold);">The Dee & Bean Mission</div>
        <blockquote class="story-lead">
          "To brew connections one cup at a time by uplifting women farmers and sharing the soul of Ugandan coffee."
        </blockquote>
        <p class="story-body">
          Our vision is a world where every sip supports sustainable livelihoods and celebrates cultural heritage. 
          We partner directly with smallholder cooperatives — no middlemen — paying premium prices for certified 
          organic beans and reinvesting 10% of profits into local education and health programs.
        </p>
        <p class="story-body">
          We are proud partners with <strong style="color:var(--gold-light);">Gorilla Highlands Coffee</strong>,
          <strong style="color:var(--gold-light);">Sera Wild Coffee</strong>,
          <strong style="color:var(--gold-light);">CURAD</strong>,
          <strong style="color:var(--gold-light);">KIMCO Coffee</strong>, and
          <strong style="color:var(--gold-light);">Hinga Coffee</strong> — organizations that share our values
          of quality, sustainability, and community empowerment.
        </p>
        <div style="margin-top:36px;display:flex;gap:14px;flex-wrap:wrap;">
          <a href="/story" class="btn btn-gold">
            <i class="fa-solid fa-leaf"></i> Explore Our Impact
          </a>
          <a href="/contact" class="btn btn-outline-light">
            <i class="fa-solid fa-handshake"></i> Partner With Us
          </a>
        </div>
      </div>

      <div class="pillars-grid reveal-right">
        <div class="pillar">
          <div class="pillar-num">01</div>
          <div class="pillar-icon"><i class="fa-solid fa-seedling"></i></div>
          <h4>Ethical Sourcing</h4>
          <p>Direct trade with 50+ smallholder farmers. Fair prices, no middlemen, traceable from seed to cup.</p>
        </div>
        <div class="pillar">
          <div class="pillar-num">02</div>
          <div class="pillar-icon"><i class="fa-solid fa-fire-flame-curved"></i></div>
          <h4>Artisan Roasting</h4>
          <p>State-of-the-art facility in Kisoro &amp; Kampala. Every batch perfected with precision and purpose.</p>
        </div>
        <div class="pillar">
          <div class="pillar-num">03</div>
          <div class="pillar-icon"><i class="fa-solid fa-venus"></i></div>
          <h4>Women in Coffee</h4>
          <p>Training &amp; microfinance programs for female farmers. Empowering the hands that grow our coffee.</p>
        </div>
        <div class="pillar">
          <div class="pillar-num">04</div>
          <div class="pillar-icon"><i class="fa-solid fa-tree"></i></div>
          <h4>Reforestation</h4>
          <p>Planting 10,000 trees to combat climate change in Uganda's coffee-growing highland regions.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     FEATURED SPECIALS
══════════════════════════════════════════ -->
<section class="section" id="specials">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:56px;">
      <div class="eyebrow">Today's Offerings</div>
      <h2 class="headline">Featured <em>Experiences</em></h2>
    </div>

    <div class="featured-layout reveal">
      <!-- Main Feature -->
      <div class="featured-main">
        <img src="<?= img('hero2') ?>" alt="Dee and Bean Signature Experience" class="featured-main-img" loading="lazy">
        <div class="featured-main-overlay"></div>
        <div class="featured-main-content">
          <div class="eyebrow no-lines" style="color:var(--gold);">Signature Experience</div>
          <h3 class="headline light" style="font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:14px;">
            The Dee &amp; Bean<br><em>Tasting Flight</em>
          </h3>
          <p class="subhead light" style="margin-bottom:28px;">
            A curated journey through three of our finest Ugandan blends — Uganda Highlands, 
            Kisoro Arabica, and our current Seasonal Selection.
          </p>
          <div style="display:flex;align-items:center;gap:14px;margin-bottom:28px;">
            <span style="font-family:var(--font-display);font-size:2rem;font-weight:700;color:var(--gold-light);">UGX 25,000</span>
            <span style="color:rgba(247,240,227,0.4);font-size:0.9rem;text-decoration:line-through;">30,000</span>
          </div>
          <a href="<?= wa_link("Hi! I'd like to reserve the Dee & Bean Tasting Flight.") ?>" target="_blank" class="btn btn-gold">
            <i class="fa-brands fa-whatsapp"></i> Reserve Now
          </a>
        </div>
      </div>

      <!-- Side Cards -->
      <div class="featured-side">
        <div class="featured-card">
          <div class="featured-card-icon"><i class="fa-solid fa-sun"></i></div>
          <div>
            <h4>Morning Ritual Combo</h4>
            <p>Any hot drink + fresh croissant + seasonal juice. The perfect Kampala morning.</p>
            <div class="featured-card-price">UGX 18,000</div>
          </div>
        </div>
        <div class="featured-card">
          <div class="featured-card-icon"><i class="fa-solid fa-users"></i></div>
          <div>
            <h4>Group Coffee Workshop</h4>
            <p>Founder-led coffee tasting &amp; brewing session for 6+ guests. Book 24hrs ahead.</p>
            <div class="featured-card-price">UGX 15,000 <small style="font-weight:400;color:var(--mocha);font-size:0.8rem;">/person</small></div>
          </div>
        </div>
        <div class="featured-card">
          <div class="featured-card-icon"><i class="fa-solid fa-gift"></i></div>
          <div>
            <h4>Coffee Gift Hamper</h4>
            <p>Premium Ugandan beans, branded mug &amp; tasting notes. The perfect gift for coffee lovers.</p>
            <div class="featured-card-price">From UGX 45,000</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     OUR SERVICES
══════════════════════════════════════════ -->
<section class="section bg-linen">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:56px;">
      <div class="eyebrow">What We Offer</div>
      <h2 class="headline">Our <em>Services</em></h2>
      <p class="subhead" style="max-width:520px;margin:0 auto;">
        Handpicked coffee beans from farm to cup in every experience we deliver.
      </p>
    </div>
    <div class="services-grid stagger">
      <div class="service-card">
        <div class="service-icon-wrap"><i class="fa-solid fa-mug-hot"></i></div>
        <h4>Café Experience</h4>
        <p>Cosy spaces in Kampala with single-origin pours, signature blends, and lovingly crafted food. A place to sip and stay.</p>
      </div>
      <div class="service-card">
        <div class="service-icon-wrap"><i class="fa-solid fa-boxes-stacked"></i></div>
        <h4>Wholesale</h4>
        <p>Bulk beans for roasters and retailers across East Africa. Certified organic, fair-trade, and traceable to the farm.</p>
      </div>
      <div class="service-card">
        <div class="service-icon-wrap"><i class="fa-solid fa-store"></i></div>
        <h4>Online Shop</h4>
        <p>Subscribe for monthly deliveries of fresh highland roasts direct to your door. Freshness guaranteed.</p>
      </div>
      <div class="service-card">
        <div class="service-icon-wrap"><i class="fa-solid fa-graduation-cap"></i></div>
        <h4>Brew Workshops</h4>
        <p>Learn to brew like a pro with founder-led sessions. From bean to cup — understand the full coffee story.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     GALLERY TEASER
══════════════════════════════════════════ -->
<section class="section">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:48px;">
      <div class="eyebrow">Gallery</div>
      <h2 class="headline">Life at <em>Dee &amp; Bean</em></h2>
    </div>

    <div class="gallery-mosaic reveal">
      <?php
      $gal = [
        ['img'=>'hero',     'cap'=>'The Perfect Brew'],
        ['img'=>'about',    'cap'=>'Highland Origins'],
        ['img'=>'gallery2', 'cap'=>'Craft &amp; Care'],
        ['img'=>'gallery3', 'cap'=>'Our Community'],
        ['img'=>'gallery4', 'cap'=>'Cold &amp; Bold'],
        ['img'=>'gallery5', 'cap'=>'The Experience'],
        ['img'=>'cafe',     'cap'=>'Our Space'],
        ['img'=>'gallery7', 'cap'=>'Fresh Roasts'],
      ];
      foreach ($gal as $g):
      ?>
      <div class="gallery-mosaic-item">
        <img src="<?= img($g['img']) ?>" alt="<?= $g['cap'] ?>" loading="lazy"
             onerror="this.style.display='none';">
        <div class="gallery-mosaic-caption">
          <span><?= $g['cap'] ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center" style="margin-top:40px;">
      <a href="/gallery" class="btn btn-outline">
        <i class="fa-regular fa-images"></i> View Full Gallery
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     TESTIMONIALS
══════════════════════════════════════════ -->
<section class="section bg-cream">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:56px;">
      <div class="eyebrow">Reviews</div>
      <h2 class="headline">What Our Guests <em>Say</em></h2>
    </div>

    <div class="testimonials-carousel">
      <div class="testimonials-track" id="tTrack">

        <?php
        $testimonials = [
          ['text'=>"Dee & Bean is my happy place in Kampala. The Uganda Highlands blend is unlike anything else I've tasted. Rich, smooth, story in every sip. And Doreen is an incredible host.", 'name'=>'Sarah M.', 'role'=>'Marketing Director, Kampala', 'initial'=>'S'],
          ['text'=>"I work from cafés all over the city. Nothing comes close to Dee & Bean. The WiFi, the ambience, the coffee — all 10/10. It's become my second office.", 'name'=>'David K.', 'role'=>'Tech Entrepreneur', 'initial'=>'D'],
          ['text'=>"Attended their founder-led brew workshop and left with a completely new appreciation for Ugandan coffee. Doreen's passion is contagious. Absolutely worth it.", 'name'=>'Priya N.', 'role'=>'Coffee Enthusiast', 'initial'=>'P'],
          ['text'=>"The cold brew here is life-changing. I drive across Kampala for it. The entire experience — space, service, flavour — is world-class. So proud this is Ugandan.", 'name'=>'James O.', 'role'=>'Architect', 'initial'=>'J'],
          ['text'=>"Ordered the Coffee Gift Hamper for a client and they were blown away. Premium quality, beautiful presentation. Dee & Bean is our go-to for corporate gifting now.", 'name'=>'Rebecca A.', 'role'=>'Business Owner', 'initial'=>'R'],
          ['text'=>"The Women in Coffee story got me. Every cup I order here supports those farmers. The coffee is excellent but the mission makes it extraordinary.", 'name'=>'Michael T.', 'role'=>'Development Consultant', 'initial'=>'M'],
        ];
        foreach ($testimonials as $t):
        ?>
        <div class="testimonial-card">
          <div class="t-quote-mark">"</div>
          <div class="t-stars">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </div>
          <p class="t-text">"<?= htmlspecialchars($t['text']) ?>"</p>
          <div class="t-author">
            <div class="t-avatar"><?= $t['initial'] ?></div>
            <div>
              <div class="t-author-name"><?= htmlspecialchars($t['name']) ?></div>
              <div class="t-author-role"><?= htmlspecialchars($t['role']) ?></div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    </div>

    <div class="t-controls">
      <button class="t-btn" onclick="tPrev()" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
      <button class="t-btn" onclick="tNext()" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     CTA BAND
══════════════════════════════════════════ -->
<div class="cta-band">
  <div class="cta-band-pattern" aria-hidden="true"></div>
  <div class="container">
    <div class="cta-content reveal">
      <div class="eyebrow" style="justify-content:center;color:var(--gold);">Come Visit Us</div>
      <h2 class="headline light" style="font-size:clamp(2rem,5vw,3.5rem);margin-bottom:18px;">
        Your Perfect Cup <em>Awaits</em>
      </h2>
      <p class="subhead light" style="max-width:560px;margin:0 auto;">
        Two locations in Kampala — Shell Select Kigobe Road (Opp NCHE, Ntinda) &amp;
        Shell Select Bukoto (after Oryx, Opp Kirabo Complex).
        Walk in, order on Glovo, or message us on WhatsApp.
      </p>
      <div class="cta-actions">
        <a href="<?= wa_link("Hi! I'd like to order from Dee & Bean Coffee.") ?>" target="_blank" class="btn btn-gold">
          <i class="fa-brands fa-whatsapp"></i> Order via WhatsApp
        </a>
        <a href="/contact" class="btn btn-outline-light">
          <i class="fa-solid fa-location-dot"></i> Find Us
        </a>
        <a href="/menu" class="btn btn-outline-light">
          <i class="fa-solid fa-mug-hot"></i> Full Menu
        </a>
      </div>
      <div style="margin-top:40px;display:flex;gap:24px;justify-content:center;flex-wrap:wrap;">
        <a href="tel:<?= preg_replace('/[^0-9+]/', '', PHONE_1) ?>" style="display:flex;align-items:center;gap:8px;color:rgba(247,240,227,0.6);font-size:0.85rem;transition:color 0.2s;" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='rgba(247,240,227,0.6)'">
          <i class="fa-solid fa-phone" style="color:var(--gold);"></i> <?= PHONE_1 ?>
        </a>
        <a href="tel:<?= preg_replace('/[^0-9+]/', '', PHONE_2) ?>" style="display:flex;align-items:center;gap:8px;color:rgba(247,240,227,0.6);font-size:0.85rem;transition:color 0.2s;" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='rgba(247,240,227,0.6)'">
          <i class="fa-solid fa-phone" style="color:var(--gold);"></i> <?= PHONE_2 ?>
        </a>
        <span style="display:flex;align-items:center;gap:8px;color:rgba(247,240,227,0.6);font-size:0.85rem;">
          <i class="fa-solid fa-location-dot" style="color:var(--gold);"></i> <?= ADDRESS_SHORT ?>
        </span>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     LOCATIONS
══════════════════════════════════════════ -->
<div class="location-grid">
  <div class="location-info reveal-left">
    <div class="eyebrow no-lines" style="color:var(--gold);">Find Us</div>
    <h3 class="headline light" style="font-size:1.8rem;margin-bottom:24px;">
      Visit <em>Our Cafés</em>
    </h3>

    <!-- Location 1 -->
    <div class="location-branch">
      <div class="location-branch-num">01</div>
      <div>
        <h5 style="color:var(--gold-light);font-family:var(--font-display);font-size:0.95rem;margin-bottom:4px;">Kigobe Road, Ntinda</h5>
        <p style="font-family:var(--font-accent);font-style:italic;color:rgba(247,240,227,0.65);line-height:1.6;font-size:0.88rem;"><?= ADDRESS ?></p>
      </div>
    </div>

    <!-- Location 2 -->
    <div class="location-branch" style="margin-top:18px;">
      <div class="location-branch-num">02</div>
      <div>
        <h5 style="color:var(--gold-light);font-family:var(--font-display);font-size:0.95rem;margin-bottom:4px;">Bukoto</h5>
        <p style="font-family:var(--font-accent);font-style:italic;color:rgba(247,240,227,0.65);line-height:1.6;font-size:0.88rem;"><?= ADDRESS_2 ?></p>
      </div>
    </div>

    <div class="hours-list" style="margin-top:28px;">
      <div class="hours-row today">
        <span class="day">Daily <i class="fa-solid fa-circle" style="color:var(--gold);font-size:0.4rem;vertical-align:middle;"></i></span>
        <span class="time">7:00am – 11:00pm</span>
      </div>
    </div>
    <div style="margin-top:32px;display:flex;gap:12px;flex-wrap:wrap;">
      <a href="https://maps.google.com/?q=Shell+Select+Ntinda+Kigobe+Road+Kampala" target="_blank" class="btn btn-gold" style="padding:12px 22px;font-size:0.68rem;">
        <i class="fa-solid fa-map-location-dot"></i> Ntinda Directions
      </a>
      <a href="https://maps.google.com/?q=Shell+Select+Bukoto+Kampala" target="_blank" class="btn btn-outline-light" style="padding:12px 22px;font-size:0.68rem;">
        <i class="fa-solid fa-map-location-dot"></i> Bukoto Directions
      </a>
    </div>
  </div>
  <div class="location-map-wrap">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7460!2d32.6152!3d0.3486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb0%3A0x0!2sShell+Select+Ntinda+Kigobe+Road+Kampala!5e0!3m2!1sen!2sug!4v1"
      title="Dee and Bean Coffee — Ntinda Location"
      allowfullscreen
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
