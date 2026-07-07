<?php
$page_title = "성조숙증";
$page_description = "송파구 잠실 성조숙증 검사 및 치료. 아이의 뼈나이와 성장 판독을 통해 2차 성징의 속도를 조절하고 건강한 성장을 도모합니다.";
$page_schema_json = [
    "@context" => "https://schema.org",
    "@type" => "MedicalCondition",
    "name" => "성조숙증",
    "alternateName" => "Precocious Puberty",
    "description" => "또래 평균보다 사춘기 발달이 비정상적으로 빠르게 나타나는 소아 내분비 질환으로, 뼈나이(골연령)가 가속화되어 잔여 성장 가능 키가 감소할 수 있습니다.",
    "possibleTreatment" => [
        [
            "@type" => "MedicalTherapy",
            "name" => "사춘기 지연 치료 (성호르몬 억제 주사 치료)"
        ],
        [
            "@type" => "MedicalTherapy",
            "name" => "성장호르몬 병합 치료"
        ]
    ],
    "associatedAnatomy" => [
        "@type" => "AnatomicalStructure",
        "name" => "내분비계"
    ],
    "medicalSpecialty" => "Pediatrics"
];
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Clinic</p>
    <h1 class="sub-hero-title">성조숙증 검사 및 치료</h1>
    <p class="sub-hero-subtitle">성조숙증 · 빠른 사춘기 클리닉</p>
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
      <li class="current">성조숙증</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

    <!-- ============================================================
         SPLIT INTRO (성조숙증 인트로)
         ============================================================ -->
    <section class="ed-split reveal">
      <div class="ed-split__text">
        <span class="ed-eyebrow">Precocious Puberty</span>
        <h2 class="ed-split__title ed-split__title--simple">
          우리 아이 사춘기,<br>너무 빠른 걸까요?
        </h2>
        <div class="ed-split__body" style="margin-top: 24px;">
          <p class="lead">
            아이의 사춘기 진행 단계, 성장 속도, 뼈나이와 호르몬 상태를 종합적으로 평가하여 성조숙증인지, 빠른 사춘기인지, 치료가 필요한 시점인지 신중하게 판단하고 최종키 손실을 줄일 수 있는 중요한 시기를 놓치지 않도록 확인합니다.
          </p>
        </div>
      </div>
      <div class="ed-collage reveal reveal-delay-2">
        <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="잠실 삼성더클성장의원 소아내분비 전문의의 성조숙증 정밀 호르몬 및 뼈나이 진단" class="ed-collage__main">
        <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="송파구 삼성더클성장의원 성조숙증 진단용 성장 클리닉 공간" class="ed-collage__sub">
      </div>
    </section>

    <!-- ============================================================
         SELF CHECK (성조숙증 자가진찰 고민)
         ============================================================ -->
    <section class="ed-check reveal" style="margin-top: 60px;">
      <div class="ed-check__head">
        <span class="ed-kicker">Self Check</span>
        <p class="ed-check__label">이런 경우<br>평가가 필요합니다</p>
      </div>
      <ul class="ed-check__list">
        <li class="ed-check__item"><span class="ed-check__num">01</span><p>여아 만 8세 전 유방 발달이 보이는 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">02</span><p>남아 만 9세 전 고환 크기 증가가 의심되는 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">03</span><p>또래보다 체형 변화가 빠른 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">04</span><p>키가 갑자기 빨리 크기 시작한 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">05</span><p>뼈나이가 실제 나이보다 빠르다고 들은 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">06</span><p>성장판이 빨리 닫히거나 최종키가 줄어들까 걱정되는 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">07</span><p>성억제 치료가 필요한지 궁금한 경우</p></li>
      </ul>
    </section>

    <!-- ============================================================
         EVALUATION PROCESS (성조숙증 평가 과정 Step 1 ~ 7)
         ============================================================ -->
    <section class="ed-features" style="padding-top: 60px; padding-bottom: 20px;">
      <div class="ed-sectlabel reveal" style="margin-bottom: 30px;">
        <span class="ed-kicker">Evaluation Flow</span>
        <h2>더클만의 <strong>성조숙증·빠른 사춘기 평가 과정</strong></h2>
      </div>

      <div class="ed-steps" style="margin-top: 30px;">
        <!-- Step 1 -->
        <div class="ed-step reveal">
          <div class="ed-step__num"><span>01</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 1</span>
            <h3 class="ed-step__title">병력 및 가족력 분석</h3>
            <p class="ed-step__desc">
              사춘기 변화가 시작된 시점, 진행 속도, 키 성장 변화, 가족의 사춘기 시기, 환경 요인 등을 확인합니다.
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
              현재 키와 체중뿐 아니라 과거 성장 기록을 함께 확인하여 최근 키가 갑자기 빨라졌는지, 성장 속도가 사춘기 진행과 맞물려 변화했는지 평가합니다.
            </p>
          </div>
        </div>
        <!-- Step 3 -->
        <div class="ed-step reveal reveal-delay-2">
          <div class="ed-step__num"><span>03</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 3</span>
            <h3 class="ed-step__title">사춘기 신체진찰</h3>
            <p class="ed-step__desc">
              여아의 유방 발달, 남아의 고환 크기, 체모, 여드름, 체형 변화 등 사춘기 진행 정도를 전문의가 직접 확인합니다.
            </p>
          </div>
        </div>
        <!-- Step 4 -->
        <div class="ed-step reveal reveal-delay-3">
          <div class="ed-step__num"><span>04</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 4</span>
            <h3 class="ed-step__title">뼈나이·성장판 평가</h3>
            <p class="ed-step__desc">
              X-ray를 통해 실제 나이보다 뼈나이가 얼마나 앞서 있는지 확인하고, 사춘기 진행이 잔여 성장 가능성에 미치는 영향을 함께 평가합니다.
            </p>
          </div>
        </div>
        <!-- Step 5 -->
        <div class="ed-step reveal reveal-delay-4">
          <div class="ed-step__num"><span>05</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 5</span>
            <h3 class="ed-step__title">사춘기 호르몬 검사</h3>
            <p class="ed-step__desc">
              LH, FSH, Estradiol 또는 Testosterone 등 기초 호르몬을 확인합니다. 필요한 경우 GnRH 자극검사를 통해 치료가 필요한 성조숙증인지 평가합니다.
            </p>
          </div>
        </div>
        <!-- Step 6 -->
        <div class="ed-step reveal reveal-delay-5">
          <div class="ed-step__num"><span>06</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 6</span>
            <h3 class="ed-step__title">필요 시 초음파 평가</h3>
            <p class="ed-step__desc">
              여아에서는 자궁·난소 상태를 확인하기 위해 필요 시 골반 초음파를 시행할 수 있습니다. 남아에서는 진찰 소견에 따라 고환 평가가 필요할 수 있습니다.
            </p>
          </div>
        </div>
        <!-- Step 7 -->
        <div class="ed-step reveal reveal-delay-6">
          <div class="ed-step__num"><span>07</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 7</span>
            <h3 class="ed-step__title">치료 필요성 및 추적 계획 수립</h3>
            <p class="ed-step__desc">
              검사 결과를 종합하여 성조숙증 여부, 사춘기 진행 속도, 예상 성인키 변화를 평가하고 성억제 치료가 필요한지, 일정 간격으로 추적 관찰할지 결정합니다.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         COMPREHENSIVE GOALS (종합 사춘기·성장판 분석)
         ============================================================ -->
    <section style="padding-top: 60px; padding-bottom: 40px;">
      <div class="ed-sectlabel reveal" style="margin-bottom: 30px; text-align: center;">
        <span class="ed-kicker">Diagnostic Plan</span>
        <h2>종합 사춘기·<strong>성장판 분석</strong></h2>
        <p style="font-size: 15px; color: var(--c-text-light); margin-top: 10px; line-height: 1.6; word-break: keep-all;">
          앞선 평가 결과를 바탕으로 아이의 사춘기 진행 상태와 성장판 영향을 종합적으로 판단합니다.
        </p>
      </div>

      <div class="reveal" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 14px; margin-top: 30px; max-width: 900px; margin-left: auto; margin-right: auto;">
        <span class="ed-pill-badge">성조숙증 진단 여부 확인</span>
        <span class="ed-pill-badge">빠른 사춘기와 정상 변이 감별</span>
        <span class="ed-pill-badge">사춘기 진행 속도 평가</span>
        <span class="ed-pill-badge">뼈나이와 잔여 성장 가능성 확인</span>
        <span class="ed-pill-badge">예상 성인키 변화 분석</span>
        <span class="ed-pill-badge">성억제 치료 필요성 판단</span>
        <span class="ed-pill-badge">아이 맞춤형 추적 관찰 계획 수립</span>
      </div>
    </section>

    <!-- ============================================================
         TREATMENT STATEMENT (성억제 치료 고민 해결 밴드)
         ============================================================ -->
    <section class="ed-statement-band reveal">
      <h3>성억제 치료가 필요한지 고민되시나요?</h3>
      <p>
        모든 빠른 사춘기 아이에게 성억제 치료가 필요한 것은 아닙니다. 더클은 사춘기 시작 나이, 진행 속도, 뼈나이, 성장속도, 예상 성인키 변화를 종합적으로 분석하여 치료가 도움이 될 아이를 신중하게 선별합니다.
      </p>
    </section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
