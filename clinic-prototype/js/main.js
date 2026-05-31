/* ============================================================
   GreenKids Clinic - Main JavaScript
   Scroll Reveal, Mobile Menu, Header Scroll, Quick Menu
   ============================================================ */

(function () {
  'use strict';

  // --- Scroll Reveal ---
  const revealElements = () => {
    const elements = document.querySelectorAll('.reveal:not(.revealed)');
    const windowH = window.innerHeight;

    elements.forEach((el) => {
      const rect = el.getBoundingClientRect();
      const triggerPoint = windowH * 0.88;

      if (rect.top < triggerPoint) {
        el.classList.add('revealed');
      }
    });
  };

  // --- Header Scroll Effect ---
  const header = document.querySelector('.site-header');
  const quickMenu = document.querySelector('.quick-menu');

  const handleScroll = () => {
    const scrollY = window.scrollY;

    // Header background on scroll
    if (scrollY > 60) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }

    // Quick menu visibility
    if (quickMenu) {
      if (scrollY > 400) {
        quickMenu.classList.add('visible');
      } else {
        quickMenu.classList.remove('visible');
      }
    }

    // Reveal animations
    revealElements();
  };

  // --- Hamburger Menu ---
  const hamburger = document.querySelector('.hamburger');
  const navOverlay = document.querySelector('.nav-overlay');

  if (hamburger && navOverlay) {
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      navOverlay.classList.toggle('open');
      document.body.style.overflow = navOverlay.classList.contains('open')
        ? 'hidden'
        : '';
    });

    // Close nav on link click
    const navLinks = navOverlay.querySelectorAll('a');
    navLinks.forEach((link) => {
      link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navOverlay.classList.remove('open');
        document.body.style.overflow = '';
      });
    });

    // Close on ESC key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navOverlay.classList.contains('open')) {
        hamburger.classList.remove('active');
        navOverlay.classList.remove('open');
        document.body.style.overflow = '';
      }
    });
  }

  // --- Scroll to Top ---
  const topBtn = document.querySelector('.quick-btn.top-btn');
  if (topBtn) {
    topBtn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // --- Smooth Scroll for anchor links ---
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;

      const target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        const headerH = header ? header.offsetHeight : 0;
        const targetPos = target.offsetTop - headerH;

        window.scrollTo({
          top: targetPos,
          behavior: 'smooth',
        });
      }
    });
  });

  // --- Parallax effect on hero ---
  const heroBg = document.querySelector('.hero-bg');
  const heroParallax = () => {
    if (!heroBg) return;
    const scrollY = window.scrollY;
    const heroH = document.querySelector('.hero')?.offsetHeight || 600;

    if (scrollY < heroH) {
      heroBg.style.transform = `scale(${1.05 + scrollY * 0.0002}) translateY(${scrollY * 0.3}px)`;
    }
  };

  // --- Event Listeners ---
  window.addEventListener('scroll', () => {
    handleScroll();
    heroParallax();
  }, { passive: true });

  window.addEventListener('resize', revealElements, { passive: true });

  // Initial call
  window.addEventListener('DOMContentLoaded', () => {
    handleScroll();
    revealElements();
  });

  // Reveal elements already in view on load
  window.addEventListener('load', revealElements);
})();
