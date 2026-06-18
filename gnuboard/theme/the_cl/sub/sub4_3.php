<?php
$page_title = "공지사항";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');

$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$page_rows = 10;
$from_record = ($page - 1) * $page_rows;

$board = sql_fetch(" SELECT * FROM {$g5['board_table']} WHERE bo_table = 'notice' ");
$notice_list = explode(',', trim($board['bo_notice'] ?? ''));

$posts = [];
if ($page == 1 && !empty($notice_list)) {
    $notice_ids = implode(',', array_filter(array_map('intval', $notice_list)));
    if ($notice_ids) {
        $sql_notice = " SELECT * FROM {$g5['write_prefix']}notice WHERE wr_id IN ($notice_ids) AND wr_is_comment = 0 ORDER BY wr_id DESC ";
        $res_notice = sql_query($sql_notice);
        while ($row = sql_fetch_array($res_notice)) {
            $posts[] = [
                'id' => $row['wr_id'],
                'num' => '공지',
                'pinned' => true,
                'subject' => get_text($row['wr_subject']),
                'writer' => get_text($row['wr_name']),
                'date' => date('Y.m.d', strtotime($row['wr_datetime'])),
                'hit' => $row['wr_hit'],
                'comments' => $row['wr_comment'],
                'new' => (strtotime($row['wr_datetime']) >= time() - 86400),
                'content' => $row['wr_content']
            ];
        }
    }
}

$exclude_notice_query = "";
if (!empty($notice_list)) {
    $notice_ids = implode(',', array_filter(array_map('intval', $notice_list)));
    if ($notice_ids) {
        $exclude_notice_query = " AND wr_id NOT IN ($notice_ids) ";
    }
}

$sql_count = " SELECT count(*) as cnt FROM {$g5['write_prefix']}notice WHERE wr_is_comment = 0 $exclude_notice_query ";
$row_count = sql_fetch($sql_count);
$total_count = $row_count['cnt'] ?? 0;

$sql = " SELECT * FROM {$g5['write_prefix']}notice 
         WHERE wr_is_comment = 0 $exclude_notice_query
         ORDER BY wr_num, wr_id DESC LIMIT $from_record, $page_rows ";
$result = sql_query($sql);

$num = $total_count - ($page - 1) * $page_rows;
while ($row = sql_fetch_array($result)) {
    $posts[] = [
        'id' => $row['wr_id'],
        'num' => $num--,
        'pinned' => false,
        'subject' => get_text($row['wr_subject']),
        'writer' => get_text($row['wr_name']),
        'date' => date('Y.m.d', strtotime($row['wr_datetime'])),
        'hit' => $row['wr_hit'],
        'comments' => $row['wr_comment'],
        'new' => (strtotime($row['wr_datetime']) >= time() - 86400),
        'content' => $row['wr_content']
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
    <?php echo custom_paging($total_pages, $page); ?>

    <!-- 글쓰기 버튼 (로그인 회원 전용) -->
    <?php if (isset($is_member) && $is_member) { ?>
    <div class="board-btn-wrap reveal" style="display: flex; justify-content: flex-end; margin-top: 24px;">
      <a href="<?php echo $G5_URL; ?>/sub/write.php?bo_table=notice" class="board-btn-write" style="display: inline-flex; align-items: center; justify-content: center; padding: 10px 24px; background: var(--c-primary); color: #ffffff; border-radius: 4px; font-size: 13px; font-weight: 500; transition: background 0.3s; box-shadow: 0 4px 10px rgba(46, 139, 87, 0.15);">글쓰기</a>
    </div>
    <?php } ?>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
