import os

base_dir = r"c:\xampp\htdocs\g7\clinic-prototype"
sub_dir = os.path.join(base_dir, "sub")

if not os.path.exists(sub_dir):
    os.makedirs(sub_dir)

# 상세 페이지 마크업 딕셔너리
subpages_content = {}

# 1-1. 병원 소개
subpages_content["sub1_1"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">About Samsung The CL</p>
  <h2 class="section-title reveal reveal-delay-1">
    소아 내분비학의 세심한 전문성,<br>
    <strong>정직하고 신뢰할 수 있는 진료</strong>로 답합니다
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      삼성더클성장의원은 성장에 고민이 있는 모든 어린이들에게 바른 성장 방향을 제시합니다.<br>
      검증된 과학적 정밀 진단과 아동 특성에 꼭 맞춘 1:1 맞춤 영양/라이프스타일 케어로<br>
      가장 소중한 우리 아이들의 밝고 건강한 미래를 함께 디자인해 드립니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<div class="sub-card-grid">
  <div class="sub-card reveal">
    <div class="sub-card-icon">🔬</div>
    <h3 class="sub-card-title">근거 기반의 정밀 진단</h3>
    <p class="sub-card-desc">과잉 진료를 철저히 배제하고, 골연령 측정, 성장 호르몬 상태 분석 및 풍부한 빅데이터 진단 예측 모델을 통해 객관적 수치만을 근거로 판단합니다.</p>
  </div>
  <div class="sub-card reveal reveal-delay-1">
    <div class="sub-card-icon">💖</div>
    <h3 class="sub-card-title">부모의 마음을 담은 배려</h3>
    <p class="sub-card-desc">아이들이 병원을 낯설고 두려운 곳이 아닌, 스스로의 건강과 키 성장을 함께 축하하고 설계해 나가는 즐겁고 친근한 공간으로 느낄 수 있게 세심히 보살핍니다.</p>
  </div>
  <div class="sub-card reveal reveal-delay-2">
    <div class="sub-card-icon">🌱</div>
    <h3 class="sub-card-title">라이프스타일 토탈 케어</h3>
    <p class="sub-card-desc">단순한 처방을 넘어 식습관, 운동 요법, 수면 상태 및 체지방률, 아동의 심리적 상태까지 유기적으로 개선하는 융합 솔루션을 선사합니다.</p>
  </div>
</div>
"""

# 1-2. 원장 인사말
subpages_content["sub1_2"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">Director's Message</p>
  <h2 class="section-title reveal reveal-delay-1">
    부모의 애틋한 마음으로,<br>
    <strong>아이의 빛나는 내일과 가능성</strong>을 믿습니다
  </h2>
</div>

<div class="about-inner" style="margin-top: 60px;">
  <div class="about-text" style="text-align: left;">
    <div class="desc-group reveal">
      <p class="desc" style="font-size: 15px; line-height: 2.2; color: var(--c-text-light); font-weight: 300;">
        안녕하세요. 삼성더클성장의원 대표원장 김지은입니다.<br><br>
        아이들의 웃음소리가 울려 퍼지는 건강한 성장을 관찰하는 것은 참으로 경이로운 일이지만, 다른 아이들보다 성장이 조금 더디거나 사춘기가 너무 일찍 올 때 부모님의 속앓이와 걱정 또한 무겁다는 것을 잘 알고 있습니다.<br><br>
        소아 내분비학 전문의로서 수많은 아이들을 지켜보며 깨달은 점은, <strong>모든 아동은 저마다의 고유한 성장 템포와 건강한 가능성</strong>을 내포하고 있다는 사실입니다. 우리의 임무는 그 템포를 적시에 과학적으로 분석하여 올바른 골든타임을 놓치지 않도록 이끄는 것입니다.<br><br>
        저희 의원은 부모님과 같은 눈높이에서 아이의 건강한 내일을 지극히 진실하고 정교하게 설계하겠습니다. 성장의 매 순간 든든한 등대지기가 되어 동행할 것을 약속드립니다.
      </p>
    </div>
    
    <div class="reveal reveal-delay-2" style="margin-top: 40px; font-family: var(--font-serif); font-size: 20px; font-style: italic; color: var(--c-primary-dark); font-weight: 600;">
      - Representative Director, Ji Eun Kim
    </div>
  </div>

  <div class="about-images reveal reveal-delay-1" style="height: 480px;">
    <div class="about-img-1" style="width: 100%; position: relative;">
      <img src="<?php echo $G5_URL; ?>/img/doctor.png" alt="김지은 원장" style="width: 100%; height: 450px; object-fit: cover; border-radius: 8px; box-shadow: 0 20px 50px rgba(0,0,0,0.06);">
    </div>
  </div>
</div>
"""

# 1-3. 의료진 소개
subpages_content["sub1_3"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">Medical Staff</p>
  <h2 class="section-title reveal reveal-delay-1">
    학술적 깊이와 현장 리더십,<br>
    <strong>소아 내분비 세부 전문의</strong>가 전담 진료합니다
  </h2>
</div>

<article class="doctor-card reveal" style="background: white; border-radius: 8px; border: 1px solid var(--c-border); padding: 48px; margin-top: 60px; box-shadow: 0 10px 30px rgba(0,0,0,0.01);">
  <div class="doctor-photo">
    <img src="<?php echo $G5_URL; ?>/img/doctor.png" alt="김지은 대표원장">
  </div>
  <div class="doctor-info">
    <span class="doctor-position">소아청소년과 전문의 · 소아내분비 세부전문의</span>
    <h3 class="doctor-name"><strong>김 지 은</strong> 대표원장</h3>
    
    <p class="desc" style="font-size: 14px; color: var(--c-text-light); line-height: 1.8; margin-bottom: 30px; font-weight: 300;">
      대학병원 소아내분비 임상교수 출신으로, 풍부한 임상경험과 글로벌 학술적 네트워크를 기반으로 삼아 저신장과 성조숙증 진료에 탁월한 해법을 제시합니다.
    </p>

    <div class="history-section">
      <div>
        <div class="history-title">
          <span class="star">✦</span> 학력 및 약력
        </div>
        <ul class="history-list">
          <li>서울대학교병원 소아청소년과 전문의</li>
          <li>서울대학교병원 소아내분비 전임의 수료</li>
          <li>서울대학교 의과대학 학사 / 석사 최우수 졸업</li>
          <li>전 삼성서울병원 소아내분비 임상조교수</li>
          <li>대한소아청소년과학회 평생회원</li>
          <li>대한소아내분비학회 정회원 및 심사위원</li>
        </ul>
      </div>
      <div>
        <div class="history-title">
          <span class="star">✦</span> 학회 및 정학술 활동
        </div>
        <ul class="history-list">
          <li>유럽소아내분비학회(ESPE) 우수 임상 연구 구연</li>
          <li>소아 성조숙증 최신 진단 표준 지침서 공동 저자</li>
          <li>대한당뇨병학회 소아당뇨 특별위원회 소속</li>
          <li>소아 비만 및 대사 증후군 통합 포럼 연사</li>
          <li>성장 호르몬 안전성 장기 추적 연구 공동 연구원</li>
          <li>현 삼성더클성장의원 대표원장</li>
        </ul>
      </div>
    </div>
  </div>
</article>
"""

# 1-4. 둘러보기
subpages_content["sub1_4"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">Clinic Gallery</p>
  <h2 class="section-title reveal reveal-delay-1">
    심리적 안정감을 제공하는 인테리어,<br>
    <strong>가장 위생적이고 안온한 의료 공간</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      아이의 긴장을 낮추고 오감의 피로를 풀어주는 따스한 목조와 자연광 설계,<br>
      안심하고 검사받을 수 있는 청정 공간 및 정교한 성장 진료 인프라를 소개합니다.
    </p>
  </div>
</div>

<div class="space-gallery" style="margin-top: 60px;">
  <div class="space-gallery-item reveal">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="대기 라운지">
    <div class="gallery-caption" style="opacity: 1; transform: translateY(0); background: rgba(0,0,0,0.55);">
      <p class="caption-en">Lounge & Waiting Area</p>
      <p class="caption-kr">친환경 자재와 편안한 조도로 설계되어 긴장을 풀어주는 대기 라운지</p>
    </div>
  </div>
  <div class="space-gallery-item reveal reveal-delay-1">
    <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="진료실">
    <div class="gallery-caption" style="opacity: 1; transform: translateY(0); background: rgba(0,0,0,0.55);">
      <p class="caption-en">1:1 Consultation Room</p>
      <p class="caption-kr">원장님과 아이가 마주 보며 편히 대화할 수 있는 인체공학적 진료실</p>
    </div>
  </div>
  <div class="space-gallery-item reveal reveal-delay-2">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="성장 정밀 검사실">
    <div class="gallery-caption" style="opacity: 1; transform: translateY(0); background: rgba(0,0,0,0.55);">
      <p class="caption-en">Exam Lab</p>
      <p class="caption-kr">저선량 X-ray 및 정밀 골연령 분석 기기가 구축된 검사실</p>
    </div>
  </div>
  <div class="space-gallery-item reveal reveal-delay-3" style="margin-top: 20px;">
    <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="수액 치료실">
    <div class="gallery-caption" style="opacity: 1; transform: translateY(0); background: rgba(0,0,0,0.55);">
      <p class="caption-en">Premium IV Therapy Room</p>
      <p class="caption-kr">성장기 어린이의 편안한 휴식과 수액 보충을 위한 1인 프라이빗 침대 구비</p>
    </div>
  </div>
  <div class="space-gallery-item reveal reveal-delay-4" style="margin-top: 20px;">
    <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="신체 계측실">
    <div class="gallery-caption" style="opacity: 1; transform: translateY(0); background: rgba(0,0,0,0.55);">
      <p class="caption-en">Growth Measurement Corner</p>
      <p class="caption-kr">소수점 둘째 자리까지 오차 없이 계측하는 신체성장 분석실</p>
    </div>
  </div>
  <div class="space-gallery-item reveal reveal-delay-5" style="margin-top: 20px;">
    <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="키즈 스페이스">
    <div class="gallery-caption" style="opacity: 1; transform: translateY(0); background: rgba(0,0,0,0.55);">
      <p class="caption-en">Kids Play Corner</p>
      <p class="caption-kr">어린이 도서와 감성 교구가 준비된 아늑한 실내 놀이 공간</p>
    </div>
  </div>
</div>
"""

# 1-5. 오시는 길
subpages_content["sub1_5"] = """
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
"""

# 2-1. 성장 평가
subpages_content["sub2_1"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">Growth Evaluation</p>
  <h2 class="section-title reveal reveal-delay-1">
    빅데이터와 연계한 첨단 예측 기법,<br>
    <strong>아이의 미래 키를 정교하게 계측</strong>합니다
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      단순히 키와 체중을 기록하는 것에 머무르지 않고, 뼈 나이, 유전적 신장 잠재력,<br>
      혈액 내 호르몬 농도를 분석하여 최종 신장의 오차율을 철저히 낮춘 과학적 리포트를 드립니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<div class="timeline-wrap">
  <div class="timeline-step reveal">
    <div class="timeline-badge">1</div>
    <div class="timeline-content">
      <span class="timeline-step-num">Step 01</span>
      <h4 class="timeline-step-title">신체 초정밀 계측</h4>
      <p class="timeline-step-desc">자동 디지털 신장 측정기를 활용하여 아침/오후 편차를 감안한 고도화된 정량 계측 및 BMI, 세부 체성분을 자동 환산합니다.</p>
    </div>
  </div>

  <div class="timeline-step reveal reveal-delay-1">
    <div class="timeline-badge">2</div>
    <div class="timeline-content">
      <span class="timeline-step-num">Step 02</span>
      <h4 class="timeline-step-title">골연령 정밀 촬영 및 AI 분석</h4>
      <p class="timeline-step-desc">저선량 X-ray로 좌측 손목을 촬영하고 소아 골성숙도 판정 전용 솔루션을 가동하여 뼈의 실제 생체 나이를 도출합니다.</p>
    </div>
  </div>

  <div class="timeline-step reveal reveal-delay-2">
    <div class="timeline-badge">3</div>
    <div class="timeline-content">
      <span class="timeline-step-num">Step 03</span>
      <h4 class="timeline-step-title">성장 인자 호르몬 검사</h4>
      <p class="timeline-step-desc">채혈 검사를 시행하여 인슐린양 성장인자(IGF-1)와 결합 단백질 수치를 측정해 현재 호르몬 대사 작용이 활발한지 점검합니다.</p>
    </div>
  </div>

  <div class="timeline-step reveal reveal-delay-3">
    <div class="timeline-badge">4</div>
    <div class="timeline-content">
      <span class="timeline-step-num">Step 04</span>
      <h4 class="timeline-step-title">최종 성장 리포트 발급</h4>
      <p class="timeline-step-desc">부모님의 유전 신장(MPH)과 종합 분석 데이터를 결합하여 최종 예상 신장과 앞으로의 분기별 권장 성장 목표를 브리핑합니다.</p>
    </div>
  </div>
</div>
"""

# 2-2. 저신장
subpages_content["sub2_2"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">Short Stature Clinic</p>
  <h2 class="section-title reveal reveal-delay-1">
    성장 부진의 근원적 생리 원인을 판정,<br>
    <strong>건강한 골든타임을 확보하는 치료</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      저신장은 단순히 키가 작은 미용적 고민이 아니라 호르몬 결핍, 영양 대사 장애 등 치료가 필요한 질환일 수 있습니다.<br>
      삼성더클성장의원은 과학적으로 입증된 안전한 성장호르몬 솔루션으로 안전하고 올바른 치료를 권장합니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<div class="checklist-box reveal">
  <h3 class="checklist-title">💡 이럴 때, 저신장 정밀 검사가 강력히 필요합니다</h3>
  <div class="checklist-grid">
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>연 또래 100명 중에서 앞에서 3번째 이내로 현저히 작을 때</p>
    </div>
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>연간 성장 속도가 4cm 이하로 더디게 자랄 때</p>
    </div>
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>또래 아이들보다 머리 하나 크기 이상으로 차이가 심할 때</p>
    </div>
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>매년 옷 사이즈와 신발 크기가 거의 변하지 않고 똑같을 때</p>
    </div>
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>부모님이 모두 키가 작아 유전적 저신장이 우려될 때</p>
    </div>
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>출생 체중이 주수에 비해 유독 작게 태어났을 때 (부당경량아)</p>
    </div>
  </div>
</div>

<div class="sub-card-grid" style="margin-top: 50px;">
  <div class="sub-card reveal">
    <h3 class="sub-card-title">성장 호르몬 주사 요법</h3>
    <p class="sub-card-desc">체내에 부족한 성장호르몬을 무통 주사 펜 기기를 사용하여 매일 밤 수면 전에 자가 투여하는 치료법으로, 세계적으로 공인된 안전성이 확립되어 있습니다.</p>
  </div>
  <div class="sub-card reveal reveal-delay-1">
    <h3 class="sub-card-title">성장판 자극 도수 치료</h3>
    <p class="sub-card-desc">원내의 전문 운동 재활 물리치료팀이 관절 및 뼈 성장판 주변부 근육의 긴장을 해소하고 척추를 정렬하여 성장 에너지를 활성화합니다.</p>
  </div>
  <div class="sub-card reveal reveal-delay-2">
    <h3 class="sub-card-title">라이프 영양 처방</h3>
    <p class="sub-card-desc">뼈 성장에 필수적인 칼슘, 비타민D, 아연, 양질의 단백질 흡수를 늘리기 위해 일상 식습관과 보조 보충제의 최적 처방을 구성합니다.</p>
  </div>
</div>
"""

# 2-3. 성조숙
subpages_content["sub2_3"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">Precocious Puberty</p>
  <h2 class="section-title reveal reveal-delay-1">
    사춘기의 이른 출발은 성장을 조기에 종료시킵니다,<br>
    <strong>속도 제어를 통한 올바른 키 확보</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      성조숙증은 또래보다 너무 일찍 성호르몬이 분비되어 일시적으로는 급속히 자라는 것처럼 보이나,<br>
      결과적으로 성장판을 빨리 닫히게 만들어 성인 신장을 저해하고 심리적 불안을 유발합니다. 치료 시기가 가장 중요한 치료입니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<div class="checklist-box reveal">
  <h3 class="checklist-title">⚠️ 성조숙증 의심 및 자가진단 항목</h3>
  <div class="checklist-grid">
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>여아: 만 8세 이전에 가슴 몽우리가 잡히고 통증을 느낄 때</p>
    </div>
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>남아: 만 9세 이전에 고환의 크기가 메추리알 크기 이상 커질 때</p>
    </div>
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>또래에 비해 갑자기 1년에 7~8cm 이상 급격하게 키가 클 때</p>
    </div>
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>얼굴에 여드름이 나고, 머리 냄새 및 정수리 체취가 심해질 때</p>
    </div>
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>음모나 액모가 발달하기 시작할 때</p>
    </div>
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>피부나 피하 지방이 유독 빠르게 단단해지며 골격이 드러날 때</p>
    </div>
  </div>
</div>

<div class="timeline-wrap">
  <div class="timeline-step reveal">
    <div class="timeline-badge">1</div>
    <div class="timeline-content">
      <span class="timeline-step-num">Step 01</span>
      <h4 class="timeline-step-title">성선자극호르몬 방출호르몬(GnRHa) 자극 검사</h4>
      <p class="timeline-step-desc">일정한 간격으로 호르몬 자극 반응을 평가하여 시상하부-뇌하수체-성선 축이 조기에 활성화되었는지 정밀 감별합니다.</p>
    </div>
  </div>

  <div class="timeline-step reveal reveal-delay-1">
    <div class="timeline-badge">2</div>
    <div class="timeline-content">
      <span class="timeline-step-num">Step 02</span>
      <h4 class="timeline-step-title">성조숙증 억제 주사 요법</h4>
      <p class="timeline-step-desc">4주 또는 3달 간격으로 성호르몬 억제 주사를 처방하여 성장판의 뼈 노화 진행을 감속시키고 본래의 완만한 성장 속도를 회복시킵니다.</p>
    </div>
  </div>

  <div class="timeline-step reveal reveal-delay-2">
    <div class="timeline-badge">3</div>
    <div class="timeline-content">
      <span class="timeline-step-num">Step 03</span>
      <h4 class="timeline-step-title">정서 및 신체 밸런스 밀착 케어</h4>
      <p class="timeline-step-desc">이른 사춘기 변화로 위축될 수 있는 소아의 심리 상태를 위로하고 건강한 또래 관계를 유지하도록 돕습니다.</p>
    </div>
  </div>
</div>
"""

# 2-4. 소아 비만
subpages_content["sub2_4"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">Pediatric Obesity</p>
  <h2 class="section-title reveal reveal-delay-1">
    소아비만은 성장호르몬의 효율을 대폭 감소시킵니다,<br>
    <strong>체성분 개선을 통한 건강한 신장 확보</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      소아비만 시 체지방에서 분비되는 호르몬이 성조숙증을 촉진하고 성장 호르몬이 지방 대사에 소모되게 만듭니다.<br>
      굶지 않고 키 성장과 건강을 동시에 관리하는 정밀 체성분 매니지먼트를 가동합니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<div class="sub-card-grid">
  <div class="sub-card reveal">
    <div class="sub-card-icon">🥗</div>
    <h3 class="sub-card-title">키는 크고 지방만 줄이는 식단 가이드</h3>
    <p class="sub-card-desc">아동의 기초대사량과 활동량을 과학적으로 연산하여, 성장에 방해되지 않도록 필수 미네랄/단백질은 충분히 섭취하며 칼로리 밀도만 줄이는 1:1 맞춤형 식단을 설계합니다.</p>
  </div>
  <div class="sub-card reveal reveal-delay-1">
    <div class="sub-card-icon">🤸</div>
    <h3 class="sub-card-title">성장판 자극 유산소 운동 프로그램</h3>
    <p class="sub-card-desc">과도한 체중으로 관절과 성장판에 가해지는 충격을 방지하는 무릎 친화형 유산소 재활 요법과 코어 단련 스트레칭을 병행하여 비만 해소와 뼈 성장 활성화를 돕습니다.</p>
  </div>
  <div class="sub-card reveal reveal-delay-2">
    <div class="sub-card-icon">📈</div>
    <h3 class="sub-card-title">지속 가능한 동기 부여 및 생활 코칭</h3>
    <p class="sub-card-desc">아이가 흥미를 잃지 않고 즐겁게 건강 습관을 교정할 수 있도록 스티커 보드, 보상 칭찬 시스템 등 아동 행동 교정 심리학을 가미하여 지도합니다.</p>
  </div>
</div>
"""

# 2-5. 갑상선 질환
subpages_content["sub2_5"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">Thyroid Disorders</p>
  <h2 class="section-title reveal reveal-delay-1">
    성장 대사 에너지의 사령탑인 갑상선 호르몬,<br>
    <strong>체계적인 호르몬 조절 및 균형 회복</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      소아청소년기 갑상선 기능 이상은 피로감, 집중력 저하뿐만 아니라 골성숙 지연, 성장 부진의 주 원인이 됩니다.<br>
      갑상선 호르몬 수치의 안정적 복원과 장기적인 모니터링을 책임집니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<div class="checklist-box reveal">
  <h3 class="checklist-title">🔍 소아 갑상선 의심 자가 체크리스트</h3>
  <div class="checklist-grid">
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>유독 또래에 비해 추위나 더위를 지나치게 많이 탈 때</p>
    </div>
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>충분히 자도 늘 극심한 피로를 호소하고 활력이 떨어질 때</p>
    </div>
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>목 앞부분(갑상선 위치)이 불룩하게 튀어나와 보일 때</p>
    </div>
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>최근 들어 많이 먹는데도 살이 쭉 빠지거나, 안 먹어도 급격히 찔 때</p>
    </div>
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>피부가 유난히 거칠고 건조해지며 모발이 뚝뚝 끊어질 때</p>
    </div>
    <div class="checklist-item">
      <span class="checklist-icon">✦</span>
      <p>심박수가 비정상적으로 빨라 가슴이 두근거린다고 할 때</p>
    </div>
  </div>
</div>
"""

# 2-6. 당뇨
subpages_content["sub2_6"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">Pediatric Diabetes</p>
  <h2 class="section-title reveal reveal-delay-1">
    소아청소년 특성을 반영한 혈당 케어,<br>
    <strong>합병증 없는 든든한 일상 밀착 관리</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      소아 당뇨는 성인 당뇨와 성격이 매우 다르고, 지속적인 성장 발달을 동시에 고려해야 합니다.<br>
      인슐린 의존성을 정밀하게 파악하여 아이가 낙인 효과 없이 학교생활을 활발히 영위하도록 정성껏 돌봅니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<div class="sub-card-grid">
  <div class="sub-card reveal">
    <div class="sub-card-icon">🍭</div>
    <h3 class="sub-card-title">1형 당뇨 특화 인슐린 매니지먼트</h3>
    <p class="sub-card-desc">췌장 인슐린 분비 결핍이 원인인 1형 당뇨 아동을 위해 안전한 인슐린 펜 투여법 교육, 실시간 연속혈당측정기(CGM) 데이터 모니터링을 통합 지도합니다.</p>
  </div>
  <div class="sub-card reveal reveal-delay-1">
    <div class="sub-card-icon">🍱</div>
    <h3 class="sub-card-title">인슐린 저항성 개선 (2형 당뇨)</h3>
    <p class="sub-card-desc">서구화된 식생활로 증가하는 소아 2형 당뇨를 완화하기 위해 복부 비만을 해소하고 췌장의 인슐린 저항성을 떨어뜨리는 라이프 코칭을 적용합니다.</p>
  </div>
  <div class="sub-card reveal reveal-delay-2">
    <div class="sub-card-icon">🏥</div>
    <h3 class="sub-card-title">학교 및 가정 연계 네트워크</h3>
    <p class="sub-card-desc">아이가 학교나 유치원에서 저혈당 응급 상황에 처하지 않도록 가정통신 안내 가이드를 보완해 드리고, 대처 약물 상비 매뉴얼을 수립해 드립니다.</p>
  </div>
</div>
"""

# 2-7. 영양수액
subpages_content["sub2_7"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">Premium IV Therapy</p>
  <h2 class="section-title reveal reveal-delay-1">
    성장 발육 및 피로 해소,<br>
    <strong>기능의학 기반의 영양 밸런스 솔루션</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      편식으로 영양 흡수가 불량한 아동, 학업 피로도가 심한 청소년을 위해<br>
      세포 활성화에 즉각 작용하는 안심 고농축 영양수액 칵테일 처방을 드립니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<div class="sub-card-grid">
  <div class="sub-card reveal">
    <div class="sub-card-icon">🚀</div>
    <h3 class="sub-card-title">성장 밸런스 에너지 수액</h3>
    <p class="sub-card-desc">뼈와 근육의 합성을 촉진하는 핵심 아미노산 군과 아연, 비타민D, 칼슘의 흡수율을 높여주는 영양 물질을 조합하여 빠른 성장 활력을 유도합니다.</p>
  </div>
  <div class="sub-card reveal reveal-delay-1">
    <div class="sub-card-icon">🛡️</div>
    <h3 class="sub-card-title">면역 강화 비타민 수액</h3>
    <p class="sub-card-desc">잦은 감기나 아토피, 비염으로 성장 에너지를 낭비하는 아동을 위해 고농도 비타민C, 비타민B군, 셀레늄 등 강력한 항산화 면역 포뮬러를 공급합니다.</p>
  </div>
  <div class="sub-card reveal reveal-delay-2">
    <div class="sub-card-icon">🧠</div>
    <h3 class="sub-card-title">브레인 피로 회복 수액</h3>
    <p class="sub-card-desc">학업과 불면증으로 지친 수험생 및 청소년의 뇌 대사를 회복시키고 피로 물질 배출을 촉진하는 아르기닌 및 프리미엄 신경 활성 칵테일 수액입니다.</p>
  </div>
</div>
"""

# 3-1. 진료 시간
subpages_content["sub3_1"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">Clinic Hours</p>
  <h2 class="section-title reveal reveal-delay-1">
    예약제로 편안하게 내원하시는<br>
    <strong>삼성더클성장의원 진료 일정표</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      한 분 한 분 깊이 있는 1:1 상담을 위해 사전 예약을 원칙으로 운영합니다.<br>
      아래 진료 시간을 참고하여 내원 예약 일정을 잡으실 수 있습니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<div class="premium-table-wrap reveal">
  <table class="premium-table">
    <thead>
      <tr>
        <th>구분</th>
        <th>진료 시작 시간</th>
        <th>진료 종료 시간</th>
        <th>비고 및 특이사항</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>평일 (월 — 금)</td>
        <td>오전 09:00</td>
        <td>오후 18:30</td>
        <td>점심시간: 13:00 ~ 14:00 (진료 접수 마감: 18:00)</td>
      </tr>
      <tr>
        <td>토요일</td>
        <td>오전 09:00</td>
        <td>오후 13:00</td>
        <td>토요일은 점심시간 없이 연속 진료합니다. (접수 마감: 12:30)</td>
      </tr>
      <tr>
        <td>일요일 · 공휴일</td>
        <td colspan="2" style="text-align: center; font-weight: 600; color: var(--c-accent);">휴  진</td>
        <td>긴급 문의 및 내원 예약은 카카오톡 채널을 통해 남겨주세요.</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="sub-card-grid" style="margin-top: 50px;">
  <div class="sub-card reveal" style="text-align: center;">
    <h3 class="sub-card-title">📞 간편 전화 예약</h3>
    <a href="tel:02-1234-5678" style="font-size: 24px; font-weight: 700; color: var(--c-primary); display: block; margin: 12px 0;">02.1234.5678</a>
    <p class="sub-card-desc">당일 진료 예약이나 비급여 주차권 관련 급한 용무는 전화로 연락 주시면 신속히 응대합니다.</p>
  </div>
  
  <div class="sub-card reveal reveal-delay-1" style="text-align: center;">
    <h3 class="sub-card-title">💬 카카오톡 24시간 문의</h3>
    <a href="#" style="font-size: 18px; font-weight: 700; color: #391B1B; background: #FEE500; display: inline-block; padding: 10px 24px; border-radius: 4px; margin: 12px 0;">삼성더클성장 채널상담</a>
    <p class="sub-card-desc">카카오톡 채널을 추가하시면 진료 예약일 알림 서비스와 1:1 채팅 문의를 자유로이 이용하실 수 있습니다.</p>
  </div>
</div>
"""

# 3-2. 진료 절차
subpages_content["sub3_2"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">Clinical Flow</p>
  <h2 class="section-title reveal reveal-delay-1">
    첫 방문부터 귀가하시는 순간까지,<br>
    <strong>체계적이고 편안한 프리미엄 진료 프로세스</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      아이의 정서적 케어와 정교한 내분비 검사를 위한 통합 진료 가이드라인을 소개합니다.<br>
      평균 소요 시간은 정밀 검사 포함 약 1시간에서 1시간 반이 소요됩니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<div class="timeline-wrap">
  <div class="timeline-step reveal">
    <div class="timeline-badge">1</div>
    <div class="timeline-content">
      <span class="timeline-step-num">Step 01</span>
      <h4 class="timeline-step-title">예약 접수 및 성장 예진표 작성</h4>
      <p class="timeline-step-desc">내원 후 아늑한 대기실에서 아동의 수면 시간, 식습관, 부모님의 신장 등을 기록하는 예진 차트를 작성합니다.</p>
    </div>
  </div>

  <div class="timeline-step reveal reveal-delay-1">
    <div class="timeline-badge">2</div>
    <div class="timeline-content">
      <span class="timeline-step-num">Step 02</span>
      <h4 class="timeline-step-title">기초 신체 계측 및 저선량 뼈나이 촬영</h4>
      <p class="timeline-step-desc">오차가 없는 정량 측정기로 신체 스펙을 계측하고, X-ray실로 이동해 저선량 촬영을 실시합니다.</p>
    </div>
  </div>

  <div class="timeline-step reveal reveal-delay-2">
    <div class="timeline-badge">3</div>
    <div class="timeline-content">
      <span class="timeline-step-num">Step 03</span>
      <h4 class="timeline-step-title">대표원장 1:1 맞춤 진료 및 정밀 문진</h4>
      <p class="timeline-step-desc">소아 내분비 세부전문의 김지은 원장이 손목 엑스레이 필름을 면밀히 판독하고 성장 장애 원인을 감별합니다.</p>
    </div>
  </div>

  <div class="timeline-step reveal reveal-delay-3">
    <div class="timeline-badge">4</div>
    <div class="timeline-content">
      <span class="timeline-step-num">Step 04</span>
      <h4 class="timeline-step-title">필요 시 추가 정밀 채혈/호르몬 검사</h4>
      <p class="timeline-step-desc">성조숙증이나 호르몬 결핍이 강하게 우려되는 경우 안전하고 아프지 않은 주사 침으로 미세 채혈을 시행해 검체를 분석합니다.</p>
    </div>
  </div>

  <div class="timeline-step reveal reveal-delay-4">
    <div class="timeline-badge">5</div>
    <div class="timeline-content">
      <span class="timeline-step-num">Step 05</span>
      <h4 class="timeline-step-title">성장 솔루션 제공 및 귀가 수납</h4>
      <p class="timeline-step-desc">치료 방향성 설명 리포트를 증정해 드리고 영양/식습관 가이드를 설명하며, 다음 추적 관찰 일정을 예약 수납합니다.</p>
    </div>
  </div>
</div>
"""

# 3-3. 검사 항목
subpages_content["sub3_3"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">Clinical Tests</p>
  <h2 class="section-title reveal reveal-delay-1">
    정확하고 안전한 대학병원급 검사 인프라,<br>
    <strong>오차를 줄이는 정밀 진단 검사 항목</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      삼성더클성장의원이 자랑하는 다각적이고 체계적인 소아 내분비 진단 도구들을 소개합니다.<br>
      모든 검사는 대학병원과 동일한 품질 기준 및 철저한 멸균 하에 이루어집니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<div class="accordion-wrap reveal">
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
        // Close others
        document.querySelectorAll(".accordion-panel").forEach(p => p.classList.remove("open"));
        document.querySelectorAll(".accordion-btn").forEach(b => b.classList.remove("active"));
        
        this.classList.add("active");
        panel.classList.add("open");
      }
    });
  });
});
</script>
"""

# 3-4. 비급여
subpages_content["sub3_4"] = """
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
"""

# 4-1. 치료 사례
subpages_content["sub4_1"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">Clinical Case Studies</p>
  <h2 class="section-title reveal reveal-delay-1">
    성실한 동행이 가져다 준 성장 스토리,<br>
    <strong>실제 키 성장 호전 치료 사례</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      치료 사례 데이터는 개인정보와 의료법에 준해 익명화하여 엄격히 보호되며,<br>
      부모님들의 신뢰 형성을 돕기 위해 승인된 성장 일지만을 제한적으로 오픈합니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<!-- Lock Box UI for premium styling -->
<div class="lock-box reveal">
  <div class="lock-icon">🔒</div>
  <h3 class="lock-title">회원 전용 성장 데이터 열람 안내</h3>
  <p class="lock-desc">
    본 정보는 의료법에 따라 <strong>회원 가입 및 본인 인증 완료 후</strong>에만 상세 열람이 가능합니다.<br>
    간편 카카오 로그인으로 3초만에 가입하고 상세한 분기별 성장 그래프를 확인해 보세요.
  </p>
  <button class="lock-btn">간편 3초 로그인하기</button>
</div>

<!-- Blurred Case Cards -->
<div class="case-lock-container">
  <div class="case-card-grid">
    <div class="case-card">
      <div class="case-card-body">
        <span class="case-badge">저신장 치료 성공</span>
        <h3 class="case-title">만 9세 남아 유전성 저신장 극복</h3>
        <div class="case-meta">
          <span class="case-meta-item">치료 기간: <strong>24개월</strong></span>
          <span class="case-meta-item">성장 결과: <strong>+18.5 cm</strong></span>
        </div>
        <p class="case-desc">
          초진 당시 하위 4백분위수였으나, 2년간의 성장호르몬 매일 투여 및 단백 영양 밀착 교정을 시행하여 현재 또래 표준 평균 이상으로 회복한 성공 사례입니다.
        </p>
      </div>
    </div>
    
    <div class="case-card">
      <div class="case-card-body">
        <span class="case-badge">성조숙 속도 제어</span>
        <h3 class="case-title">만 8세 여아 가슴 몽우리 발현 제어</h3>
        <div class="case-meta">
          <span class="case-meta-item">치료 기간: <strong>18개월</strong></span>
          <span class="case-meta-item">골연령 지연: <strong>-1.2년</strong></span>
        </div>
        <p class="case-desc">
          초등학교 입학 직후 성조숙 증상이 나타나 성장판이 조기 닫힐 뻔하였으나, 3개월 GnRHa 주사 억제를 통해 뼈나이 속도를 늦추고 자연 성장을 연장시켰습니다.
        </p>
      </div>
    </div>
  </div>
</div>
"""

# 4-2. FAQ
subpages_content["sub4_2"] = """
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
"""

# 4-3. 공지사항
subpages_content["sub4_3"] = """
<div class="sub-intro-text">
  <p class="section-en reveal">Notice Board</p>
  <h2 class="section-title reveal reveal-delay-1">
    삼성더클성장의원의<br>
    <strong>새로운 소식 및 알림판</strong>
  </h2>
</div>

<div class="premium-table-wrap reveal" style="margin-top: 60px;">
  <table class="premium-table">
    <thead>
      <tr>
        <th style="width: 80px; text-align: center;">번호</th>
        <th>공지사항 제목</th>
        <th style="width: 120px; text-align: center;">작성일</th>
        <th style="width: 100px; text-align: center;">조회수</th>
      </tr>
    </thead>
    <tbody>
      <tr style="font-weight: 600; background-color: rgba(240, 245, 241, 0.2);">
        <td style="text-align: center; color: var(--c-primary);"><span style="background: var(--c-primary-pale); padding: 2px 6px; border-radius: 4px; font-size: 11px;">공지</span></td>
        <td><a href="#" style="color: var(--c-primary-dark);">삼성더클성장의원 여름 하계 휴진 일정 안내 (8/1 ~ 8/4)</a></td>
        <td style="text-align: center;">2026.05.28</td>
        <td style="text-align: center;">245</td>
      </tr>
      <tr style="font-weight: 600; background-color: rgba(240, 245, 241, 0.2);">
        <td style="text-align: center; color: var(--c-primary);"><span style="background: var(--c-primary-pale); padding: 2px 6px; border-radius: 4px; font-size: 11px;">공지</span></td>
        <td><a href="#" style="color: var(--c-primary-dark);">토요일 오전 진료 예약 대기시간 단축 및 검사 프로세스 최적화 도입</a></td>
        <td style="text-align: center;">2026.05.20</td>
        <td style="text-align: center;">312</td>
      </tr>
      <tr>
        <td style="text-align: center;">3</td>
        <td><a href="#">김지은 대표원장 유럽소아내분비학회(ESPE) 해외 세미나 초청 강연 참관기</a></td>
        <td style="text-align: center;">2026.05.15</td>
        <td style="text-align: center;">89</td>
      </tr>
      <tr>
        <td style="text-align: center;">2</td>
        <td><a href="#">소아 저선량 초정밀 X-ray 성장 진단 보정 분석기 도입 안내</a></td>
        <td style="text-align: center;">2026.05.02</td>
        <td style="text-align: center;">156</td>
      </tr>
      <tr>
        <td style="text-align: center;">1</td>
        <td><a href="#">삼성더클성장의원 신축 개원 안내 및 강남역 3번출구 주차 지원 제도 안내</a></td>
        <td style="text-align: center;">2026.04.10</td>
        <td style="text-align: center;">482</td>
      </tr>
    </tbody>
  </table>
</div>
"""

# 진료과목 공통 상세 패턴 (2-2부터 2-6까지를 제외한 기타 클리닉 페이지 자동 생성용 템플릿)
default_clinic_template = """
<div class="sub-intro-text">
  <p class="section-en reveal">Specialized Clinic</p>
  <h2 class="section-title reveal reveal-delay-1">
    소아청소년 특화 진료의 명확한 기준,<br>
    <strong>삼성더클 {title} 프로그램</strong>
  </h2>
  <div class="desc-group reveal reveal-delay-2" style="margin-top: 30px;">
    <p class="desc">
      {subtitle}<br>
      삼성더클성장의원은 과학적인 진단과 풍부한 임상경험을 바탕으로 진료합니다.
    </p>
  </div>
  <div class="sub-intro-divider reveal reveal-delay-3"></div>
</div>

<div class="sub-card-grid">
  <div class="sub-card reveal">
    <div class="sub-card-icon">🔬</div>
    <h3 class="sub-card-title">정밀 1:1 맞춤 진단</h3>
    <p class="sub-card-desc">아동의 성장 데이터와 임상 병리 수치들을 세밀하게 취합하여 근본적인 장애 요인을 유기적으로 감별합니다.</p>
  </div>
  <div class="sub-card reveal reveal-delay-1">
    <div class="sub-card-icon">🩺</div>
    <h3 class="sub-card-title">대학병원급 정밀 케어</h3>
    <p class="sub-card-desc">검증된 소아 내분비 세부전문의의 지속적인 밀착 관리를 통해 치료 효과를 극대화하고 이상 징후를 예방합니다.</p>
  </div>
  <div class="sub-card reveal reveal-delay-2">
    <div class="sub-card-icon">🌱</div>
    <h3 class="sub-card-title">라이프스타일 통합 치료</h3>
    <p class="sub-card-desc">원내 영양상담과 생활 치료를 결합하여 일상의 모든 순간이 아이의 바른 성장 동력으로 환원되도록 리빌딩합니다.</p>
  </div>
</div>
"""

# 전체 페이지 구조 데이터 정의
pages_meta = {
    "sub1_1": {"category": "About", "title": "병원 소개", "subtitle": "아이의 성장은 한순간이 아닌 긴 여정입니다"},
    "sub1_2": {"category": "About", "title": "원장 인사말", "subtitle": "부모의 마음으로 진료합니다"},
    "sub1_3": {"category": "About", "title": "의료진 소개", "subtitle": "검증된 전문성과 풍부한 임상 경험"},
    "sub1_4": {"category": "About", "title": "둘러보기", "subtitle": "아이와 부모님 모두가 편안한 공간"},
    "sub1_5": {"category": "About", "title": "오시는 길", "subtitle": "강남역 3번출구 도보 3분"},
    "sub2_1": {"category": "Clinic", "title": "성장 평가", "subtitle": "체계적인 데이터 기반 성장 예측"},
    "sub2_2": {"category": "Clinic", "title": "저신장", "subtitle": "성장 부진의 근본 원인 해결"},
    "sub2_3": {"category": "Clinic", "title": "성조숙", "subtitle": "빠른 사춘기를 위한 적기 치료"},
    "sub2_4": {"category": "Clinic", "title": "소아 비만", "subtitle": "건강한 성장의 첫걸음"},
    "sub2_5": {"category": "Clinic", "title": "갑상선 질환", "subtitle": "소아청소년 특화 갑상선 클리닉"},
    "sub2_6": {"category": "Clinic", "title": "당뇨", "subtitle": "소아 당뇨의 체계적 관리"},
    "sub2_7": {"category": "Clinic", "title": "영양수액", "subtitle": "성장기 필수 영양 보충"},
    "sub3_1": {"category": "Info", "title": "진료 시간", "subtitle": "내원에 참고해 주세요"},
    "sub3_2": {"category": "Info", "title": "진료 절차", "subtitle": "체계적이고 편안한 진료 안내"},
    "sub3_3": {"category": "Info", "title": "검사 항목", "subtitle": "정확한 진단을 위한 첨단 검사"},
    "sub3_4": {"category": "Info", "title": "비급여", "subtitle": "투명한 비용 안내"},
    "sub4_1": {"category": "Community", "title": "치료 사례", "subtitle": "건강한 성장 이야기"},
    "sub4_2": {"category": "Community", "title": "FAQ", "subtitle": "자주 묻는 질문"},
    "sub4_3": {"category": "Community", "title": "공지사항", "subtitle": "삼성더클성장의원 소식"},
}

php_template = """<?php
$page_title = "{title}";
include_once('../head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">{category}</p>
    <h1 class="sub-hero-title">{title}</h1>
    <p class="sub-hero-subtitle">{subtitle}</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo $G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">{category}</span></li>
      <li class="separator">></li>
      <li class="current">{title}</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    {content}
  </div>
</main>

<?php
include_once('../tail.php');
?>
"""

for filename, meta in pages_meta.items():
    filepath = os.path.join(sub_dir, f"{filename}.php")
    
    # 딕셔너리에 지정된 프리미엄 마크업 본문이 있으면 사용하고, 없으면 디폴트 클리닉 템플릿 사용
    if filename in subpages_content:
        content_html = subpages_content[filename]
    else:
        content_html = default_clinic_template.format(
            title=meta['title'],
            subtitle=meta['subtitle']
        )
        
    full_code = php_template.format(
        title=meta['title'],
        category=meta['category'],
        subtitle=meta['subtitle'],
        content=content_html
    )
    
    with open(filepath, "w", encoding="utf-8") as f:
        f.write(full_code)

print("19 premium-designed subpages generated successfully.")
