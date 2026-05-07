<?php
require_once 'includes/config.php';
$page_title = 'Our Story';
$meta_desc  = 'Meet Doreen Ahebwa — the founder behind Dee & Bean Coffee. The story of a woman, a seedling, and a vision to share Uganda\'s soul with the world.';
include 'includes/header.php';
?>
<div class="page-header">
  <div class="page-header-content">
    <div class="container">
      <nav class="breadcrumb"><a href="/">Home</a> <i class="fa-solid fa-chevron-right"></i> <a href="/about.php">About</a> <i class="fa-solid fa-chevron-right"></i> <span>Our Story</span></nav>
      <h1 class="headline light">The <em style="color:var(--gold-light);">Dee & Bean</em> Story</h1>
    </div>
  </div>
</div>
<section class="section">
  <div class="container" style="max-width:900px;">
    <div class="text-center reveal" style="margin-bottom:48px;">
      <div class="eyebrow">Founder</div>
      <h2 class="headline"><em>Doreen Ahebwa</em></h2>
      <p style="font-family:var(--font-body);font-size:0.72rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase;color:var(--gold);margin-top:8px;">Proprietor & Founder</p>
    </div>
    <div class="reveal" style="text-align:center;margin-bottom:48px;">
      <div style="width:160px;height:160px;border-radius:50%;background:linear-gradient(135deg,var(--forest),var(--forest-mid));margin:0 auto;display:flex;align-items:center;justify-content:center;font-family:var(--font-display);font-size:3.5rem;font-weight:700;color:var(--gold-light);border:4px solid var(--gold);">DA</div>
    </div>
    <div class="reveal">
      <blockquote style="font-family:var(--font-display);font-size:clamp(1.3rem,3vw,1.8rem);font-style:italic;color:var(--forest-deep);border-left:4px solid var(--gold);padding:20px 32px;margin-bottom:40px;line-height:1.45;">
        "In the lush highlands of Uganda, where the sun kisses the hills and the mornings are wrapped in mist, two passionate souls came together over a simple cup of coffee."
      </blockquote>
      <p style="font-family:var(--font-accent);font-size:1.05rem;line-height:1.85;color:rgba(42,42,42,0.8);margin-bottom:22px;">
        Dee — a visionary woman with a love for people and purpose — and Bean, the nickname for the very first coffee seedling she planted in her father's backyard. What started as a humble experiment in homegrown beans blossomed into a deeper calling: to bring the taste of authentic Ugandan coffee to the world, while empowering the hands that grow it.
      </p>
      <p style="font-family:var(--font-accent);font-size:1.05rem;line-height:1.85;color:rgba(42,42,42,0.8);margin-bottom:22px;">
        Dee &amp; Bean Coffee is more than just a brand; it is a journey from <strong>soil to soul</strong>. We work directly with smallholder farmers — mostly women — to grow and harvest beans that are rich, bold, and full of story. Every bean is nurtured with care, every roast perfected with purpose, and every sip meant to awaken not just your senses, but your spirit.
      </p>
    </div>
    <div class="ornament"></div>
    <div class="services-grid stagger" style="margin-top:48px;">
      <div class="service-card"><div class="service-icon-wrap"><i class="fa-solid fa-seedling"></i></div><h4>Women in Coffee Program</h4><p>Training and microfinance for female farmers across Uganda's highlands. Empowerment through coffee.</p></div>
      <div class="service-card"><div class="service-icon-wrap"><i class="fa-solid fa-graduation-cap"></i></div><h4>Youth Apprenticeship</h4><p>Skill-building for the next generation of coffee experts — roasters, baristas, and agri-entrepreneurs.</p></div>
      <div class="service-card"><div class="service-icon-wrap"><i class="fa-solid fa-tree"></i></div><h4>Reforestation Efforts</h4><p>Planting 10,000 trees to combat climate change and protect biodiversity in Uganda's coffee-growing regions.</p></div>
      <div class="service-card"><div class="service-icon-wrap"><i class="fa-solid fa-hand-holding-heart"></i></div><h4>Community Reinvestment</h4><p>10% of our profits fund local education and health programs in the communities that grow our beans.</p></div>
    </div>
  </div>
</section>
<div class="cta-band" style="padding:72px 0;">
  <div class="cta-band-pattern" aria-hidden="true"></div>
  <div class="container">
    <div class="cta-content reveal">
      <div class="eyebrow" style="justify-content:center;color:var(--gold);">Be Part of the Story</div>
      <h2 class="headline light" style="margin-bottom:18px;">Your Cup <em>Changes Lives</em></h2>
      <p class="subhead light" style="margin:0 auto 32px;">Every sip at Dee &amp; Bean directly supports women farmers, young apprentices, and highland communities across Uganda.</p>
      <div class="cta-actions">
        <a href="/menu.php" class="btn btn-gold"><i class="fa-solid fa-mug-hot"></i> Order Your Cup</a>
        <a href="/contact.php" class="btn btn-outline-light"><i class="fa-solid fa-envelope"></i> Get Involved</a>
      </div>
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
