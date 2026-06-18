<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

// $G5_URL을 G5_THEME_URL로 덮어써서 서브페이지들의 자산 경로를 테마 디렉터리로 통일합니다.
$G5_URL = G5_THEME_URL;

include_once(G5_THEME_PATH.'/header.html.php');
?>
