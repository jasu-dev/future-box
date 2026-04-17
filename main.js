// ============================================================
// FUTUREBOX WEBSITE – main.js
// ============================================================

/* ── Navbar scroll effect ── */
const navbar = document.getElementById('navbar');
const scrollTopBtn = document.getElementById('scrollTopBtn');

window.addEventListener('scroll', () => {
  const scrollY = window.scrollY;

  // Navbar
  if (scrollY > 60) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }

  // Scroll-to-top button
  if (scrollY > 400) {
    scrollTopBtn.classList.add('visible');
  } else {
    scrollTopBtn.classList.remove('visible');
  }

  // Update active nav link
  updateActiveNav();
});

/* ── Hamburger menu ── */
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('open');
  navLinks.classList.toggle('open');
});

// Close on nav link click
document.querySelectorAll('.nav-link').forEach(link => {
  link.addEventListener('click', () => {
    hamburger.classList.remove('open');
    navLinks.classList.remove('open');
  });
});

/* ── Active nav on scroll ── */
function updateActiveNav() {
  const sections = document.querySelectorAll('section[id]');
  const navLinksList = document.querySelectorAll('.nav-link');
  const scrollPos = window.scrollY + 120;

  sections.forEach(section => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.offsetHeight;
    const sectionId = section.getAttribute('id');

    if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
      navLinksList.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${sectionId}`) {
          link.classList.add('active');
        }
      });
    }
  });
}

/* ── Intersection Observer – fade-in animations ── */
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.05, rootMargin: '0px 0px -40px 0px' });

// Observe all .fade-in elements already in the HTML (inner pages)
function observeAllFadeIns() {
  document.querySelectorAll('.fade-in').forEach((el, i) => {
    el.style.transitionDelay = `${(i % 6) * 0.07}s`;
    observer.observe(el);
  });

  // Immediately make elements already in viewport visible (no scroll needed)
  requestAnimationFrame(() => {
    document.querySelectorAll('.fade-in').forEach(el => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        el.classList.add('visible');
        el.style.transitionDelay = '0s';
      }
    });
  });
}

// Apply fade-in to dynamically chosen elements (homepage sections)
function applyFadeIn() {
  const targets = [
    ...document.querySelectorAll('.product-card'),
    ...document.querySelectorAll('.client-card'),
    ...document.querySelectorAll('.why-card'),
    ...document.querySelectorAll('.contact-card'),
    ...document.querySelectorAll('.mission-card'),
    ...document.querySelectorAll('.vision-card'),
    ...document.querySelectorAll('.highlight-item'),
    ...document.querySelectorAll('.about-desc'),
    ...document.querySelectorAll('.section-header'),
    ...document.querySelectorAll('.feature-card'),
    ...document.querySelectorAll('.step-card'),
    ...document.querySelectorAll('.service-overview-card'),
    ...document.querySelectorAll('.value-card'),
    ...document.querySelectorAll('.stat-band-item'),
  ];

  targets.forEach((el, i) => {
    if (!el.classList.contains('fade-in')) {
      el.classList.add('fade-in');
    }
    el.style.transitionDelay = `${(i % 8) * 0.06}s`;
    observer.observe(el);
  });
}


/* ── Contact form submit ── */
function handleFormSubmit(e) {
  e.preventDefault();
  const btn = document.getElementById('form-submit-btn');
  const successEl = document.getElementById('formSuccess');

  btn.textContent = 'Sending...';
  btn.disabled = true;
  btn.style.opacity = '0.7';

  setTimeout(() => {
    document.getElementById('contactForm').reset();
    btn.textContent = 'Send Message';
    btn.disabled = false;
    btn.style.opacity = '1';
    successEl.style.display = 'block';
    setTimeout(() => { successEl.style.display = 'none'; }, 5000);
  }, 1200);
}

/* ── Hero particles / subtle animated dots ── */
function createParticles() {
  const hero = document.querySelector('.hero');
  if (!hero) return;

  for (let i = 0; i < 20; i++) {
    const dot = document.createElement('div');
    dot.style.cssText = `
      position:absolute;
      width:${Math.random() * 4 + 2}px;
      height:${Math.random() * 4 + 2}px;
      background:rgba(94,200,200,${Math.random() * 0.4 + 0.1});
      border-radius:50%;
      top:${Math.random() * 100}%;
      left:${Math.random() * 100}%;
      animation: particleFloat ${Math.random() * 6 + 4}s ease-in-out ${Math.random() * -8}s infinite;
      pointer-events:none;
      z-index:1;
    `;
    hero.appendChild(dot);
  }

  const style = document.createElement('style');
  style.textContent = `
    @keyframes particleFloat {
      0%, 100% { transform: translateY(0px) translateX(0px); opacity: 0.6; }
      25% { transform: translateY(-20px) translateX(10px); opacity: 1; }
      75% { transform: translateY(15px) translateX(-8px); opacity: 0.4; }
    }
  `;
  document.head.appendChild(style);
}

/* ── Smooth number counter for hero stats ── */
function animateCounter(el, target, duration = 1500) {
  const start = 0;
  const startTime = performance.now();
  const suffix = el.textContent.replace(/[0-9]/g, '');

  function update(currentTime) {
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 3);
    const value = Math.round(start + (target - start) * eased);
    el.textContent = value + suffix;
    if (progress < 1) requestAnimationFrame(update);
  }
  requestAnimationFrame(update);
}

function initCounters() {
  const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const statNumbers = entry.target.querySelectorAll('.stat-number');
        statNumbers.forEach(el => {
          const text = el.textContent;
          const num = parseInt(text);
          if (!isNaN(num)) animateCounter(el, num, 1800);
        });
        statsObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  const statsBar = document.querySelector('.hero-stats');
  if (statsBar) statsObserver.observe(statsBar);
}

/* ── Nav logo switch on scroll (show text logo when scrolled) ── */
function initLogoUpdate() {
  const logoImg = document.getElementById('nav-logo-img');
  if (!logoImg) return;
  // Keep consistent logo but adjust sizing for compact navbar
  window.addEventListener('scroll', () => {
    if (window.scrollY > 60) {
      logoImg.style.height = '40px';
    } else {
      logoImg.style.height = '48px';
    }
  });
}

/* ── Initialize ── */
document.addEventListener('DOMContentLoaded', () => {
  observeAllFadeIns(); // observe all static .fade-in in HTML (inner pages)
  applyFadeIn();       // also add fade-in to dynamic homepage elements
  createParticles();
  initCounters();
  initLogoUpdate();
  updateActiveNav();
});
