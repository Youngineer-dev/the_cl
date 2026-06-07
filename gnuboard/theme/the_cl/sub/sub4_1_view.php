<?php
$page_title = "치료 사례";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$post = sql_fetch(" SELECT * FROM {$g5['write_prefix']}gallery WHERE wr_id = '$id' AND wr_is_comment = 0 ");
if (!$post) {
    alert('존재하지 않는 게시글입니다.', G5_URL.'/theme/the_cl/sub/sub4_1.php');
}

// 조회수 증가
if (!get_cookie("g5_view_gallery_{$id}")) {
    sql_query(" UPDATE {$g5['write_prefix']}gallery SET wr_hit = wr_hit + 1 WHERE wr_id = '$id' ");
    set_cookie("g5_view_gallery_{$id}", TRUE, 1800); // 30분
    $post['wr_hit'] += 1;
}

// 첨부 이미지 조회
$file = sql_fetch(" SELECT bf_file FROM {$g5['board_file_table']} WHERE bo_table = 'gallery' AND wr_id = '$id' AND bf_no = 0 ");
if ($file['bf_file']) {
    $thumb = G5_DATA_URL . '/file/gallery/' . $file['bf_file'];
} else {
    $thumb = G5_THEME_URL . '/img/programs.png';
}

$post['subject'] = get_text($post['wr_subject']);
$post['writer'] = get_text($post['wr_name']);
$post['date'] = date('Y.m.d', strtotime($post['wr_datetime']));
$post['hit'] = $post['wr_hit'];
$post['cat'] = get_text($post['ca_name']);
$post['content'] = conv_content($post['wr_content'], 1);

// 지표 정보 wr_1 ~ wr_4 매핑
$stats = [];
if ($post['wr_1'] && $post['wr_2']) {
    $stats[] = [get_text($post['wr_1']), get_text($post['wr_2'])];
}
if ($post['wr_3'] && $post['wr_4']) {
    $stats[] = [get_text($post['wr_3']), get_text($post['wr_4'])];
}

// 이전/다음 글
$prev_post = sql_fetch(" SELECT wr_id, wr_subject FROM {$g5['write_prefix']}gallery WHERE wr_is_comment = 0 AND wr_num < '{$post['wr_num']}' ORDER BY wr_num DESC, wr_id DESC LIMIT 1 ");
$next_post = sql_fetch(" SELECT wr_id, wr_subject FROM {$g5['write_prefix']}gallery WHERE wr_is_comment = 0 AND wr_num > '{$post['wr_num']}' ORDER BY wr_num ASC, wr_id ASC LIMIT 1 ");

$nav = [
    'prev' => $prev_post ? ['id' => $prev_post['wr_id'], 'subject' => get_text($prev_post['wr_subject'])] : null,
    'next' => $next_post ? ['id' => $next_post['wr_id'], 'subject' => get_text($next_post['wr_subject'])] : null
];

$list_url = G5_THEME_URL . '/sub/sub4_1.php';
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
          <img src="<?php echo $thumb; ?>" alt="<?php echo $post['subject']; ?>">
        </figure>

        <?php if (!empty($stats)): ?>
        <div class="board-view__stats">
          <?php foreach ($stats as $stat): ?>
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
      <div class="board-view__foot" style="gap: 12px;">
        <a href="<?php echo $list_url; ?>" class="board-view__listbtn" style="background: var(--c-text-light); border-color: var(--c-text-light);">목록으로</a>
        <?php if (isset($is_member) && $is_member) { ?>
        <a href="<?php echo $G5_URL; ?>/sub/write.php?bo_table=cases&id=<?php echo $post['id']; ?>" class="board-view__listbtn">수정</a>
        <a href="javascript:alert('프로토타입 단계로 삭제 기능은 그누보드 이식 후 작동합니다.');" class="board-view__listbtn" style="background: #e63c3c; border-color: #e63c3c;">삭제</a>
        <?php } ?>
      </div>

    </article>
  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
