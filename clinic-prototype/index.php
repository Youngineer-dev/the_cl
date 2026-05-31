<?php
$page_title = "삼성더클성장의원 - 소아 내분비 전문";
include_once('./head.php');
?>

  <!-- ============================================================
       HERO SECTION
       ============================================================ -->
  <section class="hero" id="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <div class="hero-deco"></div>
      <p class="hero-subtitle">Grow Together, Grow Healthy</p>
      <h1 class="hero-title"><strong>삼성더클</strong>성장의원</h1>
      <p class="hero-desc">
        아이의 건강한 성장을 세심하게 돌보는<br>
        소아 내분비 전문 클리닉입니다<br>
        과학적 근거와 따뜻한 진심을 담아 함께합니다
      </p>
      <a href="#contact" class="hero-btn">
        상담 / 예약 문의 →
      </a>
    </div>
    <div class="hero-scroll-indicator">
      <span>SCROLL</span>
      <div class="scroll-line"></div>
    </div>
  </section>

  <!-- ============================================================
       ABOUT SECTION
       ============================================================ -->
  <section class="about" id="about">
    <div class="container">
      <div class="about-inner">
        <div class="about-text">
          <p class="section-en reveal">Gracefully, Carefully, Together</p>
          <h2 class="section-title reveal reveal-delay-1">
            <strong>정성스럽게</strong><br>
            <strong>세심하게</strong><br>
            <strong>함께</strong>
          </h2>
          <div class="desc-group reveal reveal-delay-2">
            <p class="desc">
              아이의 성장은 한순간이 아닌<br>
              긴 여정입니다
            </p>
          </div>
          <div class="desc-group reveal reveal-delay-3">
            <p class="desc">
              작은 변화도 놓치지 않는 세심함,<br>
              근거에 기반한 정확한 진단,<br>
              아이와 부모님 모두를 이해하는 따뜻함
            </p>
          </div>
          <div class="desc-group reveal reveal-delay-4">
            <p class="desc">
              삼성더클성장의원, 성장의 모든 순간을<br>
              함께하겠습니다
            </p>
          </div>
          <a href="#doctors" class="view-more reveal reveal-delay-5">view more →</a>
        </div>

        <div class="about-images">
          <div class="about-img-1 reveal">
            <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="클리닉 진료 모습">
          </div>
          <div class="about-img-2 reveal reveal-delay-2">
            <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="클리닉 내부">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       DOCTORS SECTION
       ============================================================ -->
  <section class="doctors" id="doctors">
    <div class="container">
      <div class="doctors-header">
        <p class="section-en reveal">Doctors</p>
        <h2 class="section-title reveal reveal-delay-1">
          아이의 건강한 내일을 함께 돌보는<br>
          소아 내분비 전문의
        </h2>
      </div>

      <!-- Doctor 1 -->
      <article class="doctor-card reveal">
        <div class="doctor-photo">
          <img src="<?php echo $G5_URL; ?>/img/doctor.png" alt="김지은 원장">
        </div>
        <div class="doctor-info">
          <span class="doctor-position">소아청소년과 전문의 · 내분비 분과</span>
          <h3 class="doctor-name"><strong>김 지 은</strong> 대표원장</h3>

          <div class="history-section">
            <div>
              <div class="history-title">
                <span class="star">✦</span> 약력
              </div>
              <ul class="history-list">
                <li>서울대학교병원 소아청소년과 전문의</li>
                <li>서울대학교병원 소아내분비 전임의</li>
                <li>서울대학교 의과대학 학사/석사</li>
                <li>대한소아내분비학회 정회원</li>
                <li>전 삼성서울병원 소아내분비 임상강사</li>
                <li>현 삼성더클성장의원 대표원장</li>
              </ul>
            </div>
            <div>
              <div class="history-title">
                <span class="star">✦</span> 학회활동
              </div>
              <ul class="history-list">
                <li>대한소아과학회</li>
                <li>대한소아내분비학회</li>
                <li>대한성장의학회</li>
                <li>대한당뇨병학회</li>
                <li>대한갑상선학회</li>
                <li>소아비만연구회</li>
              </ul>
            </div>
          </div>
        </div>
      </article>
    </div>
  </section>

  <!-- ============================================================
       PROGRAMS SECTION
       ============================================================ -->
  <section class="programs" id="programs">
    <div class="container">
      <div class="programs-header">
        <p class="section-en reveal">Specialized Clinic</p>
        <h2 class="section-title reveal reveal-delay-1">아이의 모든 성장 순간을 함께</h2>
        <p class="section-desc reveal reveal-delay-2">삼성더클성장의원의 진료과목을 소개합니다</p>
      </div>

      <div class="programs-grid">
        <!-- Card 1 -->
        <div class="program-card reveal">
          <div class="program-icon">📏</div>
          <h3 class="card-title">성장 평가</h3>
          <p class="card-desc">
            정밀 성장 평가를 통해<br>
            아이의 현재 성장 상태와<br>
            최종 예상 키를 진단합니다
          </p>
        </div>

        <!-- Card 2 -->
        <div class="program-card reveal reveal-delay-1">
          <div class="program-icon">📐</div>
          <h3 class="card-title">저신장</h3>
          <p class="card-desc">
            성장 부진의 원인을 정확히 파악하고<br>
            근거 기반의 맞춤 성장 치료를<br>
            제공합니다
          </p>
        </div>

        <!-- Card 3 -->
        <div class="program-card reveal reveal-delay-2">
          <div class="program-icon">⏱️</div>
          <h3 class="card-title">성조숙</h3>
          <p class="card-desc">
            또래보다 빠른 사춘기 발달을<br>
            조기에 발견하고<br>
            적절한 치료를 시작합니다
          </p>
        </div>

        <!-- Card 4 -->
        <div class="program-card reveal reveal-delay-3">
          <div class="program-icon">⚖️</div>
          <h3 class="card-title">소아 비만</h3>
          <p class="card-desc">
            과학적 체성분 분석과<br>
            영양 상담을 통해<br>
            건강한 체중을 관리합니다
          </p>
        </div>

        <!-- Card 5 -->
        <div class="program-card reveal reveal-delay-4">
          <div class="program-icon">🦋</div>
          <h3 class="card-title">갑상선 질환</h3>
          <p class="card-desc">
            소아·청소년의<br>
            갑상선 기능 이상을<br>
            전문적으로 진단하고 치료합니다
          </p>
        </div>

        <!-- Card 6 -->
        <div class="program-card reveal reveal-delay-5">
          <div class="program-icon">💉</div>
          <h3 class="card-title">당뇨 · 영양수액</h3>
          <p class="card-desc">
            소아 당뇨 관리와<br>
            성장기 필수 영양 수액 치료를<br>
            제공합니다
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       LOOP TEXT (Marquee)
       ============================================================ -->
  <div class="loop-text-section">
    <div class="loop-text-track">
      <p class="loop-text">Grow Together <span class="sep">✦</span> Grow Healthy <span class="sep">✦</span> Samsung The CL <span class="sep">✦</span></p>
      <p class="loop-text">Grow Together <span class="sep">✦</span> Grow Healthy <span class="sep">✦</span> Samsung The CL <span class="sep">✦</span></p>
      <p class="loop-text">Grow Together <span class="sep">✦</span> Grow Healthy <span class="sep">✦</span> Samsung The CL <span class="sep">✦</span></p>
      <p class="loop-text">Grow Together <span class="sep">✦</span> Grow Healthy <span class="sep">✦</span> Samsung The CL <span class="sep">✦</span></p>
    </div>
  </div>

  <!-- ============================================================
       SPACE / GALLERY SECTION
       ============================================================ -->
  <section class="space" id="space">
    <div class="container">
      <div class="space-header">
        <p class="section-en reveal">Space</p>
        <p class="section-title reveal reveal-delay-1">아이와 부모님 모두 편안한 공간</p>
      </div>

      <div class="space-gallery">
        <div class="space-gallery-item reveal">
          <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="대기실">
          <div class="gallery-caption">
            <p class="caption-en">Waiting Area</p>
            <p class="caption-kr">편안하고 따뜻한 대기 공간</p>
          </div>
        </div>
        <div class="space-gallery-item reveal reveal-delay-1">
          <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="진료실">
          <div class="gallery-caption">
            <p class="caption-en">Consultation</p>
            <p class="caption-kr">1:1 맞춤 진료실</p>
          </div>
        </div>
        <div class="space-gallery-item reveal reveal-delay-2">
          <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="검사실">
          <div class="gallery-caption">
            <p class="caption-en">Examination</p>
            <p class="caption-kr">정밀 검사 공간</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       CONTACT / FOOTER
       ============================================================ -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="contact-inner">
        <!-- Left -->
        <div class="contact-left reveal">
          <p class="section-en">Contact Us</p>
          <div class="contact-img">
            <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="클리닉 외관">
          </div>
          <p class="address">
            <span class="star">✦</span> 서울 강남구 테헤란로 123 그린빌딩 4층<br>
            <span style="padding-left: 18px;">강남역 3번출구 도보 3분</span>
          </p>
          <p class="address" style="margin-top: 8px;">
            <span class="star">✦</span> 주차 &nbsp; 건물 내 주차장 이용 가능 (1시간 무료)
          </p>
          <div class="map-buttons">
            <a href="#" class="map-btn">네이버 길찾기</a>
            <a href="#" class="map-btn">카카오 길찾기</a>
            <a href="#" class="map-btn">티맵 길찾기</a>
          </div>
        </div>

        <!-- Right -->
        <div class="contact-right reveal reveal-delay-2">
          <p class="phone-number">
            <span class="star">✦</span>
            <a href="tel:02-1234-5678">02.1234.5678</a>
          </p>
          <p class="phone-desc">
            진료예약 후 내방하시면 더 편안하게 진료를 받아보실 수 있습니다
          </p>
          <div class="contact-buttons">
            <a href="#" class="contact-btn">카톡 상담</a>
            <a href="#" class="contact-btn outline">네이버 예약</a>
          </div>

          <!-- 진료시간 -->
          <div class="schedule-title">
            <span class="star">✦</span> 진료시간
          </div>
          <div class="schedule-table">
            <div class="schedule-row">
              <span class="schedule-day">월 — 금</span>
              <span class="schedule-time">09:00 ~ 18:30</span>
            </div>
            <div class="schedule-row">
              <span class="schedule-day">토 요 일</span>
              <span class="schedule-time">09:00 ~ 13:00</span>
            </div>
            <div class="schedule-row">
              <span class="schedule-day">점심시간</span>
              <span class="schedule-time">13:00 ~ 14:00</span>
            </div>
          </div>
          <p class="schedule-note">※ 일요일, 공휴일 휴진</p>
        </div>
      </div>
    </div>
  </section>

<?php
include_once('./tail.php');
?>
