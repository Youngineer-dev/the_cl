<?php
$page_title = "FAQ";
include_once('../head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Community</p>
    <h1 class="sub-hero-title">FAQ</h1>
    <p class="sub-hero-subtitle">자주 묻는 질문</p>
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
      <li class="current">FAQ</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    
<div class="sub-intro-text">
  <p class="section-en reveal">F.A.Q</p>
  <h2 class="section-title reveal reveal-delay-1">
    보호자분들이 가장 많이 질문해 주시는<br>
    <strong>성장 클리닉 핵심 Q&A</strong>
  </h2>
</div>

<div class="accordion-wrap reveal" style="margin-top: 60px;">
  <div class="accordion-item">
    <button class="accordion-btn">
      <span class="accordion-q">성장 호르몬 주사 요법은 부작용이 없나요? 안심해도 될까요?</span>
      <span class="accordion-arrow">▼</span>
    </button>
    <div class="accordion-panel">
      <p class="accordion-a">성장 호르몬 치료제는 지난 수십 년 동안 전 세계 소아들을 대상으로 안전성과 효능이 정밀하게 입증된 약제입니다. 일시적인 관절통, 척추 휘어짐 등의 빈도 낮은 부작용이 있을 수 있으나 소아 내분비 세부전문의의 체계적인 용량 조절 및 분기별 혈액 검사를 통해 예방 및 안심 관리가 완전히 가능합니다.</p>
    </div>
  </div>

  <div class="accordion-item">
    <button class="accordion-btn">
      <span class="accordion-q">주사 치료는 언제 시작하는 것이 가장 높은 효율을 내나요?</span>
      <span class="accordion-arrow">▼</span>
    </button>
    <div class="accordion-panel">
      <p class="accordion-a">가장 최선의 시기는 <strong>사춘기가 본격적으로 오기 전(여아 만 9세 이전, 남아 만 10세 이전)</strong>입니다. 뼈 나이가 아직 어릴수록 투여 기간 대비 키 성장의 절대값이 훨씬 큽니다. 따라서 초등학교 저학년 전후로 정밀 성장 평가를 최소 1회 받아보시는 것을 강력 권장합니다.</p>
    </div>
  </div>

  <div class="accordion-item">
    <button class="accordion-btn">
      <span class="accordion-q">비만 아동도 성장 주사를 맞아야 효과를 보나요?</span>
      <span class="accordion-arrow">▼</span>
    </button>
    <div class="accordion-panel">
      <p class="accordion-a">비만 아동의 경우 호르몬 효율성이 낮을 수 있으므로 주사 투여 전에 체성분 관리 및 체지방률 감소 식단을 선행하여 지방 세포에서 분비되는 비정상 에스트로겐을 제어한 뒤, 의학적 소견에 맞춰 성장판 자극과 호르몬 활성 치료를 단계적 결합하는 것이 더 효과적입니다.</p>
    </div>
  </div>

  <div class="accordion-item">
    <button class="accordion-btn">
      <span class="accordion-q">비급여 진료비는 실손 의료보험(실비) 혜택이 적용되나요?</span>
      <span class="accordion-arrow">▼</span>
    </button>
    <div class="accordion-panel">
      <p class="accordion-a">저신장증 질환 분류 코드(E34.3 등) 기준에 완전히 부합하거나 병리적인 성장호르몬 결핍 진단을 받아 치료하는 질환 목적의 경우에는 <strong>실손보험 혜택 적용 대상</strong>이 될 수 있습니다. 단순 외형적 키 성장 목적의 미용 목적 수가는 실비 환급 대상에서 제외되므로 정밀 검사 결과를 토대로 원장님과 상의하십시오.</p>
    </div>
  </div>
</div>

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
include_once('../tail.php');
?>
