<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$G5_URL = G5_THEME_URL;
?>
<form name="fregister" id="fregister" action="<?php echo $register_action_url ?>" method="POST" style="display:none;">
    <input type="hidden" name="agree" value="1">
    <input type="hidden" name="agree2" value="1">
</form>
<div style="text-align:center; padding:100px 0; font-family:'Noto Sans KR', sans-serif;">
    <p style="font-size:16px; color:#666;">회원가입 페이지로 이동 중입니다...</p>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    document.fregister.submit();
});
</script>
