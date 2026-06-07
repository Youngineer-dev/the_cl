<?php
$page_title = "당뇨";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Clinic</p>
    <h1 class="sub-hero-title">당뇨</h1>
    <p class="sub-hero-subtitle">소아 당뇨의 체계적 관리</p>
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
      <li class="current">당뇨</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

<!-- 스플릿 인트로 (미러형: 이미지 좌 / 텍스트 우) -->
<section class="ed-split ed-split--reverse reveal">
  <div class="ed-split__text">
    <span class="ed-eyebrow">Pediatric Diabetes</span>
    <h2 class="ed-split__title">
      <span class="i1">성장과 혈당을</span>
      <span class="i2">함께 살피는</span>
      <span class="i3"><strong>소아 맞춤 케어</strong></span>
    </h2>
    <div class="ed-split__body">
      <p class="lead">
        소아 당뇨는 성인 당뇨와 성격이 다르고, 지속적인 성장 발달을 동시에 고려해야 합니다.
      </p>
      <p>
        인슐린 의존성을 정밀하게 파악하여, 아이가 낙인 효과 없이 학교생활을 활발히
        영위하도록 일상에 밀착해 정성껏 돌봅니다.
      </p>
    </div>
  </div>
  <div class="ed-collage reveal reveal-delay-2">
    <img src="<?php echo $G5_URL; ?>/img/programs.png" alt="혈당 관리" class="ed-collage__main">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="소아 진료" class="ed-collage__sub">
  </div>
</section>

<!-- 빅넘버 리스트 -->
<section class="ed-features">
  <div class="ed-sectlabel reveal">
    <span class="ed-kicker">Care Program</span>
    <h2>일상을 지키는 <strong>3가지 관리</strong></h2>
  </div>

  <div class="ed-feat reveal">
    <div class="ed-feat__num">01</div>
    <div class="ed-feat__body">
      <h3 class="ed-feat__title">1형 당뇨 특화 인슐린 매니지먼트</h3>
      <p class="ed-feat__desc">
        췌장 인슐린 분비 결핍이 원인인 1형 당뇨 아동을 위해 안전한 인슐린 펜 투여법 교육과
        실시간 연속혈당측정기(CGM) 데이터 모니터링을 통합 지도합니다.
      </p>
    </div>
  </div>
  <div class="ed-feat reveal reveal-delay-1">
    <div class="ed-feat__num">02</div>
    <div class="ed-feat__body">
      <h3 class="ed-feat__title">인슐린 저항성 개선 (2형 당뇨)</h3>
      <p class="ed-feat__desc">
        서구화된 식생활로 증가하는 소아 2형 당뇨를 완화하기 위해 복부 비만을 해소하고
        췌장의 인슐린 저항성을 떨어뜨리는 라이프 코칭을 적용합니다.
      </p>
    </div>
  </div>
  <div class="ed-feat reveal reveal-delay-2">
    <div class="ed-feat__num">03</div>
    <div class="ed-feat__body">
      <h3 class="ed-feat__title">학교 및 가정 연계 네트워크</h3>
      <p class="ed-feat__desc">
        아이가 학교나 유치원에서 저혈당 응급 상황에 처하지 않도록 가정통신 안내 가이드를
        보완해 드리고, 대처 약물 상비 매뉴얼을 수립해 드립니다.
      </p>
    </div>
  </div>
</section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
