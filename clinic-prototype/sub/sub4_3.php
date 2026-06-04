<?php
$page_title = "공지사항";
include_once('../head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Community</p>
    <h1 class="sub-hero-title">공지사항</h1>
    <p class="sub-hero-subtitle">삼성더클성장의원 소식</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo $G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">Community</span></li>
      <li class="separator">></li>
      <li class="current">공지사항</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

<!-- 스플릿 인트로 (텍스트 좌 / 겹친 이미지 우) -->
<section class="ed-split reveal" style="padding-bottom: 80px;">
  <div class="ed-split__text">
    <span class="ed-eyebrow">Notice Board</span>
    <h2 class="ed-split__title">
      <span class="i1">새로운 소식과</span>
      <span class="i2"><strong>알림</strong>을</span>
      <span class="i3">전해 드립니다</span>
    </h2>
    <div class="ed-split__body">
      <p class="lead">
        진료 일정, 신규 장비 도입 등 삼성더클성장의원의 소식을 가장 먼저 알려 드립니다.
      </p>
      <p>
        휴진 및 진료 시간 변경 공지는 상단에 고정되어 표시되니 내원 전 꼭 확인해 주세요.
      </p>
    </div>
  </div>
  <div class="ed-collage reveal reveal-delay-2">
    <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="병원 소식" class="ed-collage__main">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="병원 전경" class="ed-collage__sub">
  </div>
</section>

<!-- 에디토리얼 공지 리스트 -->
<section>
  <div class="ed-sectlabel reveal" style="margin-bottom: 24px;">
    <span class="ed-kicker">Latest News</span>
    <h2>최근 <strong>공지사항</strong></h2>
  </div>
  <div class="ed-notice reveal">
    <a href="#" class="ed-notice__row">
      <span class="ed-notice__no is-pin">공지</span>
      <span class="ed-notice__title">삼성더클성장의원 여름 하계 휴진 일정 안내 (8/1 ~ 8/4)</span>
      <span class="ed-notice__date">2026.05.28</span>
    </a>
    <a href="#" class="ed-notice__row">
      <span class="ed-notice__no is-pin">공지</span>
      <span class="ed-notice__title">토요일 오전 진료 예약 대기시간 단축 및 검사 프로세스 최적화 도입</span>
      <span class="ed-notice__date">2026.05.20</span>
    </a>
    <a href="#" class="ed-notice__row">
      <span class="ed-notice__no">03</span>
      <span class="ed-notice__title">노유선 대표원장 아시아태평양소아내분비학회 Fellow School 수료 후기</span>
      <span class="ed-notice__date">2026.05.15</span>
    </a>
    <a href="#" class="ed-notice__row">
      <span class="ed-notice__no">02</span>
      <span class="ed-notice__title">소아 저선량 초정밀 X-ray 성장 진단 보정 분석기 도입 안내</span>
      <span class="ed-notice__date">2026.05.02</span>
    </a>
    <a href="#" class="ed-notice__row">
      <span class="ed-notice__no">01</span>
      <span class="ed-notice__title">삼성더클성장의원 신축 개원 및 강남역 3번출구 주차 지원 제도 안내</span>
      <span class="ed-notice__date">2026.04.10</span>
    </a>
  </div>
</section>

  </div>
</main>

<?php
include_once('../tail.php');
?>
