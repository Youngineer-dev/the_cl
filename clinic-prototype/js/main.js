/* ============================================================
   Samsung The CL Growth Clinic - Main JavaScript
   Scroll Reveal, Mobile Menu, Header Scroll, Quick Menu
   ============================================================ */

(function () {
  'use strict';

  // --- Smooth Scroll (Lenis) ---
  let lenis;
  if (typeof Lenis !== 'undefined') {
    lenis = new Lenis({
      lerp: 0.15,          // 스크롤 반응 속도 증가 (기본 0.1, 높을수록 빠르고 기민함)
      wheelMultiplier: 1.2, // 마우스 휠 1틱당 이동 거리 20% 증가
      duration: 0.8,        // 앵커 이동 등 부가 애니메이션 시간 단축
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);
  }

  // --- Scroll Reveal (Intersection Observer) ---
  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target); // 한 번 나타나면 다시 숨기지 않음
      }
    });
  }, {
    root: null,
    rootMargin: '0px 0px -15% 0px', // 화면 하단에서 15% 진입 시 트리거
    threshold: 0
  });

  const initReveal = () => {
    const elements = document.querySelectorAll('.reveal');
    elements.forEach(el => {
      revealObserver.observe(el);
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
    // (IntersectionObserver가 처리하므로 여기서는 호출하지 않음)
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
      if (lenis) {
        lenis.scrollTo(0);
      } else {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }
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

        if (lenis) {
          lenis.scrollTo(targetPos);
        } else {
          window.scrollTo({
            top: targetPos,
            behavior: 'smooth',
          });
        }
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

  window.addEventListener('resize', () => {
    // 뷰포트 변경 시 필요한 로직 (현재는 옵저버가 자동 처리)
  }, { passive: true });

  // Initial call
  window.addEventListener('DOMContentLoaded', () => {
    handleScroll();
    initReveal();
  });
})();
