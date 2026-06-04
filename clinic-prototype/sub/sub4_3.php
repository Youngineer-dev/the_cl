<?php
$page_title = "공지사항";
include_once('../head.php');
include_once(__DIR__ . '/_board_data.php');

$posts = $board_notice;          // 추후 그누보드 $list 로 대체
$total_count = $board_notice_total;
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
      <a href="<?php echo $G5_URL; ?>/sub/sub4_3_view.php?id=<?php echo $post['id']; ?>" class="board-list__row<?php echo $post['pinned'] ? ' is-notice' : ''; ?>">
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
