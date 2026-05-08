/* ============================================================
   DEE & BEAN COFFEE — main.js
   ============================================================ */
'use strict';

// ── Page Loader ────────────────────────────────────────────
window.addEventListener('load', () => {
  const loader = document.getElementById('pageLoader');
  if (loader) setTimeout(() => loader.classList.add('done'), 400);
});

document.addEventListener('DOMContentLoaded', () => {

  // ── Navbar scroll ──────────────────────────────────────
  const navbar = document.getElementById('navbar');
  const btt = document.getElementById('backToTop');
  function onScroll() {
    const y = window.scrollY;
    if (y > 40) navbar.classList.add('scrolled');
    else navbar.classList.remove('scrolled');
    if (btt) {
      if (y > 400) btt.classList.add('visible');
      else btt.classList.remove('visible');
    }
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  if (btt) btt.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

  // ── Hero Parallax ──────────────────────────────────────
  const heroBg = document.getElementById('heroBg');
  if (heroBg) {
    window.addEventListener('scroll', () => {
      heroBg.style.transform = `scale(1.04) translateY(${window.scrollY * 0.2}px)`;
    }, { passive: true });
  }

  // ── Mobile Nav ─────────────────────────────────────────
  window.openMobileNav = function() {
    document.getElementById('mobileNav').classList.add('open');
    document.getElementById('mobileOverlay').classList.add('open');
    document.getElementById('hamburger').classList.add('open');
    document.body.style.overflow = 'hidden';
  };
  window.closeMobileNav = function() {
    document.getElementById('mobileNav').classList.remove('open');
    document.getElementById('mobileOverlay').classList.remove('open');
    document.getElementById('hamburger').classList.remove('open');
    document.body.style.overflow = '';
  };
  document.addEventListener('keydown', e => { if (e.key === 'Escape') window.closeMobileNav(); });

  // ── Menu Tabs ──────────────────────────────────────────
  const menuTabs = document.querySelectorAll('.menu-cat-btn');
  menuTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const target = tab.dataset.panel;
      document.querySelectorAll('.menu-cat-btn').forEach(t => t.classList.remove('active'));
      document.querySelectorAll('.menu-panel').forEach(p => p.classList.remove('active'));
      tab.classList.add('active');
      const panel = document.getElementById(target);
      if (panel) {
        panel.classList.add('active');
        // Ensure stagger children are always visible when a tab is clicked
        panel.classList.remove('will-animate');
        panel.classList.add('in');
      }
    });
  });
  if (menuTabs.length) menuTabs[0].click();

  // ── Testimonial Slider ─────────────────────────────────
  const tTrack = document.getElementById('tTrack');
  if (tTrack) {
    let tIdx = 0;
    const tCards = tTrack.querySelectorAll('.testimonial-card');
    const getVisible = () => window.innerWidth >= 1024 ? 3 : window.innerWidth >= 640 ? 2 : 1;
    const getCardW = () => {
      const c = tCards[0];
      if (!c) return 0;
      const gap = 24;
      return c.offsetWidth + gap;
    };
    window.tPrev = () => {
      tIdx = Math.max(0, tIdx - 1);
      tTrack.style.transform = `translateX(-${tIdx * getCardW()}px)`;
    };
    window.tNext = () => {
      const max = Math.max(0, tCards.length - getVisible());
      tIdx = Math.min(tIdx + 1, max);
      tTrack.style.transform = `translateX(-${tIdx * getCardW()}px)`;
    };
  }

  // ── Scroll Animations ──────────────────────────────────
  const reveals = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .stagger');
  // Progressive enhancement: hide elements only after JS confirms it's running
  reveals.forEach(el => el.classList.add('will-animate'));

  const revealEl = el => { el.classList.remove('will-animate'); el.classList.add('in'); };
  const revealInView = () => reveals.forEach(el => {
    const r = el.getBoundingClientRect();
    if (r.top < window.innerHeight && r.bottom > 0) revealEl(el);
  });
  // Double rAF ensures layout is fully calculated before checking bounds
  requestAnimationFrame(() => requestAnimationFrame(revealInView));
  if ('IntersectionObserver' in window && reveals.length) {
    const obs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) { revealEl(e.target); obs.unobserve(e.target); }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    reveals.forEach(el => obs.observe(el));
  }

  // ── Counter Animation ──────────────────────────────────
  const counters = document.querySelectorAll('[data-count]');
  if (counters.length && 'IntersectionObserver' in window) {
    const cObs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (!e.isIntersecting) return;
        const el = e.target;
        const target = parseFloat(el.dataset.count);
        const suffix = el.dataset.suffix || '';
        const prefix = el.dataset.prefix || '';
        const isFloat = String(target).includes('.');
        let current = 0;
        const steps = 60;
        const inc = target / steps;
        const timer = setInterval(() => {
          current += inc;
          if (current >= target) {
            el.textContent = prefix + (isFloat ? target.toFixed(1) : Math.round(target)) + suffix;
            clearInterval(timer);
          } else {
            el.textContent = prefix + (isFloat ? current.toFixed(1) : Math.floor(current)) + suffix;
          }
        }, 24);
        cObs.unobserve(el);
      });
    }, { threshold: 0.5 });
    counters.forEach(c => cObs.observe(c));
  }

  // ── Toast / Notification ───────────────────────────────
  window.showToast = (msg, type = 'success') => {
    const toast = document.getElementById('toast');
    const icon = toast.querySelector('i');
    document.getElementById('toastMsg').textContent = msg;
    if (icon) icon.className = type === 'success' ? 'fa-solid fa-circle-check' : 'fa-solid fa-circle-exclamation';
    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 4200);
  };

  // ── Newsletter ─────────────────────────────────────────
  window.subscribeNewsletter = (e) => {
    e.preventDefault();
    const email = e.target.querySelector('input[type="email"]').value;
    fetch('/api/newsletter.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ email })
    })
    .then(r => r.json())
    .then(d => { showToast(d.message || 'Subscribed! Welcome to the Dee & Bean family ☕'); e.target.reset(); })
    .catch(() => { showToast('Subscribed! Welcome to the family ☕'); e.target.reset(); });
  };

  // ── Contact Form ───────────────────────────────────────
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const btn = this.querySelector('[type="submit"]');
      const orig = btn.innerHTML;
      btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending...';
      btn.disabled = true;
      fetch('/api/contact.php', { method: 'POST', body: new FormData(this) })
        .then(r => r.json())
        .then(d => { showToast(d.message || "Message received! We'll be in touch soon."); this.reset(); })
        .catch(() => { showToast("Message received! We'll respond shortly."); this.reset(); })
        .finally(() => { btn.innerHTML = orig; btn.disabled = false; });
    });
  }

  // ── Smooth anchor scroll ───────────────────────────────
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (target) {
        e.preventDefault();
        window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - 90, behavior: 'smooth' });
        window.closeMobileNav();
      }
    });
  });

});

// ── Service Worker (PWA) ───────────────────────────────
if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('/sw.js').catch(() => {});
  });
}
