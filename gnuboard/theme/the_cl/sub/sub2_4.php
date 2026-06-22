<?php
$page_title = "소아비만";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

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
      <li><a href="<?php echo $G5_URL; ?>/index.php">Home</a></li>
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
        <span class="ed-eyebrow">Pediatric Obesity</span>
        <h2 class="ed-split__title" style="font-size: 32px; font-weight: 300; line-height: 1.45; color: var(--c-primary-dark); letter-spacing: -0.5px;">
          소아비만은 성장의 효율을 떨어뜨립니다<br>체성분 개선으로 건강한 키를 확보
        </h2>
        <div class="ed-split__body" style="margin-top: 24px;">
          <p class="lead">
            체지방에서 분비되는 호르몬은 성조숙증을 촉진하고, 성장 호르몬을 지방 대사에 소모시킵니다. 굶지 않고 키 성장과 건강을 동시에 관리하는 정밀 체성분 매니지먼트를 가동합니다.
          </p>
        </div>
      </div>
      <div class="ed-collage reveal reveal-delay-2">
        <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="소아비만 정밀 진단" class="ed-collage__main">
        <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="성장 클리닉 공간" class="ed-collage__sub">
      </div>
    </section>

    <!-- ============================================================
         SELF CHECK (소아비만 자가진찰 고민)
         ============================================================ -->
    <section class="ed-check reveal" style="margin-top: 60px;">
      <div class="ed-check__head">
        <span class="ed-kicker">Self Check</span>
        <p class="ed-check__label">이런 경우<br>평가가 필요합니다</p>
      </div>
      <ul class="ed-check__list">
        <li class="ed-check__item"><span class="ed-check__num">01</span><p>키 성장에 비해 체중 증가 속도가 너무 빠른 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">02</span><p>소아 성장도표에서 체질량지수(BMI) 백분위가 높은 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">03</span><p>편식, 야식, 폭식, 단 음료 다량 섭취 등 식사 패턴이 불균형한 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">04</span><p>또래보다 활동량이 현저히 적고 운동 시 쉽게 피로해하는 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">05</span><p>목덜미나 겨드랑이선 피부가 어둡고 두꺼워지는 현상이 의심되는 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">06</span><p>과다한 체중으로 인해 아이가 심리적으로 위축되거나 자존감이 저하된 경우</p></li>
        <li class="ed-check__item"><span class="ed-check__num">07</span><p>부모 비만 가족력이 있고, 성조숙증이나 대사 합병증이 염려되는 경우</p></li>
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
              InBody 검사를 통해 체지방률, 근육량, 체수분 상태를 확인합니다. 단순히 체중 숫자만 보는 것이 아니라, 아이의 몸 구성을 함께 평가합니다.
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
              공복혈당, HbA1c, 인슐린, 지질검사, 간수치, 요산, 갑상선 기능, 염증 지표 등을 확인합니다. 이를 통해 체중 증가와 관련된 대사 이상이 동반되어 있는지 평가합니다.
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
    <section style="padding-top: 60px; padding-bottom: 40px;">
      <div class="ed-sectlabel reveal" style="margin-bottom: 30px; text-align: center;">
        <span class="ed-kicker">Diagnostic Plan</span>
        <h2>최종 <strong>관리 방향</strong></h2>
        <p style="font-size: 15px; color: var(--c-text-light); margin-top: 10px; line-height: 1.6; word-break: keep-all;">
          정밀 진단 결과를 종합하여 아이의 건강을 지키며 효율적인 성장이 이루어지도록 돕습니다.
        </p>
      </div>

      <div class="reveal" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 14px; margin-top: 30px; max-width: 900px; margin-left: auto; margin-right: auto;">
        <span style="background: var(--c-primary-pale); color: var(--c-primary-dark); padding: 14px 24px; border-radius: 50px; font-size: 14.5px; font-weight: 500; border: 1px solid var(--c-border);">성장을 지키는 건강한 체중 관리 목표 설정</span>
        <span style="background: var(--c-primary-pale); color: var(--c-primary-dark); padding: 14px 24px; border-radius: 50px; font-size: 14.5px; font-weight: 500; border: 1px solid var(--c-border);">인슐린 저항성, 지방간, 이상지질혈증 등 대사 위험 조기 확인</span>
        <span style="background: var(--c-primary-pale); color: var(--c-primary-dark); padding: 14px 24px; border-radius: 50px; font-size: 14.5px; font-weight: 500; border: 1px solid var(--c-border);">아이에게 부담을 주지 않는 가족 중심 생활습관 개선</span>
        <span style="background: var(--c-primary-pale); color: var(--c-primary-dark); padding: 14px 24px; border-radius: 50px; font-size: 14.5px; font-weight: 500; border: 1px solid var(--c-border);">3개월 또는 6개월 단위의 성장·체성분·대사 지표 추적 관리</span>
      </div>
    </section>

    <!-- ============================================================
         TREATMENT STATEMENT (체중 감량 걱정 해결 밴드)
         ============================================================ -->
    <section class="ed-statement reveal" style="margin-top: 40px; padding: 50px 40px; background-color: var(--c-primary-dark); border-radius: 12px; color: var(--c-text-white); text-align: center; box-shadow: 0 8px 30px rgba(92, 110, 99, 0.15); margin-bottom: 80px;">
      <h3 style="font-family: var(--font-serif); font-size: 20px; font-weight: 500; color: var(--c-primary-light); margin-bottom: 18px; letter-spacing: 0.5px;">체중 감량이 아이의 키 성장에 방해가 될까 걱정되시나요?</h3>
      <p style="font-size: 15px; line-height: 1.8; font-weight: 300; max-width: 720px; margin: 0 auto; word-break: keep-all; color: rgba(255, 255, 255, 0.9);">
        소아 비만 관리는 성인 다이어트와 다릅니다. 성장기 아이에게 무리한 절식을 유도하지 않으며, 키 성장을 위한 필수 영양은 충분히 채우면서 체지방률만 개선해 건강한 키 성장을 확보하도록 돕습니다.
      </p>
    </section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
