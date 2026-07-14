<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// $G5_URL: 에셋(이미지/CSS)용 테마 경로
if (!isset($G5_URL)) {
    $G5_URL = G5_THEME_URL;
}
// 페이지 링크: pretty URL (사이트 루트 폴더 방식)
$u = function ($key, $params = array()) {
    return function_exists('the_cl_url') ? the_cl_url($key, $params) : (G5_URL . '/');
};
?>
  <!-- HEADER -->
  <header class="site-header" id="header">
    <div class="header-inner">
      <div class="header-left">
        <p class="slogan"><span class="accent">Samsung The CL (Care & Long)</span></p>
      </div>
      <div class="header-center">
        <a href="<?php echo $u('home'); ?>" class="logo-link">
          <img src="<?php echo $G5_URL; ?>/img/brand_logo.png?v=4" alt="송파구 잠실 소아 성장 클리닉 삼성더클성장의원 로고" class="logo-img">
        </a>
      </div>
      <div class="header-right">
        <span class="header-location">잠실역 9번출구 도보 3분</span>
        <div class="header-contact">
          <a href="tel:02-421-7757" class="header-phone">02-421-7757</a>
        </div>
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
            <a href="<?php echo $u('about'); ?>" class="gnb-title">ABOUT</a>
            <div class="gnb-dropdown">
              <ul class="gnb-sub-menu">
                <li><a href="<?php echo $u('about'); ?>">병원 소개</a></li>
                <li><a href="<?php echo $u('about/doctors'); ?>">의료진 소개</a></li>
                <li><a href="<?php echo $u('info/hours'); ?>">진료 시간</a></li>
                <li><a href="<?php echo $u('about/tour'); ?>">둘러보기</a></li>
                <li><a href="<?php echo $u('about/location'); ?>">오시는 길</a></li>
              </ul>
            </div>
          </li>
          <li class="gnb-item">
            <a href="<?php echo $u('clinic/growth'); ?>" class="gnb-title">CLINIC</a>
            <div class="gnb-dropdown">
              <ul class="gnb-sub-menu">
                <li><a href="<?php echo $u('clinic/growth'); ?>">성장평가 · 예상키</a></li>
                <li><a href="<?php echo $u('clinic/short-stature'); ?>">저신장</a></li>
                <li><a href="<?php echo $u('clinic/precocious-puberty'); ?>">성조숙증</a></li>
                <li><a href="<?php echo $u('clinic/obesity'); ?>">소아비만</a></li>
                <li><a href="<?php echo $u('clinic/underweight'); ?>">저체중</a></li>
                <li><a href="<?php echo $u('clinic/allergy'); ?>">알레르기</a></li>
              </ul>
            </div>
          </li>
          <li class="gnb-item">
            <a href="<?php echo $u('community/faq'); ?>" class="gnb-title">COMMUNITY</a>
            <div class="gnb-dropdown">
              <ul class="gnb-sub-menu">
                <?php /* <li><a href="<?php echo $u('community/cases'); ?>">치료 사례</a></li> */ ?>
                <li><a href="<?php echo $u('community/faq'); ?>">자주묻는 질문</a></li>
                <li><a href="<?php echo $u('community/notice'); ?>">공지사항</a></li>
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
            <li><a href="<?php echo $u('about'); ?>">병원 소개</a></li>
            <li><a href="<?php echo $u('about/doctors'); ?>">의료진 소개</a></li>
            <li><a href="<?php echo $u('info/hours'); ?>">진료 시간</a></li>
            <li><a href="<?php echo $u('about/tour'); ?>">둘러보기</a></li>
            <li><a href="<?php echo $u('about/location'); ?>">오시는 길</a></li>
          </ul>
        </div>
        <div class="nav-menu-group">
          <h3 class="nav-menu-title">Clinic</h3>
          <ul class="nav-menu-items">
            <li><a href="<?php echo $u('clinic/growth'); ?>">성장평가 · 예상키</a></li>
            <li><a href="<?php echo $u('clinic/short-stature'); ?>">저신장</a></li>
            <li><a href="<?php echo $u('clinic/precocious-puberty'); ?>">성조숙증</a></li>
            <li><a href="<?php echo $u('clinic/obesity'); ?>">소아비만</a></li>
            <li><a href="<?php echo $u('clinic/underweight'); ?>">저체중</a></li>
            <li><a href="<?php echo $u('clinic/allergy'); ?>">알레르기</a></li>
          </ul>
        </div>
        <div class="nav-menu-group">
          <h3 class="nav-menu-title">Community</h3>
          <ul class="nav-menu-items">
            <?php /* <li><a href="<?php echo $u('community/cases'); ?>">치료 사례</a></li> */ ?>
            <li><a href="<?php echo $u('community/faq'); ?>">자주묻는 질문</a></li>
            <li><a href="<?php echo $u('community/notice'); ?>">공지사항</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
