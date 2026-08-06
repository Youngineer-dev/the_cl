<?php
/* head.php 는 데이터 조회가 끝난 뒤에 include 한다.
   - 글 제목·본문을 title / meta description 에 반영하려면 출력 전에 값이 필요하고
   - 조회수 쿠키(set_cookie)도 헤더 출력 전에 발급되어야 하기 때문이다. */
include_once('./_common.php');

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$action = isset($_GET['action']) ? $_GET['action'] : '';

// 삭제 요청 처리
if ($action === 'delete' && $id) {
    if (isset($is_member) && $is_member) {
        // 실제 데이터베이스 글 및 댓글 삭제
        sql_query(" DELETE FROM {$g5['write_prefix']}notice WHERE wr_id = '$id' ");
        sql_query(" DELETE FROM {$g5['write_prefix']}notice WHERE wr_parent = '$id' ");
        
        // 게시판 총 글 수 동기화 감소
        sql_query(" UPDATE {$g5['board_table']} SET bo_count_write = IF(bo_count_write > 0, bo_count_write - 1, 0) WHERE bo_table = 'notice' ");
        
        alert('성공적으로 삭제되었습니다.', G5_THEME_URL . '/sub/sub4_3.php');
    } else {
        alert('삭제 권한이 없습니다.');
    }
}

$post = sql_fetch(" SELECT * FROM {$g5['write_prefix']}notice WHERE wr_id = '$id' AND wr_is_comment = 0 ");
if (!$post) {
    alert('존재하지 않는 게시글입니다.', G5_URL.'/theme/the_cl/sub/sub4_3.php');
}

// 조회수 증가
if (!get_cookie("g5_view_notice_{$id}")) {
    sql_query(" UPDATE {$g5['write_prefix']}notice SET wr_hit = wr_hit + 1 WHERE wr_id = '$id' ");
    set_cookie("g5_view_notice_{$id}", TRUE, 1800); // 30분
    $post['wr_hit'] += 1;
}

$post['subject'] = get_text($post['wr_subject']);
$post['writer'] = get_text($post['wr_name']);
$post['date'] = date('Y.m.d', strtotime($post['wr_datetime']));
$post['hit'] = $post['wr_hit'];
$post['comments'] = $post['wr_comment'];
$post['content'] = conv_content($post['wr_content'], 2);

// 이전/다음 글
$prev_post = sql_fetch(" SELECT wr_id, wr_subject FROM {$g5['write_prefix']}notice WHERE wr_is_comment = 0 AND wr_num < '{$post['wr_num']}' ORDER BY wr_num DESC, wr_id DESC LIMIT 1 ");
$next_post = sql_fetch(" SELECT wr_id, wr_subject FROM {$g5['write_prefix']}notice WHERE wr_is_comment = 0 AND wr_num > '{$post['wr_num']}' ORDER BY wr_num ASC, wr_id ASC LIMIT 1 ");

$nav = [
    'prev' => $prev_post ? ['id' => $prev_post['wr_id'], 'subject' => get_text($prev_post['wr_subject'])] : null,
    'next' => $next_post ? ['id' => $next_post['wr_id'], 'subject' => get_text($next_post['wr_subject'])] : null
];



$list_url = G5_THEME_URL . '/sub/sub4_3.php';

/* ------------------------------------------------------------------
   SEO — 글마다 고유한 제목·설명·정규 URL
   ------------------------------------------------------------------ */
$page_title = $post['subject'];

/* 본문 요약문 생성.
   strip_tags 대신 태그를 공백으로 치환한다 — </p><p> 를 그냥 제거하면
   앞뒤 문장이 "…입니다.여름 하계…" 처럼 달라붙는다. */
$desc_src = preg_replace('/<[^>]*>/u', ' ', $post['content']);
$desc_src = html_entity_decode($desc_src, ENT_QUOTES, 'UTF-8');
$desc_src = str_replace("\xC2\xA0", ' ', $desc_src);            // &nbsp;
$desc_src = trim(preg_replace('/\s+/u', ' ', $desc_src));
if ($desc_src === '') {
    $desc_src = $post['subject'];
}
$page_description = '삼성더클성장의원 공지사항 - ' . $desc_src;

/* 검색결과 노출 길이에 맞춰 접두어까지 포함한 최종 문자열을 자른다.
   테마가 mbstring 에 의존하지 않으므로 iconv 폴백을 둔다. */
$desc_max = 155;
if (function_exists('mb_substr')) {
    if (mb_strlen($page_description, 'UTF-8') > $desc_max) {
        $page_description = rtrim(mb_substr($page_description, 0, $desc_max, 'UTF-8')) . '…';
    }
} elseif (function_exists('iconv_substr')) {
    if (iconv_strlen($page_description, 'UTF-8') > $desc_max) {
        $page_description = rtrim(iconv_substr($page_description, 0, $desc_max, 'UTF-8')) . '…';
    }
}

// 쿼리스트링이 글을 결정하므로 정규 URL 에 ?id= 를 포함시킨다
$page_canonical_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) . '?id=' . $id;

include_once(G5_PATH.'/head.php');
?>

<style>
/* 정책·회원·커뮤니티 페이지 모바일 가독성 보완 */
@media (max-width: 768px) {
  .privacy-container,
  .terms-container {
    padding: 20px 0 !important;
  }
  .privacy-body,
  .terms-body,
  .board-intro {
    word-break: keep-all;
    overflow-wrap: break-word;
  }
  .auth-card-wrap,
  .write-form-wrap {
    margin-top: 12px;
  }
  .sub-intro-text .section-title {
    word-break: keep-all;
  }
  .faq-blog-cta {
    padding: 28px 18px !important;
  }
  .board-view__title {
    word-break: keep-all;
  }
  .write-form-card {
    padding: 28px 16px !important;
  }
}
@media (max-width: 480px) {
  .auth-card-title,
  .write-form-title {
    font-size: 20px !important;
  }
}
</style>
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
      <li><a href="<?php echo G5_URL; ?>/index.php">Home</a></li>
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

      <!-- 하단 버튼 (좌측: 목록, 우측: 수정/삭제) -->
      <div class="board-view__foot" style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
        <a href="<?php echo $list_url; ?>" class="board-view__listbtn" style="background: var(--c-text-light); border-color: var(--c-text-light); margin: 0;">목록으로</a>
        
        <?php if (isset($is_member) && $is_member) { ?>
        <div class="board-view__admin-actions" style="display: flex; gap: 8px;">
          <a href="<?php echo $G5_URL; ?>/sub/write.php?bo_table=notice&w=u&id=<?php echo $post['wr_id']; ?>" class="board-view__listbtn" style="margin: 0;">수정</a>
          <a href="javascript:if(confirm('한번 삭제한 자료는 복구할 수 없습니다.\n\n정말 삭제하시겠습니까?')) { location.href='<?php echo G5_THEME_URL; ?>/sub/sub4_3_view.php?id=<?php echo $post['wr_id']; ?>&action=delete'; }" class="board-view__listbtn" style="background: #e63c3c; border-color: #e63c3c; margin: 0;">삭제</a>
        </div>
        <?php } ?>
      </div>



    </article>
  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
