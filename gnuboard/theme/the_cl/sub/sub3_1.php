<?php
$page_title = "진료 시간";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Info</p>
    <h1 class="sub-hero-title">진료 시간</h1>
    <p class="sub-hero-subtitle">내원에 참고해 주세요</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo $G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">Info</span></li>
      <li class="separator">></li>
      <li class="current">진료 시간</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

<!-- 스플릿 인트로 (텍스트 좌 / 겹친 이미지 우) -->
<section class="ed-split reveal">
  <div class="ed-split__text">
    <span class="ed-eyebrow">Clinic Hours</span>
    <h2 class="ed-split__title">
      <span class="i1">예약제로</span>
      <span class="i2">편안하게</span>
      <span class="i3"><strong>모십니다</strong></span>
    </h2>
    <div class="ed-split__body">
      <p class="lead">
        한 분 한 분 깊이 있는 1:1 상담을 위해 사전 예약을 원칙으로 운영합니다.
      </p>
      <p>
        아래 진료 시간을 참고하여 내원 일정을 잡으실 수 있습니다.
        긴급 문의나 당일 예약은 전화 또는 카카오톡 채널로 편하게 연락 주세요.
      </p>
    </div>
  </div>
  <div class="ed-collage reveal reveal-delay-2">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="진료 공간" class="ed-collage__main">
    <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="상담실" class="ed-collage__sub">
  </div>
</section>

<!-- 진료시간 그리드 -->
<section style="padding-top: 30px;">
  <div class="ed-sectlabel reveal" style="margin-bottom: 30px;">
    <span class="ed-kicker">Schedule</span>
    <h2>요일별 <strong>진료 일정표</strong></h2>
  </div>
  <div class="ed-hours reveal">
    <div class="ed-hours__cell">
      <p class="ed-hours__day">Mon — Fri</p>
      <p class="ed-hours__time">09:00 — 18:30</p>
      <p class="ed-hours__note">점심시간 13:00 ~ 14:00<br>접수 마감 18:00</p>
    </div>
    <div class="ed-hours__cell">
      <p class="ed-hours__day">Saturday</p>
      <p class="ed-hours__time">09:00 — 13:00</p>
      <p class="ed-hours__note">점심시간 없이 연속 진료<br>접수 마감 12:30</p>
    </div>
    <div class="ed-hours__cell is-off">
      <p class="ed-hours__day">Sun · Holiday</p>
      <p class="ed-hours__time">휴 진</p>
      <p class="ed-hours__note">카카오톡 채널로<br>예약 문의 가능</p>
    </div>
  </div>
</section>

<!-- 연락 안내 -->
<section style="padding-top: 60px;">
  <div class="ed-cards ed-cards--two">
    <div class="ed-card2 reveal" style="text-align: center;">
      <div class="ed-card2__no" style="margin: 0 auto 18px;">☎</div>
      <h3 class="ed-card2__title">간편 전화 예약</h3>
      <a href="tel:02-1234-5678" style="display:block; font-family: var(--font-serif); font-size: 30px; font-weight: 500; color: var(--c-primary-dark); margin: 8px 0 16px;">02.1234.5678</a>
      <p class="ed-card2__desc">당일 진료 예약이나 주차권 관련 급한 용무는 전화로 연락 주시면 신속히 응대합니다.</p>
    </div>
    <div class="ed-card2 reveal reveal-delay-1" style="text-align: center;">
      <div class="ed-card2__no" style="margin: 0 auto 18px;">💬</div>
      <h3 class="ed-card2__title">카카오톡 24시간 문의</h3>
      <a href="#" class="ed-pill" style="margin: 14px 0; background: #FEE500; color: #391B1B;">삼성더클성장 채널상담</a>
      <p class="ed-card2__desc">채널을 추가하시면 예약일 알림 서비스와 1:1 채팅 문의를 자유롭게 이용하실 수 있습니다.</p>
    </div>
  </div>
</section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
