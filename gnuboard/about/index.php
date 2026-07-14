<?php
/**
 * Pretty URL entry (no rewrite required)
 * https://domain/about/
 */
$the_cl_pretty_page = 'sub1_1.php';
// gnuboard root 찾기
$dir = __DIR__;
for ($i = 0; $i < 8; $i++) {
    if (is_file($dir . '/common.php') && is_dir($dir . '/theme/the_cl/sub')) {
        require $dir . '/theme/the_cl/sub/_pretty_entry.php';
        return;
    }
    $dir = dirname($dir);
}
header('HTTP/1.1 500 Internal Server Error');
echo 'Gnuboard root not found.';