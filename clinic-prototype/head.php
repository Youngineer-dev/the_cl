<?php
if (!isset($G5_URL)) {
    // 현재 스크립트 실행 경로를 기반으로 clinic-prototype 폴더가 속한 베이스 URL을 자동 감지합니다.
    $script_name = $_SERVER['SCRIPT_NAME'];
    $pos = strpos($script_name, '/clinic-prototype');
    if ($pos !== false) {
        $G5_URL = substr($script_name, 0, $pos + strlen('/clinic-prototype'));
    } else {
        $G5_URL = '/clinic-prototype';
    }
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo isset($page_title) ? $page_title . ' - 삼성더클성장의원' : '삼성더클성장의원 - 소아 내분비 전문'; ?></title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="<?php echo $G5_URL; ?>/css/style.css?v=3">
</head>
<body>

  <!-- HEADER -->
  <header class="site-header" id="header">
    <div class="header-inner">
      <div class="header-left">
        <p class="slogan">아이의 건강한 성장을 함께하는 곳 — <span class="accent">Samsung The CL</span></p>
      </div>
      <div class="header-center">
        <a href="<?php echo $G5_URL; ?>/index.php" class="logo-link">
          <img src="<?php echo $G5_URL; ?>/img/brand_logo.png" alt="삼성더클성장의원" class="logo-img">
        </a>
      </div>
      <div class="header-right">
        <span class="header-location">강남역 3번출구 도보 3분</span>
        <div class="header-contact">
          <a href="tel:02-1234-5678" class="header-phone">02.1234.5678</a>
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
