<?php
require_once 'includes/config.php';
$page_title = 'Gallery';
$meta_desc  = 'Photos from Dee & Bean Coffee — real moments from our café, our farms, and our community in Kampala, Uganda.';
include 'includes/header.php';
?>

<div class="page-header">
  <div class="page-header-content">
    <div class="container">
      <nav class="breadcrumb"><a href="/">Home</a> <i class="fa-solid fa-chevron-right"></i> <span>Gallery</span></nav>
      <h1 class="headline light">Life at <em style="color:var(--gold-light);">Dee &amp; Bean</em></h1>
      <p class="subhead light" style="margin-top:12px;">Real moments. Real coffee. Real community.</p>
    </div>
  </div>
</div>

<section class="section">
  <div class="container">
    <div class="text-center reveal" style="margin-bottom:48px;">
      <div class="eyebrow">Our Gallery</div>
      <h2 class="headline">Behind Every <em>Great Cup</em></h2>
      <p class="subhead" style="max-width:540px;margin:0 auto;">
        From highland farms to your cup — glimpses of the passion, craft, and community at the heart of Dee &amp; Bean Coffee.
      </p>
    </div>

    <?php
    $gallery_images = [
      ['key'=>'hero',     'cap'=>'The Perfect Brew',          'tag'=>'Café'],
      ['key'=>'hero2',    'cap'=>'Highland Selections',       'tag'=>'Blends'],
      ['key'=>'about',    'cap'=>'From Farm to Cup',          'tag'=>'Origins'],
      ['key'=>'about2',   'cap'=>'The Brewing Craft',         'tag'=>'Craft'],
      ['key'=>'cafe',     'cap'=>'Our Kampala Café',          'tag'=>'Space'],
      ['key'=>'gallery1', 'cap'=>'Morning at Dee & Bean',     'tag'=>'Morning'],
      ['key'=>'gallery2', 'cap'=>'Premium Selection',         'tag'=>'Blends'],
      ['key'=>'gallery3', 'cap'=>'Community & Connection',    'tag'=>'Community'],
      ['key'=>'gallery4', 'cap'=>'Cold Brews',                'tag'=>'Cold Coffee'],
      ['key'=>'gallery5', 'cap'=>'Artisan Details',           'tag'=>'Craft'],
      ['key'=>'gallery6', 'cap'=>'The Dee & Bean Experience', 'tag'=>'Experience'],
      ['key'=>'gallery7', 'cap'=>'Fresh Daily Roasts',        'tag'=>'Roasting'],
      ['key'=>'gallery8', 'cap'=>'Highland Arabica',          'tag'=>'Origins'],
      ['key'=>'gallery9', 'cap'=>'Specialty Creations',       'tag'=>'Menu'],
      ['key'=>'gallery10','cap'=>'Pastry &amp; Pairings',     'tag'=>'Food'],
      ['key'=>'gallery11','cap'=>'Café Ambience',             'tag'=>'Space'],
      ['key'=>'gallery12','cap'=>'Every Sip Counts',          'tag'=>'Community'],
      ['key'=>'gallery13','cap'=>'The Golden Hour',           'tag'=>'Moments'],
      ['key'=>'gallery14','cap'=>'Kampala Roastery',          'tag'=>'Roasting'],
      ['key'=>'gallery15','cap'=>'Brewed with Purpose',       'tag'=>'Craft'],
      ['key'=>'gallery16','cap'=>'Our Ugandan Story',         'tag'=>'Story'],
      ['key'=>'gallery17','cap'=>'Rooted in Home',            'tag'=>'Origins'],
      ['key'=>'brand',    'cap'=>'The Dee &amp; Bean Brand',  'tag'=>'Brand'],
    ];
    ?>

    <!-- Full Masonry Gallery -->
    <div style="
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
    " class="stagger" id="galleryGrid">
      <?php foreach ($gallery_images as $i => $g): ?>
      <div style="
        overflow:hidden;
        position:relative;
        cursor:pointer;
        background:var(--parchment);
        aspect-ratio: <?= $i % 7 === 0 ? '1/1.4' : ($i % 5 === 0 ? '1.4/1' : '1/1') ?>;
        grid-column: <?= $i % 9 === 0 ? 'span 2' : 'span 1' ?>;
      " onclick="openLightbox('<?= img($g['key']) ?>', '<?= addslashes($g['cap']) ?>')">
        <img src="<?= img($g['key']) ?>"
             alt="<?= htmlspecialchars($g['cap']) ?>"
             loading="lazy"
             style="width:100%;height:100%;object-fit:cover;transition:transform 0.7s cubic-bezier(0.22,1,0.36,1);"
             onerror="this.parentElement.style.display='none';"
             onmouseover="this.style.transform='scale(1.07)'"
             onmouseout="this.style.transform='scale(1)'">
        <div style="
          position:absolute;inset:0;
          background:linear-gradient(to top, rgba(15,34,25,0.75), transparent 55%);
          opacity:0;
          transition:opacity 0.35s;
          display:flex;align-items:flex-end;padding:18px;
          flex-direction:column;justify-content:space-between;
        " class="gallery-cap-overlay">
          <span style="
            background:var(--gold);
            color:var(--forest-deep);
            font-family:var(--font-body);
            font-size:0.6rem;
            font-weight:700;
            letter-spacing:0.15em;
            text-transform:uppercase;
            padding:4px 10px;
            align-self:flex-end;
          "><?= htmlspecialchars($g['tag']) ?></span>
          <span style="
            font-family:var(--font-body);
            font-size:0.72rem;
            font-weight:600;
            letter-spacing:0.12em;
            text-transform:uppercase;
            color:var(--gold-light);
          "><?= $g['cap'] ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- LIGHTBOX -->
<div id="lightbox" style="
  display:none;
  position:fixed;inset:0;
  background:rgba(0,0,0,0.93);
  z-index:9500;
  align-items:center;
  justify-content:center;
  flex-direction:column;
  gap:16px;
" onclick="closeLightbox()">
  <button onclick="closeLightbox()" style="
    position:absolute;top:24px;right:24px;
    color:rgba(255,255,255,0.7);
    font-size:1.6rem;
    background:none;border:none;cursor:pointer;
  "><i class="fa-solid fa-xmark"></i></button>
  <img id="lightboxImg" src="" alt="" style="
    max-width:90vw;max-height:85vh;
    object-fit:contain;
    display:block;
  ">
  <div id="lightboxCap" style="
    font-family:var(--font-accent);
    font-style:italic;
    color:rgba(255,255,255,0.6);
    font-size:0.9rem;
    text-align:center;
  "></div>
</div>

<script>
// Hover overlays
document.querySelectorAll('.gallery-cap-overlay').forEach(el => {
  el.parentElement.addEventListener('mouseenter', () => el.style.opacity = '1');
  el.parentElement.addEventListener('mouseleave', () => el.style.opacity = '0');
});
function openLightbox(src, cap) {
  document.getElementById('lightboxImg').src = src;
  document.getElementById('lightboxCap').textContent = cap;
  document.getElementById('lightbox').style.display = 'flex';
  document.body.style.overflow = 'hidden';
}
function closeLightbox() {
  document.getElementById('lightbox').style.display = 'none';
  document.body.style.overflow = '';
}
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLightbox(); });
</script>

<!-- CTA -->
<div class="cta-band" style="padding:72px 0;">
  <div class="cta-band-pattern" aria-hidden="true"></div>
  <div class="container">
    <div class="cta-content reveal">
      <div class="eyebrow" style="justify-content:center;color:var(--gold);">Follow Along</div>
      <h2 class="headline light" style="font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:16px;">Share Your Dee &amp; Bean <em>Moment</em></h2>
      <p class="subhead light" style="margin:0 auto 32px;">Tag us <strong style="color:var(--gold-light);">@deebeancoffee</strong> on Instagram and TikTok — we'd love to feature you.</p>
      <div class="cta-actions">
        <a href="<?= INSTAGRAM ?>" target="_blank" class="btn btn-gold"><i class="fa-brands fa-instagram"></i> Instagram</a>
        <a href="<?= TIKTOK ?>" target="_blank" class="btn btn-outline-light"><i class="fa-brands fa-tiktok"></i> TikTok</a>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
