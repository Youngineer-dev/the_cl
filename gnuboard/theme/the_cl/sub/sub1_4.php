<?php
$page_title = "둘러보기";
$page_description = "아이들이 편안하게 성장 및 성조숙증 검사를 받을 수 있도록 쾌적하게 구성된 송파구 잠실 삼성더클성장의원 내부 환경을 소개합니다.";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<style>
/* ============================================================
   ABOUT 1-4 (둘러보기) 전용 모바일 보완
   ============================================================ */
@media (max-width: 768px) {
  .sub-intro-text .section-title {
    font-size: 22px !important;
  }
  .sub-intro-text .desc {
    font-size: 14px;
    line-height: 1.85;
  }
  .space-gallery-item img {
    height: 220px;
    object-fit: cover;
  }
}
@media (max-width: 480px) {
  .sub-intro-text .section-title {
    font-size: 19px !important;
  }
  .space-gallery-item img {
    height: 200px;
  }
}
</style>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">About</p>
    <h1 class="sub-hero-title">둘러보기</h1>
    <p class="sub-hero-subtitle">아이와 부모님 모두가 편안한 공간</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">About</span></li>
      <li class="separator">></li>
      <li class="current">둘러보기</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    
<div class="sub-intro-text">
  <p class="section-en reveal">Clinic Gallery</p>
  <h2 class="section-title reveal reveal-delay-1">
    심리적 안정감을 제공하는 인테리어,<span class="br-all" aria-hidden="true"></span>
    <strong>가장 위생적이고 안온한 의료 공간</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      아이의 긴장을 낮추고 오감의 피로를 풀어주는 따스한 목조와 자연광 설계,<br class="pc-only">
      안심하고 검사받을 수 있는 청정 공간 및 정교한 성장 진료 인프라를 소개합니다.
    </p>
  </div>
</div>

<?php
// 둘러보기 공간 갤러리 (파일명, 영문 캡션, 국문 캡션, alt)
$space_items = [
    ['space_02', 'Reception',       '접수 데스크',   '삼성더클성장의원 접수 데스크와 브랜드 사인'],
    ['space_04', 'Consulting Room', '진료실',        '소아내분비 전문의 진료실'],
    ['space_05', 'Counseling Room', '상담실',        '성장 치료 계획을 상담하는 독립 상담실'],
    ['space_06', 'Treatment Room',  '처치실',        '커튼으로 분리된 개별 처치실 베드'],
    ['space_07', 'Waiting Lounge',  '대기 라운지',   '진료실 앞에서 편안하게 기다리는 대기 라운지'],
    ['space_09', 'Clinic View',     '클리닉 전경',   '삼성더클성장의원 내부 전경'],
];
?>
<div class="space-gallery reveal reveal-delay-3" style="margin-top: 50px;">
  <?php foreach ($space_items as $i => $sp) { ?>
    <figure class="space-gallery-item">
      <img src="<?php echo $G5_URL; ?>/img/<?php echo $sp[0]; ?>.webp?v=1" alt="<?php echo $sp[3]; ?>" loading="<?php echo $i < 3 ? 'eager' : 'lazy'; ?>" width="800" height="600">
      <figcaption class="gallery-caption">
        <p class="caption-en"><?php echo $sp[1]; ?></p>
        <p class="caption-kr"><?php echo $sp[2]; ?></p>
      </figcaption>
    </figure>
  <?php } ?>
</div>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
