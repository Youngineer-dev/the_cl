<?php
$page_title = "원장 인사말";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">About</p>
    <h1 class="sub-hero-title">원장 인사말</h1>
    <p class="sub-hero-subtitle">부모의 마음으로 진료합니다</p>
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
      <li class="current">원장 인사말</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    
<div class="sub-intro-text">
  <p class="section-en reveal">Director's Message</p>
  <h2 class="section-title reveal reveal-delay-1">
    부모의 애틋한 마음으로,<br>
    <strong>아이의 빛나는 내일과 가능성</strong>을 믿습니다
  </h2>
</div>

<div class="about-inner" style="margin-top: 60px;">
  <div class="about-text" style="text-align: left;">
    <div class="desc-group reveal">
      <p class="desc" style="font-size: 15px; line-height: 2.2; color: var(--c-text-light); font-weight: 300;">
        안녕하세요. 삼성더클성장의원 대표원장 노유선입니다.<br><br>
        아이들의 웃음소리가 울려 퍼지는 건강한 성장을 관찰하는 것은 참으로 경이로운 일이지만, 다른 아이들보다 성장이 조금 더디거나 사춘기가 너무 일찍 올 때 부모님의 속앓이와 걱정 또한 무겁다는 것을 잘 알고 있습니다.<br><br>
        소아 내분비학 전문의로서 수많은 아이들을 지켜보며 깨달은 점은, <strong>모든 아동은 저마다의 고유한 성장 템포와 건강한 가능성</strong>을 내포하고 있다는 사실입니다. 우리의 임무는 그 템포를 적시에 과학적으로 분석하여 올바른 골든타임을 놓치지 않도록 이끄는 것입니다.<br><br>
        저희 의원은 부모님과 같은 눈높이에서 아이의 건강한 내일을 지극히 진실하고 정교하게 설계하겠습니다. 성장의 매 순간 든든한 등대지기가 되어 동행할 것을 약속드립니다.
      </p>
    </div>
    
    <div class="reveal reveal-delay-2" style="margin-top: 40px; font-family: var(--font-serif); font-size: 20px; font-style: italic; color: var(--c-primary-dark); font-weight: 600;">
      - Representative Director, Yu Sun Noh
    </div>
  </div>

  <div class="about-images reveal reveal-delay-1" style="height: 480px;">
    <div class="about-img-1" style="width: 100%; position: relative;">
      <img src="<?php echo $G5_URL; ?>/img/doctor.png?v=3" alt="노유선 원장" style="width: 100%; height: 450px; object-fit: cover; border-radius: 8px; box-shadow: 0 20px 50px rgba(0,0,0,0.06);">
    </div>
  </div>
</div>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
