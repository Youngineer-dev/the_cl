<?php
$page_title = "저체중";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Clinic</p>
    <h1 class="sub-hero-title">저체중</h1>
    <p class="sub-hero-subtitle">균형 잡힌 영양과 건강한 성장</p>
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
      <li class="current">저체중</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

<!-- 스플릿 인트로 (텍스트 좌 / 겹친 이미지 우) -->
<section class="ed-split reveal">
  <div class="ed-split__text">
    <span class="ed-eyebrow">Underweight Clinic</span>
    <h2 class="ed-split__title">
      <span class="i1">아이의 성장을</span>
      <span class="i2">위한</span>
      <span class="i3"><strong>균형 잡힌 영양 관리</strong></span>
    </h2>
    <div class="ed-split__body">
      <p class="lead">
        또래에 비해 체중이 지나치게 적게 나가는 소아 저체중은 성장의 지연을 초래할 수 있습니다.
      </p>
      <p>
        삼성더클성장의원에서는 편식, 흡수 불량, 또는 유전적 요인 등 아이가 살이 찌지 않는 원인을 다각도로 진단합니다.
        체계적인 영양 상태 분석과 1:1 라이프스타일 관리를 통해 건강한 성장 흐름을 찾아줍니다.
      </p>
    </div>
  </div>
  <div class="ed-collage reveal reveal-delay-2">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="저체중 진료" class="ed-collage__main">
    <img src="<?php echo $G5_URL; ?>/img/programs.png" alt="영양 상태 분석" class="ed-collage__sub">
  </div>
</section>

<!-- 자가체크 밴드 -->
<section class="ed-check reveal">
  <div class="ed-check__head">
    <span class="ed-kicker">Self Check</span>
    <p class="ed-check__label">소아 저체중<br>자가 체크리스트</p>
  </div>
  <ul class="ed-check__list">
    <li class="ed-check__item"><span class="ed-check__num">01</span><p>또래 평균에 비해 체중이 현저하게 적게 나갈 때</p></li>
    <li class="ed-check__item"><span class="ed-check__num">02</span><p>식사량이 너무 적거나 심한 편식을 보일 때</p></li>
    <li class="ed-check__item"><span class="ed-check__num">03</span><p>자주 피곤해하고 일상 활동에 쉽게 지칠 때</p></li>
    <li class="ed-check__item"><span class="ed-check__num">04</span><p>최근 6개월간 체중 증가가 정체되거나 감소했을 때</p></li>
    <li class="ed-check__item"><span class="ed-check__num">05</span><p>감기 등 감염성 질환에 자주 걸리고 회복이 느릴 때</p></li>
    <li class="ed-check__item"><span class="ed-check__num">06</span><p>체질량지수(BMI)가 백분위수 기준 5% 미만일 때</p></li>
  </ul>
</section>

<!-- 닫는 문장 밴드 -->
<section class="ed-statement reveal">
  <span class="ed-eyebrow">Our Promise</span>
  <p>“단순히 많이 먹이는 것이 아닌, 체계적인 대사와 영양 관리가 핵심입니다.<br>아이의 건강한 성장을 위해 함께 노력하겠습니다.”</p>
</section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
