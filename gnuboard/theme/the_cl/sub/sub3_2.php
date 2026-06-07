<?php
$page_title = "진료 절차";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Info</p>
    <h1 class="sub-hero-title">진료 절차</h1>
    <p class="sub-hero-subtitle">체계적이고 편안한 진료 안내</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo $G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">Info</span></li>
      <li class="separator">></li>
      <li class="current">진료 절차</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

<!-- 스플릿 인트로 (텍스트 좌 / 겹친 이미지 우) -->
<section class="ed-split reveal">
  <div class="ed-split__text">
    <span class="ed-eyebrow">Clinical Flow</span>
    <h2 class="ed-split__title">
      <span class="i1">첫 방문부터</span>
      <span class="i2">귀가까지,</span>
      <span class="i3"><strong>막힘없는 진료</strong></span>
    </h2>
    <div class="ed-split__body">
      <p class="lead">
        아이의 정서적 케어와 정교한 내분비 검사를 위한 통합 진료 가이드라인입니다.
      </p>
      <p>
        평균 소요 시간은 정밀 검사 포함 약 1시간에서 1시간 반입니다.
        아이가 병원을 무섭지 않은 곳으로 기억하도록, 모든 단계를 세심하게 안내합니다.
      </p>
    </div>
  </div>
  <div class="ed-collage reveal reveal-delay-2">
    <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="진료 절차" class="ed-collage__main">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="진료 대기" class="ed-collage__sub">
  </div>
</section>

<!-- 세로 프로세스 (5단계) -->
<section class="ed-features" style="padding-top: 40px;">
  <div class="ed-sectlabel reveal">
    <span class="ed-kicker">Step by Step</span>
    <h2>편안한 <strong>5단계 진료 프로세스</strong></h2>
  </div>
  <div class="ed-steps" style="margin-top: 30px;">
    <div class="ed-step reveal">
      <div class="ed-step__num"><span>01</span></div>
      <div class="ed-step__body">
        <span class="ed-step__eyebrow">Reception</span>
        <h3 class="ed-step__title">예약 접수 및 성장 예진표 작성</h3>
        <p class="ed-step__desc">내원 후 아늑한 대기실에서 아동의 수면 시간, 식습관, 부모님의 신장 등을 기록하는 예진 차트를 작성합니다.</p>
      </div>
    </div>
    <div class="ed-step reveal reveal-delay-1">
      <div class="ed-step__num"><span>02</span></div>
      <div class="ed-step__body">
        <span class="ed-step__eyebrow">Measurement</span>
        <h3 class="ed-step__title">기초 신체 계측 및 저선량 뼈나이 촬영</h3>
        <p class="ed-step__desc">오차 없는 정량 측정기로 신체 스펙을 계측하고, X-ray실로 이동해 저선량 촬영을 실시합니다.</p>
      </div>
    </div>
    <div class="ed-step reveal reveal-delay-2">
      <div class="ed-step__num"><span>03</span></div>
      <div class="ed-step__body">
        <span class="ed-step__eyebrow">Consultation</span>
        <h3 class="ed-step__title">대표원장 1:1 맞춤 진료 및 정밀 문진</h3>
        <p class="ed-step__desc">소아 내분비 세부전문의 노유선 원장이 손목 엑스레이 필름을 면밀히 판독하고 성장 장애 원인을 감별합니다.</p>
      </div>
    </div>
    <div class="ed-step reveal reveal-delay-3">
      <div class="ed-step__num"><span>04</span></div>
      <div class="ed-step__body">
        <span class="ed-step__eyebrow">Lab Test</span>
        <h3 class="ed-step__title">필요 시 추가 정밀 채혈/호르몬 검사</h3>
        <p class="ed-step__desc">성조숙증이나 호르몬 결핍이 강하게 우려되는 경우 아프지 않은 주사 침으로 미세 채혈을 시행해 검체를 분석합니다.</p>
      </div>
    </div>
    <div class="ed-step reveal reveal-delay-4">
      <div class="ed-step__num"><span>05</span></div>
      <div class="ed-step__body">
        <span class="ed-step__eyebrow">Solution</span>
        <h3 class="ed-step__title">성장 솔루션 제공 및 귀가 수납</h3>
        <p class="ed-step__desc">치료 방향성 리포트를 증정하고 영양/식습관 가이드를 설명하며, 다음 추적 관찰 일정을 예약 수납합니다.</p>
      </div>
    </div>
  </div>
</section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
