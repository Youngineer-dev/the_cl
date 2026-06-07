<?php
$page_title = "갑상선 질환";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Clinic</p>
    <h1 class="sub-hero-title">갑상선 질환</h1>
    <p class="sub-hero-subtitle">소아청소년 특화 갑상선 클리닉</p>
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
      <li class="current">갑상선 질환</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

<!-- 스플릿 인트로 (텍스트 좌 / 겹친 이미지 우) -->
<section class="ed-split reveal">
  <div class="ed-split__text">
    <span class="ed-eyebrow">Thyroid Disorders</span>
    <h2 class="ed-split__title">
      <span class="i1">성장 대사의</span>
      <span class="i2">사령탑,</span>
      <span class="i3"><strong>갑상선 호르몬</strong></span>
    </h2>
    <div class="ed-split__body">
      <p class="lead">
        소아청소년기 갑상선 기능 이상은 골성숙 지연과 성장 부진의 주된 원인이 됩니다.
      </p>
      <p>
        피로감과 집중력 저하뿐 아니라 키 성장에도 직접 영향을 주는 갑상선 호르몬.
        삼성더클성장의원은 호르몬 수치의 안정적 복원과 장기적인 모니터링을 책임집니다.
      </p>
    </div>
  </div>
  <div class="ed-collage reveal reveal-delay-2">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="갑상선 진료" class="ed-collage__main">
    <img src="<?php echo $G5_URL; ?>/img/programs.png" alt="호르몬 검사" class="ed-collage__sub">
  </div>
</section>

<!-- 자가체크 밴드 -->
<section class="ed-check reveal">
  <div class="ed-check__head">
    <span class="ed-kicker">Self Check</span>
    <p class="ed-check__label">소아 갑상선<br>자가 체크리스트</p>
  </div>
  <ul class="ed-check__list">
    <li class="ed-check__item"><span class="ed-check__num">01</span><p>또래에 비해 추위나 더위를 지나치게 많이 탈 때</p></li>
    <li class="ed-check__item"><span class="ed-check__num">02</span><p>충분히 자도 극심한 피로를 호소하고 활력이 떨어질 때</p></li>
    <li class="ed-check__item"><span class="ed-check__num">03</span><p>목 앞부분(갑상선 위치)이 불룩하게 튀어나와 보일 때</p></li>
    <li class="ed-check__item"><span class="ed-check__num">04</span><p>많이 먹는데 살이 빠지거나, 안 먹어도 급격히 찔 때</p></li>
    <li class="ed-check__item"><span class="ed-check__num">05</span><p>피부가 유난히 거칠고 건조하며 모발이 끊어질 때</p></li>
    <li class="ed-check__item"><span class="ed-check__num">06</span><p>심박수가 비정상적으로 빨라 가슴이 두근거릴 때</p></li>
  </ul>
</section>

<!-- 닫는 문장 밴드 -->
<section class="ed-statement reveal">
  <span class="ed-eyebrow">Our Promise</span>
  <p>“작은 호르몬의 균형이 아이의 하루와 성장을 바꿉니다.<br>정밀한 진단으로 그 균형을 되찾아 드리겠습니다.”</p>
</section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
