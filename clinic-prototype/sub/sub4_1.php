<?php
$page_title = "치료 사례";
include_once('../head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Community</p>
    <h1 class="sub-hero-title">치료 사례</h1>
    <p class="sub-hero-subtitle">건강한 성장 이야기</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo $G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">Community</span></li>
      <li class="separator">></li>
      <li class="current">치료 사례</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

<!-- ============================================================
     에디토리얼 인트로 (좌 텍스트 / 우 겹친 이미지)
     ============================================================ -->
<section class="ed-split ed-split--reverse reveal" style="padding-bottom: 80px;">
  <div class="ed-split__text">
    <span class="ed-eyebrow">Real Growth Stories</span>
    <h2 class="ed-split__title">
      <span class="i1">성실한 동행이</span>
      <span class="i2">만들어 낸</span>
      <span class="i3"><strong>성장의 기록</strong></span>
    </h2>
    <div class="ed-split__body">
      <p class="lead">
        매 순간의 작은 변화가 모여 아이의 키와 자신감을 바꿉니다.
      </p>
      <p>
        모든 치료 사례는 개인정보와 의료법에 준해 철저히 익명화하여 보호되며,
        본인 인증을 마친 회원에 한해 분기별 성장 그래프와 상세 데이터를 열람하실 수 있습니다.
      </p>
    </div>
  </div>
  <div class="ed-collage reveal reveal-delay-2">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="성장 상담" class="ed-collage__main">
    <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="성장 진료" class="ed-collage__sub">
  </div>
</section>

<!-- ============================================================
     비대칭 케이스 스프레드
     ============================================================ -->
<section class="ed-cases">

  <article class="ed-case reveal">
    <div class="ed-case__media">
      <span class="ed-case__index">01</span>
      <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="저신장 치료 사례">
    </div>
    <div class="ed-case__body">
      <span class="ed-case__badge">저신장 치료 성공</span>
      <h3 class="ed-case__title">만 9세 남아<br>유전성 저신장 극복</h3>
      <div class="ed-case__stats">
        <div class="ed-case__stat"><span>치료 기간</span><b>24개월</b></div>
        <div class="ed-case__stat"><span>성장 결과</span><b>+18.5cm</b></div>
      </div>
      <p class="ed-case__desc">
        초진 당시 하위 4백분위수였으나, 2년간의 성장호르몬 매일 투여 및
        단백 영양 밀착 교정을 시행하여 현재 또래 표준 평균 이상으로 회복한 성공 사례입니다.
      </p>
    </div>
  </article>

  <article class="ed-case reveal">
    <div class="ed-case__media">
      <span class="ed-case__index">02</span>
      <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="성조숙 제어 사례">
    </div>
    <div class="ed-case__body">
      <span class="ed-case__badge">성조숙 속도 제어</span>
      <h3 class="ed-case__title">만 8세 여아<br>가슴 몽우리 발현 제어</h3>
      <div class="ed-case__stats">
        <div class="ed-case__stat"><span>치료 기간</span><b>18개월</b></div>
        <div class="ed-case__stat"><span>골연령 지연</span><b>-1.2년</b></div>
      </div>
      <p class="ed-case__desc">
        초등학교 입학 직후 성조숙 증상이 나타나 성장판이 조기에 닫힐 뻔하였으나,
        GnRHa 주사 억제를 통해 뼈나이 속도를 늦추고 자연 성장 기간을 연장시켰습니다.
      </p>
    </div>
  </article>

</section>

<!-- 회원 전용 잠금 밴드 -->
<section class="ed-lock reveal">
  <div class="ed-lock__txt">
    <h3>🔒 회원 전용 성장 데이터 열람</h3>
    <p>의료법에 따라 본인 인증을 완료한 회원에 한해 상세 분기별 성장 그래프를 확인하실 수 있습니다.<br>간편 카카오 로그인으로 3초 만에 가입해 보세요.</p>
  </div>
  <a href="#" class="ed-pill">간편 3초 로그인 →</a>
</section>

  </div>
</main>

<?php
include_once('../tail.php');
?>
