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
          <span>사업자번호 : 123-45-67890</span> &nbsp;|&nbsp; <span>대표 노유선</span><br>
          <span>서울시 강남구 테헤란로 123, 4층</span> &nbsp;|&nbsp; <span>TEL 02-1234-5678</span><br>
          <span style="margin-top: 4px; display: inline-block;">COPYRIGHT © 2025 삼성더클성장의원. ALL RIGHTS RESERVED.</span>
        </div>
      </div>
    </div>
  </footer>

  <div class="quick-menu" id="quickMenu">
    <button class="quick-btn phone" title="전화문의" onclick="location.href='tel:02-1234-5678'">📞</button>
    <button class="quick-btn kakao" title="카톡상담">💬</button>
    <button class="quick-btn naver" title="네이버예약">📋</button>
    <button class="quick-btn top-btn" title="맨 위로">↑</button>
  </div>

  <!-- JavaScript -->
  <script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script>
  <script src="<?php echo $G5_URL; ?>/js/main.js?v=2"></script>
