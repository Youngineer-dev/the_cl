<?php
$page_title = "치료 사례";
include_once('../head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Community</p>
    <h1 class="sub-hero-title">치료 사례</h1>
    <p class="sub-hero-subtitle">건강한 성장 이야기</p>
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
      <li class="current">치료 사례</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    
<div class="sub-intro-text">
  <p class="section-en reveal">Clinical Case Studies</p>
  <h2 class="section-title reveal reveal-delay-1">
    성실한 동행이 가져다 준 성장 스토리,<br>
    <strong>실제 키 성장 호전 치료 사례</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      치료 사례 데이터는 개인정보와 의료법에 준해 익명화하여 엄격히 보호되며,<br>
      부모님들의 신뢰 형성을 돕기 위해 승인된 성장 일지만을 제한적으로 오픈합니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<!-- Lock Box UI for premium styling -->
<div class="lock-box reveal">
  <div class="lock-icon">🔒</div>
  <h3 class="lock-title">회원 전용 성장 데이터 열람 안내</h3>
  <p class="lock-desc">
    본 정보는 의료법에 따라 <strong>회원 가입 및 본인 인증 완료 후</strong>에만 상세 열람이 가능합니다.<br>
    간편 카카오 로그인으로 3초만에 가입하고 상세한 분기별 성장 그래프를 확인해 보세요.
  </p>
  <button class="lock-btn">간편 3초 로그인하기</button>
</div>

<!-- Blurred Case Cards -->
<div class="case-lock-container">
  <div class="case-card-grid">
    <div class="case-card">
      <div class="case-card-body">
        <span class="case-badge">저신장 치료 성공</span>
        <h3 class="case-title">만 9세 남아 유전성 저신장 극복</h3>
        <div class="case-meta">
          <span class="case-meta-item">치료 기간: <strong>24개월</strong></span>
          <span class="case-meta-item">성장 결과: <strong>+18.5 cm</strong></span>
        </div>
        <p class="case-desc">
          초진 당시 하위 4백분위수였으나, 2년간의 성장호르몬 매일 투여 및 단백 영양 밀착 교정을 시행하여 현재 또래 표준 평균 이상으로 회복한 성공 사례입니다.
        </p>
      </div>
    </div>
    
    <div class="case-card">
      <div class="case-card-body">
        <span class="case-badge">성조숙 속도 제어</span>
        <h3 class="case-title">만 8세 여아 가슴 몽우리 발현 제어</h3>
        <div class="case-meta">
          <span class="case-meta-item">치료 기간: <strong>18개월</strong></span>
          <span class="case-meta-item">골연령 지연: <strong>-1.2년</strong></span>
        </div>
        <p class="case-desc">
          초등학교 입학 직후 성조숙 증상이 나타나 성장판이 조기 닫힐 뻔하였으나, 3개월 GnRHa 주사 억제를 통해 뼈나이 속도를 늦추고 자연 성장을 연장시켰습니다.
        </p>
      </div>
    </div>
  </div>
</div>

  </div>
</main>

<?php
include_once('../tail.php');
?>
