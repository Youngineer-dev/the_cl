<?php
$page_title = "오시는 길";
include_once('../head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">About</p>
    <h1 class="sub-hero-title">오시는 길</h1>
    <p class="sub-hero-subtitle">강남역 3번출구 도보 3분</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo $G5_URL; ?>/index.php">Home</a></li>
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
  <h2 class="section-title reveal reveal-delay-1">
    강남역 도보 3분 거리,<br>
    <strong>가장 쾌적하게 방문하시는 길</strong>
  </h2>
</div>

<div class="contact-inner" style="margin-top: 60px;">
  <div class="contact-left reveal">
    <div class="contact-img" style="border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); height: 350px;">
      <div style="width: 100%; height: 100%; background-color: var(--c-primary-pale); display: flex; flex-direction: column; align-items: center; justify-content: center; color: var(--c-primary-dark);">
        <span style="font-size: 50px; margin-bottom: 16px;">📍</span>
        <strong style="font-size: 18px; margin-bottom: 8px;">삼성더클성장의원 약도</strong>
        <p style="font-size: 13px; color: var(--c-text-light);">서울시 강남구 테헤란로 123 그린빌딩 4층</p>
      </div>
    </div>
    
    <div class="map-buttons" style="margin-top: 30px;">
      <a href="#" class="map-btn" style="flex: 1; text-align: center; font-weight: 600;">네이버 길찾기 바로가기</a>
      <a href="#" class="map-btn" style="flex: 1; text-align: center; font-weight: 600;">카카오 맵 바로가기</a>
      <a href="#" class="map-btn" style="flex: 1; text-align: center; font-weight: 600;">T맵 안내 바로가기</a>
    </div>
  </div>

  <div class="contact-right reveal reveal-delay-2" style="background: white; border-radius: 8px; border: 1px solid var(--c-border); padding: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.01);">
    <div style="margin-bottom: 30px;">
      <strong style="font-size: 18px; color: var(--c-primary-dark); display: block; margin-bottom: 12px;">🚇 지하철 이용 시</strong>
      <p style="font-size: 14px; color: var(--c-text-light); line-height: 1.8; font-weight: 300;">
        <strong>2호선, 신분당선 강남역 3번 출구</strong> 나오셔서 스타벅스 골목으로 우회전 후 100m 도보 이동하시면 우측에 그린빌딩 4층 간판이 보입니다.
      </p>
    </div>

    <div style="margin-bottom: 30px;">
      <strong style="font-size: 18px; color: var(--c-primary-dark); display: block; margin-bottom: 12px;">🚌 버스 이용 시</strong>
      <p style="font-size: 14px; color: var(--c-text-light); line-height: 1.8; font-weight: 300;">
        <strong>강남역.강남역사거리 정류장</strong> 하차<br>
        간선: 140, 144, 360, 420, 740 / 광역: 9404, 9700 등 다수 노선 운행
      </p>
    </div>

    <div>
      <strong style="font-size: 18px; color: var(--c-primary-dark); display: block; margin-bottom: 12px;">🚗 자가용 & 주차 안내</strong>
      <p style="font-size: 14px; color: var(--c-text-light); line-height: 1.8; font-weight: 300;">
        건물 지하 1~2층에 대형 타워 주차장이 완비되어 있으며, 진료받으신 모든 분께 <strong>2시간 무료 주차권</strong>을 지급해 드립니다. SUV 차량의 경우 기계식 입고가 불가할 수 있으니 외부 지정 주차장 요금을 대신 정산해 드립니다.
      </p>
    </div>
  </div>
</div>

  </div>
</main>

<?php
include_once('../tail.php');
?>
