<?php // includes/footer.php ?>

<!-- ══════════════════════════════════
     FOOTER
══════════════════════════════════ -->
<footer class="footer">
  <div class="footer-body">
    <div class="container">
      <div class="footer-grid">

        <!-- Brand Column -->
        <div>
          <div class="footer-logo-text">Dee <span class="amp">&</span> Bean</div>
          <div class="footer-logo-sub">Coffee &nbsp;·&nbsp; Kampala, Uganda</div>
          <p class="footer-brand-desc">
            "Brewed from the Heart, Rooted in Home." Every cup tells the story of Uganda's highlands — 
            the women who grow it, the hands that roast it, and the soul we pour into it.
          </p>
          <div class="footer-social" style="display:flex;gap:10px;">
            <a href="<?= INSTAGRAM ?>" target="_blank" rel="noopener" class="social-btn" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="<?= TIKTOK ?>" target="_blank" rel="noopener" class="social-btn" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
            <a href="<?= TWITTER ?>" target="_blank" rel="noopener" class="social-btn" aria-label="X / Twitter"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="<?= FACEBOOK ?>" target="_blank" rel="noopener" class="social-btn" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="<?= wa_link() ?>" target="_blank" rel="noopener" class="social-btn" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
          </div>
        </div>

        <!-- Quick Links -->
        <div>
          <h5>Quick Links</h5>
          <div class="footer-links">
            <a href="/" class="footer-link"><i class="fa-solid fa-chevron-right"></i> Home</a>
            <a href="/menu.php" class="footer-link"><i class="fa-solid fa-chevron-right"></i> Our Menu</a>
            <a href="/about.php" class="footer-link"><i class="fa-solid fa-chevron-right"></i> About Us</a>
            <a href="/story.php" class="footer-link"><i class="fa-solid fa-chevron-right"></i> Our Story</a>
            <a href="/gallery.php" class="footer-link"><i class="fa-solid fa-chevron-right"></i> Gallery</a>
            <a href="/contact.php" class="footer-link"><i class="fa-solid fa-chevron-right"></i> Contact</a>
          </div>
        </div>

        <!-- Opening Hours -->
        <div>
          <h5>Opening Hours</h5>
          <div class="footer-hours">
            <div class="footer-hour">
              <span class="d">Mon – Fri</span>
              <span class="t">7:00am – 9:00pm</span>
            </div>
            <div class="footer-hour">
              <span class="d">Saturday</span>
              <span class="t">8:00am – 10:00pm</span>
            </div>
            <div class="footer-hour">
              <span class="d">Sunday</span>
              <span class="t">9:00am – 8:00pm</span>
            </div>
            <div class="footer-hour" style="margin-top:10px;padding-top:10px;border-top:1px solid rgba(201,146,42,0.12);">
              <span class="d">Public Holidays</span>
              <span class="t" style="color:var(--gold);">10:00am – 6:00pm</span>
            </div>
          </div>
          <div style="margin-top:20px;">
            <a href="tel:<?= preg_replace('/[^0-9+]/', '', PHONE_1) ?>" class="footer-link" style="margin-bottom:8px;display:flex;">
              <i class="fa-solid fa-phone" style="color:var(--gold);width:16px;flex-shrink:0;"></i>
              <span style="margin-left:10px;color:rgba(247,240,227,0.6);"><?= PHONE_1 ?></span>
            </a>
            <a href="tel:<?= preg_replace('/[^0-9+]/', '', PHONE_2) ?>" class="footer-link" style="margin-bottom:8px;display:flex;">
              <i class="fa-solid fa-phone" style="color:var(--gold);width:16px;flex-shrink:0;"></i>
              <span style="margin-left:10px;color:rgba(247,240,227,0.6);"><?= PHONE_2 ?></span>
            </a>
          </div>
        </div>

        <!-- Newsletter -->
        <div>
          <h5>Stay Connected</h5>
          <p style="font-size:0.875rem;color:rgba(247,240,227,0.45);line-height:1.65;margin-bottom:16px;">
            Subscribe for news on seasonal blends, events &amp; exclusive offers from our highland farms.
          </p>
          <form class="newsletter-row" onsubmit="subscribeNewsletter(event)">
            <input type="email" class="newsletter-input" placeholder="Your email" required aria-label="Email for newsletter">
            <button type="submit" class="newsletter-btn" aria-label="Subscribe">
              <i class="fa-solid fa-paper-plane"></i>
            </button>
          </form>
          <div style="margin-top:20px;display:flex;align-items:center;gap:8px;">
            <i class="fa-solid fa-location-dot" style="color:var(--gold);font-size:0.8rem;"></i>
            <span style="font-size:0.8rem;color:rgba(247,240,227,0.4);"><?= ADDRESS_SHORT ?></span>
          </div>
          <div style="margin-top:8px;display:flex;align-items:center;gap:8px;">
            <i class="fa-regular fa-envelope" style="color:var(--gold);font-size:0.8rem;"></i>
            <a href="mailto:<?= SITE_EMAIL ?>" style="font-size:0.8rem;color:rgba(247,240,227,0.4);"><?= SITE_EMAIL ?></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <div class="container">
      <div class="footer-bottom-inner">
        <span>&copy; <?= date('Y') ?> <?= SITE_NAME ?>. All rights reserved. Crafted with <i class="fa-solid fa-heart" style="color:var(--gold);"></i> for Uganda.</span>
        <div class="footer-bottom-links">
          <a href="/privacy.php">Privacy</a>
          <a href="/terms.php">Terms</a>
          <a href="<?= wa_link() ?>" target="_blank">WhatsApp Us</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="/assets/js/main.js"></script>
<?php if (isset($extra_js)) echo $extra_js; ?>
</body>
</html>
