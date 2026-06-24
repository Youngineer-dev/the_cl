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
    <p class="sub-hero-subtitle">성장 방해 알레르기 관리 클리닉</p>
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

    <!-- ============================================================
         SPLIT INTRO (알레르기 인트로)
         ============================================================ -->
    <section class="ed-split reveal">
      <div class="ed-split__text">
        <span class="ed-eyebrow">Allergy</span>
        <h2 class="ed-split__title ed-split__title--simple">
          알레르기 비염과 아토피,<br>아이의 성장을 방해할 수 있습니다
        </h2>
        <div class="ed-split__body" style="margin-top: 24px;">
          <p class="lead">
            알레르기 비염과 아토피로 인한 코막힘, 수면장애, 가려움, 잦은 불편감은 아이의 생활 리듬과 성장 환경에 영향을 줄 수 있습니다. 더클은 성장기 아이의 수면과 일상생활을 방해하는 알레르기 요인을 확인하고, 아이에게 맞는 관리 방향을 함께 찾아갑니다.
          </p>
        </div>
      </div>
      <div class="ed-collage reveal reveal-delay-2">
        <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="알레르기 정밀 진단" class="ed-collage__main">
        <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="성장 클리닉 공간" class="ed-collage__sub">
      </div>
    </section>

    <!-- ============================================================
         SELF CHECK (알레르기 자가진찰 고민)
         ============================================================ -->
    <section class="ed-check reveal" style="margin-top: 60px;">
      <div class="ed-check__head">
        <span class="ed-kicker">Self Check</span>
        <p class="ed-check__label">이런 경우<br>평가를 권합니다</p>
      </div>
      <ul class="ed-check__list">
        <li class="ed-check__item"><span class="ed-check__num">01</span><p>코막힘 때문에 입으로 숨을 쉬는 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">02</span><p>밤에 코가 막혀 자주 깨는 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">03</span><p>재채기, 콧물, 코가려움이 반복되는 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">04</span><p>아토피로 가려움과 수면장애가 있는 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">05</span><p>알레르기 면역치료가 가능한지 궁금한 경우</p></li>
      </ul>
    </section>

    <!-- ============================================================
         EVALUATION PROCESS (알레르기 평가 과정 Step 1 ~ 5)
         ============================================================ -->
    <section class="ed-features" style="padding-top: 60px; padding-bottom: 20px;">
      <div class="ed-sectlabel reveal" style="margin-bottom: 30px;">
        <span class="ed-kicker">Evaluation Flow</span>
        <h2>더클만의 <strong>알레르기 평가 과정</strong></h2>
      </div>

      <div class="ed-steps" style="margin-top: 30px;">
        <!-- Step 1 -->
        <div class="ed-step reveal">
          <div class="ed-step__num"><span>01</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 1</span>
            <h3 class="ed-step__title">증상 확인</h3>
            <p class="ed-step__desc">
              재채기, 콧물, 코막힘, 코골이, 입호흡, 눈·피부 가려움 등 반복되는 증상을 확인합니다.
            </p>
          </div>
        </div>
        <!-- Step 2 -->
        <div class="ed-step reveal reveal-delay-1">
          <div class="ed-step__num"><span>02</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 2</span>
            <h3 class="ed-step__title">알레르기 가능성 평가</h3>
            <p class="ed-step__desc">
              증상 양상, 반복 시기, 가족력, 생활환경을 바탕으로 알레르기 비염과 아토피 가능성을 살핍니다.
            </p>
          </div>
        </div>
        <!-- Step 3 -->
        <div class="ed-step reveal reveal-delay-2">
          <div class="ed-step__num"><span>03</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 3</span>
            <h3 class="ed-step__title">원인 알레르겐 검사</h3>
            <p class="ed-step__desc">
              필요 시 MAST 또는 특이 IgE 검사로 주요 알레르겐 감작 여부를 확인합니다.
            </p>
          </div>
        </div>
        <!-- Step 4 -->
        <div class="ed-step reveal reveal-delay-3">
          <div class="ed-step__num"><span>04</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 4</span>
            <h3 class="ed-step__title">생활환경 관리</h3>
            <p class="ed-step__desc">
              침구, 실내 먼지, 반려동물, 꽃가루, 피부 보습 등 아이에게 필요한 관리 방법을 안내합니다.
            </p>
          </div>
        </div>
        <!-- Step 5 -->
        <div class="ed-step reveal reveal-delay-4">
          <div class="ed-step__num"><span>05</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 5</span>
            <h3 class="ed-step__title">맞춤 치료 상담</h3>
            <p class="ed-step__desc">
              증상 정도와 원인에 따라 약물치료, 환경관리, 피부관리, 필요 시 면역치료 가능성을 상담합니다.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         COMPREHENSIVE GOALS (관리 방향)
         ============================================================ -->
    <section style="padding-top: 60px; padding-bottom: 40px;">
      <div class="ed-sectlabel reveal" style="margin-bottom: 30px; text-align: center;">
        <span class="ed-kicker">Diagnostic Plan</span>
        <h2>관리 <strong>방향</strong></h2>
        <p style="font-size: 15px; color: var(--c-text-light); margin-top: 10px; line-height: 1.6; word-break: keep-all;">
          알레르기 유발 요인을 체계적으로 관리하여 아이가 깊은 수면을 취하고 건강한 일상을 보낼 수 있도록 지원합니다.
        </p>
      </div>

      <div class="reveal" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 14px; margin-top: 30px; max-width: 900px; margin-left: auto; margin-right: auto;">
        <span class="ed-pill-badge">알레르기 원인 확인</span>
        <span class="ed-pill-badge">비염·아토피 증상 관리</span>
        <span class="ed-pill-badge">수면과 생활 리듬 개선</span>
        <span class="ed-pill-badge">성장기 아이의 건강한 성장 환경 관리</span>
      </div>
    </section>

    <!-- ============================================================
         TREATMENT STATEMENT (알레르기 걱정 해결 밴드)
         ============================================================ -->
    <section class="ed-statement-band reveal">
      <h3>비염이나 아토피가 아이의 성장을 방해할까 염려되시나요?</h3>
      <p>
        잦은 코막힘으로 인한 구호흡(입호흡)과 아토피 가려움증은 깊은 잠을 방해하여 성장호르몬 분비 효율을 떨어뜨릴 수 있습니다. 정확한 알레르겐 원인을 분석해 일상과 수면의 질을 회복시켜 최상의 성장 환경을 구축합니다.
      </p>
    </section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
