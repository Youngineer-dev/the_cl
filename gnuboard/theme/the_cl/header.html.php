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
        <p class="slogan">아이의 건강한 성장을 함께하는 곳 — <span class="accent">Samsung The CL</span></p>
      </div>
      <div class="header-center">
        <a href="<?php echo G5_URL; ?>/index.php" class="logo-link">
          <img src="<?php echo $G5_URL; ?>/img/brand_logo.png" alt="삼성더클성장의원" class="logo-img">
        </a>
      </div>
      <div class="header-right">
        <span class="header-location">강남역 3번출구 도보 3분</span>
        <div class="header-contact">
          <a href="tel:02-1234-5678" class="header-phone">02.1234.5678</a>
        </div>
        <div class="header-auth">
          <?php if ($is_member) { ?>
            <span class="auth-welcome" style="font-size: 11px; color: var(--c-accent-light); font-weight: 500;">[회원]</span>
            <a href="<?php echo G5_BBS_URL; ?>/logout.php" class="auth-link auth-logout">로그아웃</a>
          <?php } else { ?>
            <a href="<?php echo G5_BBS_URL; ?>/login.php" class="auth-link auth-login">로그인</a>
            <span class="auth-divider">|</span>
            <a href="<?php echo G5_BBS_URL; ?>/register.php" class="auth-link auth-register">회원가입</a>
          <?php } ?>
        </div>
        <div class="hamburger" id="hamburger" aria-label="메뉴 열기">
          <span></span><span></span><span></span>
        </div>
      </div>
    </div>
  </header>

  <!-- NAV OVERLAY -->
  <nav class="nav-overlay" id="navOverlay">
    <div class="nav-content">
      <div class="nav-mobile-auth">
        <?php if ($is_member) { ?>
          <span class="mobile-auth-welcome" style="font-size: 14px; color: var(--c-accent-light); font-weight: 500;">[로그인 상태]</span>
          <span class="mobile-auth-divider">|</span>
          <a href="<?php echo G5_BBS_URL; ?>/logout.php" class="mobile-auth-link">로그아웃</a>
        <?php } else { ?>
          <a href="<?php echo G5_BBS_URL; ?>/login.php" class="mobile-auth-link">로그인</a>
          <span class="mobile-auth-divider">|</span>
          <a href="<?php echo G5_BBS_URL; ?>/register.php" class="mobile-auth-link">회원가입</a>
        <?php } ?>
      </div>
      <p class="nav-slogan">Grow Together, Grow Healthy</p>
      <div class="nav-menu">
        <div class="nav-menu-group">
          <h3 class="nav-menu-title">About</h3>
          <ul class="nav-menu-items">
            <li><a href="<?php echo $G5_URL; ?>/sub/sub1_1.php">병원 소개</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub1_2.php">원장 인사말</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub1_3.php">의료진 소개</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub1_4.php">둘러보기</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub1_5.php">오시는 길</a></li>
          </ul>
        </div>
        <div class="nav-menu-group">
          <h3 class="nav-menu-title">Clinic</h3>
          <ul class="nav-menu-items">
            <li><a href="<?php echo $G5_URL; ?>/sub/sub2_1.php">성장 평가</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub2_2.php">저신장</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub2_3.php">성조숙</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub2_4.php">소아 비만</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub2_5.php">갑상선 질환</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub2_6.php">당뇨</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub2_7.php">영양수액</a></li>
          </ul>
        </div>
        <div class="nav-menu-group">
          <h3 class="nav-menu-title">Info</h3>
          <ul class="nav-menu-items">
            <li><a href="<?php echo $G5_URL; ?>/sub/sub3_1.php">진료 시간</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub3_2.php">진료 절차</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub3_3.php">검사 항목</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub3_4.php">비급여</a></li>
          </ul>
          <h3 class="nav-menu-title" style="margin-top: 20px;">Community</h3>
          <ul class="nav-menu-items">
            <li><a href="<?php echo $G5_URL; ?>/sub/sub4_1.php">치료 사례</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub4_2.php">FAQ</a></li>
            <li><a href="<?php echo $G5_URL; ?>/sub/sub4_3.php">공지사항</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
