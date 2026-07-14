<?php
$page_title = "의료진 소개";
$page_description = "소아청소년과 전문의 및 소아내분비 세부전문의 자격을 갖춘 잠실 삼성더클성장의원 의료진의 깊이 있는 전문 이력을 소개합니다.";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<style>
/* ============================================================
   ABOUT 1-3 (의료진 소개) 전용 모바일 보완
   ============================================================ */
.sub13-doctor-card {
  background: white;
  border-radius: 8px;
  border: 1px solid var(--c-border);
  padding: 48px;
  margin-top: 60px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.01);
}
.sub13-intro {
  font-size: 14px;
  color: var(--c-text-light);
  line-height: 1.8;
  margin-bottom: 30px;
  font-weight: 400;
  word-break: keep-all;
}
@media (max-width: 768px) {
  .sub13-doctor-card {
    padding: 28px 18px;
    margin-top: 36px;
  }
  .sub13-intro {
    font-size: 13.5px;
    line-height: 1.85;
    margin-bottom: 22px;
  }
  .sub-intro-text .section-title {
    font-size: 22px !important;
  }
  .doctor-photo img {
    height: 340px !important;
  }
}
@media (max-width: 480px) {
  .sub13-doctor-card {
    padding: 22px 14px;
  }
  .doctor-photo img {
    height: 280px !important;
  }
  .sub-intro-text .section-title {
    font-size: 19px !important;
  }
}
</style>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">About</p>
    <h1 class="sub-hero-title">의료진 소개</h1>
    <p class="sub-hero-subtitle">검증된 전문성과 풍부한 임상 경험</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo function_exists('the_cl_url') ? the_cl_url('home') : (G5_URL.'/'); ?>">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">About</span></li>
      <li class="separator">></li>
      <li class="current">의료진 소개</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    
<div class="sub-intro-text">
  <p class="section-en reveal">Medical Staff</p>
  <h2 class="section-title reveal reveal-delay-1">
    학술적 깊이와 현장 리더십,<span class="br-all" aria-hidden="true"></span>
    <strong>소아 내분비 세부 전문의</strong>가 전담 진료합니다
  </h2>
</div>

<article class="doctor-card reveal sub13-doctor-card">
  <div class="doctor-photo">
    <img src="<?php echo $G5_URL; ?>/img/doctor.png?v=3" alt="잠실 삼성더클성장의원 소아내분비 세부전문의 노유선 대표원장 프로필">
  </div>
  <div class="doctor-info">
    <span class="doctor-position">소아청소년과 전문의 · 소아내분비 세부전문의</span>
    <h3 class="doctor-name"><strong>노 유 선</strong> 대표원장</h3>

    <p class="desc sub13-intro">
      대학병원 소아내분비분과 교수 출신으로, 삼성서울병원에서의 풍부한 임상경험과 글로벌 학술적 네트워크를 기반으로 저신장과 성조숙증 진료에 탁월한 해법을 제시합니다.
    </p>

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
  <div class="publications-section">
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
  </div>
</article>

<!-- 
============================================================
추가 의료진 (부원장) 예시 카드 - 의료진이 여러 명일 경우 주석을 해제하고 복사하여 사용하세요.
============================================================
<article class="doctor-card reveal" style="background: white; border-radius: 8px; border: 1px solid var(--c-border); padding: 48px; margin-top: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.01);">
  <div class="doctor-photo">
    <img src="<?php echo $G5_URL; ?>/img/doctor_sub.png" alt="삼성더클성장의원 소아청소년과 전문의 부원장 프로필 이미지">
  </div>
  <div class="doctor-info">
    <span class="doctor-position">소아청소년과 전문의 · 소아내분비 세부전문의</span>
    <h3 class="doctor-name"><strong>홍 길 동</strong> 부원장</h3>

    <p class="desc" style="font-size: 14px; color: var(--c-text-light); line-height: 1.8; margin-bottom: 30px; font-weight: 400;">
      체계적이고 정밀한 진단과 따뜻한 소통으로 아동의 올바른 성장 로드맵을 설계합니다.
    </p>

    <div class="history-section">
      <div>
        <div class="history-title">
          <span class="star">✦</span> 학력 및 약력
        </div>
        <ul class="history-list">
          <li>서울대학교병원 소아청소년과 소아내분비 전임의</li>
          <li>서울대학교병원 소아청소년과 전공의</li>
          <li>현 삼성더클성장의원 부원장</li>
        </ul>
      </div>
      <div>
        <div class="history-title">
          <span class="star">✦</span> 학회 및 학술 활동
        </div>
        <ul class="history-list">
          <li>대한소아청소년과학회 정회원</li>
          <li>대한소아내분비학회 정회원</li>
          <li>소아내분비 관련 국외 논문 다수 수록</li>
        </ul>
      </div>
    </div>
  </div>
</article>
-->

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
