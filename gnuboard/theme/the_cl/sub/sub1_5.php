<?php
$page_title = "오시는 길";
$page_description = "송파구 잠실역 9번 출구 인근에 위치한 삼성더클성장의원 찾아오시는 길, 주차 안내 및 진료 문의 정보입니다.";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<style>
/* ============================================================
   ABOUT 1-5 (오시는 길) 전용 모바일 보완
   ============================================================ */
.sub15-map {
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
  height: 350px;
}
.sub15-map-inner {
  width: 100%;
  height: 100%;
  background-color: var(--c-primary-pale);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  color: var(--c-primary-dark);
  padding: 20px;
  text-align: center;
}
.sub15-map-inner .pin {
  font-size: 50px;
  margin-bottom: 16px;
}
.sub15-map-inner strong {
  font-size: 18px;
  margin-bottom: 8px;
  word-break: keep-all;
}
.sub15-map-inner p {
  font-size: 14px;
  color: var(--c-text-light);
  word-break: keep-all;
  line-height: 1.55;
}
.sub15-info {
  background: white;
  border-radius: 8px;
  border: 1px solid var(--c-border);
  padding: 40px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.01);
}
.sub15-info-block {
  margin-bottom: 30px;
}
.sub15-info-block:last-child {
  margin-bottom: 0;
}
/* 섹션 제목(직계 strong)만 크게 — 본문 안 strong은 크기 유지 */
.sub15-info-block > strong {
  font-size: 18px;
  color: var(--c-primary-dark);
  display: block;
  margin-bottom: 12px;
  word-break: keep-all;
}
.sub15-info-block p {
  font-size: 14px;
  color: var(--c-text-light);
  line-height: 1.8;
  font-weight: 400;
  word-break: keep-all;
}
.sub15-info-block p strong {
  font-size: inherit;
  font-weight: 600;
  color: var(--c-text);
  display: inline;
  margin: 0;
}
@media (max-width: 768px) {
  .sub15-map {
    height: 240px;
  }
  .sub15-map-inner .pin {
    font-size: 40px;
    margin-bottom: 10px;
  }
  .sub15-map-inner strong {
    font-size: 16px;
  }
  .sub15-map-inner p {
    font-size: 13px;
  }
  .sub15-info {
    padding: 24px 18px;
  }
  .sub15-info-block {
    margin-bottom: 22px;
  }
  .sub15-info-block > strong {
    font-size: 16px;
    margin-bottom: 8px;
  }
  .sub15-info-block p {
    font-size: 13.5px;
    line-height: 1.75;
  }
  .sub15-info-block p strong {
    font-size: inherit;
  }
  .map-buttons {
    margin-top: 20px !important;
  }
}
@media (max-width: 480px) {
  .sub15-map {
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
    <h1 class="sub-hero-title">오시는 길</h1>
    <p class="sub-hero-subtitle">잠실역 9번출구 도보 3분</p>
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
      <li class="current">오시는 길</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    
<div class="sub-intro-text">
  <p class="section-en reveal">Directions</p>
  <h2 class="ed-split__title ed-split__title--simple">
      잠실역 도보 3분 거리,<span class="br-all" aria-hidden="true"></span>
      <strong>가장 쾌적하게 방문하시는 길</strong>
    </h2>
</div>

<div class="contact-inner" style="margin-top: 60px;">
  <div class="contact-left reveal">
    <div class="contact-img sub15-map">
      <div class="sub15-map-inner">
        <span class="pin">📍</span>
        <strong>삼성더클성장의원 약도</strong>
        <p>서울특별시 송파구 올림픽로 329, 3층 329, 330, 331호</p>
      </div>
    </div>
    
    <div class="map-buttons" style="margin-top: 30px;">
      <a href="#" onclick="goToNaverMap(event)" class="map-btn" style="flex: 1; text-align: center; font-weight: 600; display: inline-flex; align-items: center; justify-content: center; gap: 6px;">
        <svg class="map-icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor" style="color: #03C75A; flex-shrink: 0;">
          <path d="M16.2 3H21v18h-4.8l-8.4-12v12H3V3h4.8l8.4 12z"/>
        </svg>네이버 길찾기
      </a>
      <a href="#" class="map-btn" style="flex: 1; text-align: center; font-weight: 600; display: inline-flex; align-items: center; justify-content: center; gap: 6px;">
        <svg class="map-icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor" style="color: #FEE500; flex-shrink: 0; filter: drop-shadow(0px 1px 1px rgba(0,0,0,0.25));">
          <path d="M12 3c-5.5 0-10 3.8-10 8.5 0 3.1 2 5.8 5 7.2l-1.3 4.8c-.1.3 0 .6.2.8.1.1.3.2.5.2.1 0 .2 0 .3-.1l5.6-3.7c.9.2 1.8.3 2.7.3 5.5 0 10-3.8 10-8.5S17.5 3 12 3z"/>
        </svg>카카오 길찾기
      </a>
      <a href="#" class="map-btn" style="flex: 1; text-align: center; font-weight: 600; display: inline-flex; align-items: center; justify-content: center; gap: 6px;">
        <svg class="map-icon" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="color: #1F87FF; flex-shrink: 0;">
          <polygon points="3 11 22 2 13 21 11 13 3 11"/>
        </svg>티맵 길찾기
      </a>
    </div>
  </div>

  <div class="contact-right reveal reveal-delay-2 sub15-info">
    <div class="sub15-info-block">
      <strong>🚇 지하철 이용 시</strong>
      <p>
        <strong>2호선, 8호선 잠실역 9번 출구</strong>로 나오셔서 송파구청 방향으로 약 200m 직진하시면 위치해 있습니다.
      </p>
    </div>

    <div class="sub15-info-block">
      <strong>🚌 버스 이용 시</strong>
      <p>
        <strong>송파구청.교통회관 정류장</strong> 또는 <strong>잠실역9번출구 정류장</strong> 하차<br class="pc-only">
        <br class="mo-only">간선: 302, 303, 320, 341 / 지선: 3216, 3303, 3313, 3315, 3414 등 운행
      </p>
    </div>

    <div class="sub15-info-block">
      <strong>🚗 자가용 & 주차 안내</strong>
      <p>
        건물 내 주차장이 완비되어 있으며, 진료받으신 모든 분께 <strong>1시간 무료 주차권</strong>을 지급해 드립니다. 타워 기계식 주차 가능 여부는 입차 시 주차 안내원에게 문의하시기 바랍니다.
      </p>
    </div>
  </div>
</div>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
