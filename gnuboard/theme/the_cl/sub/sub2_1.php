<?php
$page_title = "성장 평가";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Clinic</p>
    <h1 class="sub-hero-title">성장 평가</h1>
    <p class="sub-hero-subtitle">체계적인 데이터 기반 성장 예측</p>
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
      <li class="current">성장 평가</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

<!-- 스플릿 인트로 (텍스트 좌 / 겹친 이미지 우) -->
<section class="ed-split reveal">
  <div class="ed-split__text">
    <span class="ed-eyebrow">Growth Evaluation</span>
    <h2 class="ed-split__title">
      <span class="i1">키와 체중을</span>
      <span class="i2">기록하는 것을 넘어,</span>
      <span class="i3"><strong>미래 키를 예측</strong>합니다</span>
    </h2>
    <div class="ed-split__body">
      <p class="lead">
        뼈 나이, 유전적 신장 잠재력, 혈액 내 호르몬 농도를 종합 분석합니다.
      </p>
      <p>
        빅데이터와 연계한 첨단 예측 기법으로 최종 신장의 오차율을 철저히 낮춘
        과학적 리포트를 드립니다. 막연한 기대가 아닌, 데이터가 말하는 성장의 방향을 제시합니다.
      </p>
    </div>
    <a href="<?php echo $G5_URL; ?>/sub/sub3_2.php" class="ed-pill ed-split__cta">진료 절차 안내 →</a>
  </div>
  <div class="ed-collage reveal reveal-delay-2">
    <img src="<?php echo $G5_URL; ?>/img/programs.png" alt="성장 평가 데이터" class="ed-collage__main">
    <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="정밀 계측" class="ed-collage__sub">
  </div>
</section>

<!-- 세로 프로세스 (4단계) -->
<section class="ed-features" style="padding-top: 40px;">
  <div class="ed-sectlabel reveal">
    <span class="ed-kicker">Evaluation Flow</span>
    <h2>정밀 성장 평가 <strong>4단계</strong></h2>
  </div>

  <div class="ed-steps" style="margin-top: 30px;">
    <div class="ed-step reveal">
      <div class="ed-step__num"><span>01</span></div>
      <div class="ed-step__body">
        <span class="ed-step__eyebrow">Measurement</span>
        <h3 class="ed-step__title">신체 초정밀 계측</h3>
        <p class="ed-step__desc">자동 디지털 신장 측정기로 아침/오후 편차를 감안한 고도화된 정량 계측을 시행하고, BMI와 세부 체성분을 자동 환산합니다.</p>
      </div>
    </div>
    <div class="ed-step reveal reveal-delay-1">
      <div class="ed-step__num"><span>02</span></div>
      <div class="ed-step__body">
        <span class="ed-step__eyebrow">Bone Age AI</span>
        <h3 class="ed-step__title">골연령 정밀 촬영 및 AI 분석</h3>
        <p class="ed-step__desc">저선량 X-ray로 좌측 손목을 촬영하고, 소아 골성숙도 판정 전용 솔루션을 가동하여 뼈의 실제 생체 나이를 도출합니다.</p>
      </div>
    </div>
    <div class="ed-step reveal reveal-delay-2">
      <div class="ed-step__num"><span>03</span></div>
      <div class="ed-step__body">
        <span class="ed-step__eyebrow">Hormone Test</span>
        <h3 class="ed-step__title">성장 인자 호르몬 검사</h3>
        <p class="ed-step__desc">채혈 검사로 인슐린양 성장인자(IGF-1)와 결합 단백질 수치를 측정해 현재 호르몬 대사 작용이 활발한지 점검합니다.</p>
      </div>
    </div>
    <div class="ed-step reveal reveal-delay-3">
      <div class="ed-step__num"><span>04</span></div>
      <div class="ed-step__body">
        <span class="ed-step__eyebrow">Final Report</span>
        <h3 class="ed-step__title">최종 성장 리포트 발급</h3>
        <p class="ed-step__desc">부모님의 유전 신장(MPH)과 종합 분석 데이터를 결합하여 최종 예상 신장과 분기별 권장 성장 목표를 브리핑합니다.</p>
      </div>
    </div>
  </div>
</section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
