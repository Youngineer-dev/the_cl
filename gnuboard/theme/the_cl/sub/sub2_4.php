<?php
$page_title = "소아 비만";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Clinic</p>
    <h1 class="sub-hero-title">소아 비만</h1>
    <p class="sub-hero-subtitle">건강한 성장의 첫걸음</p>
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
      <li class="current">소아 비만</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

<!-- 중앙 에디토리얼 인트로 -->
<div class="sub11_sect1" style="padding: 30px 0 30px;">
  <div class="sub-intro-text" style="margin-bottom: 0;">
    <span class="ed-kicker">Pediatric Obesity</span>
    <h2 class="section-title reveal reveal-delay-1" style="font-size: 34px; font-weight: 300; margin-top: 14px; line-height: 1.45;">
      소아비만은 성장의 효율을 떨어뜨립니다<br><strong>체성분 개선으로 건강한 키를 확보</strong>
    </h2>
    <p class="desc reveal reveal-delay-2" style="margin-top: 24px; font-weight: 300; color: var(--c-text-light); line-height: 2;">
      체지방에서 분비되는 호르몬은 성조숙증을 촉진하고, 성장 호르몬을 지방 대사에 소모시킵니다.<br>
      굶지 않고 키 성장과 건강을 동시에 관리하는 정밀 체성분 매니지먼트를 가동합니다.
    </p>
  </div>
</div>

<!-- 교차 이미지 행 (지그재그) -->
<div class="sub11_sect2_contWrap">

  <div class="sub11_sect2_item item1 imgRight reveal">
    <div class="descBox">
      <h3 class="item_title">
        <span class="marcell">Diet</span>
        <span class="line"></span>
        <span class="kpb_l">맞춤 식단</span>
      </h3>
      <p class="item_subTitle">키는 크고 지방만 줄이는<br>1:1 과학적 식단 가이드</p>
      <div class="item_desc_wrap">
        <p class="item_desc">
          기초대사량과 활동량을 과학적으로 연산하여, 성장에 방해되지 않도록 필수 미네랄과
          단백질은 충분히 섭취하면서 칼로리 밀도만 줄이는 맞춤형 식단을 설계합니다.
        </p>
        <p class="item_desc">
          무리한 절식이 아니라, 평생 가져갈 건강한 식습관의 기준을 함께 만들어 갑니다.
        </p>
      </div>
    </div>
    <div class="imgBox">
      <img src="<?php echo $G5_URL; ?>/img/programs.png" alt="맞춤 식단 가이드" class="item_img">
      <i class="bgText marcell">Diet</i>
    </div>
  </div>

  <div class="sub11_sect2_item item2 imgLeft reveal">
    <div class="imgBox">
      <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="성장판 자극 운동" class="item_img">
      <i class="bgText marcell">Exercise</i>
    </div>
    <div class="descBox">
      <h3 class="item_title">
        <span class="marcell">Exercise</span>
        <span class="line"></span>
        <span class="kpb_l">운동 처방</span>
      </h3>
      <p class="item_subTitle">성장판을 자극하는<br>관절 친화형 유산소 프로그램</p>
      <div class="item_desc_wrap">
        <p class="item_desc">
          과도한 체중이 관절과 성장판에 주는 충격을 방지하는 무릎 친화형 유산소 재활 요법과
          코어 단련 스트레칭을 병행하여 비만 해소와 뼈 성장 활성화를 동시에 돕습니다.
        </p>
        <p class="item_desc">
          움직임이 즐거워지는 순간, 아이의 체성분과 키 그래프가 함께 달라집니다.
        </p>
      </div>
    </div>
  </div>

  <div class="sub11_sect2_item item3 imgRight reveal">
    <div class="descBox">
      <h3 class="item_title">
        <span class="marcell">Coaching</span>
        <span class="line"></span>
        <span class="kpb_l">생활 코칭</span>
      </h3>
      <p class="item_subTitle">즐겁게 지속하는<br>아동 행동 교정 동기 부여</p>
      <div class="item_desc_wrap">
        <p class="item_desc">
          아이가 흥미를 잃지 않고 건강 습관을 교정할 수 있도록 스티커 보드, 보상 칭찬 시스템 등
          아동 행동 교정 심리학을 가미하여 지도합니다.
        </p>
        <p class="item_desc">
          꾸준함이 가장 큰 처방입니다. 아이 스스로 해내는 성취의 경험을 설계합니다.
        </p>
      </div>
    </div>
    <div class="imgBox">
      <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="생활 코칭" class="item_img">
      <i class="bgText marcell">Coaching</i>
    </div>
  </div>

</div>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
