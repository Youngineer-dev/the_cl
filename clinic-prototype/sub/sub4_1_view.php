<?php
$page_title = "치료 사례";
include_once('../head.php');
include_once(__DIR__ . '/_board_data.php');

/* 추후 그누보드 연동 시: 아래 한 줄을 그누보드 $view 로 대체 */
$id = isset($_GET['id']) ? (int) $_GET['id'] : 1;
$post = isset($board_case[$id]) ? $board_case[$id] : reset($board_case);
$nav = board_neighbors($board_case, $post['id']);
$list_url = $G5_URL . '/sub/sub4_1.php';
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
      <li><a href="<?php echo $list_url; ?>">치료 사례</a></li>
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
        <span class="board-view__cat"><?php echo $post['cat']; ?></span>
        <h2 class="board-view__title"><?php echo $post['subject']; ?></h2>
        <div class="board-view__meta">
          <span><i class="board-view__metakey">작성자</i> <?php echo $post['writer']; ?></span>
          <span><i class="board-view__metakey">작성일</i> <?php echo $post['date']; ?></span>
          <span><i class="board-view__metakey">조회</i> <?php echo number_format($post['hit']); ?></span>
        </div>
      </header>

      <!-- 본문 -->
      <div class="board-view__body">
        <figure class="board-view__figure">
          <img src="<?php echo $G5_URL; ?>/img/<?php echo $post['thumb']; ?>" alt="<?php echo $post['subject']; ?>">
        </figure>

        <?php if (!empty($post['stats'])): ?>
        <div class="board-view__stats">
          <?php foreach ($post['stats'] as $stat): ?>
          <div class="board-view__stat">
            <span><?php echo $stat[0]; ?></span>
            <b><?php echo $stat[1]; ?></b>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php echo $post['content']; ?>

        <p class="board-view__notice">
          ※ 본 사례는 환자 동의 하에 의료법과 개인정보 보호 기준에 따라 익명화하여 게시되었으며,
          치료 효과는 개인의 상태에 따라 다를 수 있습니다.
        </p>
      </div>

      <!-- 이전/다음 글 -->
      <nav class="board-view__nav" aria-label="이전 다음 글">
        <?php if ($nav['prev']): ?>
        <a class="board-view__navrow" href="<?php echo $G5_URL; ?>/sub/sub4_1_view.php?id=<?php echo $nav['prev']['id']; ?>">
          <span class="board-view__navlabel">다음 글</span>
          <span class="board-view__navtitle"><?php echo $nav['prev']['subject']; ?></span>
        </a>
        <?php endif; ?>
        <?php if ($nav['next']): ?>
        <a class="board-view__navrow" href="<?php echo $G5_URL; ?>/sub/sub4_1_view.php?id=<?php echo $nav['next']['id']; ?>">
          <span class="board-view__navlabel">이전 글</span>
          <span class="board-view__navtitle"><?php echo $nav['next']['subject']; ?></span>
        </a>
        <?php endif; ?>
      </nav>

      <!-- 하단 버튼 -->
      <div class="board-view__foot">
        <a href="<?php echo $list_url; ?>" class="board-view__listbtn">목록으로</a>
      </div>

    </article>
  </div>
</main>

<?php
include_once('../tail.php');
?>
