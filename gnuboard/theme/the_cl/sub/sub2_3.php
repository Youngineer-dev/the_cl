<?php
$page_title = "성조숙";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Clinic</p>
    <h1 class="sub-hero-title">성조숙</h1>
    <p class="sub-hero-subtitle">빠른 사춘기를 위한 적기 치료</p>
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
      <li class="current">성조숙</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

<!-- 스플릿 인트로 (미러형: 이미지 좌 / 텍스트 우) -->
<section class="ed-split ed-split--reverse reveal">
  <div class="ed-split__text">
    <span class="ed-eyebrow">Precocious Puberty</span>
    <h2 class="ed-split__title">
      <span class="i1">이른 사춘기는</span>
      <span class="i2">성장을 일찍</span>
      <span class="i3"><strong>마감시킵니다</strong></span>
    </h2>
    <div class="ed-split__body">
      <p class="lead">
        성조숙증은 일시적으로 급성장하는 듯 보이나, 성장판을 빨리 닫아 성인 키를 저해합니다.
      </p>
      <p>
        또래보다 일찍 성호르몬이 분비되면 신체 변화로 인한 심리적 불안까지 동반됩니다.
        그래서 성조숙증은 무엇보다 <strong>치료 시기(타이밍)</strong>가 결정적인 질환입니다.
      </p>
    </div>
  </div>
  <div class="ed-collage reveal reveal-delay-2">
    <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="성조숙 진단" class="ed-collage__main">
    <img src="<?php echo $G5_URL; ?>/img/programs.png" alt="호르몬 검사" class="ed-collage__sub">
  </div>
</section>

<!-- 자가체크 밴드 -->
<section class="ed-check reveal">
  <div class="ed-check__head">
    <span class="ed-kicker">Self Check</span>
    <p class="ed-check__label">성조숙증<br>의심 신호</p>
  </div>
  <ul class="ed-check__list">
    <li class="ed-check__item"><span class="ed-check__num">01</span><p>여아: 만 8세 이전 가슴 몽우리가 잡히고 통증을 느낄 때</p></li>
    <li class="ed-check__item"><span class="ed-check__num">02</span><p>남아: 만 9세 이전 고환이 메추리알 크기 이상 커질 때</p></li>
    <li class="ed-check__item"><span class="ed-check__num">03</span><p>또래보다 갑자기 1년에 7~8cm 이상 급격히 클 때</p></li>
    <li class="ed-check__item"><span class="ed-check__num">04</span><p>여드름이 나고 머리·정수리 체취가 심해질 때</p></li>
    <li class="ed-check__item"><span class="ed-check__num">05</span><p>음모나 액모가 발달하기 시작할 때</p></li>
    <li class="ed-check__item"><span class="ed-check__num">06</span><p>피하 지방이 빠르게 단단해지며 골격이 드러날 때</p></li>
  </ul>
</section>

<!-- 세로 프로세스 (3단계) -->
<section class="ed-features" style="padding-top: 70px;">
  <div class="ed-sectlabel reveal">
    <span class="ed-kicker">Treatment Flow</span>
    <h2>속도를 늦추는 <strong>3단계 치료</strong></h2>
  </div>
  <div class="ed-steps" style="margin-top: 30px;">
    <div class="ed-step reveal">
      <div class="ed-step__num"><span>01</span></div>
      <div class="ed-step__body">
        <span class="ed-step__eyebrow">Diagnosis</span>
        <h3 class="ed-step__title">GnRHa 자극 검사</h3>
        <p class="ed-step__desc">일정 간격으로 호르몬 자극 반응을 평가하여 시상하부-뇌하수체-성선 축이 조기에 활성화되었는지 정밀 감별합니다.</p>
      </div>
    </div>
    <div class="ed-step reveal reveal-delay-1">
      <div class="ed-step__num"><span>02</span></div>
      <div class="ed-step__body">
        <span class="ed-step__eyebrow">Suppression</span>
        <h3 class="ed-step__title">성조숙증 억제 주사 요법</h3>
        <p class="ed-step__desc">4주 또는 3달 간격으로 성호르몬 억제 주사를 처방하여 성장판의 뼈 노화 진행을 감속시키고 완만한 성장 속도를 회복시킵니다.</p>
      </div>
    </div>
    <div class="ed-step reveal reveal-delay-2">
      <div class="ed-step__num"><span>03</span></div>
      <div class="ed-step__body">
        <span class="ed-step__eyebrow">Care</span>
        <h3 class="ed-step__title">정서 및 신체 밸런스 케어</h3>
        <p class="ed-step__desc">이른 사춘기 변화로 위축될 수 있는 소아의 심리 상태를 위로하고 건강한 또래 관계를 유지하도록 돕습니다.</p>
      </div>
    </div>
  </div>
</section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
