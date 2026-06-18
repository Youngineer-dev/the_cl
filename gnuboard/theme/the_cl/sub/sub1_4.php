<?php
$page_title = "둘러보기";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">About</p>
    <h1 class="sub-hero-title">둘러보기</h1>
    <p class="sub-hero-subtitle">아이와 부모님 모두가 편안한 공간</p>
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
      <li class="current">둘러보기</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    
<div class="sub-intro-text">
  <p class="section-en reveal">Clinic Gallery</p>
  <h2 class="section-title reveal reveal-delay-1">
    심리적 안정감을 제공하는 인테리어,<br>
    <strong>가장 위생적이고 안온한 의료 공간</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      아이의 긴장을 낮추고 오감의 피로를 풀어주는 따스한 목조와 자연광 설계,<br>
      안심하고 검사받을 수 있는 청정 공간 및 정교한 성장 진료 인프라를 소개합니다.
    </p>
  </div>
</div>

<div class="space-gallery" style="margin-top: 60px;">
  <div class="space-gallery-item reveal">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="대기 라운지">
    <div class="gallery-caption" style="opacity: 1; transform: translateY(0); background: rgba(0,0,0,0.55);">
      <p class="caption-en">Lounge & Waiting Area</p>
      <p class="caption-kr">친환경 자재와 편안한 조도로 설계되어 긴장을 풀어주는 대기 라운지</p>
    </div>
  </div>
  <div class="space-gallery-item reveal reveal-delay-1">
    <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="진료실">
    <div class="gallery-caption" style="opacity: 1; transform: translateY(0); background: rgba(0,0,0,0.55);">
      <p class="caption-en">1:1 Consultation Room</p>
      <p class="caption-kr">원장님과 아이가 마주 보며 편히 대화할 수 있는 인체공학적 진료실</p>
    </div>
  </div>
  <div class="space-gallery-item reveal reveal-delay-2">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="성장 정밀 검사실">
    <div class="gallery-caption" style="opacity: 1; transform: translateY(0); background: rgba(0,0,0,0.55);">
      <p class="caption-en">Exam Lab</p>
      <p class="caption-kr">저선량 X-ray 및 정밀 골연령 분석 기기가 구축된 검사실</p>
    </div>
  </div>
  <div class="space-gallery-item reveal reveal-delay-3" style="margin-top: 20px;">
    <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="수액 치료실">
    <div class="gallery-caption" style="opacity: 1; transform: translateY(0); background: rgba(0,0,0,0.55);">
      <p class="caption-en">Premium IV Therapy Room</p>
      <p class="caption-kr">성장기 어린이의 편안한 휴식과 수액 보충을 위한 1인 프라이빗 침대 구비</p>
    </div>
  </div>
  <div class="space-gallery-item reveal reveal-delay-4" style="margin-top: 20px;">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="신체 계측실">
    <div class="gallery-caption" style="opacity: 1; transform: translateY(0); background: rgba(0,0,0,0.55);">
      <p class="caption-en">Growth Measurement Corner</p>
      <p class="caption-kr">소수점 둘째 자리까지 오차 없이 계측하는 신체성장 분석실</p>
    </div>
  </div>
  <div class="space-gallery-item reveal reveal-delay-5" style="margin-top: 20px;">
    <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="키즈 스페이스">
    <div class="gallery-caption" style="opacity: 1; transform: translateY(0); background: rgba(0,0,0,0.55);">
      <p class="caption-en">Kids Play Corner</p>
      <p class="caption-kr">어린이 도서와 감성 교구가 준비된 아늑한 실내 놀이 공간</p>
    </div>
  </div>
</div>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
