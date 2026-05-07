<?php
require_once 'includes/config.php';
$page_title = 'Contact Us';
$meta_desc  = 'Get in touch with Dee & Bean Coffee. Visit us at Ntinda, Kigobe Road, Kampala or reach us on WhatsApp, phone, or email.';
include 'includes/header.php';
?>

<div class="page-header">
  <div class="page-header-content">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <i class="fa-solid fa-chevron-right"></i>
        <span>Contact</span>
      </nav>
      <h1 class="headline light" style="font-size:clamp(2.5rem,6vw,4rem);">
        Get in <em style="color:var(--gold-light);">Touch</em>
      </h1>
      <p class="subhead light" style="margin-top:12px;">We'd love to hear from you. Come visit, call, or send a message.</p>
    </div>
  </div>
</div>

<!-- Contact Form + Info -->
<div class="contact-layout">

  <!-- Info Panel -->
  <div class="contact-info-panel">
    <div class="eyebrow no-lines" style="color:var(--gold);">Contact Details</div>
    <h2 class="headline light" style="font-size:1.8rem;margin-bottom:28px;">Find <em>Our Café</em></h2>

    <div>
      <div class="contact-info-item">
        <div class="contact-info-icon"><i class="fa-solid fa-location-dot"></i></div>
        <div>
          <div class="contact-info-label">Address</div>
          <div class="contact-info-value"><?= ADDRESS ?></div>
        </div>
      </div>
      <div class="contact-info-item">
        <div class="contact-info-icon"><i class="fa-solid fa-phone"></i></div>
        <div>
          <div class="contact-info-label">Phone</div>
          <div class="contact-info-value">
            <a href="tel:<?= preg_replace('/[^0-9+]/', '', PHONE_1) ?>"><?= PHONE_1 ?></a><br>
            <a href="tel:<?= preg_replace('/[^0-9+]/', '', PHONE_2) ?>"><?= PHONE_2 ?></a>
          </div>
        </div>
      </div>
      <div class="contact-info-item">
        <div class="contact-info-icon"><i class="fa-regular fa-envelope"></i></div>
        <div>
          <div class="contact-info-label">Email</div>
          <div class="contact-info-value">
            <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>
          </div>
        </div>
      </div>
      <div class="contact-info-item">
        <div class="contact-info-icon"><i class="fa-brands fa-whatsapp"></i></div>
        <div>
          <div class="contact-info-label">WhatsApp Orders</div>
          <div class="contact-info-value">
            <a href="<?= wa_link() ?>" target="_blank">Chat with us now &rarr;</a>
          </div>
        </div>
      </div>
      <div class="contact-info-item">
        <div class="contact-info-icon"><i class="fa-solid fa-clock"></i></div>
        <div>
          <div class="contact-info-label">Opening Hours</div>
          <div class="contact-info-value">
            Mon–Fri: 7:00am – 9:00pm<br>
            Saturday: 8:00am – 10:00pm<br>
            Sunday: 9:00am – 8:00pm
          </div>
        </div>
      </div>
    </div>

    <div class="contact-socials">
      <a href="<?= INSTAGRAM ?>" target="_blank" rel="noopener" class="social-btn" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
      <a href="<?= TIKTOK ?>" target="_blank" rel="noopener" class="social-btn" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
      <a href="<?= TWITTER ?>" target="_blank" rel="noopener" class="social-btn" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
      <a href="<?= FACEBOOK ?>" target="_blank" rel="noopener" class="social-btn" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="<?= wa_link() ?>" target="_blank" rel="noopener" class="social-btn" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
  </div>

  <!-- Form Panel -->
  <div class="contact-form-panel">
    <div class="eyebrow left-only">Send a Message</div>
    <h2 class="headline" style="font-size:1.8rem;margin-bottom:28px;">We'd Love to <em>Hear from You</em></h2>

    <form id="contactForm" novalidate>
      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="name">Full Name <span style="color:red;">*</span></label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Your full name" required>
        </div>
        <div class="form-group">
          <label class="form-label" for="email">Email Address <span style="color:red;">*</span></label>
          <input type="email" id="email" name="email" class="form-control" placeholder="you@example.com" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" class="form-control" placeholder="+256...">
        </div>
        <div class="form-group">
          <label class="form-label" for="subject">Subject</label>
          <select id="subject" name="subject" class="form-control">
            <option value="">Select a topic</option>
            <option value="order">Place an Order</option>
            <option value="wholesale">Wholesale Inquiry</option>
            <option value="workshop">Book a Workshop</option>
            <option value="partnership">Partnership / Collaboration</option>
            <option value="feedback">Feedback</option>
            <option value="other">Other</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="form-label" for="message">Message <span style="color:red;">*</span></label>
        <textarea id="message" name="message" class="form-control" placeholder="Tell us how we can help you..." required></textarea>
      </div>
      <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:16px;">
        <i class="fa-solid fa-paper-plane"></i> Send Message
      </button>
    </form>
  </div>
</div>

<!-- Map -->
<div class="location-map-wrap">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7460!2d32.6152!3d0.3486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb0%3A0x0!2sShell+Select+Ntinda+Kigobe+Road+Kampala!5e0!3m2!1sen!2sug!4v1"
    title="Dee and Bean Coffee on the map"
    allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"
    style="height:420px;">
  </iframe>
</div>

<?php include 'includes/footer.php'; ?>
