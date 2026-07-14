<?php
if (!defined('_GNUBOARD_')) exit;

// 글 작성/수정 완료 후 pretty URL 상세로 이동
add_replace('write_update_move_url', 'the_cl_write_redirect', 10, 5);
function the_cl_write_redirect($redirect_url, $board, $wr_id, $w, $qstr)
{
    if (!function_exists('the_cl_url')) {
        return $redirect_url;
    }

    if ($board['bo_table'] == 'notice') {
        return the_cl_url('notice_view', array('id' => $wr_id));
    }
    if ($board['bo_table'] == 'gallery') {
        return the_cl_url('cases_view', array('id' => $wr_id));
    }

    return $redirect_url;
}
