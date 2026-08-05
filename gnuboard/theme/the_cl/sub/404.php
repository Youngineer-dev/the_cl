<?php
/* ------------------------------------------------------------------
   커스텀 오류 페이지
   .htaccess 의 ErrorDocument 로 연결되며 404 / 403 / 410 / 500 을 함께 처리한다.
   Apache 가 내부 서브요청으로 호출할 때 REDIRECT_STATUS 에 원래 상태코드가 담긴다.
   ------------------------------------------------------------------ */
$err_code = isset($_SERVER['REDIRECT_STATUS']) ? (int)$_SERVER['REDIRECT_STATUS'] : 404;
if (!in_array($err_code, [403, 404, 410, 500], true)) {
    $err_code = 404;
}

$err_map = [
    404 => [
        'title' => '페이지를 찾을 수 없습니다',
        'desc'  => '주소가 변경되었거나 삭제된 페이지입니다.<br>아래 메뉴에서 원하시는 정보를 찾아보세요.',
    ],
    410 => [
        'title' => '삭제된 페이지입니다',
        'desc'  => '요청하신 페이지는 더 이상 제공되지 않습니다.<br>아래 메뉴에서 원하시는 정보를 찾아보세요.',
    ],
    403 => [
        'title' => '접근 권한이 없습니다',
        'desc'  => '해당 페이지를 볼 수 있는 권한이 없습니다.<br>문의가 필요하시면 아래로 연락해 주세요.',
    ],
    500 => [
        'title' => '일시적인 오류가 발생했습니다',
        'desc'  => '잠시 후 다시 시도해 주세요.<br>문제가 계속되면 전화로 문의해 주시기 바랍니다.',
    ],
];

// 검색엔진이 오류 페이지를 정상 문서로 오인하지 않도록 상태코드를 명시
http_response_code($err_code);

$page_title   = $err_code . ' - ' . $err_map[$err_code]['title'];
$page_noindex = true;

include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<style>
.err-wrap {
  min-height: 62vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 120px 20px 100px;
}
.err-inner {
  text-align: center;
  max-width: 640px;
}
.err-code {
  font-family: var(--font-serif);
  font-size: 108px;
  font-weight: 400;
  font-style: italic;
  line-height: 1;
  color: var(--c-primary);
  opacity: 0.35;
  letter-spacing: 2px;
}
.err-deco {
  width: 40px;
  height: 1px;
  background: var(--c-accent-light);
  margin: 28px auto 26px;
}
.err-title {
  font-size: 28px;
  font-weight: 600;
  color: var(--c-primary-dark);
  margin-bottom: 16px;
  word-break: keep-all;
}
.err-desc {
  font-size: 15.5px;
  line-height: 1.85;
  color: var(--c-text-light);
  word-break: keep-all;
  margin-bottom: 36px;
}
.err-actions {
  display: flex;
  gap: 10px;
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom: 48px;
}
.err-btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 14px 26px;
  border-radius: 4px;
  font-size: 14.5px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s var(--ease-out);
}
.err-btn.primary {
  background: var(--c-primary-dark);
  color: #fff;
  border: 1px solid var(--c-primary-dark);
}
.err-btn.primary:hover {
  background: var(--c-primary);
  border-color: var(--c-primary);
}
.err-btn.ghost {
  background: transparent;
  color: var(--c-primary-dark);
  border: 1px solid var(--c-border);
}
.err-btn.ghost:hover {
  border-color: var(--c-primary);
  background: var(--c-primary-pale);
}
.err-links-label {
  font-family: var(--font-serif);
  font-size: 13px;
  font-style: italic;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--c-text-light);
  opacity: 0.75;
  margin-bottom: 18px;
}
.err-links {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 10px 0;
}
.err-links a {
  padding: 0 16px;
  font-size: 14.5px;
  color: var(--c-text-light);
  text-decoration: none;
  transition: color 0.25s var(--ease-out);
}
.err-links a + a {
  border-left: 1px solid var(--c-border);
}
.err-links a:hover {
  color: var(--c-primary-dark);
}

@media (max-width: 768px) {
  .err-wrap {
    min-height: 56vh;
    padding: 90px 20px 70px;
  }
  .err-code {
    font-size: 76px;
  }
  .err-title {
    font-size: 21px;
  }
  .err-desc {
    font-size: 14.5px;
    margin-bottom: 28px;
  }
  .err-actions {
    margin-bottom: 36px;
  }
  .err-btn {
    padding: 13px 20px;
    font-size: 14px;
  }
  .err-links a {
    padding: 0 12px;
    font-size: 13.5px;
  }
}
</style>

<main class="sub-main">
  <div class="container">
    <div class="err-wrap">
      <div class="err-inner">
        <p class="err-code"><?php echo $err_code; ?></p>
        <div class="err-deco"></div>
        <h1 class="err-title"><?php echo $err_map[$err_code]['title']; ?></h1>
        <p class="err-desc"><?php echo $err_map[$err_code]['desc']; ?></p>

        <div class="err-actions">
          <a href="<?php echo G5_URL; ?>/" class="err-btn primary">홈으로 돌아가기</a>
          <a href="tel:02-421-7757" class="err-btn ghost">전화 문의 02-421-7757</a>
        </div>

        <p class="err-links-label">Quick Links</p>
        <nav class="err-links" aria-label="주요 페이지 바로가기">
          <a href="<?php echo G5_THEME_URL; ?>/sub/sub1_1.php">병원 소개</a>
          <a href="<?php echo G5_THEME_URL; ?>/sub/sub1_3.php">의료진 소개</a>
          <a href="<?php echo G5_THEME_URL; ?>/sub/sub2_1.php">진료 안내</a>
          <a href="<?php echo G5_THEME_URL; ?>/sub/sub3_1.php">진료 시간</a>
          <a href="<?php echo G5_THEME_URL; ?>/sub/sub1_5.php">오시는 길</a>
          <a href="<?php echo G5_THEME_URL; ?>/sub/sub4_3.php">공지사항</a>
        </nav>
      </div>
    </div>
  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
