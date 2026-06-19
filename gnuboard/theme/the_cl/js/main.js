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
      document.body.classList.toggle('nav-open', isOpen);
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
      document.body.classList.remove('nav-open');
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

  // --- Quick Menu Toggle ---
  const quickToggle = document.querySelector('#quickToggle');
  const quickMenuWrap = document.querySelector('#quickMenu');
  if (quickToggle && quickMenuWrap) {
    quickToggle.addEventListener('click', () => {
      quickMenuWrap.classList.toggle('is-closed');
    });
  }

  // --- Scroll to Top (데스크톱 플로팅 + 모바일 하단 바) ---
  const scrollToTop = () => {
    if (lenis) {
      lenis.scrollTo(0);
    } else {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  };
  document.querySelectorAll('.quick-btn.top-btn, #mobileTopBtn').forEach((btn) => {
    btn.addEventListener('click', scrollToTop);
  });

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

  /* ============================================================
     MAIN POPUP
     - 드래그 이동 / 자동 슬라이드 / 이전·다음 / 오늘 하루 그만보기
     ============================================================ */
  (function initPopup() {
    const popup = document.getElementById('themePopup');
    if (!popup) return; // 메인 페이지에만 존재

    const popupKey = 'thecl_popup_hide_' + (popup.dataset.popupKey || 'default');

    // '오늘 하루 그만보기'가 유효하면 노출하지 않음
    try {
      const until = parseInt(localStorage.getItem(popupKey) || '0', 10);
      if (until && Date.now() < until) {
        popup.remove();
        return;
      }
    } catch (e) { /* localStorage 비활성 환경 무시 */ }

    const slides = Array.prototype.slice.call(popup.querySelectorAll('.popup-slide'));
    const counterEl = popup.querySelector('.popup-cur');
    const total = slides.length;
    let current = 0;
    let autoTimer = null;
    const AUTO_MS = 5000;

    const goTo = (idx) => {
      current = (idx + total) % total;
      slides.forEach((el, i) => el.classList.toggle('is-active', i === current));
      if (counterEl) counterEl.textContent = String(current + 1);
    };

    const next = () => goTo(current + 1);
    const prev = () => goTo(current - 1);

    // --- 자동 슬라이드 ---
    const startAuto = () => {
      if (total < 2) return;
      stopAuto();
      autoTimer = setInterval(next, AUTO_MS);
    };
    const stopAuto = () => {
      if (autoTimer) { clearInterval(autoTimer); autoTimer = null; }
    };
    // 사용자 조작 시 타이머 리셋
    const restartAuto = () => { startAuto(); };

    const prevBtn = popup.querySelector('.popup-prev');
    const nextBtn = popup.querySelector('.popup-next');
    if (prevBtn) prevBtn.addEventListener('click', () => { prev(); restartAuto(); });
    if (nextBtn) nextBtn.addEventListener('click', () => { next(); restartAuto(); });

    // 마우스 올리면 일시정지
    popup.addEventListener('mouseenter', stopAuto);
    popup.addEventListener('mouseleave', startAuto);

    // --- 드래그 이동 (이미지 스테이지를 핸들로 사용) ---
    const handle = document.getElementById('popupHandle');
    let dragging = false;
    let startX = 0, startY = 0;
    let baseX = 0, baseY = 0; // 드래그 시작 시점의 오프셋(px)
    let offX = 0, offY = 0;   // 현재 오프셋(px)
    let moved = false;

    const applyOffset = () => {
      popup.style.setProperty('--px', offX + 'px');
      popup.style.setProperty('--py', offY + 'px');
    };

    // 팝업이 화면 밖으로 나가지 않도록 오프셋 범위 제한
    const clamp = () => {
      const margin = 12;
      const maxX = Math.max(0, (window.innerWidth - popup.offsetWidth) / 2 - margin);
      const maxY = Math.max(0, (window.innerHeight - popup.offsetHeight) / 2 - margin);
      offX = Math.max(-maxX, Math.min(maxX, offX));
      offY = Math.max(-maxY, Math.min(maxY, offY));
    };

    if (handle) {
      handle.addEventListener('pointerdown', (e) => {
        // 닫기 버튼 위에서는 드래그 시작하지 않음
        if (e.target.closest('.popup-close')) return;
        dragging = true;
        moved = false;
        startX = e.clientX;
        startY = e.clientY;
        baseX = offX;
        baseY = offY;
        popup.classList.add('is-dragging');
        stopAuto();
        if (handle.setPointerCapture) {
          try { handle.setPointerCapture(e.pointerId); } catch (err) {}
        }
      });

      handle.addEventListener('pointermove', (e) => {
        if (!dragging) return;
        const dx = e.clientX - startX;
        const dy = e.clientY - startY;
        if (Math.abs(dx) > 3 || Math.abs(dy) > 3) moved = true;
        offX = baseX + dx;
        offY = baseY + dy;
        clamp();
        applyOffset();
      });

      const endDrag = (e) => {
        if (!dragging) return;
        dragging = false;
        popup.classList.remove('is-dragging');
        if (handle.releasePointerCapture && e) {
          try { handle.releasePointerCapture(e.pointerId); } catch (err) {}
        }
        startAuto();
      };
      handle.addEventListener('pointerup', endDrag);
      handle.addEventListener('pointercancel', endDrag);
      // 드래그 후 헤더 내 의도치 않은 클릭 방지
      handle.addEventListener('click', (e) => {
        if (moved) { e.preventDefault(); e.stopPropagation(); moved = false; }
      }, true);
    }

    // 창 크기 변경 시 위치 보정
    window.addEventListener('resize', () => {
      clamp();
      applyOffset();
    }, { passive: true });

    // --- 닫기 / 오늘 하루 그만보기 ---
    const hideTodayBtn = document.getElementById('popupHideToday');

    const closePopup = (savePreference = false) => {
      stopAuto();
      if (savePreference) {
        try {
          const endOfDay = new Date();
          endOfDay.setHours(23, 59, 59, 999);
          localStorage.setItem(popupKey, String(endOfDay.getTime()));
        } catch (e) { /* 무시 */ }
      }
      popup.remove();
    };

    const closeX = document.getElementById('popupCloseX');
    if (closeX) closeX.addEventListener('click', () => closePopup(false));
    if (hideTodayBtn) hideTodayBtn.addEventListener('click', () => closePopup(true));

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && document.body.contains(popup)) closePopup(false);
    });

    // --- 표시 시작 ---
    popup.hidden = false;
    // 등장 애니메이션이 끝나면 애니메이션을 해제한다.
    // (드래그 종료 시 is-dragging 클래스가 제거되며 animation 속성이 다시
    //  적용되어 popup-in 이 재생되는 깜빡임 현상을 방지)
    popup.addEventListener('animationend', () => {
      popup.style.animation = 'none';
      popup.style.opacity = '1';
    }, { once: true });
    goTo(0);
    startAuto();
  })();
})();
