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
    
<div class="sub-intro-text">
  <p class="section-en reveal">Notice Board</p>
  <h2 class="section-title reveal reveal-delay-1">
    삼성더클성장의원의<br>
    <strong>새로운 소식 및 알림판</strong>
  </h2>
</div>

<div class="premium-table-wrap reveal" style="margin-top: 60px;">
  <table class="premium-table">
    <thead>
      <tr>
        <th style="width: 80px; text-align: center;">번호</th>
        <th>공지사항 제목</th>
        <th style="width: 120px; text-align: center;">작성일</th>
        <th style="width: 100px; text-align: center;">조회수</th>
      </tr>
    </thead>
    <tbody>
      <tr style="font-weight: 600; background-color: rgba(240, 245, 241, 0.2);">
        <td style="text-align: center; color: var(--c-primary);"><span style="background: var(--c-primary-pale); padding: 2px 6px; border-radius: 4px; font-size: 11px;">공지</span></td>
        <td><a href="#" style="color: var(--c-primary-dark);">삼성더클성장의원 여름 하계 휴진 일정 안내 (8/1 ~ 8/4)</a></td>
        <td style="text-align: center;">2026.05.28</td>
        <td style="text-align: center;">245</td>
      </tr>
      <tr style="font-weight: 600; background-color: rgba(240, 245, 241, 0.2);">
        <td style="text-align: center; color: var(--c-primary);"><span style="background: var(--c-primary-pale); padding: 2px 6px; border-radius: 4px; font-size: 11px;">공지</span></td>
        <td><a href="#" style="color: var(--c-primary-dark);">토요일 오전 진료 예약 대기시간 단축 및 검사 프로세스 최적화 도입</a></td>
        <td style="text-align: center;">2026.05.20</td>
        <td style="text-align: center;">312</td>
      </tr>
      <tr>
        <td style="text-align: center;">3</td>
        <td><a href="#">노유선 대표원장 아시아태평양소아내분비학회 Fellow School 수료 후기</a></td>
        <td style="text-align: center;">2026.05.15</td>
        <td style="text-align: center;">89</td>
      </tr>
      <tr>
        <td style="text-align: center;">2</td>
        <td><a href="#">소아 저선량 초정밀 X-ray 성장 진단 보정 분석기 도입 안내</a></td>
        <td style="text-align: center;">2026.05.02</td>
        <td style="text-align: center;">156</td>
      </tr>
      <tr>
        <td style="text-align: center;">1</td>
        <td><a href="#">삼성더클성장의원 신축 개원 안내 및 강남역 3번출구 주차 지원 제도 안내</a></td>
        <td style="text-align: center;">2026.04.10</td>
        <td style="text-align: center;">482</td>
      </tr>
    </tbody>
  </table>
</div>

  </div>
</main>

<?php
include_once('../tail.php');
?>
