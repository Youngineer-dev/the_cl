<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// $G5_URL이 정의되어 있지 않거나 테마 경로가 아닌 경우 바인딩
if (!isset($G5_URL)) {
    $G5_URL = G5_THEME_URL;
}
?>
  <!-- 전역 롤링 슬로건 마퀴 트랙 -->
  <div class="loop-text-section" style="padding: 24px 0; border-top: 1px solid var(--c-border); border-bottom: 1px solid var(--c-border); background: var(--c-primary-pale); margin-bottom: 0;">
    <div class="loop-text-track">
      <p class="loop-text" style="font-size: 24px; opacity: 0.65; color: var(--c-primary);">Grow Together <span class="sep">✦</span> Grow Healthy <span class="sep">✦</span> Samsung The CL <span class="sep">✦</span></p>
      <p class="loop-text" style="font-size: 24px; opacity: 0.65; color: var(--c-primary);">Grow Together <span class="sep">✦</span> Grow Healthy <span class="sep">✦</span> Samsung The CL <span class="sep">✦</span></p>
      <p class="loop-text" style="font-size: 24px; opacity: 0.65; color: var(--c-primary);">Grow Together <span class="sep">✦</span> Grow Healthy <span class="sep">✦</span> Samsung The CL <span class="sep">✦</span></p>
      <p class="loop-text" style="font-size: 24px; opacity: 0.65; color: var(--c-primary);">Grow Together <span class="sep">✦</span> Grow Healthy <span class="sep">✦</span> Samsung The CL <span class="sep">✦</span></p>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-links" style="margin-bottom: 24px; display: flex; flex-wrap: wrap; gap: 14px; font-size: 14px; font-weight: 500; letter-spacing: -0.3px;">
        <a href="<?php echo $G5_URL; ?>/sub/privacy.php" style="color: var(--c-primary-dark); text-decoration: none; font-weight: 600;">개인정보처리방침</a>
        <span style="color: var(--c-border); opacity: 0.6;">|</span>
        <a href="<?php echo $G5_URL; ?>/sub/terms.php" style="color: var(--c-text-light); text-decoration: none;">이용약관</a>
        <span style="color: var(--c-border); opacity: 0.6;">|</span>
        <a href="<?php echo $G5_URL; ?>/sub/uninsured.php" style="color: var(--c-text-light); text-decoration: none;">비급여항목</a>
      </div>
      <div class="footer-inner">
        <div class="footer-info">
          <span>삼성더클성장의원</span><br>
          <span>사업자번호 : 418-90-74970</span><span class="finfo-sep"> &nbsp;|&nbsp; </span><span>대표 노유선</span><br>
          <span>서울특별시 송파구 올림픽로 329, 3층 329, 330, 331호</span><span class="finfo-sep"> &nbsp;|&nbsp; </span><span>TEL 02-421-7757</span><br>
          <span style="margin-top: 4px; display: inline-block;">COPYRIGHT © 2025 삼성더클성장의원. ALL RIGHTS RESERVED<a href="<?php echo G5_BBS_URL; ?>/login.php" style="color: inherit; text-decoration: none; cursor: default;">.</a></span>
        </div>
      </div>
    </div>
  </footer>

  <style>
  /* 네이버 블로그 퀵메뉴 호버 스타일 */
  .quick-btn.blog:hover {
    background: #03c75a !important;
    color: #ffffff !important;
    border-color: #03c75a !important;
  }
  .quick-btn.blog:hover .q-icon {
    fill: #ffffff !important;
  }
  </style>

  <div class="quick-menu" id="quickMenu">
    <div class="quick-items" id="quickItems">
      <button class="quick-btn kakao" title="카톡상담">
        <svg class="q-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3c-4.97 0-9 3.185-9 7.11 0 2.52 1.658 4.735 4.148 5.922-.26 1.004-.945 3.636-1.082 4.18-.173.694.256.685.538.497.222-.147 3.522-2.392 4.933-3.353.473.074.96.114 1.463.114 4.97 0 9-3.185 9-7.11S16.97 3 12 3z"/></svg>
      </button>
      <button class="quick-btn naver" title="네이버예약" onclick="window.open('#', '_blank')">
        <svg class="q-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M16.273 12.845 7.376 0H0v24h7.726V11.155L16.624 24H24V0h-7.727z"/></svg>
      </button>
      <button class="quick-btn blog" title="네이버블로그" onclick="window.open('https://blog.naver.com/', '_blank')">
        <svg class="q-icon" viewBox="0 0 24 24" fill="currentColor">
          <path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4l4 4 4-4h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7.6 11.5H9.6v-2h2.8c.8 0 1.4-.4 1.4-1.1s-.6-1-1.4-1H9.6V6.6h3.1c1.8 0 3.2.7 3.2 2.4 0 1-.6 1.7-1.5 2.1.9.3 1.5 1 1.5 2.1 0 1.7-1.4 2.3-3.5 2.3z"/>
        </svg>
      </button>
      <button class="quick-btn phone" title="전화문의" onclick="location.href='tel:02-421-7757'">
        <svg class="q-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      </button>
      <button class="quick-btn map" title="오시는 길" onclick="location.href='<?php echo $G5_URL; ?>/sub/sub1_5.php'">
        <svg class="q-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
      </button>
      <button class="quick-btn top-btn" title="맨 위로">
        <svg class="q-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg>
      </button>
    </div>
    <button class="quick-toggle-btn" id="quickToggle" title="퀵메뉴 접기/펼치기">
      <svg class="q-icon toggle-plus" style="pointer-events: none;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
    </button>
  </div>

  <!-- 모바일 하단 퀵 메뉴 (모바일에서만 노출) -->
  <nav class="mobile-quick-bar" id="mobileQuickBar" aria-label="빠른 메뉴">
    <a class="mqb-item" href="#" target="_blank" rel="noopener">
      <span class="mqb-ico mqb-ico-kakao">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 3c-4.97 0-9 3.185-9 7.11 0 2.52 1.658 4.735 4.148 5.922-.26 1.004-.945 3.636-1.082 4.18-.173.694.256.685.538.497.222-.147 3.522-2.392 4.933-3.353.473.074.96.114 1.463.114 4.97 0 9-3.185 9-7.11S16.97 3 12 3z"/></svg>
      </span>
      <span class="mqb-label">카카오톡</span>
    </a>
    <a class="mqb-item" href="#" target="_blank" rel="noopener">
      <span class="mqb-ico mqb-ico-naver">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16.273 12.845 7.376 0H0v24h7.726V11.155L16.624 24H24V0h-7.727z"/></svg>
      </span>
      <span class="mqb-label">네이버예약</span>
    </a>
    <a class="mqb-item" href="tel:02-421-7757">
      <span class="mqb-ico mqb-ico-tel">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      </span>
      <span class="mqb-label">전화상담</span>
    </a>
    <a class="mqb-item" href="<?php echo $G5_URL; ?>/sub/sub1_5.php">
      <span class="mqb-ico mqb-ico-map">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
      </span>
      <span class="mqb-label">오시는길</span>
    </a>
    <button type="button" class="mqb-item mqb-top" id="mobileTopBtn">
      <span class="mqb-ico">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg>
      </span>
      <span class="mqb-label">TOP</span>
    </button>
  </nav>

  <!-- JavaScript -->
  <script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script>
  <script src="<?php echo $G5_URL; ?>/js/main.js?v=14"></script>
