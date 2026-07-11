<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$g5['title'] = "삼성더클성장의원 - 소아 내분비 전문";
$page_description = "송파구 잠실역 9번 출구 인근 삼성더클성장의원. 대학병원 교수 출신 소아내분비 세부전문의가 진료하는 소아 성장 클리닉으로 성조숙증, 예상키 및 골연령 검사, 소아 비만 등을 정밀하게 진단합니다.";
include_once(G5_THEME_PATH.'/head.php');
?>

  <!-- ============================================================
       HERO SECTION
       ============================================================ -->
  <section class="hero" id="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <div class="hero-deco"></div>
      <p class="hero-subtitle">더 클 우리 아이를 위한 선택</p>
      <h1 class="hero-title"><strong>삼성더클</strong>성장의원</h1>
      <p class="hero-desc">
        데이터로 정밀하게,<br>
        공감으로 따뜻하게.<br><br>
        대학병원 교수 출신,<br>
        소아내분비 전문의 진료
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
          <p class="section-en reveal">Care & Long</p>
          <h2 class="section-title reveal reveal-delay-1">
            더클 <strong>THE CL</strong> (Care & Long)은
          </h2>
          <div class="desc-group reveal reveal-delay-2">
            <p class="desc">
              아이를 세심하게 케어하고, 긴 성장 여정을 함께하겠다는 마음에서 시작되었습니다.
            </p>
          </div>
          <div class="desc-group reveal reveal-delay-3">
            <p class="desc">
              아이의 성장은 한 번의 키 숫자로 판단할 수 있는 결과가 아닌 시간과 함께 만들어가는 과정입니다.
            </p>
          </div>
          <div class="desc-group reveal reveal-delay-4">
            <p class="desc">
              대학병원 교수 출신 소아내분비 전문의의 깊이 있는 진료와 두 남매를 키우는 엄마의 따뜻한 공감을 더해 근거 있는 평가와 충분한 설명으로 아이에게 꼭 맞는 성장 진료를 이어갑니다.
            </p>
          </div>
          <a href="#doctors" class="view-more reveal reveal-delay-5">view more →</a>
        </div>

        <div class="about-images">
          <div class="about-img-1 reveal">
            <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="잠실 삼성더클성장의원 소아내분비 전문의의 세심한 성장 진료 모습">
          </div>
          <div class="about-img-2 reveal reveal-delay-2">
            <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="송파구 삼성더클성장의원의 쾌적하고 편안한 클리닉 인테리어 내부">
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
      </div>

      <!-- Doctor 1 -->
      <article class="doctor-card reveal">
        <div class="doctor-photo">
          <img src="<?php echo $G5_URL; ?>/img/doctor.png?v=7" alt="삼성더클성장의원 소아청소년과 전문의 및 소아내분비 세부전문의 노유선 대표원장 프로필 사진">
        </div>
        <div class="doctor-info">
          <span class="doctor-position">소아청소년과 전문의 · 소아내분비 세부전문의</span>
          <h3 class="doctor-name"><strong>노 유 선</strong> 대표원장</h3>

          <div class="history-section">
            <div class="history-col">
              <div>
                <div class="history-title">
                  <span class="star">✦</span> 주요 약력
                </div>
                <ul class="history-list">
                  <li>現 삼성더클성장의원 대표원장</li>
                  <li>前 강동성심병원 소아청소년과 소아내분비분과 교수</li>
                  <li>삼성서울병원 인턴</li>
                  <li>삼성서울병원 소아청소년과 전공의</li>
                  <li>삼성서울병원 소아내분비·유전대사 임상강사 (모범상 수상)</li>
                  <li>삼성서울병원 소아청소년과 외래교수</li>
                </ul>
              </div>
              <div>
                <div class="history-title">
                  <span class="star">✦</span> 연수 및 수료
                </div>
                <ul class="history-list">
                  <li>Asia Pacific Paediatric Endocrine Society (APPES) Fellow School 수료</li>
                  <li>KRDMS 소아 초음파 과정 수료</li>
                  <li>소아 성장운동(Growth Fit) 필라테스 지도자과정 (Level 6) 수료</li>
                </ul>
              </div>
            </div>
            <div class="history-col">
              <div>
                <div class="history-title">
                  <span class="star">✦</span> 학회 활동
                </div>
                <ul class="history-list">
                  <li>대한소아내분비학회 기획위원회 간사</li>
                  <li>前 대한소아내분비학회 연구위원회 위원</li>
                  <li>대한소아내분비학회 정회원</li>
                  <li>Asia Pacific Paediatric Endocrine Society (APPES) 정회원</li>
                  <li>European Society for Paediatric Endocrinology (ESPE) 정회원</li>
                  <li>대한유전성대사질환학회 정회원</li>
                  <li>대한소아알레르기호흡기학회 정회원</li>
                </ul>
              </div>
              <div>
                <div class="history-title">
                  <span class="star">✦</span> 학술 연구
                </div>
                <ul class="history-list">
                  <li>성장·성조숙증·비만·유전대사 관련 SCI 논문 다수 발표</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- 학술 논문 -->
        <section class="publications-section">
          <div class="history-title">
            <span class="star">✦</span> 주요 학술 논문 (SCI / PubMed)
          </div>
          <ul class="publications-list">
            <li class="pub-item">
              <span class="pub-journal">Front Endocrinol (Lausanne). 2025</span>
              <p class="pub-title">Exosomal miRNAs as potential biomarkers for insulin resistance and metabolic dysfunction-associated steatotic liver disease in children with obesity.</p>
              <p class="pub-authors">Noh ES, Yeum Y, Jin HY, Ryu S, Hwang IT.</p>
            </li>
            <li class="pub-item">
              <span class="pub-journal">J Pediatr Endocrinol Metab. 2025</span>
              <p class="pub-title">Serum α-Klotho and its association with testosterone in boys with central precocious puberty.</p>
              <p class="pub-authors">Noh ES, Jin HY, Hwang IT.</p>
            </li>
            <li class="pub-item">
              <span class="pub-journal">J Korean Med Sci. 2025</span>
              <p class="pub-title">Endocrine Disorders in Patients With Inborn Errors of Immunity.</p>
              <p class="pub-authors">Noh ES, Kim DR, Im M, Kim I, Sung J, Ahn YJ, Shin A, Kim KR, et al.</p>
            </li>
            <li class="pub-item">
              <span class="pub-journal">Medicine (Baltimore). 2024</span>
              <p class="pub-title">Triglyceride-glucose-alanine aminotransferase index: A noninvasive serum predictor for identifying the severity of pediatric nonalcoholic fatty liver disease.</p>
              <p class="pub-authors">Noh ES, Hwang IT.</p>
            </li>
            <!-- 더보기 영역 -->
            <li class="pub-item pub-hidden">
              <span class="pub-journal">Ann Pediatr Endocrinol Metab. 2023</span>
              <p class="pub-title">Mixed diabetic ketoacidosis and hyperglycemic hyperosmolarity in a girl with nephronophthisis 4 presenting with rhabdomyolysis and pancreatitis.</p>
              <p class="pub-authors">Noh ES, Kim C, Cho SY.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">J Pers Med. 2022</span>
              <p class="pub-title">Endocrine and Metabolic Illnesses in Young Adults with Prader-Willi Syndrome.</p>
              <p class="pub-authors">Noh ES, Kim MS, Kim C, Jeon K, Kim S, Cho SY, Jin DK.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">Medicine (Baltimore). 2022</span>
              <p class="pub-title">Late-infantile GM1 gangliosidosis: A case report.</p>
              <p class="pub-authors">Noh ES, Park HM, Kim MS, Park HD, Cho SY, Jin DK.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">Yonsei Med J. 2019</span>
              <p class="pub-title">Continuous Renal Replacement Therapy in Preterm Infants.</p>
              <p class="pub-authors">Noh ES, Kim HH, Kim HS, Han YS, Yang M, Ahn SY, Sung SI, Chang YS, Park WS.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">J Clin Res Pediatr Endocrinol. 2026</span>
              <p class="pub-title">Floating-Harbor Syndrome in a Korean Patient with Short Stature and Early Puberty: A Case Report.</p>
              <p class="pub-authors">Jeon J, Noh ES, Hwang IT.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">J Clin Endocrinol Metab. 2026</span>
              <p class="pub-title">Genomic Insights into Short Stature in Children Born Small for Gestational Age: A Korean Multicenter Exome Study.</p>
              <p class="pub-authors">Lee Y, Jeong HR, Kim EY, Noh ES, Jin HY, et al.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">Int J Mol Sci. 2026</span>
              <p class="pub-title">Differential microRNA Expression Profiles in Girls with Idiopathic Central Precocious Puberty and Premature Thelarche.</p>
              <p class="pub-authors">Lee HJ, Bae SJ, Noh ES, Jin HY, Hwang IT, Ryu S, Jeong HR.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">BMC Pediatr. 2024</span>
              <p class="pub-title">Prediction of hepatic fibrosis using the aspartate transaminase-to-platelet ratio index in children and adolescents with metabolic dysfunction-associated steatotic liver disease.</p>
              <p class="pub-authors">Jin HY, Noh ES, Jeong H, Hwang IT.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">J Clin Res Pediatr Endocrinol. 2024</span>
              <p class="pub-title">Triglyceride Glucose Index is Associated with Ultrasonographic Fatty Liver Indicator in Children and Adolescents with Non-alcoholic Fatty Liver Disease.</p>
              <p class="pub-authors">Kim B, Jin HY, Yoon JS, Noh ES, Hwang IT.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">Front Endocrinol (Lausanne). 2024</span>
              <p class="pub-title">α-Klotho levels in girls with central precocious puberty: potential as a diagnostic and monitoring marker.</p>
              <p class="pub-authors">Park JH, Noh ES, Hwang IT.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">Ann Pediatr Endocrinol Metab. 2024</span>
              <p class="pub-title">Resistance to thyroid hormone and nonfunctioning pituitary microadenoma in a 13-year-old boy with THRB mutation.</p>
              <p class="pub-authors">Kim J, Noh ES, Kim MS, Choi JM, Lee SM, Cho SY.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">Ann Pediatr Endocrinol Metab. 2023</span>
              <p class="pub-title">A Korean boy with a CHD8 mutation who presented with overgrowth, intellectual disability, and autism.</p>
              <p class="pub-authors">Kim C, Noh ES, Cho SY.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">Ewha Med J. 2023</span>
              <p class="pub-title">Diagnosis and Management of Osteoporosis in Children and Adolescents.</p>
              <p class="pub-authors">Jin HY, Noh ES, Hwang IT.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">Ann Pediatr Endocrinol Metab. 2023</span>
              <p class="pub-title">First female Korean child with Coffin-Lowry syndrome: a novel variant in RPS6KA3 diagnosed by exome sequencing and a literature review.</p>
              <p class="pub-authors">Song A, Im M, Kim MS, Noh ES, Kim C, Jang J, Lee SM, Ki CS, Cho SY, Jin DK.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">Medicine (Baltimore). 2023</span>
              <p class="pub-title">Six-year clinical outcomes of enzyme replacement therapy for perinatal lethal and infantile hypophosphatasia in Korea: Two case reports.</p>
              <p class="pub-authors">Kim I, Noh ES, Kim MS, Jang JH, Jeon TY, Choi HW, Cho SY.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">Ann Hum Genet. 2022</span>
              <p class="pub-title">A novel splicing variant in GALNS in mucopolysaccharidosis IVA and the necessity of re-evaluating primer sequences.</p>
              <p class="pub-authors">Kim SM, Noh ES, Park JH, Park HD, Lee SY, Jang JH, Cho SY.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">Endocr J. 2022</span>
              <p class="pub-title">Multiple endocrine neoplasia type 2 and autoimmune polyendocrine syndromes in a 16-year-old male with Kabuki syndrome.</p>
              <p class="pub-authors">Park E, Kim MS, Noh ES, Lee JE, Kim SJ, Kwon YS, Cho SY.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">Ann Clin Lab Sci. 2022</span>
              <p class="pub-title">The Youngest Infant to Be Diagnosed with Autosomal Dominant Hypocalcemia Type 2 Harboring a Novel Variant of GNA11.</p>
              <p class="pub-authors">Kwon EJ, Kim MS, Noh ES, Kim CW, Jang J, Choi JH, Cho SY, Jin DK.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">J Pers Med. 2022</span>
              <p class="pub-title">Natural History and Molecular Characteristics of Korean Patients with Mucopolysaccharidosis Type III.</p>
              <p class="pub-authors">Kim MS, Yang A, Noh ES, Kim C, Bae GY, Lim HH, Park HD, Cho SY, Jin DK.</p>
            </li>
            <li class="pub-item pub-hidden">
              <span class="pub-journal">Epidemiol Health. 2022</span>
              <p class="pub-title">Development and validation of the Pediatric-Youth Hyperphagia Assessment for Prader-Willi syndrome.</p>
              <p class="pub-authors">Cho SY, Kang D, Im M, Yang A, Kim MS, Kim J, Noh ES, et al.</p>
            </li>
          </ul>
          <div class="pub-toggle-wrap">
            <button type="button" class="pub-toggle-btn" onclick="(function(b){var h=b.closest('.publications-section').querySelectorAll('.pub-hidden');var o=b.classList.toggle('is-open');h.forEach(function(e){e.classList.toggle('is-expanded',o)});b.querySelector('.btn-text').textContent=o?'논문 접기':'논문 더보기 (총 24편)';if(!o){b.closest('.publications-section').scrollIntoView({behavior:'smooth',block:'start'})}})(this)">
              <span class="btn-text">논문 더보기 (총 24편)</span>
              <span class="arrow">▼</span>
            </button>
          </div>
        </section>

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
        <a href="<?php echo $G5_URL; ?>/sub/sub2_1.php" class="program-card reveal">
          <div class="program-icon">📏</div>
          <h3 class="card-title">성장평가 · 예상키</h3>
          <p class="card-desc">
            정밀 성장 평가를 통해<br>
            현재 성장 상태를 확인하고<br>
            최종 예상 키를 예측합니다
          </p>
        </a>

        <!-- Card 2 -->
        <a href="<?php echo $G5_URL; ?>/sub/sub2_2.php" class="program-card reveal reveal-delay-1">
          <div class="program-icon">📐</div>
          <h3 class="card-title">저신장</h3>
          <p class="card-desc">
            성장이 더딘 원인을 정확히 확인하고<br>
            아이에게 맞는 성장 치료를<br>
            제공합니다
          </p>
        </a>

        <!-- Card 3 -->
        <a href="<?php echo $G5_URL; ?>/sub/sub2_3.php" class="program-card reveal reveal-delay-2">
          <div class="program-icon">⏱️</div>
          <h3 class="card-title">성조숙증</h3>
          <p class="card-desc">
            또래보다 빠른 사춘기를<br>
            조기에 진단하고 적절한 치료로<br>
            건강한 성장을 돕습니다
          </p>
        </a>

        <!-- Card 4 -->
        <a href="<?php echo $G5_URL; ?>/sub/sub2_4.php" class="program-card reveal reveal-delay-3">
          <div class="program-icon">⚖️</div>
          <h3 class="card-title">소아비만</h3>
          <p class="card-desc">
            체성분 분석과 맞춤 생활습관<br>
            관리를 통해 건강한 성장과<br>
            체중 관리를 돕습니다
          </p>
        </a>

        <!-- Card 5 -->
        <a href="<?php echo $G5_URL; ?>/sub/sub2_5.php" class="program-card reveal reveal-delay-4">
          <div class="program-icon">🍎</div>
          <h3 class="card-title">저체중</h3>
          <p class="card-desc">
            식습관과 대사 상태를 분석하여<br>
            건강하게 체중을 늘릴 수 있도록<br>
            돕습니다
          </p>
        </a>

        <!-- Card 6 -->
        <a href="<?php echo $G5_URL; ?>/sub/sub2_6.php" class="program-card reveal reveal-delay-5">
          <div class="program-icon">🤧</div>
          <h3 class="card-title">알레르기</h3>
          <p class="card-desc">
            비염, 아토피 등 알레르기 질환을<br>
            관리하여 아이가 건강하게<br>
            성장할 수 있도록 돕습니다
          </p>
        </a>
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
          <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="잠실 삼성더클성장의원 소아과 대기 공간 및 따뜻한 인테리어 대기실">
          <div class="gallery-caption">
            <p class="caption-en">Waiting Area</p>
            <p class="caption-kr">편안하고 따뜻한 대기 공간</p>
          </div>
        </div>
        <div class="space-gallery-item reveal reveal-delay-1">
          <img src="<?php echo $G5_URL; ?>/img/hero.png" alt="송파 삼성더클성장의원 소아 성장 클리닉의 1대1 맞춤 진료실 내부">
          <div class="gallery-caption">
            <p class="caption-en">Consultation</p>
            <p class="caption-kr">1:1 맞춤 진료실</p>
          </div>
        </div>
        <div class="space-gallery-item reveal reveal-delay-2">
          <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="삼성더클성장의원 뼈나이 및 골연령 측정, 예상키 분석을 위한 성장 정밀 검사실">
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
            <img src="<?php echo $G5_URL; ?>/img/interior.png" alt="송파구 잠실역 인근 삼성더클성장의원 내부 클리닉 외관 및 입구">
          </div>
          <p class="address">
            <span class="star">✦</span> 서울특별시 송파구 올림픽로 329, 3층 329, 330, 331호<br>
            <span style="padding-left: 18px;">잠실역 9번출구 도보 3분</span>
          </p>
          <p class="address" style="margin-top: 8px;">
            <span class="star">✦</span> 주차 &nbsp; 건물 내 주차장 이용 가능 (1시간 무료)
          </p>
          <div class="map-buttons">
            <a href="#" class="map-btn">
              <svg class="map-icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor" style="color: #03C75A; flex-shrink: 0; margin-right: 6px;">
                <path d="M16.2 3H21v18h-4.8l-8.4-12v12H3V3h4.8l8.4 12z"/>
              </svg>네이버 길찾기
            </a>
            <a href="#" class="map-btn">
              <svg class="map-icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor" style="color: #FEE500; flex-shrink: 0; filter: drop-shadow(0px 1px 1px rgba(0,0,0,0.25)); margin-right: 6px;">
                <path d="M12 3c-5.5 0-10 3.8-10 8.5 0 3.1 2 5.8 5 7.2l-1.3 4.8c-.1.3 0 .6.2.8.1.1.3.2.5.2.1 0 .2 0 .3-.1l5.6-3.7c.9.2 1.8.3 2.7.3 5.5 0 10-3.8 10-8.5S17.5 3 12 3z"/>
              </svg>카카오 길찾기
            </a>
            <a href="#" class="map-btn">
              <svg class="map-icon" viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="color: #1F87FF; flex-shrink: 0; margin-right: 6px;">
                <polygon points="3 11 22 2 13 21 11 13 3 11"/>
              </svg>티맵 길찾기
            </a>
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
            <div class="schedule-row" style="flex-wrap: wrap;">
              <span class="schedule-day">화·수·금</span>
              <span class="schedule-time">10:00 ~ 18:30 <small style="display:block; font-size:12px; opacity:0.85;">(점심 13:00 ~ 14:00)</small></span>
            </div>
            <div class="schedule-row" style="flex-wrap: wrap;">
              <span class="schedule-day">목 요 일</span>
              <span class="schedule-time">13:00 ~ 20:30 <small style="display:block; font-size:12px; opacity:0.85;">(휴게 17:00 ~ 17:30)</small></span>
            </div>
            <div class="schedule-row" style="flex-wrap: wrap;">
              <span class="schedule-day">토 요 일</span>
              <span class="schedule-time">08:30 ~ 15:00 <small style="display:block; font-size:12px; opacity:0.85;">(휴게 12:00 ~ 12:30)</small></span>
            </div>
          </div>
          <p class="schedule-note">※ 월요일, 일요일, 공휴일 휴진</p>
        </div>
      </div>
    </div>
  </section>

<?php
// 메인 팝업 (드래그 이동 / 자동 슬라이드 / 제목 선택 / 오늘 하루 그만보기)
include_once(G5_THEME_PATH.'/popup.html.php');

include_once(G5_THEME_PATH.'/tail.php');
?>
