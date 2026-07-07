<?php
if (!defined('_GNUBOARD_')) exit;

/* ============================================================
   레퍼러(Referer) 및 글쓰기 토큰 보안 검증 우회 스크립트 (광역 패스 버전)
   - 사용자의 브라우저 설정, 광고 차단 프로그램, 백신 등으로 인해
     HTTP_REFERER(이전 페이지 주소)가 유실되어 전송되었을 경우,
     그누보드 보안 검사(올바른 방법으로 이용해 주십시오)에서 차단되는 현상을 방지합니다.
   ============================================================ */

// 1. 레퍼러(HTTP_REFERER) 소실 보완
if (!isset($_SERVER['HTTP_REFERER']) || empty($_SERVER['HTTP_REFERER'])) {
    $is_https = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] === 'on' || $_SERVER['HTTPS'] === 1)) 
                || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
    $protocol = $is_https ? 'https' : 'http';
    $_SERVER['HTTP_REFERER'] = $protocol . '://' . $_SERVER['HTTP_HOST'] . '/';
}

// 2. 모든 POST 전송 시 토큰 보안 검사 무조건 일치 프리패스 (PHP 8.x 경고 방지 포함)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bo_table = isset($_POST['bo_table']) ? preg_replace('/[^a-z0-9_]/i', '', $_POST['bo_table']) : '';
    $dummy_token = 'bypass_token_key_1234';
    
    // 전송 폼 값 및 세션 토큰을 강제로 무조건 일치시킵니다.
    $_POST['token'] = $dummy_token;
    
    @session_start();
    if ($bo_table) {
        $_SESSION['ss_write_'.$bo_table.'_token'] = $dummy_token;
    }
    $_SESSION['ss_token'] = $dummy_token;
}
?>
