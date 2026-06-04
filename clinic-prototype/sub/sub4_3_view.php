<?php
$page_title = "공지사항";
include_once('../head.php');
include_once(__DIR__ . '/_board_data.php');

/* 추후 그누보드 연동 시: 아래 한 줄을 그누보드 $view 로 대체 */
$id = isset($_GET['id']) ? (int) $_GET['id'] : 1;
$post = isset($board_notice[$id]) ? $board_notice[$id] : reset($board_notice);
$nav = board_neighbors($board_notice, $post['id']);
$list_url = $G5_URL . '/sub/sub4_3.php';
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
      <li><a href="<?php echo $list_url; ?>">공지사항</a></li>
      <li class="separator">></li>
      <li class="current">게시글 보기</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    <article class="board-view reveal">

      <!-- 글 헤더 -->
      <header class="board-view__head">
        <?php if (!empty($post['pinned'])): ?>
          <span class="board-view__badge">공지</span>
        <?php endif; ?>
        <h2 class="board-view__title"><?php echo $post['subject']; ?></h2>
        <div class="board-view__meta">
          <span><i class="board-view__metakey">작성자</i> <?php echo $post['writer']; ?></span>
          <span><i class="board-view__metakey">작성일</i> <?php echo $post['date']; ?></span>
          <span><i class="board-view__metakey">조회</i> <?php echo number_format($post['hit']); ?></span>
        </div>
      </header>

      <!-- 본문 -->
      <div class="board-view__body">
        <?php echo $post['content']; ?>
      </div>

      <!-- 이전/다음 글 -->
      <nav class="board-view__nav" aria-label="이전 다음 글">
        <?php if ($nav['prev']): ?>
        <a class="board-view__navrow" href="<?php echo $G5_URL; ?>/sub/sub4_3_view.php?id=<?php echo $nav['prev']['id']; ?>">
          <span class="board-view__navlabel">다음 글</span>
          <span class="board-view__navtitle"><?php echo $nav['prev']['subject']; ?></span>
        </a>
        <?php endif; ?>
        <?php if ($nav['next']): ?>
        <a class="board-view__navrow" href="<?php echo $G5_URL; ?>/sub/sub4_3_view.php?id=<?php echo $nav['next']['id']; ?>">
          <span class="board-view__navlabel">이전 글</span>
          <span class="board-view__navtitle"><?php echo $nav['next']['subject']; ?></span>
        </a>
        <?php endif; ?>
      </nav>

      <!-- 하단 버튼 -->
      <div class="board-view__foot">
        <a href="<?php echo $list_url; ?>" class="board-view__listbtn">목록으로</a>
      </div>

      <!-- 댓글 -->
      <section class="board-comment">
        <h3 class="board-comment__title">댓글 <strong><?php echo (int) $post['comments']; ?></strong></h3>
        <?php if ((int) $post['comments'] > 0): ?>
        <ul class="board-comment__list">
          <li class="board-comment__item">
            <div class="board-comment__head">
              <span class="board-comment__name">김보호자</span>
              <span class="board-comment__date"><?php echo $post['date']; ?></span>
            </div>
            <p class="board-comment__text">안내 감사합니다. 일정 참고하겠습니다.</p>
          </li>
        </ul>
        <?php else: ?>
          <p class="board-comment__empty">등록된 댓글이 없습니다.</p>
        <?php endif; ?>

        <form class="board-comment__form" onsubmit="return false;">
          <input type="text" class="board-comment__name-input" placeholder="이름" aria-label="이름">
          <textarea class="board-comment__textarea" placeholder="댓글을 입력하세요" aria-label="댓글 내용"></textarea>
          <button type="submit" class="board-comment__submit">댓글 등록</button>
        </form>
      </section>

    </article>
  </div>
</main>

<?php
include_once('../tail.php');
?>
