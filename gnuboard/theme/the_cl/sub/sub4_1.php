<?php
$page_title = "치료 사례";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');

$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$page_rows = 9;
$from_record = ($page - 1) * $page_rows;

$sql_count = " SELECT count(*) as cnt FROM {$g5['write_prefix']}gallery WHERE wr_is_comment = 0 ";
$row_count = sql_fetch($sql_count);
$total_count = $row_count['cnt'] ?? 0;

$sql = " SELECT w.*, f.bf_file 
         FROM {$g5['write_prefix']}gallery w 
         LEFT JOIN {$g5['board_file_table']} f ON (w.wr_id = f.wr_id AND f.bo_table = 'gallery' AND f.bf_no = 0)
         WHERE w.wr_is_comment = 0
         ORDER BY w.wr_num, w.wr_id DESC 
         LIMIT $from_record, $page_rows ";
$result = sql_query($sql);

$posts = [];
$num = $total_count - ($page - 1) * $page_rows;
while ($row = sql_fetch_array($result)) {
    if ($row['bf_file']) {
        $thumb = G5_DATA_URL . '/file/gallery/' . $row['bf_file'];
    } else {
        $thumb = G5_THEME_URL . '/img/programs.png'; // Fallback
    }

    $posts[] = [
        'id' => $row['wr_id'],
        'num' => $num--,
        'thumb' => $thumb,
        'cat' => get_text($row['ca_name']),
        'subject' => get_text($row['wr_subject']),
        'excerpt' => cut_str(strip_tags($row['wr_content']), 150),
        'writer' => get_text($row['wr_name']),
        'date' => date('Y.m.d', strtotime($row['wr_datetime'])),
        'hit' => $row['wr_hit']
    ];
}

$total_pages = ceil($total_count / $page_rows);
function custom_paging($total_pages, $page) {
    if ($total_pages <= 1) return '';
    $html = '<nav class="board-pagination reveal" aria-label="페이지 이동">';
    if ($page > 1) {
        $html .= '<a href="?page='.($page-1).'" class="board-pagination__nav" aria-label="이전 페이지">‹</a>';
    } else {
        $html .= '<a href="#" class="board-pagination__nav" aria-label="이전 페이지" onclick="return false;">‹</a>';
    }
    for ($i = 1; $i <= $total_pages; $i++) {
        $active_class = ($i == $page) ? ' class="is-active"' : '';
        $html .= '<a href="?page='.$i.'"'.$active_class.'>'.$i.'</a>';
    }
    if ($page < $total_pages) {
        $html .= '<a href="?page='.($page+1).'" class="board-pagination__nav" aria-label="다음 페이지">›</a>';
    } else {
        $html .= '<a href="#" class="board-pagination__nav" aria-label="다음 페이지" onclick="return false;">›</a>';
    }
    $html .= '</nav>';
    return $html;
}
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
          <img src="<?php echo $post['thumb']; ?>" alt="<?php echo $post['subject']; ?>" loading="lazy">
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
    <?php echo custom_paging($total_pages, $page); ?>

    <!-- 글쓰기 버튼 (로그인 회원 전용) -->
    <?php if (isset($is_member) && $is_member) { ?>
    <div class="board-btn-wrap reveal" style="display: flex; justify-content: flex-end; margin-top: 24px;">
      <a href="<?php echo $G5_URL; ?>/sub/write.php?bo_table=cases" class="board-btn-write" style="display: inline-flex; align-items: center; justify-content: center; padding: 10px 24px; background: var(--c-primary); color: #ffffff; border-radius: 4px; font-size: 13px; font-weight: 500; transition: background 0.3s; box-shadow: 0 4px 10px rgba(46, 139, 87, 0.15);">글쓰기</a>
    </div>
    <?php } ?>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
