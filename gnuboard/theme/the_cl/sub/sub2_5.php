<?php
$page_title = "저체중";
$page_description = "소아청소년 저체중의 원인을 정확하게 분석하고, 성장에 필요한 영양 공급과 흡수 능력을 개선하는 맞춤 영양 관리 프로그램입니다.";
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
    <p class="sub-hero-subtitle">저체중 대사 클리닉</p>
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

    <!-- ============================================================
         SPLIT INTRO (저체중 인트로)
         ============================================================ -->
    <section class="ed-split reveal">
      <div class="ed-split__text">
        <span class="ed-eyebrow">Underweight</span>
        <h2 class="ed-split__title ed-split__title--simple">
          살이 안 찌는 아이,<br>원인에 맞는 영양 평가가 필요합니다
        </h2>
        <div class="ed-split__body" style="margin-top: 24px;">
          <p class="lead">
            더클은 아이의 성장 흐름, 식사 습관, 체성분, 영양 상태를 함께 살펴 체중 정체의 원인을 찾고, 아이에게 맞는 현실적인 영양 관리 방향을 제안합니다.
          </p>
        </div>
      </div>
      <div class="ed-collage reveal reveal-delay-2">
        <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="잠실 삼성더클성장의원 소아내분비 전문의의 소아 저체중 원인 규명 및 영양 상태 정밀 진단" class="ed-collage__main">
        <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="송파구 삼성더클성장의원 소아 저체중 케어용 성장 클리닉 공간" class="ed-collage__sub">
      </div>
    </section>

    <!-- ============================================================
         SELF CHECK (저체중 자가진찰 고민)
         ============================================================ -->
    <section class="ed-check reveal" style="margin-top: 60px;">
      <div class="ed-check__head">
        <span class="ed-kicker">Self Check</span>
        <p class="ed-check__label">우리 아이,<br>이런 모습이 있나요?</p>
      </div>
      <ul class="ed-check__list">
        <li class="ed-check__item"><span class="ed-check__num">01</span><p>잘 먹이려고 노력해도 체중이 잘 늘지 않는다</p></li>
        <li class="ed-check__item"><span class="ed-check__num">02</span><p>편식이 심하거나 식사 시간이 늘 스트레스가 된다</p></li>
        <li class="ed-check__item"><span class="ed-check__num">03</span><p>또래보다 체중 백분위가 낮게 유지된다</p></li>
        <li class="ed-check__item"><span class="ed-check__num">04</span><p>키는 크는 것 같은데 몸이 마르고 체력이 부족해 보인다</p></li>
      </ul>
    </section>

    <!-- ============================================================
         EVALUATION PROCESS (저체중 평가 과정 Step 1 ~ 6)
         ============================================================ -->
    <section class="ed-features" style="padding-top: 60px; padding-bottom: 20px;">
      <div class="ed-sectlabel reveal" style="margin-bottom: 30px;">
        <span class="ed-kicker">Evaluation Flow</span>
        <h2>더클만의 <strong>저체중·영양 대사 평가 과정</strong></h2>
      </div>

      <div class="ed-steps" style="margin-top: 30px;">
        <!-- Step 1 -->
        <div class="ed-step reveal">
          <div class="ed-step__num"><span>01</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 1</span>
            <h3 class="ed-step__title">식사 습관과 섭식 행동 평가</h3>
            <p class="ed-step__desc">
              아이의 식사량, 편식, 간식·음료 섭취, 식사 환경, 식사 시간의 스트레스 요인을 확인합니다.
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
              현재 키와 체중뿐 아니라 과거 성장 곡선을 함께 확인하여 체중 증가가 언제부터 둔화되었는지 평가합니다.
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
              InBody 검사를 통해 근육량, 체지방량, 체수분 상태 등을 확인하고 단순히 마른 체형인지, 영양 보충이 필요한 상태인지 살펴봅니다.
            </p>
          </div>
        </div>
        <!-- Step 4 -->
        <div class="ed-step reveal reveal-delay-3">
          <div class="ed-step__num"><span>04</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 4</span>
            <h3 class="ed-step__title">성장 목표 범위 확인</h3>
            <p class="ed-step__desc">
              부모님의 키와 아이의 성장 흐름을 바탕으로 아이에게 맞는 성장 방향과 추적 목표를 설정합니다.
            </p>
          </div>
        </div>
        <!-- Step 5 -->
        <div class="ed-step reveal reveal-delay-4">
          <div class="ed-step__num"><span>05</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 5</span>
            <h3 class="ed-step__title">영양·대사 혈액검사</h3>
            <p class="ed-step__desc">
              필요한 경우 빈혈, 저장철, 비타민 D, 아연, 간·신장 기능, 염증 지표 등 체중 증가와 성장에 영향을 줄 수 있는 요인을 확인합니다.
            </p>
          </div>
        </div>
        <!-- Step 6 -->
        <div class="ed-step reveal reveal-delay-5">
          <div class="ed-step__num"><span>06</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 6</span>
            <h3 class="ed-step__title">맞춤 영양 관리 계획</h3>
            <p class="ed-step__desc">
              아이의 식사 패턴에 맞춰 칼로리 밀도를 높이는 방법, 식사 행동 교정, 필요 시 영양 보충식 활용까지 현실적으로 안내합니다.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         COMPREHENSIVE GOALS (최종 관리 방향)
         ============================================================ -->
    <section style="padding-top: 60px; padding-bottom: 40px;">
      <div class="ed-sectlabel reveal" style="margin-bottom: 30px; text-align: center;">
        <span class="ed-kicker">Diagnostic Plan</span>
        <h2>최종 <strong>관리 방향</strong></h2>
        <p style="font-size: 15px; color: var(--c-text-light); margin-top: 10px; line-height: 1.6; word-break: keep-all;">
          식생활 습관 개선과 대사 지표 분석을 통해 무리하지 않으면서도 건강하게 증량할 수 있는 관리 로드맵을 설계합니다.
        </p>
      </div>

      <div class="reveal" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 14px; margin-top: 30px; max-width: 900px; margin-left: auto; margin-right: auto;">
        <span class="ed-pill-badge">아이에게 맞는 건강한 체중 증가 목표 설정</span>
        <span class="ed-pill-badge">부족한 영양소가 있다면 근거에 기반한 보충 계획</span>
        <span class="ed-pill-badge">부모와 아이 모두 부담을 줄이는 식사 습관 개선</span>
        <span class="ed-pill-badge">성장 흐름에 따른 주기적 추적 관리</span>
      </div>
    </section>

    <!-- ============================================================
         TREATMENT STATEMENT (영양/대사 걱정 해결 밴드)
         ============================================================ -->
    <section class="ed-statement-band reveal">
      <h3>무리하게 억지로 먹이려고 애쓰고 계시진 않나요?</h3>
      <p>
        단순히 섭취량만 늘리는 것은 아이에게 스트레스가 되고 대사 불균형을 초래할 수 있습니다. 섭식 행동의 원인을 분석하고 영양의 밀도를 효율적으로 높여, 부모와 아이가 편안한 식사 환경 속에서 건강하게 증량하도록 돕습니다.
      </p>
    </section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
