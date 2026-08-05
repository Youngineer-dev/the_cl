<?php
$page_title = "소아비만";
$page_description = "어린이 대사 증후군 예방 및 키 성장을 함께 고려하는 삼성더클성장의원의 체계적인 소아비만 치료 및 식생활 개선 클리닉입니다.";
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
    <h1 class="sub-hero-title">소아비만</h1>
    <p class="sub-hero-subtitle">소아 비만 클리닉</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">Clinic</span></li>
      <li class="separator">></li>
      <li class="current">소아비만</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

    <!-- ============================================================
         SPLIT INTRO (소아비만 인트로)
         ============================================================ -->
    <section class="ed-split reveal">
      <div class="ed-split__text">
        <span class="ed-eyebrow">소아 비만 클리닉</span>
        <h2 class="ed-split__title ed-split__title--simple">
          아이의 <strong>체중 증가</strong>는 <span class="br-all" aria-hidden="true"></span>단순한 의지 문제가 아닐 수 있습니다.
        </h2>
        <div class="ed-split__body" style="margin-top: 24px;">
          <p class="lead" style="margin-bottom: 16px;">
            소아 비만은 식습관, 수면, 활동량, 가족력, 호르몬 변화, 대사 상태가 함께 영향을 주는 경우가 많습니다. 무조건 적게 먹이거나 갑자기 운동량을 늘리는 방식보다, 아이의 성장 흐름과 대사 상태를 함께 평가하며 건강하게 관리하는 것이 중요합니다.
          </p>
          <p class="lead">
            더클은 아이에게 상처를 주는 체중 압박이 아닌, 성장을 지키면서 대사 건강을 회복하는 방향으로 진료합니다.
          </p>
        </div>
      </div>
      <div class="ed-collage ed-collage--empty reveal reveal-delay-2" aria-hidden="true"></div>
    </section>

    <!-- ============================================================
         SELF CHECK (소아비만 자가진찰 고민)
         ============================================================ -->
    <section class="ed-check reveal" style="margin-top: 60px;">
      <div class="ed-check__head">
        <span class="ed-kicker">Self Check</span>
        <p class="ed-check__label">우리 아이, <br class="pc-only"> 이런 모습이 있나요?</p>
      </div>
      <ul class="ed-check__list">
        <li class="ed-check__item"><span class="ed-check__num">01</span><p>체중이 빠르게 늘고 있다</p></li>
        <li class="ed-check__item"><span class="ed-check__num">02</span><p>목덜미나 겨드랑이 피부가 거뭇하게 보인다</p></li>
        <li class="ed-check__item"><span class="ed-check__num">03</span><p>또래보다 체중 또는 BMI 백분위가 높다</p></li>
        <li class="ed-check__item"><span class="ed-check__num">04</span><p>체중 문제로 식사 시간이 가족 모두에게 스트레스가 된다</p></li>
      </ul>
    </section>

    <!-- ============================================================
         EVALUATION PROCESS (소아비만 평가 과정 Step 1 ~ 5)
         ============================================================ -->
    <section class="ed-features" style="padding-top: 60px; padding-bottom: 20px;">
      <div class="ed-sectlabel reveal" style="margin-bottom: 30px;">
        <span class="ed-kicker">Evaluation Flow</span>
        <h2>더클만의 <strong>소아비만 평가 과정</strong></h2>
      </div>

      <div class="ed-steps" style="margin-top: 30px;">
        <!-- Step 1 -->
        <div class="ed-step reveal">
          <div class="ed-step__num"><span>01</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 1</span>
            <h3 class="ed-step__title">체중 증가 원인 평가</h3>
            <p class="ed-step__desc">
              최근 체중 증가 시점, 식사 패턴, 간식·음료 섭취, 활동량, 스크린 타임, 수면 습관, 스트레스 요인을 확인합니다. 아이에게 부담이나 낙인이 되지 않도록 건강 중심의 상담을 진행합니다.
            </p>
          </div>
        </div>
        <!-- Step 2 -->
        <div class="ed-step reveal reveal-delay-1">
          <div class="ed-step__num"><span>02</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 2</span>
            <h3 class="ed-step__title">성장도표 분석</h3>
            <p class="ed-step__desc">
              키, 체중, BMI를 소아 성장도표에 맞춰 분석하고, 과거 성장 곡선과 비교하여 체중 증가의 흐름을 확인합니다.
            </p>
          </div>
        </div>
        <!-- Step 3 -->
        <div class="ed-step reveal reveal-delay-2">
          <div class="ed-step__num"><span>03</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 3</span>
            <h3 class="ed-step__title">체성분 분석</h3>
            <p class="ed-step__desc">
              InBody 검사를 통해 체지방률, 근육량, 체수분 상태를 확인합니다. <br class="pc-only"> 단순히 체중 숫자만 보는 것이 아니라, 아이의 몸 구성을 함께 평가합니다.
            </p>
          </div>
        </div>
        <!-- Step 4 -->
        <div class="ed-step reveal reveal-delay-3">
          <div class="ed-step__num"><span>04</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 4</span>
            <h3 class="ed-step__title">대사·합병증 혈액검사</h3>
            <p class="ed-step__desc">
              공복혈당, HbA1c, 인슐린, 지질검사, 간수치, 요산, 갑상선 기능, 염증 지표 등을 확인합니다.<br>이를 통해 체중 증가와 관련된 대사 이상이 동반되어 있는지 평가합니다.
            </p>
          </div>
        </div>
        <!-- Step 5 -->
        <div class="ed-step reveal reveal-delay-4">
          <div class="ed-step__num"><span>05</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 5</span>
            <h3 class="ed-step__title">맞춤 생활습관 관리</h3>
            <p class="ed-step__desc">
              아이의 나이, 성장 단계, 가족의 생활 패턴에 맞춰 식사, 수면, 활동량을 현실적으로 조정합니다. 필요한 경우 의학적 기준에 따라 약물치료 가능성도 함께 상담합니다.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         COMPREHENSIVE GOALS (최종 관리 방향)
         ============================================================ -->
    <section style="padding-top: 60px; padding-bottom: 80px;">
      <div class="ed-sectlabel reveal" style="margin-bottom: 30px; text-align: center;">
        <span class="ed-kicker">Diagnostic Plan</span>
        <h2>최종 <strong>관리 방향</strong></h2>
        <p style="font-size: 15px; color: var(--c-text-light); margin-top: 10px; line-height: 1.6; word-break: keep-all;">
          정밀 진단 결과를 종합하여 아이의 건강을 지키며 효율적인 성장이 이루어지도록 돕습니다.
        </p>
      </div>

      <div class="reveal" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 14px; margin-top: 30px; max-width: 900px; margin-left: auto; margin-right: auto;">
        <span class="ed-pill-badge">성장을 지키는 건강한 체중 관리 목표 설정</span>
        <span class="ed-pill-badge">인슐린 저항성, 지방간, 이상지질혈증 등 <br class="mo-only">대사 위험 조기 확인</span>
        <span class="ed-pill-badge">아이에게 부담을 주지 않는 가족 중심 생활습관 개선</span>
        <span class="ed-pill-badge">3개월 또는 6개월 단위의 <br class="mo-only">성장·체성분·대사 지표 추적 관리</span>
      </div>
    </section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
