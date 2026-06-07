<?php
$page_title = "병원 소개";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">About</p>
    <h1 class="sub-hero-title">병원 소개</h1>
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
     PHILOSOPHY SECTION (Sect 1)
     ============================================================ -->
<div class="sub11_sect1 flexCol_aiCenter">
  <div class="sub-intro-text" style="text-align: center; margin-bottom: 0;">
    <p class="section-en reveal" style="font-family: var(--font-serif); font-size: 14px; letter-spacing: 4px; color: var(--c-primary); text-transform: uppercase;">Philosophy</p>
    <h2 class="section-title reveal reveal-delay-1" style="font-size: 32px; font-weight: 300; line-height: 1.5; color: var(--c-primary-dark); margin-top: 12px;">
      Grow Together, Grow Healthy
    </h2>
  </div>
  
  <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="삼성더클성장의원 전경" class="reveal reveal-delay-2 sub11_sect1_img">
  
  <div class="sub11_sect1_descWrap reveal reveal-delay-3">
    <p class="sub11_sect1_desc desc1">
      푸른 성장의 에너지를 담은 더클(The CL)의 진심 속에<br>
      과학적이고 정직한 진료, 따뜻한 신뢰가 깃들어 있습니다
    </p>
    <p class="sub11_sect1_desc desc2">
      잠시 고민을 나누는 진료에 그치지 않고, 아이의 성장 템포를 끝까지 책임지도록<br>
      진단은 신중하고 엄격하지만, 과정과 소통은 부모님 품처럼 한없이 따뜻하도록<br>
      성장의 모든 계절을 함께 통과하며 우리 아이의 잠재력을 믿는 진료
    </p>
    <p class="sub11_sect1_desc"><b class="ptd_sb">삼성더클성장의원, 진심과 최고의 전문성이 만나는 공간입니다</b></p>
  </div>
</div>

<!-- ============================================================
     THREE CORE VALUES SECTION (Sect 2)
     ============================================================ -->
<div class="sub11_sect2_contWrap">
  
  <!-- Value 1: Carefully (세심하게) - Image Right -->
  <div class="sub11_sect2_item item1 imgRight reveal">
    <div class="descBox">
      <h3 class="item_title">
        <span class="marcell">Carefully</span>
        <span class="line"></span>
        <span class="kpb_l">세심하게</span>
      </h3>
      <p class="item_subTitle">소아 내분비 세부 전문의의<br>정교한 진료로 아동의 성장 골든타임을 확보하다</p>
      <div class="item_desc_wrap">
        <p class="item_desc">
          아이의 성장은 뼈나이, 유전 신장, 호르몬 대사 등 수많은 요인들이 결합된 정교한 퍼즐입니다.<br>
          삼성서울병원 및 서울대병원 출신의 풍부한 세부전문의 임상 경력이<br>
          이곳의 흔들리지 않는 전문성의 기초이자 약속입니다.
        </p>
        <p class="item_desc">
          삼성더클은 아주 미세한 성장 인자의 이상이나 작은 뼈나이 오차율조차 절대로 놓치지 않고,<br>
          언제나 우리 아동의 건강 앞에 가장 정성스럽고 세심하게 서 있겠습니다.
        </p>
      </div>
    </div>
    <div class="imgBox">
      <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="세심한 성장 정밀 진단" class="item_img">
      <i class="bgText marcell">Carefully</i>
    </div>
  </div>

  <!-- Value 2: Gracefully (정직하게) - Image Left -->
  <div class="sub11_sect2_item item2 imgLeft reveal">
    <div class="imgBox">
      <img src="<?php echo $G5_URL; ?>/img/programs.png" alt="정직하고 올바른 성장 호르몬 처방" class="item_img">
      <i class="bgText marcell">Gracefully</i>
    </div>
    <div class="descBox">
      <h3 class="item_title">
        <span class="marcell">Gracefully</span>
        <span class="line"></span>
        <span class="kpb_l">정직하게</span>
      </h3>
      <p class="item_subTitle">과잉 진료를 철저히 배제하고<br>객관적 근거에 기반한 올바른 치료를 제안합니다</p>
      <div class="item_desc_wrap">
        <p class="item_desc">
          성장호르몬 주사나 사춘기 지연제는 유행이나 남을 따라 하는 결정이 되어선 안 됩니다.<br>
          삼성더클은 부모님의 불안감을 악용하는 과잉 처방을 완벽히 차단하고,<br>
          철저한 혈액 호르몬 검출 및 AI 골연령 정량 데이터만을 근거로 정직하게 진단합니다.
        </p>
        <p class="item_desc">
          아이에게 꼭 필요한 가장 정직한 치료만을 권장하여,<br>
          아이의 건강과 성장판을 부작용 우려 없이 올바르게 지켜내겠습니다.
        </p>
      </div>
    </div>
  </div>

  <!-- Value 3: Together (함께) - Image Right -->
  <div class="sub11_sect2_item item3 imgRight reveal">
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
      <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="따뜻한 성장 라이프스타일 동행" class="item_img">
      <i class="bgText marcell">Together</i>
    </div>
  </div>

</div>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
