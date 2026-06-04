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
  const navContent = navOverlay ? navOverlay.querySelector('.nav-content') : null;

  if (hamburger && navOverlay) {
    /* ----------------------------------------------------------
       메뉴 내부 부드러운 스크롤
       - 네이티브 스크롤바 없이 휠 / 드래그(마우스·터치)로 이동
       - lerp 보간으로 "스르륵" 미끄러지듯 움직임
       ---------------------------------------------------------- */
    let navTarget = 0;   // 목표 위치
    let navCurrent = 0;  // 현재 위치(보간값)
    let navMax = 0;      // 최대 스크롤 범위
    let navRAF = null;
    let isDragging = false;
    let dragStartY = 0;
    let dragStartTarget = 0;
    let pointerMoved = false;

    const calcNavMax = () => {
      if (!navContent) return;
      navMax = Math.max(0, navContent.offsetHeight - navOverlay.clientHeight);
      navTarget = Math.min(navTarget, navMax);
      navCurrent = Math.min(navCurrent, navMax);
      applyNav();
    };

    const applyNav = () => {
      if (navContent) {
        navContent.style.transform = `translate3d(0, ${-navCurrent}px, 0)`;
      }
    };

    const navLoop = () => {
      navCurrent += (navTarget - navCurrent) * 0.15; // lerp
      if (Math.abs(navTarget - navCurrent) < 0.1) {
        navCurrent = navTarget;
        applyNav();
        navRAF = null;
        return;
      }
      applyNav();
      navRAF = requestAnimationFrame(navLoop);
    };

    const startNavLoop = () => {
      if (navRAF === null) navRAF = requestAnimationFrame(navLoop);
    };

    const setNavTarget = (value) => {
      navTarget = Math.max(0, Math.min(value, navMax));
      startNavLoop();
    };

    // 휠 스크롤
    navOverlay.addEventListener(
      'wheel',
      (e) => {
        if (!navOverlay.classList.contains('open')) return;
        e.preventDefault();
        e.stopPropagation(); // 페이지(Lenis) 스크롤로 전파 방지
        setNavTarget(navTarget + e.deltaY);
      },
      { passive: false }
    );

    // 드래그 스크롤 (마우스 + 터치 통합 — Pointer Events)
    navOverlay.addEventListener('pointerdown', (e) => {
      if (!navOverlay.classList.contains('open')) return;
      isDragging = true;
      pointerMoved = false;
      dragStartY = e.clientY;
      dragStartTarget = navTarget;
    });

    window.addEventListener('pointermove', (e) => {
      if (!isDragging) return;
      const delta = e.clientY - dragStartY;
      if (Math.abs(delta) > 4) pointerMoved = true;
      setNavTarget(dragStartTarget - delta);
    });

    const endDrag = () => { isDragging = false; };
    window.addEventListener('pointerup', endDrag);
    window.addEventListener('pointercancel', endDrag);

    // 드래그 직후 의도치 않은 링크 클릭 방지 (탭은 정상 동작)
    navOverlay.addEventListener(
      'click',
      (e) => {
        if (pointerMoved) {
          e.preventDefault();
          e.stopPropagation();
          pointerMoved = false;
        }
      },
      true
    );

    // 열려 있을 때 뷰포트 변화 시 범위 재계산
    window.addEventListener('resize', () => {
      if (navOverlay.classList.contains('open')) calcNavMax();
    }, { passive: true });

    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      const isOpen = navOverlay.classList.toggle('open');
      document.body.style.overflow = isOpen ? 'hidden' : '';
      if (isOpen) {
        navTarget = navCurrent = 0;
        applyNav();
        // 표시 직후 레이아웃이 반영된 상태에서 범위 계산
        requestAnimationFrame(calcNavMax);
      }
    });

    const closeNav = () => {
      hamburger.classList.remove('active');
      navOverlay.classList.remove('open');
      document.body.style.overflow = '';
      isDragging = false;
    };

    // Close nav on link click
    const navLinks = navOverlay.querySelectorAll('a');
    navLinks.forEach((link) => {
      link.addEventListener('click', closeNav);
    });

    // Close on ESC key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navOverlay.classList.contains('open')) {
        closeNav();
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
