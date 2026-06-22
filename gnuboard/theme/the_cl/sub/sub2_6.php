<?php
$page_title = "알레르기";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Clinic</p>
    <h1 class="sub-hero-title">알레르기</h1>
    <p class="sub-hero-subtitle">면역 균형과 편안한 호흡</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo $G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">Clinic</span></li>
      <li class="separator">></li>
      <li class="current">알레르기</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

<!-- 스플릿 인트로 (미러형: 이미지 좌 / 텍스트 우) -->
<section class="ed-split ed-split--reverse reveal">
  <div class="ed-split__text">
    <span class="ed-eyebrow">Allergy Clinic</span>
    <h2 class="ed-split__title">
      <span class="i1">면역의 균형을</span>
      <span class="i2">되찾아</span>
      <span class="i3"><strong>건강하게 자라도록</strong></span>
    </h2>
    <div class="ed-split__body">
      <p class="lead">
        소아청소년기 알레르기 질환은 아이의 깊은 수면을 방해하고 성장을 저해하는 요인이 됩니다.
      </p>
      <p>
        삼성더클성장의원에서는 면역 과민 반응의 원인을 명확하게 진단합니다.
        비염, 아토피, 천식 등 악순환이 반복되는 알레르기 증상을 완화하고 일상 생활의 질을 높여 건강한 성장을 도모합니다.
      </p>
    </div>
  </div>
  <div class="ed-collage reveal reveal-delay-2">
    <img src="<?php echo $G5_URL; ?>/img/programs.png" alt="알레르기 관리" class="ed-collage__main">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="소아 진료" class="ed-collage__sub">
  </div>
</section>

<!-- 빅넘버 리스트 -->
<section class="ed-features">
  <div class="ed-sectlabel reveal">
    <span class="ed-kicker">Care Program</span>
    <h2>일상을 지키는 <strong>3가지 알레르기 케어</strong></h2>
  </div>

  <div class="ed-feat reveal">
    <div class="ed-feat__num">01</div>
    <div class="ed-feat__body">
      <h3 class="ed-feat__title">정밀 알레르기 검사 (MAST)</h3>
      <p class="ed-feat__desc">
        한 번의 채혈로 호흡기 및 음식물 등 수십 가지의 대표적인 알레르기 유발 물질을 동시에 정확하게 스크리닝합니다.
      </p>
    </div>
  </div>
  <div class="ed-feat reveal reveal-delay-1">
    <div class="ed-feat__num">02</div>
    <div class="ed-feat__body">
      <h3 class="ed-feat__title">소아 아토피 피부염 & 피부 진정</h3>
      <p class="ed-feat__desc">
        피부 장벽을 복구하는 보습제 처방과 약물 요법, 생활 습관 피드백을 통해 아토피 가려움증의 악순환을 예방합니다.
      </p>
    </div>
  </div>
  <div class="ed-feat reveal reveal-delay-2">
    <div class="ed-feat__num">03</div>
    <div class="ed-feat__body">
      <h3 class="ed-feat__title">알레르기 비염 & 천식 맞춤 치료</h3>
      <p class="ed-feat__desc">
        환절기마다 아이를 괴롭히는 기침과 코막힘을 완화하기 위해 소아 호흡기 특성에 최적화된 흡입기 및 약물 치료를 안내합니다.
      </p>
    </div>
  </div>
</section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
