<?php
$page_title = "검사 항목";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Info</p>
    <h1 class="sub-hero-title">검사 항목</h1>
    <p class="sub-hero-subtitle">정확한 진단을 위한 첨단 검사</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo $G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">Info</span></li>
      <li class="separator">></li>
      <li class="current">검사 항목</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

<!-- ============================================================
     D. 스티키 인덱스(좌) + 아코디언(우) 2단 매거진
     ============================================================ -->
<section class="ed-aside">

  <!-- 좌측 스티키 인덱스 -->
  <aside class="ed-aside__index reveal">
    <span class="ed-eyebrow">Clinical Tests</span>
    <h2 class="ed-aside__title">
      대학병원급 인프라로<br><strong>오차를 줄입니다</strong>
    </h2>
    <div class="ed-aside__count">
      <b>05</b>
      <span>Core Examinations</span>
    </div>
    <p class="ed-aside__desc">
      삼성더클성장의원의 다각적이고 체계적인 소아 내분비 진단 도구를 소개합니다.
      모든 검사는 대학병원과 동일한 품질 기준과 철저한 멸균 하에 이루어집니다.
    </p>
    <div class="ed-aside__rule"></div>
  </aside>

  <!-- 우측 아코디언 (기능 유지, 디자인 고급화) -->
  <div class="accordion-wrap reveal reveal-delay-1" style="max-width: none; margin: 0;">
    <div class="accordion-item">
      <button class="accordion-btn">
        <span class="accordion-q">골연령(뼈나이) 판독 및 골성숙도 검사</span>
        <span class="accordion-arrow">▼</span>
      </button>
      <div class="accordion-panel">
        <p class="accordion-a">왼쪽 손목 X-ray를 아주 약한 방사선량으로 신속히 촬영한 뒤 손목뼈의 융합 상태 및 화골핵 형성 정도를 면밀히 계측하여 뼈 나이가 달력상 실 나이보다 빠른지 점검하는 필수 기초 검사입니다.</p>
      </div>
    </div>

    <div class="accordion-item">
      <button class="accordion-btn">
        <span class="accordion-q">성장인자 호르몬 및 혈액 종합 검사</span>
        <span class="accordion-arrow">▼</span>
      </button>
      <div class="accordion-panel">
        <p class="accordion-a">성장 촉진의 척도가 되는 IGF-1(인슐린양 성장인자) 및 수송 단백질(IGFBP-3) 농도, 혈당 상태, 전해질 농도, 빈혈 여부 등을 총체적으로 검증하는 정밀 화학 혈액 검사입니다.</p>
      </div>
    </div>

    <div class="accordion-item">
      <button class="accordion-btn">
        <span class="accordion-q">성선자극호르몬 방출호르몬(GnRHa) 자극 검사</span>
        <span class="accordion-arrow">▼</span>
      </button>
      <div class="accordion-panel">
        <p class="accordion-a">성조숙증 진단을 확정하기 위한 검사로, 약물 투여 전과 투여 후 일정 시간 간격으로 혈액 내 황체형성호르몬(LH)과 난포자극호르몬(FSH) 수치의 동적 반응 최고치를 관찰해 조기 사춘기 발현 여부를 알아냅니다.</p>
      </div>
    </div>

    <div class="accordion-item">
      <button class="accordion-btn">
        <span class="accordion-q">성장호르몬 자극유발 검사</span>
        <span class="accordion-arrow">▼</span>
      </button>
      <div class="accordion-panel">
        <p class="accordion-a">저신장 아동 중 호르몬 결핍이 원인인지 규명하기 위해 2가지 이상의 호르몬 자극 유발 시약을 시간차 투여한 후 호르몬 분비 최고 농도가 10 ng/mL 이하로 나오는지 확인하여 결핍 여부를 입증합니다.</p>
      </div>
    </div>

    <div class="accordion-item">
      <button class="accordion-btn">
        <span class="accordion-q">정밀 체성분 및 영양 대사 균형 검사</span>
        <span class="accordion-arrow">▼</span>
      </button>
      <div class="accordion-panel">
        <p class="accordion-a">골격근량, 체지방률, 내장지방 분포도, 세포외수분비 등을 파악하고 소변 유기산 검사 등을 통해 아동의 대사 순환 장애 요인과 부족 미네랄 성분을 정밀 추적합니다.</p>
      </div>
    </div>
  </div>

</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const accBtns = document.querySelectorAll(".accordion-btn");
  accBtns.forEach(btn => {
    btn.addEventListener("click", function() {
      this.classList.toggle("active");
      const panel = this.nextElementSibling;
      if (panel.classList.contains("open")) {
        panel.classList.remove("open");
      } else {
        document.querySelectorAll(".accordion-panel").forEach(p => p.classList.remove("open"));
        document.querySelectorAll(".accordion-btn").forEach(b => b.classList.remove("active"));
        this.classList.add("active");
        panel.classList.add("open");
      }
    });
  });
});
</script>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
