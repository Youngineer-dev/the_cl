<?php
$page_title = "치료 사례";
include_once('../head.php');
include_once(__DIR__ . '/_board_data.php');

$posts = $board_case;            // 추후 그누보드 $list 로 대체
$total_count = $board_case_total;
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
      <a href="<?php echo $G5_URL; ?>/sub/sub4_1_view.php?id=<?php echo $post['id']; ?>" class="board-gallery__item">
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
