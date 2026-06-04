<?php
$page_title = "치료 사례";
include_once('../head.php');

/* ============================================================
   게시판 데이터 (갤러리형)
   ── 추후 그누보드 연동 시 ──
   아래 $posts 배열을 그누보드 갤러리 게시판 스킨의 $list 루프로 교체하세요.
     썸네일 : $list[$i]['icon_chk'] / get_view_thumbnail()
     분류   : $list[$i]['ca_name']      제목   : $list[$i]['subject']
     요약   : $list[$i]['comment_cnt'] 또는 conv_substr(wr_content)
     작성자 : $list[$i]['name']         날짜   : $list[$i]['datetime2']
     조회   : $list[$i]['wr_hit']       링크   : $list[$i]['href']
   ============================================================ */
$posts = [
    ['thumb' => 'hero.png',     'cat' => '저신장',     'subject' => '만 9세 남아, 유전성 저신장 24개월 치료로 +18.5cm 성장', 'excerpt' => '초진 당시 하위 4백분위수였으나 성장호르몬 매일 투여와 단백 영양 교정을 통해 또래 표준 평균 이상으로 회복한 사례입니다.', 'writer' => '관리자', 'date' => '2026.05.18', 'hit' => 521],
    ['thumb' => 'interior.png', 'cat' => '성조숙',     'subject' => '만 8세 여아, 가슴 몽우리 발현 제어 및 골연령 1.2년 지연', 'excerpt' => '초등학교 입학 직후 성조숙 증상이 나타났으나 GnRHa 주사 억제로 뼈나이 속도를 늦추고 자연 성장 기간을 연장했습니다.', 'writer' => '관리자', 'date' => '2026.05.06', 'hit' => 438],
    ['thumb' => 'programs.png', 'cat' => '소아비만',   'subject' => '만 11세 남아, 체성분 교정과 영양 상담으로 건강 체중 회복', 'excerpt' => '내장지방 과다와 성장 정체가 동반된 케이스로, 12개월간 식이·운동 코칭을 병행해 BMI 정상화와 성장 재개를 이뤘습니다.', 'writer' => '관리자', 'date' => '2026.04.22', 'hit' => 376],
    ['thumb' => 'interior.png', 'cat' => '갑상선',     'subject' => '만 7세 여아, 갑상선 기능저하 조기 발견 및 성장 정상화', 'excerpt' => '피로감과 성장 둔화로 내원하여 갑상선 기능저하를 진단, 호르몬 보충 치료 후 성장 곡선이 정상 궤도로 회복되었습니다.', 'writer' => '관리자', 'date' => '2026.04.09', 'hit' => 298],
    ['thumb' => 'hero.png',     'cat' => '성장평가',   'subject' => '만 10세 남아, 정밀 성장 평가로 사춘기 시점 예측 관리', 'excerpt' => '골연령 AI 판독과 호르몬 검사를 통해 최종 예측 키를 산출하고, 사춘기 진입 전 집중 관리 플랜을 수립했습니다.', 'writer' => '관리자', 'date' => '2026.03.28', 'hit' => 254],
    ['thumb' => 'programs.png', 'cat' => '저신장',     'subject' => '만 6세 여아, 출생 저체중 동반 저신장 장기 추적 관리', 'excerpt' => '부당경량아(SGA) 출생 이력으로 따라잡기 성장이 미흡했던 케이스를 조기 개입하여 성장 속도를 안정적으로 끌어올렸습니다.', 'writer' => '관리자', 'date' => '2026.03.12', 'hit' => 312],
];
$total_count = 18;
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Community</p>
    <h1 class="sub-hero-title">치료 사례</h1>
    <p class="sub-hero-subtitle">건강한 성장 이야기</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo $G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">Community</span></li>
      <li class="separator">></li>
      <li class="current">치료 사례</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

    <div class="ed-sectlabel reveal" style="margin-bottom: 16px;">
      <span class="ed-kicker">Real Growth Stories</span>
      <h2>성장의 <strong>기록</strong></h2>
    </div>
    <p class="board-intro reveal">
      모든 치료 사례는 의료법과 개인정보 보호 기준에 따라 철저히 익명화하여 게시됩니다.
      개별 성장 그래프 등 상세 데이터는 본인 인증을 마친 회원에 한해 열람하실 수 있습니다.
    </p>

    <!-- 게시판 상단: 총 건수 + 검색 -->
    <div class="board-head reveal">
      <p class="board-total">전체 <strong><?php echo $total_count; ?></strong>건</p>
      <form class="board-search" onsubmit="return false;" role="search">
        <select class="board-search__select" aria-label="검색 조건">
          <option value="subject">제목</option>
          <option value="subject_content">제목+내용</option>
          <option value="ca_name">분류</option>
        </select>
        <input type="search" class="board-search__input" placeholder="검색어를 입력하세요" aria-label="검색어">
        <button type="submit" class="board-search__btn">검색</button>
      </form>
    </div>

    <!-- 게시판 갤러리 목록 -->
    <div class="board-gallery reveal">
      <?php foreach ($posts as $post): ?>
      <a href="#" class="board-gallery__item">
        <div class="board-gallery__thumb">
          <img src="<?php echo $G5_URL; ?>/img/<?php echo $post['thumb']; ?>" alt="<?php echo $post['subject']; ?>" loading="lazy">
          <span class="board-gallery__cat"><?php echo $post['cat']; ?></span>
        </div>
        <div class="board-gallery__body">
          <h3 class="board-gallery__title"><?php echo $post['subject']; ?></h3>
          <p class="board-gallery__excerpt"><?php echo $post['excerpt']; ?></p>
          <div class="board-gallery__meta">
            <span><?php echo $post['writer']; ?></span>
            <span><?php echo $post['date']; ?></span>
            <span>조회 <?php echo number_format($post['hit']); ?></span>
          </div>
        </div>
      </a>
      <?php endforeach; ?>
    </div>

    <!-- 페이지네이션 -->
    <nav class="board-pagination reveal" aria-label="페이지 이동">
      <a href="#" class="board-pagination__nav" aria-label="이전 페이지">‹</a>
      <a href="#" class="is-active">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#" class="board-pagination__nav" aria-label="다음 페이지">›</a>
    </nav>

  </div>
</main>

<?php
include_once('../tail.php');
?>
