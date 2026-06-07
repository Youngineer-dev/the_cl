<?php
$page_title = "의료진 소개";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
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
    <img src="<?php echo $G5_URL; ?>/img/doctor.png?v=3" alt="노유선 대표원장">
  </div>
  <div class="doctor-info">
    <span class="doctor-position">소아청소년과 전문의 · 소아내분비 세부전문의</span>
    <h3 class="doctor-name"><strong>노 유 선</strong> 대표원장</h3>

    <p class="desc" style="font-size: 14px; color: var(--c-text-light); line-height: 1.8; margin-bottom: 30px; font-weight: 300;">
      대학병원 소아내분비분과 교수 출신으로, 삼성서울병원에서의 풍부한 임상경험과 글로벌 학술적 네트워크를 기반으로 저신장과 성조숙증 진료에 탁월한 해법을 제시합니다.
    </p>

    <div class="history-section">
      <div>
        <div class="history-title">
          <span class="star">✦</span> 학력 및 약력
        </div>
        <ul class="history-list">
          <li>한림대학교 강동성심병원 소아청소년과 소아내분비분과 교수</li>
          <li>삼성서울병원 인턴</li>
          <li>삼성서울병원 소아청소년과 전공의</li>
          <li>삼성서울병원 소아청소년과 외래교수</li>
          <li>삼성서울병원 소아내분비·유전대사 임상강사 (우수전임의상 수상)</li>
          <li>현 삼성더클성장의원 대표원장</li>
        </ul>
      </div>
      <div>
        <div class="history-title">
          <span class="star">✦</span> 학회 및 학술 활동
        </div>
        <ul class="history-list">
          <li>대한소아내분비학회 기획위원회 간사</li>
          <li>전 대한소아내분비학회 연구위원회 위원</li>
          <li>아시아태평양소아내분비학회 Fellow School 수료</li>
          <li>KRDMS Pediatric 초음파 과정 수료</li>
          <li>소아 필라테스 운동지도사 과정 수료</li>
          <li>성장·성조숙증·비만·소아내분비 질환 관련 PubMed/SCI 논문 다수 발표</li>
        </ul>
      </div>
    </div>
  </div>
</article>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
