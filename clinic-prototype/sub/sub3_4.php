<?php
$page_title = "비급여";
include_once('../head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Info</p>
    <h1 class="sub-hero-title">비급여</h1>
    <p class="sub-hero-subtitle">투명한 비용 안내</p>
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
      <li class="current">비급여</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    
<div class="sub-intro-text">
  <p class="section-en reveal">Non-Benefit Fees</p>
  <h2 class="section-title reveal reveal-delay-1">
    의료법에 의거한 투명한 공개 정책,<br>
    <strong>비급여 진료비 항목 안내</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      삼성더클성장의원은 비급여 수가를 환자 권리 보호 차원에서 투명하게 고시합니다.<br>
      진료 전 담당 간호사가 비용 정보를 사전에 성실히 설명해 드립니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<div class="premium-table-wrap reveal">
  <table class="premium-table">
    <thead>
      <tr>
        <th>대분류</th>
        <th>수가 항목명</th>
        <th>규격 및 용량</th>
        <th>비용 (단위: 원)</th>
        <th>비고</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td rowspan="2" style="font-weight: 500;">정밀 성장 검사</td>
        <td>골연령 AI 정밀 판독 검사</td>
        <td>1회 촬영</td>
        <td>50,000</td>
        <td>판독 및 레포트 포함</td>
      </tr>
      <tr>
        <td>성장호르몬 자극 정밀유발 검사</td>
        <td>1회 세트 (채혈 5회)</td>
        <td>220,000</td>
        <td>약물 비용 별도</td>
      </tr>
      <tr>
        <td rowspan="2" style="font-weight: 500;">성장호르몬 치료제</td>
        <td>그로우트로핀투 주사</td>
        <td>16 IU 1펜</td>
        <td>145,000</td>
        <td>용량에 따른 비례 단가</td>
      </tr>
      <tr>
        <td>지노트로핀 주사</td>
        <td>36 IU 1카트리지</td>
        <td>290,000</td>
        <td>오리지널 제제</td>
      </tr>
      <tr>
        <td rowspan="2" style="font-weight: 500;">프리미엄 수액</td>
        <td>성장 아미노산 에너지 주사</td>
        <td>100 ml</td>
        <td>80,000</td>
        <td>성장 필수 아미노산 조합</td>
      </tr>
      <tr>
        <td>고농축 비타민 면역 부스터</td>
        <td>150 ml</td>
        <td>120,000</td>
        <td>피로 회복 및 면역 증강</td>
      </tr>
    </tbody>
  </table>
</div>

  </div>
</main>

<?php
include_once('../tail.php');
?>
