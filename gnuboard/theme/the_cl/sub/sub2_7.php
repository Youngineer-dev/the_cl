<?php
$page_title = "영양수액";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Clinic</p>
    <h1 class="sub-hero-title">영양수액</h1>
    <p class="sub-hero-subtitle">성장기 필수 영양 보충</p>
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
      <li class="current">영양수액</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

<!-- 스플릿 인트로 (텍스트 좌 / 겹친 이미지 우) -->
<section class="ed-split reveal">
  <div class="ed-split__text">
    <span class="ed-eyebrow">Premium IV Therapy</span>
    <h2 class="ed-split__title">
      <span class="i1">세포에 즉각</span>
      <span class="i2">작용하는</span>
      <span class="i3"><strong>맞춤 영양 솔루션</strong></span>
    </h2>
    <div class="ed-split__body">
      <p class="lead">
        편식으로 영양 흡수가 불량한 아동, 학업 피로가 심한 청소년을 위한 처방입니다.
      </p>
      <p>
        기능의학에 기반하여 성장 발육과 피로 해소에 즉각 작용하는
        안심 고농축 영양수액 칵테일을 아이의 상태에 맞춰 구성합니다.
      </p>
    </div>
    <a href="<?php echo $G5_URL; ?>/sub/sub3_1.php" class="ed-pill ed-split__cta">진료 시간 확인 →</a>
  </div>
  <div class="ed-collage reveal reveal-delay-2">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="영양수액 치료실" class="ed-collage__main">
    <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="프리미엄 케어" class="ed-collage__sub">
  </div>
</section>

<!-- 3-up 카드 -->
<section style="padding-top: 50px;">
  <div class="ed-sectlabel reveal" style="margin-bottom: 36px;">
    <span class="ed-kicker">Therapy Menu</span>
    <h2>목적별 <strong>3가지 영양 수액</strong></h2>
  </div>
  <div class="ed-cards">
    <div class="ed-card2 reveal">
      <div class="ed-card2__no">01</div>
      <h3 class="ed-card2__title">성장 밸런스 에너지 수액</h3>
      <p class="ed-card2__desc">뼈와 근육 합성을 촉진하는 핵심 아미노산 군과 아연·비타민D·칼슘의 흡수율을 높이는 영양 물질을 조합하여 빠른 성장 활력을 유도합니다.</p>
    </div>
    <div class="ed-card2 reveal reveal-delay-1">
      <div class="ed-card2__no">02</div>
      <h3 class="ed-card2__title">면역 강화 비타민 수액</h3>
      <p class="ed-card2__desc">잦은 감기·아토피·비염으로 성장 에너지를 낭비하는 아동을 위해 고농도 비타민C, 비타민B군, 셀레늄 등 강력한 항산화 면역 포뮬러를 공급합니다.</p>
    </div>
    <div class="ed-card2 reveal reveal-delay-2">
      <div class="ed-card2__no">03</div>
      <h3 class="ed-card2__title">브레인 피로 회복 수액</h3>
      <p class="ed-card2__desc">학업과 불면으로 지친 수험생·청소년의 뇌 대사를 회복시키고 피로 물질 배출을 촉진하는 아르기닌 및 신경 활성 칵테일 수액입니다.</p>
    </div>
  </div>
</section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
