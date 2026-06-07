<?php
if (!defined('_GNUBOARD_')) exit;

add_replace('write_update_move_url', 'the_cl_write_redirect', 10, 5);
function the_cl_write_redirect($redirect_url, $board, $wr_id, $w, $qstr) {
    if ($board['bo_table'] == 'notice') {
        return G5_THEME_URL . '/sub/sub4_3_view.php?id=' . $wr_id;
    } else if ($board['bo_table'] == 'gallery') {
        return G5_THEME_URL . '/sub/sub4_1_view.php?id=' . $wr_id;
    }
    return $redirect_url;
}
?>
