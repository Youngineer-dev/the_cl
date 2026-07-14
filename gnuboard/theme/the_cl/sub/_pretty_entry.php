<?php
/**
 * Cafe24 등 rewrite(.htaccess/nginx conf) 없이 Pretty URL 쓰는 엔트리
 *
 * 문서 루트(/www)에 만든 /about/index.php 등에서:
 *   $the_cl_pretty_page = 'sub1_1.php';
 *   require dirname(__DIR__) . '/theme/the_cl/sub/_pretty_entry.php';
 */

if (empty($the_cl_pretty_page)) {
    header('HTTP/1.1 500 Internal Server Error');
    echo 'THE_CL pretty page is not set.';
    exit;
}

$the_cl_pretty_page = basename(str_replace('\\', '/', (string) $the_cl_pretty_page));
$sub_dir = __DIR__;
$target = $sub_dir . '/' . $the_cl_pretty_page;

if (!is_file($target)) {
    header('HTTP/1.1 404 Not Found');
    echo 'Page not found.';
    exit;
}

if (!defined('THE_CL_PRETTY_ENTRY')) {
    define('THE_CL_PRETTY_ENTRY', true);
}

// 서브페이지 상대 경로 include 를 위해 CWD 고정
chdir($sub_dir);
include_once $target;
