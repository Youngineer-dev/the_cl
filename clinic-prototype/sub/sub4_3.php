<?php
$page_title = "공지사항";
include_once('../head.php');

/* ============================================================
   게시판 데이터 (목록형)
   ── 추후 그누보드 연동 시 ──
   아래 $posts 배열을 그누보드 게시판 스킨의 $list 루프로 교체하세요.
     번호   : $list[$i]['num']        제목 : $list[$i]['subject']
     작성자 : $list[$i]['name']       날짜 : $list[$i]['datetime2']
     조회   : $list[$i]['wr_hit']     링크 : $list[$i]['href']
     공지   : $is_notice (wr_id ∈ $notice_array)
     댓글수 : $list[$i]['wr_comment'] 새글 : $list[$i]['icon_new']
   ============================================================ */
$posts = [
    ['num' => '공지', 'pinned' => true,  'subject' => '삼성더클성장의원 여름 하계 휴진 일정 안내 (8/1 ~ 8/4)',            'writer' => '관리자', 'date' => '2026.05.28', 'hit' => 342, 'comments' => 0, 'new' => false],
    ['num' => '공지', 'pinned' => true,  'subject' => '토요일 오전 진료 예약 대기시간 단축 및 검사 프로세스 최적화 도입', 'writer' => '관리자', 'date' => '2026.05.20', 'hit' => 287, 'comments' => 0, 'new' => false],
    ['num' => 12,     'pinned' => false, 'subject' => '노유선 대표원장 아시아태평양소아내분비학회 Fellow School 수료 후기', 'writer' => '관리자', 'date' => '2026.05.15', 'hit' => 198, 'comments' => 2, 'new' => true],
    ['num' => 11,     'pinned' => false, 'subject' => '소아 저선량 초정밀 X-ray 성장 진단 보정 분석기 도입 안내',         'writer' => '관리자', 'date' => '2026.05.02', 'hit' => 256, 'comments' => 1, 'new' => true],
    ['num' => 10,     'pinned' => false, 'subject' => '삼성더클성장의원 신축 개원 및 강남역 3번출구 주차 지원 제도 안내', 'writer' => '관리자', 'date' => '2026.04.10', 'hit' => 431, 'comments' => 4, 'new' => false],
    ['num' => 9,      'pinned' => false, 'subject' => '5월 가정의 달 성장 클리닉 무료 사전 상담 이벤트 안내',            'writer' => '관리자', 'date' => '2026.04.28', 'hit' => 312, 'comments' => 3, 'new' => false],
    ['num' => 8,      'pinned' => false, 'subject' => '성장호르몬 치료 실손보험 적용 기준 변경 사항 정리',               'writer' => '관리자', 'date' => '2026.04.15', 'hit' => 524, 'comments' => 6, 'new' => false],
    ['num' => 7,      'pinned' => false, 'subject' => '겨울방학 성장판 검사 집중 예약 기간 운영 안내',                   'writer' => '관리자', 'date' => '2026.03.30', 'hit' => 289, 'comments' => 0, 'new' => false],
];
$total_count = 12;
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Community</p>
    <h1 class="sub-hero-title">공지사항</h1>
    <p class="sub-hero-subtitle">삼성더클성장의원 소식</p>
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
      <li class="current">공지사항</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

    <div class="ed-sectlabel reveal" style="margin-bottom: 24px;">
      <span class="ed-kicker">Notice Board</span>
      <h2>병원 <strong>공지사항</strong></h2>
    </div>

    <!-- 게시판 상단: 총 건수 + 검색 -->
    <div class="board-head reveal">
      <p class="board-total">전체 <strong><?php echo $total_count; ?></strong>건</p>
      <form class="board-search" onsubmit="return false;" role="search">
        <select class="board-search__select" aria-label="검색 조건">
          <option value="subject">제목</option>
          <option value="subject_content">제목+내용</option>
          <option value="name">작성자</option>
        </select>
        <input type="search" class="board-search__input" placeholder="검색어를 입력하세요" aria-label="검색어">
        <button type="submit" class="board-search__btn">검색</button>
      </form>
    </div>

    <!-- 게시판 목록 -->
    <div class="board-list reveal">
      <div class="board-list__head" role="row">
        <span class="board-list__num">번호</span>
        <span class="board-list__subject">제목</span>
        <span class="board-list__writer">작성자</span>
        <span class="board-list__date">날짜</span>
        <span class="board-list__hit">조회</span>
      </div>

      <?php foreach ($posts as $post): ?>
      <a href="#" class="board-list__row<?php echo $post['pinned'] ? ' is-notice' : ''; ?>">
        <span class="board-list__num">
          <?php if ($post['pinned']): ?>
            <span class="board-list__badge">공지</span>
          <?php else: ?>
            <?php echo $post['num']; ?>
          <?php endif; ?>
        </span>
        <span class="board-list__subject">
          <span class="board-list__subject-text"><?php echo $post['subject']; ?></span>
          <?php if (!empty($post['comments'])): ?><span class="board-list__cmt">[<?php echo $post['comments']; ?>]</span><?php endif; ?>
          <?php if (!empty($post['new'])): ?><span class="board-list__new">N</span><?php endif; ?>
        </span>
        <span class="board-list__writer"><?php echo $post['writer']; ?></span>
        <span class="board-list__date"><?php echo $post['date']; ?></span>
        <span class="board-list__hit"><span class="board-list__mlabel">조회 </span><?php echo number_format($post['hit']); ?></span>
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
