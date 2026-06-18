<?php
$page_title = "비급여";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
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

<!-- 스플릿 인트로 (미러형: 이미지 좌 / 텍스트 우) -->
<section class="ed-split ed-split--reverse reveal">
  <div class="ed-split__text">
    <span class="ed-eyebrow">Non-Benefit Fees</span>
    <h2 class="ed-split__title">
      <span class="i1">환자의 권리를</span>
      <span class="i2">위한</span>
      <span class="i3"><strong>투명한 비용 공개</strong></span>
    </h2>
    <div class="ed-split__body">
      <p class="lead">
        삼성더클성장의원은 비급여 수가를 환자 권리 보호 차원에서 투명하게 고시합니다.
      </p>
      <p>
        진료 전 담당 간호사가 비용 정보를 사전에 성실히 설명해 드립니다.
        아래 항목은 의료법에 의거한 공개 정보이며, 환자 상태에 따라 일부 변동될 수 있습니다.
      </p>
    </div>
  </div>
  <div class="ed-collage reveal reveal-delay-2">
    <img src="<?php echo $G5_URL; ?>/img/programs.png" alt="진료비 안내" class="ed-collage__main">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="상담 데스크" class="ed-collage__sub">
  </div>
</section>

<!-- 비급여 표 (기능 유지) -->
<section style="padding-top: 40px;">
  <div class="ed-sectlabel reveal" style="margin-bottom: 26px;">
    <span class="ed-kicker">Price Guide</span>
    <h2>비급여 진료비 <strong>항목 안내</strong></h2>
  </div>
  <div class="premium-table-wrap reveal">
    <table class="premium-table">
      <thead>
        <tr>
          <th>대분류</th>
          <th>수가 항목명</th>
          <th>규격 및 용량</th>
          <th>비용 (원)</th>
          <th>비고</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="2" class="pt-cat" data-label="대분류">정밀 성장 검사</td>
          <td data-label="수가 항목명" class="pt-name">골연령 AI 정밀 판독 검사</td>
          <td data-label="규격 및 용량">1회 촬영</td>
          <td data-label="비용 (원)" class="pt-price">50,000</td>
          <td data-label="비고">판독 및 레포트 포함</td>
        </tr>
        <tr>
          <td class="pt-cat-m" data-label="대분류">정밀 성장 검사</td>
          <td data-label="수가 항목명" class="pt-name">성장호르몬 자극 정밀유발 검사</td>
          <td data-label="규격 및 용량">1회 세트 (채혈 5회)</td>
          <td data-label="비용 (원)" class="pt-price">220,000</td>
          <td data-label="비고">약물 비용 별도</td>
        </tr>
        <tr>
          <td rowspan="2" class="pt-cat" data-label="대분류">성장호르몬 치료제</td>
          <td data-label="수가 항목명" class="pt-name">그로우트로핀투 주사</td>
          <td data-label="규격 및 용량">16 IU 1펜</td>
          <td data-label="비용 (원)" class="pt-price">145,000</td>
          <td data-label="비고">용량에 따른 비례 단가</td>
        </tr>
        <tr>
          <td class="pt-cat-m" data-label="대분류">성장호르몬 치료제</td>
          <td data-label="수가 항목명" class="pt-name">지노트로핀 주사</td>
          <td data-label="규격 및 용량">36 IU 1카트리지</td>
          <td data-label="비용 (원)" class="pt-price">290,000</td>
          <td data-label="비고">오리지널 제제</td>
        </tr>
        <tr>
          <td rowspan="2" class="pt-cat" data-label="대분류">프리미엄 수액</td>
          <td data-label="수가 항목명" class="pt-name">성장 아미노산 에너지 주사</td>
          <td data-label="규격 및 용량">100 ml</td>
          <td data-label="비용 (원)" class="pt-price">80,000</td>
          <td data-label="비고">성장 필수 아미노산 조합</td>
        </tr>
        <tr>
          <td class="pt-cat-m" data-label="대분류">프리미엄 수액</td>
          <td data-label="수가 항목명" class="pt-name">고농축 비타민 면역 부스터</td>
          <td data-label="규격 및 용량">150 ml</td>
          <td data-label="비용 (원)" class="pt-price">120,000</td>
          <td data-label="비고">피로 회복 및 면역 증강</td>
        </tr>
      </tbody>
    </table>
  </div>
  <p class="reveal" style="margin-top: 20px; font-size: 13px; color: var(--c-text-light); font-weight: 300;">
    ※ 상기 비용은 부가세 포함 금액이며, 환자의 개별 상태와 처방 용량에 따라 달라질 수 있습니다.
    질환 목적의 성장호르몬 치료는 조건 충족 시 실손 보험 적용 대상이 될 수 있습니다.
  </p>
</section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
