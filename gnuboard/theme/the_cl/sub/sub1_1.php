<?php
$page_title = "병원 소개";
$page_description = "송파 잠실 삼성더클성장의원은 아이의 소중한 성장의 여정을 오래도록 함께하며 세심한 정밀 진료를 지향하는 소아 성장 클리닉입니다.";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

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
    
    <!-- ============================================================
         PHILOSOPHY INTRO (Sect 1)
         ============================================================ -->
    <section class="sub11_sect1 flexCol_aiCenter">
      <div class="sub-intro-text" style="text-align: center; margin-bottom: 0;">
        <p class="section-en reveal" style="font-family: var(--font-serif); font-size: 14px; letter-spacing: 4px; color: var(--c-primary); text-transform: uppercase;">Philosophy</p>
        <h2 class="section-title reveal reveal-delay-1" style="font-size: 32px; font-weight: 400; line-height: 1.5; color: var(--c-primary-dark); margin-top: 12px; word-break: keep-all;">
          더 클 아이를 위한 THE CL, Care & Long 성장 클리닉
        </h2>
      </div>
      
      <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="송파구 잠실역 인근 삼성더클성장의원 입구 및 쾌적한 내부 전경" class="reveal reveal-delay-2 sub11_sect1_img">
      
      <div class="sub11_sect1_descWrap reveal reveal-delay-3" style="margin-top: 40px;">
        <p class="sub11_sect1_desc desc1" style="font-size: 19px; line-height: 1.8; color: var(--c-primary-dark); text-align: center; font-weight: 400; word-break: keep-all;">
          <strong>송파구 잠실에 위치한 삼성더클성장의원</strong>은 대학병원 분과 교수 출신의 소아내분비 세부전문의가 1:1 맞춤 성장 클리닉을 제공합니다. 아이가 건강하게, 더 크게 자라날 가능성을 믿고 세심한 치료(Care)와 성장의 긴 여정(Long)을 오래도록 함께 동행합니다.<br>
          <span style="font-size: 13px; color: var(--c-text-light); display: inline-block; margin-top: 16px; opacity: 0.85; font-weight: 400;">※ 본 클리닉은 질병관리청 소아청소년 성장표준치(2017) 및 대한소아내분비학회 표준 임상 지침을 근거로 정밀 검사 결과를 판독합니다.</span>
        </p>
      </div>
    </section>
    
    <!-- ============================================================
         CORE VALUES: CARE, LONG, TOGETHER (Sect 2)
         ============================================================ -->
    <div class="sub11_sect2_contWrap" style="gap: 150px; padding: 80px 0 20px;">
      
      <!-- Value 1: Care (세심하게) - Image Right -->
      <article class="sub11_sect2_item item1 imgRight reveal">
        <div class="descBox">
          <h3 class="item_title">
            <span class="marcell">Care</span>
            <span class="line"></span>
            <span class="kpb_l">세심하게</span>
          </h3>
          <p class="item_subTitle">아이의 작은 성장 변화까지<br>세심하게 살피는 진료</p>
          <div class="item_desc_wrap">
            <p class="item_desc">
              성장은 단 한 번의 키 숫자가 아닌, 아이의 신체 템포와 속도에 따라 이어지는 흐름입니다.
              삼성더클은 아이의 현재 키와 체중만으로 성급히 판단하지 않고,
              성장 속도, 사춘기 진행 단계, 뼈나이, 체성분 및 대사 상태까지
              아이의 작은 지표 변화 하나하나 세심하게 관찰하여 정확한 가능성을 도출합니다.
            </p>
          </div>
        </div>
        <div class="imgBox">
          <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="소아내분비 전문의의 세심한 성장 발달 및 예상키 정밀 진단 과정" class="item_img">
          <i class="bgText marcell">Care</i>
        </div>
      </article>

      <!-- Value 2: Long (오래 함께) - Image Left -->
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
          <p class="item_subTitle">한 번의 검사로 끝나지 않고,<br>성장의 시간을 오래 함께하는 관리</p>
          <div class="item_desc_wrap">
            <p class="item_desc">
              성장 진료는 단기 치료가 아니라, 아이의 일상과 습관을 공유하며 오랜 여정을 동행하는 과정입니다.
              예전에 한 번 "괜찮다"는 이야기를 듣고 방치하다가 골든타임을 놓치지 않도록,
              정기적인 추적 검사와 일상 라이프스타일 관리로 긴 시간 동안 든든하고 안전하게 함께 걷겠습니다.
            </p>
          </div>
        </div>
      </article>

      <!-- Value 3: Together (함께) - Image Right -->
      <article class="sub11_sect2_item item3 imgRight reveal">
        <div class="descBox">
          <h3 class="item_title">
            <span class="marcell">Together</span>
            <span class="line"></span>
            <span class="kpb_l">함께</span>
          </h3>
          <p class="item_subTitle">성장판이 닫히는 그날까지,<br>아이와 부모님 곁을 변함없이 동행하는 등대지기</p>
          <div class="item_desc_wrap">
            <p class="item_desc">
              키 성장은 몇 달 만에 끝나는 과제가 아니라, 수년에 걸쳐 생활 습관과 성격을 형성해 나가는 긴 여정입니다.<br>
              삼성더클성장의원은 단순한 치료제 처방을 넘어 식단, 수면, 운동, 그리고 성장기 아동의 정서적 피로까지<br>
              토탈 라이프스타일 융합 매니지먼트를 병행하여 종합 돌봄을 선사합니다.
            </p>
            <p class="item_desc">
              외롭고 걱정스러운 성장의 여정 속에서,<br>
              아이와 부모님 모두의 손을 꼭 쥐고 한 걸음씩 성장의 축하를 함께 만들어 가겠습니다.
            </p>
          </div>
        </div>
        <div class="imgBox">
          <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="아이들의 뼈나이 분석과 균형 잡힌 신체 성장을 돕는 따뜻한 진료 공간" class="item_img">
          <i class="bgText marcell">Together</i>
        </div>
      </article>
      
    </div>

    <!-- ============================================================
         THE CL SPECIALITY (더클만의 특별함)
         ============================================================ -->
    <section class="sub11_speciality_section reveal" style="padding: 100px 0 60px;">
      <div class="ed-sectlabel" style="margin-bottom: 50px; text-align: center;">
        <span class="ed-kicker" style="letter-spacing: 3px;">Speciality</span>
        <h2 style="font-size: 32px; font-weight: 400; color: var(--c-primary-dark);">더클만의 <strong>특별함</strong></h2>
      </div>
      
      <div class="ed-features" style="padding-top: 0;">
        <!-- 01 -->
        <div class="ed-feat reveal">
          <div class="ed-feat__num">01</div>
          <div>
            <h3 class="ed-feat__title">삼성서울병원식 전인적 성장진료</h3>
            <div class="ed-feat__desc">
              <strong style="display: block; font-size: 16px; font-weight: 500; color: var(--c-primary-dark); margin-bottom: 8px;">키만 보는 진료가 아닙니다.</strong>
              삼성서울병원 소아청소년과 및 소아내분비·유전대사 진료 경험을 바탕으로 성장, 사춘기, 영양, 대사, 수면, 운동까지 함께 살핍니다.
            </div>
          </div>
        </div>
        
        <!-- 02 -->
        <div class="ed-feat reveal">
          <div class="ed-feat__num">02</div>
          <div>
            <h3 class="ed-feat__title">전문의 판독 × AI 보조 성장분석</h3>
            <div class="ed-feat__desc">
              <strong style="display: block; font-size: 16px; font-weight: 500; color: var(--c-primary-dark); margin-bottom: 8px;">뼈나이는 판독 경험과 해석 방식에 따라 차이가 날 수 있습니다.</strong>
              더클은 수만 건의 뼈나이 판독 경험을 가진 소아내분비 전문의가 직접 확인하고, 추가로 AI 보조 분석을 함께 활용해 판독 편차를 줄이고 성장잠재력을 다각도로 평가합니다.
            </div>
          </div>
        </div>
        
        <!-- 03 -->
        <div class="ed-feat reveal">
          <div class="ed-feat__num">03</div>
          <div>
            <h3 class="ed-feat__title">정확한 평가, 꾸준한 추적, 필요시 치료</h3>
            <div class="ed-feat__desc">
              <strong style="display: block; font-size: 16px; font-weight: 500; color: var(--c-primary-dark); margin-bottom: 8px;">무조건 치료부터 시작하지 않습니다.</strong>
              아이의 성장 흐름을 꾸준히 확인하며, 지켜볼 시점과 치료가 필요한 시점을 구분합니다.
            </div>
          </div>
        </div>
        
        <!-- 04 -->
        <div class="ed-feat reveal">
          <div class="ed-feat__num">04</div>
          <div>
            <h3 class="ed-feat__title">성장의 모든 요소 관리</h3>
            <div class="ed-feat__desc">
              <strong style="display: block; font-size: 16px; font-weight: 500; color: var(--c-primary-dark); margin-bottom: 8px;">성장에는 호르몬만 중요한 것이 아닙니다.</strong>
              영양, 운동, 수면, 체성분, 알레르기, 대사 상태까지 함께 보며 건강한 성장 방향을 안내합니다.
            </div>
          </div>
        </div>
        
        <!-- 05 -->
        <div class="ed-feat reveal">
          <div class="ed-feat__num">05</div>
          <div>
            <h3 class="ed-feat__title">아이도 오고 싶은 성장클리닉</h3>
            <div class="ed-feat__desc">
              <strong style="display: block; font-size: 16px; font-weight: 500; color: var(--c-primary-dark); margin-bottom: 8px;">아이의 성장은 편안한 마음에서 더 잘 시작됩니다.</strong>
              더클은 쾌적한 공간, 따뜻한 말 한마디, 아이의 눈높이에 맞춘 설명으로 병원이 좋은 경험이 될 수 있도록 함께합니다.
            </div>
          </div>
        </div>
        
        <!-- 06 -->
        <div class="ed-feat reveal">
          <div class="ed-feat__num">06</div>
          <div>
            <h3 class="ed-feat__title">함께 배우는 더클 성장 라운지</h3>
            <div class="ed-feat__desc">
              <strong style="display: block; font-size: 16px; font-weight: 500; color: var(--c-primary-dark); margin-bottom: 8px;">더클은 진료실 안에서만 끝나는 병원이 아닙니다.</strong>
              분기별 최신 성장 정보를 나누고, 보호자들이 궁금해하는 성장 주제를 함께 이야기합니다.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         PHILOSOPHY ESSAY SECTION (원장 에세이)
         ============================================================ -->
    <section class="sub11_essay_section reveal">
      <div class="sub11_essay_container">
        <h3 class="sub11_essay_quote">
          “성장은 한 번의 키 숫자가 아니라,<br>
          시간에 따라 이어지는 과정입니다.”
        </h3>
        
        <div class="sub11_essay_body">
          <p>
            대학병원에서 성장 진료를 하며, 여러 의료기관을 거쳐 뒤늦게 저를 찾아오는 아이들을 참 많이 만났습니다.<br>
            예전에 한 번 “괜찮다”는 이야기를 듣고 더 이상 정밀 추적을 하지 않았거나,<br>
            키가 작다는 것을 알고서도 언제 다시 확인해야 할지 몰라 헤매다가<br>
            정작 가장 중요한 치료 적기를 아쉽게 놓쳐버린 경우도 있었습니다.
          </p>
          <p>
            그때마다 제가 마음 깊이 느꼈던 것은 너무나 분명했습니다.<br>
            성장 진료에서 정말 중요한 것은 처음부터 치료나 주사 처방을 서두르는 것이 아니라,<br>
            <strong>아이의 고유한 성장 흐름을 과학적으로 정확하게 평가하고, 꾸준히 동행하며,<br>
            필요한 바로 그 최적의 시점에 적절한 치료를 유연하게 결정하는 일련의 과정</strong>이라는 점입니다.
          </p>
          <p>
            삼성서울병원 소아청소년과 및 소아내분비·유전대사 전임의, 그리고 대학병원 분과 교수로서<br>
            수많은 아동의 성장·성조숙증·소아비만을 진료하고 깊이 연구해 온 모든 임상 경험을 담았습니다.<br>
            우리는 무분별한 과잉 치료보다는 과학적이고 정확한 평가를 먼저 약속하고,<br>
            획일화된 매뉴얼식 치료보다 오직 이 아이에게만 맞는 올바른 방향을 제시하고자 노력합니다.
          </p>
          <p>
            동시에 남매를 직접 키워 나가는 엄마의 진솔한 마음으로,<br>
            아이와 부모님의 걱정 섞인 이야기에 정성을 다해 귀 기울이고,<br>
            검사 결과와 치료 과정을 충분히 소통하며 건강한 성장 여정을 끝까지 따뜻하게 동행하겠습니다.
          </p>
        </div>
        
        <div class="sub11_essay_outro">
          삼성더클성장의원은 정확한 평가와 따뜻한 공감이 만나는 1:1 맞춤 성장 클리닉입니다.
        </div>
      </div>
    </section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
