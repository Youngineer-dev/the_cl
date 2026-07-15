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

  /* 히어로 패럴랙스(JS)는 제거됨
     — CSS heroZoom 애니메이션이 transform 을 덮어써 시각 효과가 없었고,
     스크롤마다 offsetHeight 를 읽어 강제 레이아웃(재계산)만 유발해
     PC 스크롤 버벅임의 원인이 되었음 */

  // --- Event Listeners ---
  window.addEventListener('scroll', handleScroll, { passive: true });

  window.addEventListener('resize', () => {
    // 뷰포트 변경 시 필요한 로직 (현재는 옵저버가 자동 처리)
  }, { passive: true });

  // Initial call
  window.addEventListener('DOMContentLoaded', () => {
    handleScroll();
    initReveal();
  });

  /* ============================================================
     BREADCRUMB DROPDOWN
     - 카테고리 클릭 → 전체 카테고리 팝업
     - 현재 페이지 클릭 → 해당 카테고리 내 메뉴 팝업
     ============================================================ */
  (function initBreadcrumbDropdown() {
    const bc = document.querySelector('.breadcrumb');
    if (!bc) return;

    // 브레드크럼은 /sub/ 안의 페이지에만 존재하므로 상대 경로로 링크
    // ※ 상단 GNB 메뉴(header.html.php) + 하단 Policy 링크(footer.html.php)와
    //    동일한 구조를 유지할 것 — 메뉴 변경 시 여기도 함께 수정
    const CATEGORIES = [
      { label: 'About', href: 'sub1_1.php' },
      { label: 'Clinic', href: 'sub2_1.php' },
      { label: 'Community', href: 'sub4_2.php' },
      { label: 'Policy', href: 'privacy.php' }
    ];
    const PAGES = {
      about: [
        { label: '병원 소개', href: 'sub1_1.php' },
        { label: '의료진 소개', href: 'sub1_3.php' },
        { label: '진료 시간', href: 'sub3_1.php' },
        { label: '둘러보기', href: 'sub1_4.php' },
        { label: '오시는 길', href: 'sub1_5.php' }
      ],
      clinic: [
        { label: '성장평가 · 예상키', href: 'sub2_1.php' },
        { label: '저신장', href: 'sub2_2.php' },
        { label: '성조숙증', href: 'sub2_3.php' },
        { label: '소아비만', href: 'sub2_4.php' },
        { label: '저체중', href: 'sub2_5.php' },
        { label: '알레르기', href: 'sub2_6.php' }
      ],
      community: [
        { label: '자주묻는 질문', href: 'sub4_2.php' },
        { label: '공지사항', href: 'sub4_3.php' }
      ],
      policy: [
        { label: '개인정보처리방침', href: 'privacy.php' },
        { label: '이용약관', href: 'terms.php' },
        { label: '비급여항목', href: 'uninsured.php' }
      ]
    };

    const items = Array.prototype.filter.call(
      bc.children,
      (li) => !li.classList.contains('separator')
    );
    if (items.length < 3) return;

    const catLi = items[1];
    const curLi = items[items.length - 1];
    const catKey = (catLi.textContent || '').trim().toLowerCase();
    const curFile = (location.pathname.split('/').pop() || '').toLowerCase();

    const closeAll = () => {
      document.querySelectorAll('.bc-dropdown.open').forEach((d) => d.classList.remove('open'));
      document.querySelectorAll('.bc-trigger.open').forEach((t) => {
        t.classList.remove('open');
        t.setAttribute('aria-expanded', 'false');
      });
    };

    const attach = (li, list, isActive) => {
      if (!list || !list.length) return;
      li.classList.add('bc-trigger');
      li.setAttribute('tabindex', '0');
      li.setAttribute('role', 'button');
      li.setAttribute('aria-haspopup', 'true');
      li.setAttribute('aria-expanded', 'false');

      const caret = document.createElement('span');
      caret.className = 'bc-caret';
      caret.textContent = '▾';
      li.appendChild(caret);

      const drop = document.createElement('ul');
      drop.className = 'bc-dropdown';
      list.forEach((item) => {
        const a = document.createElement('a');
        a.href = item.href;
        a.textContent = item.label;
        if (isActive(item)) a.classList.add('active');
        const w = document.createElement('li');
        w.appendChild(a);
        drop.appendChild(w);
      });
      li.appendChild(drop);

      const toggle = () => {
        const wasOpen = drop.classList.contains('open');
        closeAll();
        if (!wasOpen) {
          drop.classList.add('open');
          li.classList.add('open');
          li.setAttribute('aria-expanded', 'true');
        }
      };
      li.addEventListener('click', (e) => {
        if (e.target.closest('.bc-dropdown')) return; // 팝업 내 링크는 그대로 이동
        e.preventDefault();
        toggle();
      });
      li.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          toggle();
        }
      });
    };

    // 카테고리 → 전체 카테고리 목록
    attach(catLi, CATEGORIES, (it) => it.label.toLowerCase() === catKey);
    // 현재 페이지 → 현재 카테고리 내 메뉴 목록
    if (curLi !== catLi) {
      attach(curLi, PAGES[catKey] || [], (it) => it.href.toLowerCase() === curFile);
    }

    document.addEventListener('click', (e) => {
      if (!e.target.closest('.bc-trigger')) closeAll();
    });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeAll();
    });
  })();

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

    // (드래그 기능 제거 완료 - 네이버/카카오 예약 및 공지 이동 링크 네이티브 작동 보장)

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

// 네이버 지도 길찾기 PC/모바일 분기 처리 함수
function goToNaverMap(e) {
  if (e) e.preventDefault();
  
  var pcUrl = "https://map.naver.com/p/entry/place/2041623550?placePath=%252Fhome%253Fentry%253Dplt&searchType=place&lng=127.1068893&lat=37.5161072&c=15.00,0,0,0,dh";
  var mobileWebUrl = "https://m.map.naver.com/menu/route.nhn?dlat=37.5161072&dlng=127.1068893&dname=%EC%82%BC%EC%84%B1%EB%8D%94%ED%81%B4%EC%84%B1%EC%9E%A5%EC%9D%98%EC%9B%90&pathType=0";
  var appUrl = "nmap://route/public?dlat=37.5161072&dlng=127.1068893&dname=%EC%82%BC%EC%84%B1%EB%8D%94%ED%81%B4%EC%84%B1%EC%9E%A5%EC%9D%98%EC%9B%90&appname=com.thecl";
  
  var isMobile = /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);
  
  if (isMobile) {
    var clickedAt = +new Date();
    window.location.href = appUrl;
    setTimeout(function() {
      if (+new Date() - clickedAt < 2000) {
        window.location.href = mobileWebUrl;
      }
    }, 1500);
  } else {
    window.open(pcUrl, '_blank');
  }
}

// 카카오맵 길찾기 PC/모바일 분기 처리 함수 (place.map.kakao.com/155695442)
function goToKakaoMap(e) {
  if (e) e.preventDefault();

  var webUrl = "https://map.kakao.com/link/to/155695442";
  var appUrl = "kakaomap://route?ep=37.5161072,127.1068893&by=CAR";

  var isMobile = /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);

  if (isMobile) {
    var clickedAt = +new Date();
    window.location.href = appUrl;
    setTimeout(function() {
      if (+new Date() - clickedAt < 2000) {
        window.location.href = webUrl;
      }
    }, 1500);
  } else {
    window.open(webUrl, '_blank');
  }
}
