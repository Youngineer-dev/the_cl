<?php
$page_title = "저신장";
$page_description = "성장 속도가 느린 아이를 위한 저신장 정밀 검사, 골연령(뼈나이) 판독 및 삼성더클만의 맞춤형 성장호르몬 치료 솔루션을 안내합니다.";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>
<style>
/* Clinic/Info 서브페이지 모바일 타이포 · 여백 보완 (PC 레이아웃 유지) */
@media (max-width: 768px) {
  .ed-split__title--simple,
  .ed-split__title {
    word-break: keep-all;
    letter-spacing: -0.4px;
  }
  .ed-split__body .lead {
    word-break: keep-all;
  }
  .ed-check {
    margin-top: 36px !important;
  }
  .ed-features {
    padding-top: 40px !important;
  }
  section[style*="padding-top: 60px"] {
    padding-top: 40px !important;
  }
  section[style*="padding-bottom: 80px"] {
    padding-bottom: 48px !important;
  }
}
@media (max-width: 480px) {
  .ed-split__title--simple {
    font-size: 20px !important;
  }
}
</style>


<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Clinic</p>
    <h1 class="sub-hero-title">저신장 - 성장호르몬 치료</h1>
    <p class="sub-hero-subtitle">정밀 저신장 클리닉</p>
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
      <li class="current">저신장</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

    <!-- ============================================================
         SPLIT INTRO (저신장 인트로)
         ============================================================ -->
    <section class="ed-split reveal">
      <div class="ed-split__text">
        <span class="ed-eyebrow">정밀 저신장 클리닉</span>
        <h2 class="ed-split__title ed-split__title--simple">
          왜 우리 아이는 <span class="br-all" aria-hidden="true"></span> <strong>또래보다 작을까요?</strong>
        </h2>
        <div class="ed-split__body" style="margin-top: 24px;">
          <p class="lead">
            아이의 성장곡선과 성장속도를 면밀히 확인하고, 저신장의 원인을 감별하여 성장호르몬 치료가 필요한지, 꾸준한 추적이 필요한지, 생활 관리가 우선인지 판단합니다.
          </p>
        </div>
      </div>
      <div class="ed-collage reveal reveal-delay-2">
        <img src="<?php echo $G5_URL; ?>/img/prog_short_main.jpg" alt="잠실 삼성더클성장의원 소아내분비 전문의의 저신장 정밀 성장 발달 진단" class="ed-collage__main">
        <img src="<?php echo $G5_URL; ?>/img/prog_short_sub.jpg" alt="송파구 삼성더클성장의원 쾌적한 소아청소년 성장 클리닉 공간" class="ed-collage__sub">
      </div>
    </section>

    <!-- ============================================================
         SELF CHECK (저신장 자가진찰 고민)
         ============================================================ -->
    <section class="ed-check reveal" style="margin-top: 60px;">
      <div class="ed-check__head">
        <span class="ed-kicker">Self Check</span>
        <p class="ed-check__label">이런 경우 <br class="pc-only"> 평가가 필요합니다</p>
      </div>
      <ul class="ed-check__list">
        <li class="ed-check__item"><span class="ed-check__num">01</span><p>1년에 4cm 미만으로 자르는 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">02</span><p>또래보다 머리 하나 정도 작아 보이는 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">03</span><p>성장곡선이 점차 아래로 떨어지는 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">04</span><p>부모 키를 고려해도 작다고 느껴지는 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">05</span><p>최종키가 걱정되는 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">06</span><p>성장호르몬 치료가 도움이 될지 궁금한 경우</p></li>
      </ul>
    </section>

    <!-- ============================================================
         EVALUATION PROCESS (저신장 평가 과정 Step 1 ~ 6)
         ============================================================ -->
    <section class="ed-features" style="padding-top: 60px; padding-bottom: 20px;">
      <div class="ed-sectlabel reveal" style="margin-bottom: 30px;">
        <span class="ed-kicker">Evaluation Flow</span>
        <h2>더클만의 <strong>저신장 평가 과정</strong></h2>
      </div>

      <div class="ed-steps" style="margin-top: 30px;">
        <!-- Step 1 -->
        <div class="ed-step reveal">
          <div class="ed-step__num"><span>01</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 1</span>
            <h3 class="ed-step__title">병력 및 가족력 분석</h3>
            <p class="ed-step__desc">
              출생력, 성장 과정, 과거 질환, 복용 약물, 부모님의 키와 가족 성장 패턴을 확인하여 저신장의 원인이 될 수 있는 기본 요인을 살핍니다.
            </p>
          </div>
        </div>
        <!-- Step 2 -->
        <div class="ed-step reveal reveal-delay-1">
          <div class="ed-step__num"><span>02</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 2</span>
            <h3 class="ed-step__title">성장곡선 및 성장속도 분석</h3>
            <p class="ed-step__desc">
              현재 키 한 번의 수치만 보지 않습니다. 과거 성장 기록을 함께 확인하여 성장속도가 유지되고 있는지, 성장곡선에서 이탈하고 있는지 평가합니다.
            </p>
          </div>
        </div>
        <!-- Step 3 -->
        <div class="ed-step reveal reveal-delay-2">
          <div class="ed-step__num"><span>03</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 3</span>
            <h3 class="ed-step__title">유전적 성장 범위 평가</h3>
            <p class="ed-step__desc">
              부모님의 키를 바탕으로 목표키와 유전적 성장 범위를 확인합니다.<br>아이의 현재 키와 성장 흐름이 가족적 기대 범위 안에 있는지 분석합니다.
            </p>
          </div>
        </div>
        <!-- Step 4 -->
        <div class="ed-step reveal reveal-delay-3">
          <div class="ed-step__num"><span>04</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 4</span>
            <h3 class="ed-step__title">정밀 신체진찰</h3>
            <p class="ed-step__desc">
              체형, 신체 비율, 자세, 사춘기 진행 상태, 성장 관련 이상 소견을 확인합니다.<br>저신장과 관련된 신체적 단서가 있는지 전문의가 직접 평가합니다.
            </p>
          </div>
        </div>
        <!-- Step 5 -->
        <div class="ed-step reveal reveal-delay-4">
          <div class="ed-step__num"><span>05</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 5</span>
            <h3 class="ed-step__title">뼈나이·성장판 평가</h3>
            <p class="ed-step__desc">
              X-ray를 통해 뼈나이와 성장판 성숙도를 확인합니다.<br>실제 나이와 뼈나이의 차이, 잔여 성장 가능성, 사춘기 진행과의 균형을 함께 봅니다.
            </p>
          </div>
        </div>
        <!-- Step 6 -->
        <div class="ed-step reveal reveal-delay-5">
          <div class="ed-step__num"><span>06</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 6</span>
            <h3 class="ed-step__title">저신장 원인 감별 검사</h3>
            <p class="ed-step__desc">
              필요한 경우 성장호르몬 축, 갑상선 기능, 빈혈, 비타민 D, 영양 상태, 간·신장 기능, 염증 및 만성질환 가능성을 확인합니다. 성장이 느린 원인이 체질적인지, 치료가 필요한 의학적 원인이 있는지 감별합니다.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         COMPREHENSIVE GOALS (종합 저신장 진단 및 치료 계획)
         ============================================================ -->
    <section style="padding-top: 60px; padding-bottom: 40px;">
      <div class="ed-sectlabel reveal" style="margin-bottom: 30px; text-align: center;">
        <span class="ed-kicker">Diagnostic Plan</span>
        <h2>종합 저신장 진단 및 <strong>치료 계획</strong></h2>
        <p style="font-size: 15px; color: var(--c-text-light); margin-top: 10px; line-height: 1.6; word-break: keep-all;">
          앞선 평가 결과를 종합하여 아이의 저신장 원인을 분석하고, 성장호르몬 치료가 필요한지, 추적 관찰이 적절한지, 영양·수면·운동 관리가 우선인지 결정합니다.
        </p>
      </div>

      <div class="reveal" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 14px; margin-top: 30px; max-width: 900px; margin-left: auto; margin-right: auto;">
        <span class="ed-pill-badge">성장속도 저하 여부 확인</span>
        <span class="ed-pill-badge">병적 저신장 원인 감별</span>
        <span class="ed-pill-badge">뼈나이와 잔여 성장 가능성 평가</span>
        <span class="ed-pill-badge">성장호르몬 치료 필요성 검토</span>
        <span class="ed-pill-badge">아이 맞춤형 추적 및 치료 계획 수립</span>
      </div>
    </section>

    <!-- ============================================================
         TREATMENT STATEMENT (성장호르몬 고민 해결 밴드)
         ============================================================ -->
    <section class="ed-statement-band reveal">
      <h3>성장호르몬 치료가 필요한지 고민되시나요?</h3>
      <p>
        모든 키 작은 아이에게 성장호르몬 치료가 필요한 것은 아닙니다. 더클은 성장속도, 뼈나이, 성장판 상태, 성장잠재력, 혈액검사 결과를 종합적으로 분석하여 치료가 도움이 될 아이를 신중하게 선별합니다.
      </p>
    </section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
