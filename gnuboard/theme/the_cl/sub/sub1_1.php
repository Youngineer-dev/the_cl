<?php
$page_title = "병원 소개";
$page_description = "송파 잠실 삼성더클성장의원은 아이의 소중한 성장의 여정을 오래도록 함께하며 세심한 정밀 진료를 지향하는 소아 성장 클리닉입니다.";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<style>
/* ============================================================
   ABOUT 1-1 (병원 소개) 전용 스타일 보완
   ============================================================ */
.ph-wrap {
  padding: 80px 0;
}

/* Section 1: Intro */
.ph-intro {
  text-align: center;
  max-width: 800px;
  margin: 0 auto 50px;
}
.ph-intro .ph-kicker {
  font-family: var(--font-serif);
  font-size: 14px;
  letter-spacing: 4px;
  color: var(--c-primary-dark);
  text-transform: uppercase;
  margin-bottom: 16px;
  display: block;
}
.ph-intro h2 {
  font-family: var(--font-sans);
  font-size: 32px;
  font-weight: 500;
  line-height: 1.45;
  color: var(--c-primary-dark);
  word-break: keep-all;
  margin-bottom: 24px;
}
.ph-intro p {
  font-size: 17px;
  line-height: 1.8;
  color: var(--c-text-light);
  word-break: keep-all;
}



/* Section 3: Essay */
.ph-essay-card {
  background: #ffffff;
  border: 1px solid var(--c-border);
  border-radius: 8px;
  padding: 70px 50px;
  margin-bottom: 90px;
  box-shadow: 0 16px 40px rgba(152, 169, 158, 0.03);
}
.ph-essay-quote {
  font-family: var(--font-serif);
  font-size: 24px;
  font-weight: 400;
  line-height: 1.6;
  color: var(--c-primary-dark);
  text-align: center;
  margin-bottom: 48px;
  word-break: keep-all;
}
.ph-essay-content {
  max-width: 700px;
  margin: 0 auto;
}
.ph-essay-content p {
  font-size: 15.5px;
  line-height: 1.85;
  color: var(--c-text-light);
  margin-bottom: 24px;
  word-break: keep-all;
}
.ph-essay-content p:last-child {
  margin-bottom: 0;
}
.ph-essay-outro {
  font-size: 18px;
  font-weight: 500;
  color: var(--c-primary-dark);
  text-align: center;
  margin-top: 48px;
  padding-top: 36px;
  border-top: 1px dashed var(--c-border);
  line-height: 1.6;
  word-break: keep-all;
}

/* Section 4: Speciality */
.ph-special-title {
  text-align: center;
  margin-bottom: 48px;
}
.ph-special-title .ed-kicker {
  font-family: var(--font-serif);
  font-size: 13px;
  letter-spacing: 3px;
  color: var(--c-primary-dark);
  text-transform: uppercase;
  margin-bottom: 12px;
  display: block;
}
.ph-special-title h2 {
  font-size: 32px;
  font-weight: 500;
  color: var(--c-primary-dark);
}
.ph-special-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 36px 48px;
}
.ph-special-item {
  display: flex;
  gap: 20px;
}
.ph-special-num {
  font-family: var(--font-serif);
  font-style: italic;
  font-size: 24px;
  color: var(--c-primary);
  line-height: 1;
  flex-shrink: 0;
  margin-top: 2px;
}
.ph-special-body h3 {
  font-size: 17px;
  font-weight: 600;
  color: var(--c-primary-dark);
  margin-bottom: 8px;
}
.ph-special-body p {
  font-size: 14.5px;
  line-height: 1.7;
  color: var(--c-text-light);
  word-break: keep-all;
}

/* Responsive */
@media (max-width: 768px) {
  .ph-wrap {
    padding: 50px 0;
  }
  .ph-intro h2 {
    font-size: 24px;
  }
  .ph-intro p {
    font-size: 15px;
  }

  .ph-essay-card {
    padding: 44px 24px;
    margin-bottom: 60px;
  }
  .ph-essay-quote {
    font-size: 19px;
    margin-bottom: 32px;
  }
  .ph-essay-content p {
    font-size: 14.5px;
    margin-bottom: 18px;
  }
  .ph-essay-outro {
    font-size: 16px;
    margin-top: 36px;
    padding-top: 24px;
  }
  .ph-special-title h2 {
    font-size: 26px;
  }
  .ph-special-grid {
    grid-template-columns: 1fr;
    gap: 28px;
  }
}
</style>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">About</p>
    <h1 class="sub-hero-title">소아 성장 클리닉 - 병원 소개</h1>
    <p class="sub-hero-subtitle">아이의 성장은 한순간이 아닌 긴 여정입니다</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo $G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">About</span></li>
      <li class="separator">></li>
      <li class="current">병원 소개</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    <div class="ph-wrap">

      <!-- ============================================================
           PHILOSOPHY INTRO
           ============================================================ -->
      <section class="ph-intro reveal">
        <span class="ph-kicker">Philosophy</span>
        <h2>더 클 아이를 위한 THE CL, Care & Long 성장 클리닉</h2>
        <p>
          ‘더클’은 아이가 더 건강하게, 더 크게 자라날 가능성을 믿는 이름입니다.<br>
          동시에 THE CL은 Care & Long의 마음을 담고 있습니다.
        </p>
      </section>

      <!-- 대표 이미지 프레임 -->
      <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="송파 잠실 삼성더클성장의원 인테리어 전경" class="sub11_sect1_img reveal reveal-delay-1">

      <!-- ============================================================
           CORE VALUES: CARE & LONG (이전 지그재그 레이아웃 복원)
           ============================================================ -->
      <div class="sub11_sect2_contWrap" style="gap: 120px; padding: 40px 0 60px;">
        
        <!-- Value 1: Care - Image Right -->
        <article class="sub11_sect2_item item1 imgRight reveal">
          <div class="descBox">
            <h3 class="item_title">
              <span class="marcell">Care</span>
              <span class="line"></span>
              <span class="kpb_l">세심하게</span>
            </h3>
            <p class="item_subTitle" style="font-size: 24px; line-height: 1.5; color: var(--c-primary-dark); font-weight: 400; word-break: keep-all; margin-top: 20px;">
              아이의 작은 성장 변화까지<br>세심하게 살피는 진료
            </p>
          </div>
          <div class="imgBox">
            <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="소아내분비 전문의의 세심한 성장 발달 및 예상키 정밀 진단 과정" class="item_img">
            <i class="bgText marcell">Care</i>
          </div>
        </article>

        <!-- Value 2: Long - Image Left -->
        <article class="sub11_sect2_item item2 imgLeft reveal">
          <div class="imgBox">
            <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="성장기 아동의 일상 습관과 예상 키 성장을 위한 일대일 라이프스타일 동행" class="item_img">
            <i class="bgText marcell">Long</i>
          </div>
          <div class="descBox">
            <h3 class="item_title">
              <span class="marcell">Long</span>
              <span class="line"></span>
              <span class="kpb_l">오래 함께</span>
            </h3>
            <p class="item_subTitle" style="font-size: 24px; line-height: 1.5; color: var(--c-primary-dark); font-weight: 400; word-break: keep-all; margin-top: 20px;">
              한 번의 검사로 끝나지 않고,<br>성장의 시간을 오래 함께하는 관리
            </p>
          </div>
        </article>
        
      </div>

      <!-- ============================================================
           PHILOSOPHY ESSAY SECTION (원장 에세이)
           ============================================================ -->
      <section class="ph-essay-card reveal">
        <h3 class="ph-essay-quote">
          “성장은 한 번의 키 숫자가 아니라,<br>
          시간에 따라 이어지는 과정입니다.”
        </h3>

        <div class="ph-essay-content">
          <p>
            대학병원에서 성장 진료를 하며, 여러 곳을 거쳐 뒤늦게 찾아오는 아이들을 많이 만났습니다.<br>
            예전에 한 번 “괜찮다”는 이야기를 듣고 더 이상 추적하지 않았거나,<br>
            키가 작다는 것을 알고도 언제 다시 확인해야 할지 몰라<br>
            적절한 평가 시기를 놓친 경우도 있었습니다.
          </p>
          <p>
            그때마다 느낀 것은 분명했습니다.<br>
            성장 진료에서 중요한 것은 처음부터 치료를 서두르는 것이 아니라,<br>
            아이의 성장 흐름을 정확히 평가하고 꾸준히 추적하며<br>
            필요한 시점에 적절한 치료를 결정하는 과정이라는 점입니다.
          </p>
          <p>
            삼성더클성장의원은 아이의 현재 키와 체중만 보는 곳이 아닙니다.<br>
            성장 속도, 사춘기 진행, 뼈나이, 체성분, 영양과 대사 상태까지 함께 살피며<br>
            아이의 현재 성장 상태와 앞으로의 성장 가능성을 정밀하게 평가합니다.
          </p>
          <p>
            삼성서울병원 소아청소년과 및 소아내분비·유전대사 전임의,<br>
            대학병원 교수로서 성장·성조숙증·소아비만을 진료하고 연구해온 경험을 바탕으로<br>
            무분별한 치료보다 정확한 평가를,<br>
            획일적인 치료보다 아이에게 맞는 방향을 지향합니다.
          </p>
          <p>
            또한 남매를 키우는 엄마의 마음으로<br>
            아이와 보호자의 이야기에 귀 기울이고,<br>
            검사 결과와 치료 방향을 충분히 설명하며<br>
            건강한 성장 여정을 오래 함께하겠습니다.
          </p>
        </div>

        <div class="ph-essay-outro">
          삼성더클성장의원은<br>
          정확한 평가와 따뜻한 공감이 만나는<br>
          1:1 맞춤 성장 클리닉입니다.
        </div>
      </section>

      <!-- ============================================================
           THE CL SPECIALITY (더클만의 특별함)
           ============================================================ -->
      <section class="reveal">
        <div class="ph-special-title">
          <span class="ed-kicker">Speciality</span>
          <h2>더클만의 <strong>특별함</strong></h2>
        </div>

        <div class="ph-special-grid">
          <!-- 01 -->
          <article class="ph-special-item">
            <span class="ph-special-num">01</span>
            <div class="ph-special-body">
              <h3>삼성서울병원식 전인적 성장진료</h3>
              <p>
                키만 보는 진료가 아닙니다.<br>
                삼성서울병원 소아청소년과 및 소아내분비·유전대사 진료 경험을 바탕으로 성장, 사춘기, 영양, 대사, 수면, 운동까지 함께 살핍니다.
              </p>
            </div>
          </article>

          <!-- 02 -->
          <article class="ph-special-item">
            <span class="ph-special-num">02</span>
            <div class="ph-special-body">
              <h3>전문의 판독 × AI 보조 성장분석</h3>
              <p>
                뼈나이는 판독 경험과 해석 방식에 따라 차이가 날 수 있습니다.<br>
                더클은 수만 건의 뼈나이 판독 경험을 가진 소아내분비 전문의가 직접 확인하고, 추가로 AI 보조 분석을 함께 활용해 판독 편차를 줄이고 성장잠재력을 다각도로 평가합니다.
              </p>
            </div>
          </article>

          <!-- 03 -->
          <article class="ph-special-item">
            <span class="ph-special-num">03</span>
            <div class="ph-special-body">
              <h3>정확한 평가, 꾸준한 추적, 필요시 치료</h3>
              <p>
                무조건 치료부터 시작하지 않습니다.<br>
                아이의 성장 흐름을 꾸준히 확인하며, 지켜볼 시점과 치료가 필요한 시점을 구분합니다.
              </p>
            </div>
          </article>

          <!-- 04 -->
          <article class="ph-special-item">
            <span class="ph-special-num">04</span>
            <div class="ph-special-body">
              <h3>성장의 모든 요소 관리</h3>
              <p>
                성장에는 호르몬만 중요한 것이 아닙니다.<br>
                영양, 운동, 수면, 체성분, 알레르기, 대사 상태까지 함께 보며 건강한 성장 방향을 안내합니다.
              </p>
            </div>
          </article>

          <!-- 05 -->
          <article class="ph-special-item">
            <span class="ph-special-num">05</span>
            <div class="ph-special-body">
              <h3>아이도 오고 싶은 성장클리닉</h3>
              <p>
                아이의 성장은 편안한 마음에서 더 잘 시작됩니다.<br>
                더클은 쾌적한 공간, 따뜻한 말 한마디, 아이의 눈높이에 맞춘 설명으로 병원이 좋은 경험이 될 수 있도록 함께합니다.
              </p>
            </div>
          </article>

          <!-- 06 -->
          <article class="ph-special-item">
            <span class="ph-special-num">06</span>
            <div class="ph-special-body">
              <h3>함께 배우는 더클 성장 라운지</h3>
              <p>
                더클은 진료실 안에서만 끝나는 병원이 아닙니다.<br>
                분기별 최신 성장 정보를 나누고, 보호자들이 궁금해하는 성장 주제를 함께 이야기합니다.
              </p>
            </div>
          </article>
        </div>
      </section>

    </div>
  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
