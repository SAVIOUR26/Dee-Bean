<?php
require_once 'includes/config.php';
$page_title = 'About Us';
$meta_desc  = 'Dee & Bean Coffee story — Founded by Doreen Ahebwa, empowering Ugandan women farmers. Brewed from the Heart, Rooted in Home.';
include 'includes/header.php';
?>

<div class="page-header">
  <div class="page-header-content">
    <div class="container">
      <nav class="breadcrumb"><a href="/">Home</a> <i class="fa-solid fa-chevron-right"></i> <span>About Us</span></nav>
      <h1 class="headline light">About <em style="color:var(--gold-light);">Dee &amp; Bean</em></h1>
      <p class="subhead light" style="margin-top:12px;">Our profile, our people, our purpose.</p>
    </div>
  </div>
</div>

<!-- STORY -->
<section class="section">
  <div class="container">
    <div class="about-grid">
      <div class="about-media-wrap reveal-left">
        <div class="about-img-main-wrap">
          <img src="<?= img('about') ?>" alt="Dee and Bean Coffee Story" class="about-img-main" loading="lazy">
        </div>
        <div class="about-border-deco"></div>
        <div class="about-tag">
          <div class="about-tag-num">D&amp;B</div>
          <div class="about-tag-label">Ugandan Coffee</div>
        </div>
      </div>
      <div class="about-body reveal-right">
        <div class="eyebrow left-only">The Dee &amp; Bean Story</div>
        <h2 class="headline" style="margin-bottom:18px;">Brewed from the Heart,<br><em>Rooted in Home</em></h2>
        <p class="subhead" style="margin-bottom:22px;">In the lush highlands of Uganda, where mornings are wrapped in mist and hills kiss the sun, a dream took root.</p>
        <p>Two passionate souls came together over a simple cup of coffee. <strong>Dee</strong> — a visionary woman with a love for people and purpose — and <strong>Bean</strong>, the nickname for the very first coffee seedling she planted in her father's backyard.</p>
        <p>What started as a humble experiment in homegrown beans blossomed into a deeper calling: to bring the taste of authentic Ugandan coffee to the world, while empowering the hands that grow it.</p>
        <p><strong>Dee &amp; Bean Coffee is more than just a brand; it is a journey from soil to soul.</strong> We work directly with smallholder farmers — mostly women — to grow and harvest beans that are rich, bold, and full of story. Every bean is nurtured with care, every roast perfected with purpose, and every sip meant to awaken not just your senses, but your spirit.</p>
        <div style="margin-top:32px;display:flex;gap:14px;flex-wrap:wrap;">
          <a href="/story" class="btn btn-primary"><i class="fa-solid fa-users"></i> Meet the Team</a>
          <a href="<?= wa_link() ?>" target="_blank" class="btn btn-outline"><i class="fa-brands fa-whatsapp"></i> Get in Touch</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MISSION & VISION -->
<section class="section bg-forest">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:60px;" class="stagger">
      <div style="border-left:3px solid var(--gold);padding-left:36px;">
        <div class="eyebrow no-lines" style="color:var(--gold);">Our Mission</div>
        <h3 style="font-family:var(--font-display);font-size:1.5rem;color:var(--cream);margin-bottom:16px;font-style:italic;">"<?= MISSION ?>"</h3>
        <p style="font-family:var(--font-accent);font-style:italic;color:rgba(247,240,227,0.6);line-height:1.8;">
          We believe that every cup of coffee can be a force for good — connecting consumers with the farmers who 
          dedicate their lives to the craft, and ensuring those farmers receive the recognition and resources they deserve.
        </p>
      </div>
      <div style="border-left:3px solid rgba(201,146,42,0.4);padding-left:36px;">
        <div class="eyebrow no-lines" style="color:var(--gold);">Our Vision</div>
        <h3 style="font-family:var(--font-display);font-size:1.5rem;color:var(--cream);margin-bottom:16px;font-style:italic;">"<?= VISION ?>"</h3>
        <p style="font-family:var(--font-accent);font-style:italic;color:rgba(247,240,227,0.6);line-height:1.8;">
          A future where Ugandan coffee is celebrated globally for its exceptional quality, and where the communities 
          that produce it thrive with dignity, education, and opportunity.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- IMPACT BAND -->
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
        <div class="impact-num" data-count="2">2</div>
        <div class="impact-label">Processing Facilities</div>
      </div>
      <div class="impact-item">
        <div class="impact-num" data-count="10" data-suffix="%">10%</div>
        <div class="impact-label">Profits to Community</div>
      </div>
    </div>
  </div>
</div>

<!-- COFFEE ORIGINS -->
<section class="section bg-linen">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:56px;">
      <div class="eyebrow">Coffee Origins</div>
      <h2 class="headline">Where Our <em>Beans Come From</em></h2>
      <p class="subhead" style="max-width:540px;margin:0 auto;">Our coffee originates from the fertile soils of Uganda's highlands, where traditional farming meets modern sustainability.</p>
    </div>
    <div class="services-grid stagger">
      <div class="service-card">
        <div class="service-icon-wrap"><i class="fa-solid fa-mountain"></i></div>
        <h4>Arabica Beans</h4>
        <p>Grown at high altitudes for a bright, fruity profile with floral notes and wine-like acidity. The delicate side of Uganda.</p>
      </div>
      <div class="service-card">
        <div class="service-icon-wrap"><i class="fa-solid fa-fire-flame-curved"></i></div>
        <h4>Robusta Beans</h4>
        <p>Bold, earthy, intense. Perfect for espresso blends. Uganda's Robusta is among the finest in the world — rich, full-bodied, and powerful.</p>
      </div>
      <div class="service-card">
        <div class="service-icon-wrap"><i class="fa-solid fa-leaf"></i></div>
        <h4>Sustainable Sourcing</h4>
        <p>Direct partnerships with local cooperatives ensure fair trade, environmental stewardship, and premium prices for farmers.</p>
      </div>
      <div class="service-card">
        <div class="service-icon-wrap"><i class="fa-solid fa-magnifying-glass"></i></div>
        <h4>Full Traceability</h4>
        <p>We trace every bean from seed to cup. Complete transparency in every step — farming, processing, roasting, and delivery.</p>
      </div>
    </div>
  </div>
</section>

<!-- PARTNERS -->
<section class="section">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:48px;">
      <div class="eyebrow">Our Partners</div>
      <h2 class="headline">Who We Work <em>With</em></h2>
      <p class="subhead" style="max-width:580px;margin:0 auto;">
        We collaborate with like-minded organizations who share our values of quality, sustainability, and community.
      </p>
    </div>
    <div class="pillars-grid stagger" style="grid-template-columns:repeat(auto-fit,minmax(260px,1fr));">
      <div class="pillar" style="background:var(--ivory);border:1px solid var(--border);">
        <div class="pillar-icon" style="background:var(--parchment);color:var(--forest);border-color:var(--border);"><i class="fa-solid fa-award"></i></div>
        <h4 style="color:var(--forest-deep);">Uganda Coffee Development Authority</h4>
        <p style="color:rgba(42,42,42,0.6);">Industry standards, farmer support, and market development for Uganda's coffee sector.</p>
      </div>
      <div class="pillar" style="background:var(--ivory);border:1px solid var(--border);">
        <div class="pillar-icon" style="background:var(--parchment);color:var(--forest);border-color:var(--border);"><i class="fa-solid fa-earth-africa"></i></div>
        <h4 style="color:var(--forest-deep);">Fair Trade International</h4>
        <p style="color:rgba(42,42,42,0.6);">Certification, advocacy, and global standards ensuring our farmers receive fair compensation.</p>
      </div>
      <div class="pillar" style="background:var(--ivory);border:1px solid var(--border);">
        <div class="pillar-icon" style="background:var(--parchment);color:var(--forest);border-color:var(--border);"><i class="fa-solid fa-mug-hot"></i></div>
        <h4 style="color:var(--forest-deep);">Gorilla Highlands Coffee</h4>
        <p style="color:rgba(42,42,42,0.6);">Award-winning partner from Southwestern Uganda. Ethical farming and environmental stewardship at its finest.</p>
      </div>
      <div class="pillar" style="background:var(--ivory);border:1px solid var(--border);">
        <div class="pillar-icon" style="background:var(--parchment);color:var(--forest);border-color:var(--border);"><i class="fa-solid fa-seedling"></i></div>
        <h4 style="color:var(--forest-deep);">Sera Wild Coffee</h4>
        <p style="color:rgba(42,42,42,0.6);">Wild-harvested Ugandan coffee with exceptional biodiversity and commitment to forest preservation.</p>
      </div>
      <div class="pillar" style="background:var(--ivory);border:1px solid var(--border);">
        <div class="pillar-icon" style="background:var(--parchment);color:var(--forest);border-color:var(--border);"><i class="fa-solid fa-handshake"></i></div>
        <h4 style="color:var(--forest-deep);">CURAD</h4>
        <p style="color:rgba(42,42,42,0.6);">Supporting enterprise development and private sector growth across Uganda's agri-business landscape.</p>
      </div>
      <div class="pillar" style="background:var(--ivory);border:1px solid var(--border);">
        <div class="pillar-icon" style="background:var(--parchment);color:var(--forest);border-color:var(--border);"><i class="fa-solid fa-mug-saucer"></i></div>
        <h4 style="color:var(--forest-deep);">KIMCO Coffee</h4>
        <p style="color:rgba(42,42,42,0.6);">A trusted coffee partner sharing our commitment to quality Ugandan beans and community-centred trade.</p>
      </div>
      <div class="pillar" style="background:var(--ivory);border:1px solid var(--border);">
        <div class="pillar-icon" style="background:var(--parchment);color:var(--forest);border-color:var(--border);"><i class="fa-solid fa-leaf"></i></div>
        <h4 style="color:var(--forest-deep);">Hinga Coffee</h4>
        <p style="color:rgba(42,42,42,0.6);">Dedicated to sustainable farming and exceptional Ugandan specialty coffee from highland cooperatives.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<div class="cta-band">
  <div class="cta-band-pattern" aria-hidden="true"></div>
  <div class="container">
    <div class="cta-content reveal">
      <div class="eyebrow" style="justify-content:center;color:var(--gold);">Partner With Us</div>
      <h2 class="headline light" style="margin-bottom:18px;">Let's Brew <em>Together</em></h2>
      <p class="subhead light" style="margin:0 auto 40px;">Wholesale partnerships, collaborations, workshops, or just a conversation — we're always open to building connections over coffee.</p>
      <div class="cta-actions">
        <a href="/contact" class="btn btn-gold"><i class="fa-solid fa-envelope"></i> Get in Touch</a>
        <a href="<?= wa_link("Hi! I'm interested in partnering with Dee & Bean Coffee.") ?>" target="_blank" class="btn btn-outline-light"><i class="fa-brands fa-whatsapp"></i> WhatsApp Us</a>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
