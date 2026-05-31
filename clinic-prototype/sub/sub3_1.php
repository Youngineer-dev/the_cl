<?php
$page_title = "진료 시간";
include_once('../head.php');
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
    
<div class="sub-intro-text">
  <p class="section-en reveal">Clinic Hours</p>
  <h2 class="section-title reveal reveal-delay-1">
    예약제로 편안하게 내원하시는<br>
    <strong>삼성더클성장의원 진료 일정표</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      한 분 한 분 깊이 있는 1:1 상담을 위해 사전 예약을 원칙으로 운영합니다.<br>
      아래 진료 시간을 참고하여 내원 예약 일정을 잡으실 수 있습니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<div class="premium-table-wrap reveal">
  <table class="premium-table">
    <thead>
      <tr>
        <th>구분</th>
        <th>진료 시작 시간</th>
        <th>진료 종료 시간</th>
        <th>비고 및 특이사항</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>평일 (월 — 금)</td>
        <td>오전 09:00</td>
        <td>오후 18:30</td>
        <td>점심시간: 13:00 ~ 14:00 (진료 접수 마감: 18:00)</td>
      </tr>
      <tr>
        <td>토요일</td>
        <td>오전 09:00</td>
        <td>오후 13:00</td>
        <td>토요일은 점심시간 없이 연속 진료합니다. (접수 마감: 12:30)</td>
      </tr>
      <tr>
        <td>일요일 · 공휴일</td>
        <td colspan="2" style="text-align: center; font-weight: 600; color: var(--c-accent);">휴  진</td>
        <td>긴급 문의 및 내원 예약은 카카오톡 채널을 통해 남겨주세요.</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="sub-card-grid" style="margin-top: 50px;">
  <div class="sub-card reveal" style="text-align: center;">
    <h3 class="sub-card-title">📞 간편 전화 예약</h3>
    <a href="tel:02-1234-5678" style="font-size: 24px; font-weight: 700; color: var(--c-primary); display: block; margin: 12px 0;">02.1234.5678</a>
    <p class="sub-card-desc">당일 진료 예약이나 비급여 주차권 관련 급한 용무는 전화로 연락 주시면 신속히 응대합니다.</p>
  </div>
  
  <div class="sub-card reveal reveal-delay-1" style="text-align: center;">
    <h3 class="sub-card-title">💬 카카오톡 24시간 문의</h3>
    <a href="#" style="font-size: 18px; font-weight: 700; color: #391B1B; background: #FEE500; display: inline-block; padding: 10px 24px; border-radius: 4px; margin: 12px 0;">삼성더클성장 채널상담</a>
    <p class="sub-card-desc">카카오톡 채널을 추가하시면 진료 예약일 알림 서비스와 1:1 채팅 문의를 자유로이 이용하실 수 있습니다.</p>
  </div>
</div>

  </div>
</main>

<?php
include_once('../tail.php');
?>
