<?php
$page_title = "비급여항목";
$page_description = "잠실 삼성더클성장의원의 비급여 진료 항목과 비용을 관련 법령에 의거하여 투명하게 안내해 드립니다.";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');

/* ------------------------------------------------------------------
   비급여 진료비용 최종 변경일
   의료법 시행규칙 제42조의2(비급여 진료비용 등의 고지)에 따른 필수 표기.

   ※ 아래 표의 금액·항목을 수정할 때마다 이 날짜를 반드시 함께 갱신하세요.
     (자동 날짜를 쓰면 실제 변경이 없어도 매일 바뀐 것처럼 표기되어 부적합)
   ------------------------------------------------------------------ */
$uninsured_updated = '2026-08-05';
$uninsured_updated_ts = strtotime($uninsured_updated);
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

<style>
/* 초반 인트로 문구 좌측 정렬 (미러 레이아웃·계단 들여쓰기 해제) */
.ed-split .ed-split__text {
  text-align: left;
}
.ed-split .ed-split__title .i2,
.ed-split .ed-split__title .i3 {
  padding-left: 0;
}

/* 비급여 최종 변경일 (의료법 시행규칙 제42조의2 고지) */
.uninsured-updated {
  margin: -8px 0 16px;
  font-size: 14px;
  font-weight: 500;
  color: var(--c-text-light);
  letter-spacing: -0.2px;
}
.uninsured-updated time {
  margin-left: 6px;
  font-weight: 600;
  color: var(--c-primary-dark);
}

/* 모바일 비급여 테이블 가독성 극대화 최적화 */
@media (max-width: 768px) {
    /* 글자량이 많은 세부내용 셀은 레이블 아래로 줄바꿈하여 100% 가로공간 확보 */
    .premium-table td[data-label="세부 내용"] {
        flex-direction: column !important;
        align-items: flex-start !important;
        gap: 8px !important;
        padding-top: 14px !important;
        padding-bottom: 14px !important;
    }
    /* 모바일 세부내용 본문 정렬 교정 */
    .premium-table td .pt-desc {
        text-align: left !important;
        width: 100% !important;
        line-height: 1.6 !important;
        font-size: 13.5px !important;
        color: var(--c-text) !important;
        margin: 0 !important;
        padding: 0 !important;
    }
}
</style>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Policy</p>
    <h1 class="sub-hero-title">비급여항목</h1>
    <p class="sub-hero-subtitle">투명한 비용 안내</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">Policy</span></li>
      <li class="separator">></li>
      <li class="current">비급여항목</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

<!-- 스플릿 인트로 (텍스트 좌측 정렬) -->
<section class="ed-split reveal" style="padding-top: 40px;">
  <div class="ed-split__text">
    <span class="ed-eyebrow">Non-Benefit Fees</span>
    <h2 class="ed-split__title">
      <span class="i1">환자의 권리를 위한</span>
      <span class="i2"><strong>투명한 비용 공개</strong></span>
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
  <div class="ed-collage ed-collage--empty reveal reveal-delay-2" aria-hidden="true"></div>
</section>

<!-- 비급여 표 -->
<section style="padding-top: 40px; padding-bottom: 60px;">
  <div class="ed-sectlabel reveal" style="margin-bottom: 26px;">
    <span class="ed-kicker">Price Guide</span>
    <h2>비급여 진료비 <strong>항목 안내</strong></h2>
  </div>
  <p class="uninsured-updated reveal">
    최종 변경일
    <time datetime="<?php echo $uninsured_updated; ?>"><?php echo date('Y년 n월 j일', $uninsured_updated_ts); ?></time>
  </p>
  <div class="premium-table-wrap reveal">
    <table class="premium-table">
      <thead>
        <tr>
          <th>분류</th>
          <th>비급여 항목</th>
          <th>세부 내용</th>
          <th>금액</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="2" class="pt-cat" data-label="분류">성장검진</td>
          <td data-label="비급여 항목" class="pt-name">더클 기본 성장검진</td>
          <td data-label="세부 내용"><div class="pt-desc">진료, 성장판(X-ray), 골연령 판독, 체성분(InBody) 평가</div></td>
          <td data-label="금액" class="pt-price">80,000원</td>
        </tr>
        <tr>
          <td class="pt-cat-m" data-label="분류">성장검진</td>
          <td data-label="비급여 항목" class="pt-name">더클 정밀 성장검진</td>
          <td data-label="세부 내용"><div class="pt-desc"><strong>기본 성장 검진</strong> + 혈구(빈혈 등), 일반화학(간·신장 기능, 콜레스테롤, 단백질, 칼슘 등), 내분비(갑상선 기능, 성장/사춘기 관련 호르몬 등), 비타민 D, 소변 검사<br>※ 필요 시 검사 항목 추가</div></td>
          <td data-label="금액" class="pt-price">230,000 ~ 330,000원</td>
        </tr>
        <tr>
          <td class="pt-cat" data-label="분류">척추</td>
          <td data-label="비급여 항목" class="pt-name">척추측만 평가</td>
          <td data-label="세부 내용"><div class="pt-desc">척추 정렬 및 측만 평가</div></td>
          <td data-label="금액" class="pt-price">10,000원</td>
        </tr>
        <tr>
          <td rowspan="6" class="pt-cat" data-label="분류">제증명</td>
          <td data-label="비급여 항목" class="pt-name">진단서 또는 소견서</td>
          <td data-label="세부 내용">-</td>
          <td data-label="금액" class="pt-price">20,000원</td>
        </tr>
        <tr>
          <td class="pt-cat-m" data-label="분류">제증명</td>
          <td data-label="비급여 항목" class="pt-name">통원확인서</td>
          <td data-label="세부 내용">-</td>
          <td data-label="금액" class="pt-price">3,000원</td>
        </tr>
        <tr>
          <td class="pt-cat-m" data-label="분류">제증명</td>
          <td data-label="비급여 항목" class="pt-name">영문 진단서 / 소견서</td>
          <td data-label="세부 내용">-</td>
          <td data-label="금액" class="pt-price">20,000원</td>
        </tr>
        <tr>
          <td class="pt-cat-m" data-label="분류">제증명</td>
          <td data-label="비급여 항목" class="pt-name">영상기록 복사 (CD)</td>
          <td data-label="세부 내용">-</td>
          <td data-label="금액" class="pt-price">10,000원</td>
        </tr>
        <tr>
          <td class="pt-cat-m" data-label="분류">제증명</td>
          <td data-label="비급여 항목" class="pt-name">진료기록 사본 (1~5매)</td>
          <td data-label="세부 내용"><div class="pt-desc">1매당 비용</div></td>
          <td data-label="금액" class="pt-price">1,000원</td>
        </tr>
        <tr>
          <td class="pt-cat-m" data-label="분류">제증명</td>
          <td data-label="비급여 항목" class="pt-name">진료기록 사본 (6매 이상)</td>
          <td data-label="세부 내용"><div class="pt-desc">1매당 비용</div></td>
          <td data-label="금액" class="pt-price">100원</td>
        </tr>
      </tbody>
    </table>
  </div>
  <p class="reveal" style="margin-top: 20px; font-size: 14px; color: var(--c-text-light); font-weight: 400;">
    ※ 상기 비용은 부가세 포함 금액이며, 환자의 개별 상태와 처방 용량에 따라 달라질 수 있습니다.<br>
    ※ 본 비급여 진료비용은 <strong><?php echo date('Y년 n월 j일', $uninsured_updated_ts); ?></strong> 기준이며,
    「의료법 시행규칙」 제42조의2에 따라 고지합니다.
  </p>
</section>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
