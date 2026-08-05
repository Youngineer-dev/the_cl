<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// $G5_URL이 정의되어 있지 않거나 테마 경로가 아닌 경우 바인딩
if (!isset($G5_URL)) {
    $G5_URL = G5_THEME_URL;
}
?>
  <!-- HEADER -->
  <header class="site-header" id="header">
    <div class="header-inner">
      <div class="header-left">
        <p class="slogan"><span class="accent">Samsung The CL (Care & Long)</span></p>
      </div>
      <div class="header-center">
        <a href="<?php echo G5_URL; ?>/index.php" class="logo-link">
          <picture>
            <source srcset="<?php echo $G5_URL; ?>/img/brand_logo.webp?v=6" type="image/webp">
            <img src="<?php echo $G5_URL; ?>/img/brand_logo.png?v=6" alt="송파구 잠실 소아 성장 클리닉 삼성더클성장의원 로고" class="logo-img logo-color" width="240" height="48">
          </picture>
          <picture>
            <source srcset="<?php echo $G5_URL; ?>/img/brand_logo_white.webp?v=6" type="image/webp">
            <img src="<?php echo $G5_URL; ?>/img/brand_logo_white.png?v=6" alt="송파구 잠실 소아 성장 클리닉 삼성더클성장의원 로고" class="logo-img logo-white" width="240" height="48">
          </picture>
        </a>
      </div>
      <div class="header-right">
        <span class="header-location">잠실역 9번출구 도보 3분</span>
        <?php if (!empty($is_admin)) { ?>
          <a href="<?php echo $G5_URL; ?>/sub/popup_admin.php" class="admin-quick-btn" style="background:#0056b3; color:#fff; padding:6px 12px; border-radius:20px; font-size:12px; font-weight:600; text-decoration:none; margin-right:8px; display:inline-flex; align-items:center; gap:4px;">
            ⚙ 팝업 관리
          </a>
        <?php } ?>
        <button class="hamburger" id="hamburger" aria-label="메뉴 열기" style="background:none; border:none; padding:0; cursor:pointer;">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
    <!-- Desktop Navigation GNB (로고 아래 가로 펼침형) -->
    <nav class="desktop-gnb-wrap">
      <div class="desktop-gnb-inner">
        <ul class="gnb-menu">
          <li class="gnb-item">
            <a href="<?php echo $G5_URL; ?>/sub/sub1_1.php" class="gnb-title">ABOUT</a>
            <div class="gnb-dropdown">
              <ul class="gnb-sub-menu">
                <li><a href="<?php echo $G5_URL; ?>/sub/sub1_1.php">병원 소개</a></li>
                <li><a href="<?php echo $G5_URL; ?>/sub/sub1_3.php">의료진 소개</a></li>
                <li><a href="<?php echo $G5_URL; ?>/sub/sub3_1.php">진료 시간</a></li>
                <li><a href="<?php echo $G5_URL; ?>/sub/sub1_4.php">둘러보기</a></li>
                <li><a href="<?php echo $G5_URL; ?>/sub/sub1_5.php">오시는 길</a></li>
              </ul>
            </div>
          </li>
          <li class="gnb-item">
            <a href="<?php echo $G5_URL; ?>/sub/sub2_1.php" class="gnb-title">CLINIC</a>
            <div class="gnb-dropdown">
              <ul class="gnb-sub-menu">
                <li><a href="<?php echo $G5_URL; ?>/sub/sub2_1.php">성장평가 · 예상키</a></li>
                <li><a href="<?php echo $G5_URL; ?>/sub/sub2_2.php">저신장</a></li>
                <li><a href="<?php echo $G5_URL; ?>/sub/sub2_3.php">성조숙증</a></li>
                <li><a href="<?php echo $G5_URL; ?>/sub/sub2_4.php">소아비만</a></li>
                <li><a href="<?php echo $G5_URL; ?>/sub/sub2_5.php">저체중</a></li>
                <li><a href="<?php echo $G5_URL; ?>/sub/sub2_6.php">알레르기</a></li>
              </ul>
            </div>
          </li>
          <li class="gnb-item">
            <a href="<?php echo $G5_URL; ?>/sub/sub4_2.php" class="gnb-title">COMMUNITY</a>
            <div class="gnb-dropdown">
              <ul class="gnb-sub-menu">
                <li><a href="<?php echo $G5_URL; ?>/sub/sub4_2.php">자주묻는 질문</a></li>
                <li><a href="<?php echo $G5_URL; ?>/sub/sub4_3.php">공지사항</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- NAV OVERLAY -->
  <nav class="nav-overlay" id="navOverlay">
    <div class="nav-content">
      <p class="nav-slogan" style="margin-top: 40px;">Grow Together, Grow Healthy</p>
      <div class="nav-menu">
        <div class="nav-menu-group">
          <h3 class="nav-menu-title">About</h3>
          <ul class="nav-menu-items">
            <li><a href="<?php echo $G5_URL; ?>/sub/sub1_1.php">병원 소개</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub1_3.php">의료진 소개</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub3_1.php">진료 시간</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub1_4.php">둘러보기</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub1_5.php">오시는 길</a></li>
          </ul>
        </div>
        <div class="nav-menu-group">
          <h3 class="nav-menu-title">Clinic</h3>
          <ul class="nav-menu-items">
            <li><a href="<?php echo $G5_URL; ?>/sub/sub2_1.php">성장평가 · 예상키</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub2_2.php">저신장</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub2_3.php">성조숙증</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub2_4.php">소아비만</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub2_5.php">저체중</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub2_6.php">알레르기</a></li>
          </ul>
        </div>
        <div class="nav-menu-group">
          <h3 class="nav-menu-title">Community</h3>
          <ul class="nav-menu-items">
            <li><a href="<?php echo $G5_URL; ?>/sub/sub4_2.php">자주묻는 질문</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub4_3.php">공지사항</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
