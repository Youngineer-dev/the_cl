<?php
$page_title = "이용약관";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>
<style>
/* 정책·회원·커뮤니티 페이지 모바일 가독성 보완 */
@media (max-width: 768px) {
  .privacy-container,
  .terms-container {
    padding: 20px 0 !important;
  }
  .privacy-body,
  .terms-body,
  .board-intro {
    word-break: keep-all;
    overflow-wrap: break-word;
  }
  .auth-card-wrap,
  .write-form-wrap {
    margin-top: 12px;
  }
  .sub-intro-text .section-title {
    word-break: keep-all;
  }
  .faq-blog-cta {
    padding: 28px 18px !important;
  }
}
@media (max-width: 480px) {
  .auth-card-title,
  .write-form-title {
    font-size: 20px !important;
  }
}
</style>


<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Policy</p>
    <h1 class="sub-hero-title">이용약관</h1>
    <p class="sub-hero-subtitle">안전하고 투명한 서비스 약관입니다</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo $G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">Policy</span></li>
      <li class="separator">></li>
      <li class="current">이용약관</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    <div class="terms-container reveal" style="max-width: 800px; margin: 0 auto; padding: 40px 0;">
      
      <div class="ed-sectlabel" style="margin-bottom: 30px;">
        <span class="ed-kicker">Terms of Use</span>
        <h2>삼성더클성장의원 <strong>홈페이지 이용약관</strong></h2>
      </div>

      <div class="terms-body" style="font-size: 15px; line-height: 1.8; color: var(--c-text); font-weight: 400;">
        <p style="margin-bottom: 20px; font-weight: 400;">
          본 약관은 삼성더클성장의원(이하 "본원")이 제공하는 인터넷 홈페이지 서비스(이하 "서비스")의 이용조건 및 절차, 이용자와 본원의 권리, 의무 및 책임사항을 규정함을 목적으로 합니다.
        </p>

        <h3 style="font-size: 18px; font-weight: 600; color: var(--c-primary-dark); margin: 30px 0 12px; border-left: 3px solid var(--c-primary); padding-left: 10px;">제1조 (약관의 효력 및 변경)</h3>
        <p style="margin-bottom: 12px;">1. 본 약관은 홈페이지 서비스 화면에 게시함으로써 효력이 발생합니다.</p>
        <p style="margin-bottom: 12px;">2. 본원은 합리적인 사유가 발생할 경우 관련 법령을 위배하지 않는 범위 내에서 본 약관을 개정할 수 있으며, 개정된 약관은 적용일자 및 개정사유를 명시하여 홈페이지에 공지합니다.</p>

        <h3 style="font-size: 18px; font-weight: 600; color: var(--c-primary-dark); margin: 30px 0 12px; border-left: 3px solid var(--c-primary); padding-left: 10px;">제2조 (서비스의 제공 및 이용)</h3>
        <p style="margin-bottom: 12px;">1. 본원은 이용자에게 아래와 같은 서비스를 제공합니다.</p>
        <ul style="margin-left: 20px; margin-bottom: 20px; list-style-type: disc; padding-left: 10px;">
          <li style="margin-bottom: 6px;">본원 소개 및 의료진 정보 제공</li>
          <li style="margin-bottom: 6px;">진료 시간 안내 및 예약 신청 문의 서비스</li>
          <li style="margin-bottom: 6px;">클리닉별 정보 및 비급여 진료비 고시 정보</li>
          <li style="margin-bottom: 6px;">공지사항, 자주묻는 질문 등 커뮤니티 기능</li>
        </ul>
        <p style="margin-bottom: 12px;">2. 본원은 필요한 경우 서비스의 내용을 변경하거나 제공을 중단할 수 있으며, 이에 대하여 별도의 책임을 지지 않습니다.</p>

        <h3 style="font-size: 18px; font-weight: 600; color: var(--c-primary-dark); margin: 30px 0 12px; border-left: 3px solid var(--c-primary); padding-left: 10px;">제3조 (이용자의 의무)</h3>
        <p style="margin-bottom: 12px;">이용자는 서비스를 이용할 때 다음 각 호의 행위를 하지 않아야 합니다.</p>
        <ul style="margin-left: 20px; margin-bottom: 20px; list-style-type: disc; padding-left: 10px;">
          <li style="margin-bottom: 6px;">타인의 정보를 도용하여 문의글을 올리는 행위</li>
          <li style="margin-bottom: 6px;">본원이 게시한 정보의 무단 변경, 상업적 복제 및 유포 행위</li>
          <li style="margin-bottom: 6px;">본원 또는 제3자의 명예를 훼손하거나 정보통신망의 원활한 운영을 방해하는 행위</li>
        </ul>

        <h3 style="font-size: 18px; font-weight: 600; color: var(--c-primary-dark); margin: 30px 0 12px; border-left: 3px solid var(--c-primary); padding-left: 10px;">제4조 (의료법상 책임의 한계)</h3>
        <p style="margin-bottom: 20px;">
          본원 홈페이지에서 제공하는 클리닉 정보, 자가진단 및 FAQ 등의 건강정보는 이용자의 이해를 돕기 위한 참고자료일 뿐이며, 의사의 전문적인 진단과 진료를 대신할 수 없습니다. 이용자는 홈페이지의 정보만을 바탕으로 치료를 결정해서는 안 되며, 반드시 본원에 내원하여 의사의 정밀한 상담과 진료를 받아야 합니다.
        </p>

        <h3 style="font-size: 18px; font-weight: 600; color: var(--c-primary-dark); margin: 30px 0 12px; border-left: 3px solid var(--c-primary); padding-left: 10px;">제5조 (면책 조항)</h3>
        <p style="margin-bottom: 20px;">
          본원은 천재지변, 전시, 정전, 서비스 설비 장애 또는 통신 장애 등 불가항력적인 사유로 인하여 서비스를 제공할 수 없는 경우에는 서비스 제공에 대한 책임이 면제됩니다.
        </p>
      </div>

    </div>
  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
