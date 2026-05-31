<?php
$page_title = "의료진 소개";
include_once('../head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">About</p>
    <h1 class="sub-hero-title">의료진 소개</h1>
    <p class="sub-hero-subtitle">검증된 전문성과 풍부한 임상 경험</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo $G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">About</span></li>
      <li class="separator">></li>
      <li class="current">의료진 소개</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    
<div class="sub-intro-text">
  <p class="section-en reveal">Medical Staff</p>
  <h2 class="section-title reveal reveal-delay-1">
    학술적 깊이와 현장 리더십,<br>
    <strong>소아 내분비 세부 전문의</strong>가 전담 진료합니다
  </h2>
</div>

<article class="doctor-card reveal" style="background: white; border-radius: 8px; border: 1px solid var(--c-border); padding: 48px; margin-top: 60px; box-shadow: 0 10px 30px rgba(0,0,0,0.01);">
  <div class="doctor-photo">
    <img src="<?php echo $G5_URL; ?>/img/doctor.png" alt="김지은 대표원장">
  </div>
  <div class="doctor-info">
    <span class="doctor-position">소아청소년과 전문의 · 소아내분비 세부전문의</span>
    <h3 class="doctor-name"><strong>김 지 은</strong> 대표원장</h3>
    
    <p class="desc" style="font-size: 14px; color: var(--c-text-light); line-height: 1.8; margin-bottom: 30px; font-weight: 300;">
      대학병원 소아내분비 임상교수 출신으로, 풍부한 임상경험과 글로벌 학술적 네트워크를 기반으로 삼아 저신장과 성조숙증 진료에 탁월한 해법을 제시합니다.
    </p>

    <div class="history-section">
      <div>
        <div class="history-title">
          <span class="star">✦</span> 학력 및 약력
        </div>
        <ul class="history-list">
          <li>서울대학교병원 소아청소년과 전문의</li>
          <li>서울대학교병원 소아내분비 전임의 수료</li>
          <li>서울대학교 의과대학 학사 / 석사 최우수 졸업</li>
          <li>전 삼성서울병원 소아내분비 임상조교수</li>
          <li>대한소아청소년과학회 평생회원</li>
          <li>대한소아내분비학회 정회원 및 심사위원</li>
        </ul>
      </div>
      <div>
        <div class="history-title">
          <span class="star">✦</span> 학회 및 정학술 활동
        </div>
        <ul class="history-list">
          <li>유럽소아내분비학회(ESPE) 우수 임상 연구 구연</li>
          <li>소아 성조숙증 최신 진단 표준 지침서 공동 저자</li>
          <li>대한당뇨병학회 소아당뇨 특별위원회 소속</li>
          <li>소아 비만 및 대사 증후군 통합 포럼 연사</li>
          <li>성장 호르몬 안전성 장기 추적 연구 공동 연구원</li>
          <li>현 삼성더클성장의원 대표원장</li>
        </ul>
      </div>
    </div>
  </div>
</article>

  </div>
</main>

<?php
include_once('../tail.php');
?>
