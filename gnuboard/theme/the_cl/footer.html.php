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
      <div class="footer-inner">
        <div class="footer-info">
          <span>삼성더클성장의원</span><br>
          <span>사업자번호 : 418-90-74970</span> &nbsp;|&nbsp; <span>대표 노유선</span><br>
          <span>서울특별시 송파구 올림픽로 329, 3층 329, 330, 331호</span> &nbsp;|&nbsp; <span>TEL 02-1234-5678</span><br>
          <span style="margin-top: 4px; display: inline-block;">COPYRIGHT © 2025 삼성더클성장의원. ALL RIGHTS RESERVED.</span>
        </div>
      </div>
    </div>
  </footer>

  <div class="quick-menu" id="quickMenu">
    <div class="quick-items" id="quickItems">
      <button class="quick-btn phone" title="전화문의" onclick="location.href='tel:02-1234-5678'">
        <svg class="q-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      </button>
      <button class="quick-btn kakao" title="카톡상담">
        <svg class="q-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3c-4.97 0-9 3.185-9 7.11 0 2.52 1.658 4.735 4.148 5.922-.26 1.004-.945 3.636-1.082 4.18-.173.694.256.685.538.497.222-.147 3.522-2.392 4.933-3.353.473.074.96.114 1.463.114 4.97 0 9-3.185 9-7.11S16.97 3 12 3z"/></svg>
      </button>
      <button class="quick-btn top-btn" title="맨 위로">
        <svg class="q-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg>
      </button>
    </div>
    <button class="quick-toggle-btn" id="quickToggle" title="퀵메뉴 접기/펼치기">
      <svg class="q-icon toggle-plus" style="pointer-events: none;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
    </button>
  </div>

  <!-- JavaScript -->
  <script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script>
  <script src="<?php echo $G5_URL; ?>/js/main.js?v=3"></script>
