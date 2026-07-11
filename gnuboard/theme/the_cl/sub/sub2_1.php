<?php
$page_title = "성장평가 · 예상키";
$page_description = "잠실 삼성더클성장의원의 과학적인 성장 평가 및 예상키 측정 프로그램을 통해 우리 아이의 성장 템포와 정밀 데이터를 진단하세요.";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Clinic</p>
    <h1 class="sub-hero-title">소아 성장평가 · 예상키 진단</h1>
    <p class="sub-hero-subtitle">더클 성장잠재력 분석 클리닉</p>
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
      <li class="current">성장평가 · 예상키</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

    <!-- ============================================================
         SPLIT INTRO (성장 잠재력 인트로)
         ============================================================ -->
    <section class="ed-split reveal">
      <div class="ed-split__text">
        <span class="ed-eyebrow">더클 성장잠재력 분석 클리닉</span>
        <h2 class="ed-split__title ed-split__title--simple">
          현재 키보다 중요한 것은<br>아이의 <strong>성장 잠재력</strong>입니다
        </h2>
        <div class="ed-split__body" style="margin-top: 24px;">
          <p class="lead">
            더클은 성장곡선, 성장속도, 사춘기, 뼈나이, 부모키를 종합적으로 분석하여 아이에게 맞는 성장 전략을 제시합니다.
          </p>
        </div>
      </div>
      <div class="ed-collage reveal reveal-delay-2">
        <img src="<?php echo $G5_URL; ?>/img/programs.png" alt="잠실 삼성더클성장의원 소아 예상키 및 성장 발달 정밀 분석 데이터" class="ed-collage__main">
        <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="송파 삼성더클성장의원 소아내분비 세부전문의 정밀 신체 계측 과정" class="ed-collage__sub">
      </div>
    </section>

    <!-- ============================================================
         SELF CHECK (성장 고민 체크리스트)
         ============================================================ -->
    <section class="ed-check reveal" style="margin-top: 60px;">
      <div class="ed-check__head">
        <span class="ed-kicker">Self Check</span>
        <p class="ed-check__label">이런 고민이<br>한 번이라도 있었다면</p>
      </div>
      <ul class="ed-check__list">
        <li class="ed-check__item"><span class="ed-check__num">01</span><p>우리 아이는 최종적으로 몇 cm까지 클 수 있을까?</p></li>
        <li class="ed-check__item"><span class="ed-check__num">02</span><p>지금 성장 속도는 정상일까?</p></li>
        <li class="ed-check__item"><span class="ed-check__num">03</span><p>사춘기가 너무 빠르거나 늦은 것은 아닐까?</p></li>
        <li class="ed-check__item"><span class="ed-check__num">04</span><p>부모 키를 고려하면 더 클 수 있는 여지가 있을까?</p></li>
        <li class="ed-check__item"><span class="ed-check__num">05</span><p>성장호르몬 치료가 필요한 상황일까?</p></li>
        <li class="ed-check__item"><span class="ed-check__num">06</span><p>아직 문제는 없지만 성장 상태를 한번 점검해보고 싶다</p></li>
      </ul>
    </section>

    <!-- ============================================================
         EVALUATION PROCESS (성장 및 예상키 평가 과정 Step 1 ~ 6)
         ============================================================ -->
    <section class="ed-features" style="padding-top: 60px; padding-bottom: 20px;">
      <div class="ed-sectlabel reveal" style="margin-bottom: 30px;">
        <span class="ed-kicker">Evaluation Flow</span>
        <h2>더클 성장 잠재력, <strong>예상키 평가 과정</strong></h2>
      </div>

      <div class="ed-steps" style="margin-top: 30px;">
        <!-- Step 1 -->
        <div class="ed-step reveal">
          <div class="ed-step__num"><span>01</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 1</span>
            <h3 class="ed-step__title">기본 신체 검진</h3>
            <p class="ed-step__desc">
              <strong>가족력 · 과거력 · 현 병력 청취</strong>: 유전적 소인 파악 및 성장에 영향을 줄 수 있는 기존 질환 유무 확인<br>
              <strong>신체 전반 자세평가</strong>: 거북목, 척추 정렬, 골반 틀어짐 등 성장을 방해하는 체형 불균형 분석<br>
              <strong>정밀 신체진찰 소견</strong>: 전문의의 세밀한 진찰을 통해 전반적인 상태 확인
            </p>
          </div>
        </div>
        <!-- Step 2 -->
        <div class="ed-step reveal reveal-delay-1">
          <div class="ed-step__num"><span>02</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 2</span>
            <h3 class="ed-step__title">성장곡선 분석</h3>
            <p class="ed-step__desc"><strong>현재 키 · 체중 · 성장 속도</strong>: 또래 표준 데이터와 비교하여 아이의 현재 성장 위치와 백분위 확인</p>
          </div>
        </div>
        <!-- Step 3 -->
        <div class="ed-step reveal reveal-delay-2">
          <div class="ed-step__num"><span>03</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 3</span>
            <h3 class="ed-step__title">뼈나이 평가</h3>
            <p class="ed-step__desc"><strong>성숙도 · 잔여성장</strong>: X-ray 검사를 통한 실제 뼈나이 측정 및 앞으로 자랄 수 있는 기간 예측</p>
          </div>
        </div>
        <!-- Step 4 -->
        <div class="ed-step reveal reveal-delay-3">
          <div class="ed-step__num"><span>04</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 4</span>
            <h3 class="ed-step__title">부모키 · 목표키 분석</h3>
            <p class="ed-step__desc"><strong>유전적 성장잠재력</strong>: 부모님의 신장을 바탕으로 산출한 일차적인 유전적 목표치 분석</p>
          </div>
        </div>
        <!-- Step 5 -->
        <div class="ed-step reveal reveal-delay-4">
          <div class="ed-step__num"><span>05</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 5</span>
            <h3 class="ed-step__title">성장 · 사춘기 혈액검사</h3>
            <p class="ed-step__desc"><strong>성장 및 성호르몬 분석</strong>: IGF-1(성장호르몬 결합단백), LH/FSH, E2/T 검사를 통해 사춘기 진행 단계와 호르몬 밸런스 평가</p>
          </div>
        </div>
        <!-- Step 6 -->
        <div class="ed-step reveal reveal-delay-5">
          <div class="ed-step__num"><span>06</span></div>
          <div class="ed-step__body">
            <span class="ed-step__eyebrow">Step 6</span>
            <h3 class="ed-step__title">건강 · 대사 상태 평가</h3>
            <p class="ed-step__desc"><strong>기초 대사 및 영양 분석</strong>: 빈혈, 비타민D, 갑상선 기능, 간, 신장 기능 검사 및 체성분(InBody) 분석</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         COMPREHENSIVE SOLUTION (종합 성장잠재력 분석)
         ============================================================ -->
    <section style="padding-top: 60px; padding-bottom: 80px;">
      <div class="ed-sectlabel reveal" style="margin-bottom: 30px; text-align: center;">
        <span class="ed-kicker">Comprehensive Solution</span>
        <h2>종합 <strong>성장잠재력 분석</strong></h2>
        <p style="font-size: 15px; color: var(--c-text-light); margin-top: 10px; line-height: 1.6; word-break: keep-all;">
          앞선 6단계의 정밀 검사 결과를 종합하여<br>더클만의 최종 성장 솔루션을 도출합니다.
        </p>
      </div>
      
      <div class="reveal" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 14px; margin-top: 30px; max-width: 900px; margin-left: auto; margin-right: auto;">
        <span class="ed-pill-badge">예상 성인키 예측</span>
        <span class="ed-pill-badge">성장을 가로막는 방해요인 감별</span>
        <span class="ed-pill-badge">아이 맞춤형 1:1 성장전략 수립</span>
      </div>
    </section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
