<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 캡차 CSS 및 커스텀 스타일 정의
?>
<style>
/* 팝업 전용 스타일 */
body {
    background: var(--c-bg-light, #f8f9fa) !important;
    color: var(--c-text-dark, #2b2b2b) !important;
    font-family: 'Noto Sans KR', sans-serif !important;
    margin: 0 !important;
    padding: 0 !important;
}
.lost-password-wrap {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
    box-sizing: border-box;
}
.lost-password-card {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    padding: 35px 30px;
    border: 1px solid rgba(0, 0, 0, 0.03);
    width: 100%;
    max-width: 440px;
    box-sizing: border-box;
}
.lost-password-title {
    font-family: 'Cormorant', serif;
    font-size: 26px;
    font-weight: 700;
    color: var(--c-accent-dark, #8b6d43);
    margin: 0 0 10px 0;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;
}
.lost-password-desc {
    font-size: 13px;
    color: var(--c-text-muted, #7c7c7c);
    text-align: center;
    margin-bottom: 25px;
    line-height: 1.5;
}
.lost-password-form .form-group {
    margin-bottom: 20px;
}
.lost-password-form .form-label {
    display: block;
    font-size: 12px;
    font-weight: 600;
    color: var(--c-text-dark, #2b2b2b);
    margin-bottom: 8px;
    letter-spacing: 0.5px;
}
.lost-password-form .form-input {
    width: 100%;
    height: 48px;
    padding: 0 16px;
    border: 1px solid var(--c-border, #e0e0e0);
    border-radius: 6px;
    font-size: 14px;
    color: var(--c-text-dark, #2b2b2b);
    background: var(--c-bg-light, #f8f9fa);
    transition: all 0.3s ease;
    box-sizing: border-box;
}
.lost-password-form .form-input:focus {
    outline: none;
    border-color: var(--c-accent, #b58e5e);
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(181, 142, 94, 0.1);
}
.lost-password-form .btn-submit.auth-btn {
    width: 100%;
    height: 48px;
    background: var(--c-accent, #b58e5e);
    color: #ffffff;
    border: none;
    border-radius: 6px;
    font-size: 15px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 15px;
}
.lost-password-form .btn-submit.auth-btn:hover {
    background: var(--c-accent-dark, #8b6d43);
}

/* 캡차 커스텀 스타일 보강 (강력한 직접 오버라이드 및 한 줄 가로 정렬) */
fieldset#captcha.captcha {
    margin: 15px 0 !important;
    padding: 10px !important;
    background: var(--c-bg-light, #f8f9fa) !important;
    border-radius: 8px !important;
    border: 1px solid var(--c-border, #e0e0e0) !important;
    display: flex !important;
    flex-wrap: nowrap !important;
    align-items: center !important;
    gap: 6px !important;
    width: 100% !important;
    box-sizing: border-box !important;
}
fieldset#captcha.captcha legend {
    display: none !important;
}
fieldset#captcha.captcha #captcha_img {
    border-radius: 6px !important;
    border: 1px solid var(--c-border, #e0e0e0) !important;
    height: 38px !important;
    width: 90px !important;
    flex: 0 0 90px !important;
    display: inline-block !important;
    vertical-align: middle !important;
}
fieldset#captcha.captcha #captcha_key {
    height: 38px !important;
    padding: 0 10px !important;
    border: 1px solid var(--c-border, #e0e0e0) !important;
    border-radius: 6px !important;
    font-size: 13px !important;
    box-sizing: border-box !important;
    background: #ffffff !important;
    transition: all 0.3s ease !important;
    flex: 1 1 auto !important;
    min-width: 50px !important;
    margin: 0 !important;
}
fieldset#captcha.captcha #captcha_key:focus {
    outline: none !important;
    border-color: var(--c-accent, #b58e5e) !important;
    box-shadow: 0 0 0 3px rgba(181, 142, 94, 0.1) !important;
}
fieldset#captcha.captcha #captcha_mp3,
fieldset#captcha.captcha #captcha_reload {
    background: #ffffff !important;
    border: 1px solid var(--c-border, #e0e0e0) !important;
    color: var(--c-text-dark, #2b2b2b) !important;
    border-radius: 6px !important;
    cursor: pointer !important;
    height: 38px !important;
    width: 36px !important;
    flex: 0 0 36px !important;
    box-sizing: border-box !important;
    transition: all 0.2s ease !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    font-size: 0 !important; /* 텍스트 숨김 */
    padding: 0 !important;
    margin: 0 !important;
}
fieldset#captcha.captcha #captcha_mp3:hover,
fieldset#captcha.captcha #captcha_reload:hover {
    background: var(--c-bg-light, #f8f9fa) !important;
    border-color: var(--c-accent, #b58e5e) !important;
}
fieldset#captcha.captcha #captcha_mp3 span,
fieldset#captcha.captcha #captcha_reload span {
    display: none !important;
}
fieldset#captcha.captcha #captcha_mp3::before {
    content: "\f028" !important; /* fa-volume-up */
    font-family: FontAwesome !important;
    font-size: 14px !important;
    display: inline-block !important;
}
fieldset#captcha.captcha #captcha_reload::before {
    content: "\f021" !important; /* fa-refresh */
    font-family: FontAwesome !important;
    font-size: 14px !important;
    display: inline-block !important;
}
fieldset#captcha.captcha #captcha_info {
    display: none; /* 공간 확보를 위해 안내문 숨김 */
}
fieldset#captcha.captcha .sound_only {
    display: none !important;
}

/* 본인인증 영역 */
.cert-section {
    margin-top: 25px;
    padding-top: 20px;
    border-top: 1px dashed var(--c-border, #e0e0e0);
    text-align: center;
}
.cert-section-title {
    font-size: 13px;
    font-weight: 600;
    color: var(--c-text-dark, #2b2b2b);
    margin-bottom: 15px;
}
.cert-buttons {
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.btn-cert {
    width: 100%;
    height: 40px;
    background: #ffffff;
    color: var(--c-text-dark, #2b2b2b);
    border: 1px solid var(--c-border, #e0e0e0);
    border-radius: 6px;
    font-size: 13px;
    cursor: pointer;
    transition: all 0.2s ease;
}
.btn-cert:hover {
    background: var(--c-bg-light, #f8f9fa);
    border-color: var(--c-accent, #b58e5e);
    color: var(--c-accent-dark, #8b6d43);
}
</style>

<div class="lost-password-wrap">
    <div class="lost-password-card">
        <div class="lost-password-header">
            <h2 class="lost-password-title">FIND INFO</h2>
            <p class="lost-password-desc">
                회원가입 시 등록하신 이메일 주소를 입력해 주세요.<br>
                해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.
            </p>
        </div>

        <form name="fpasswordlost" action="<?php echo $action_url ?>" onsubmit="return fpasswordlost_submit(this);" method="post" autocomplete="off" class="lost-password-form">
            <input type="hidden" name="cert_no" value="">
            
            <div class="form-group">
                <label for="mb_email" class="form-label">이메일 주소</label>
                <input type="email" name="mb_email" id="mb_email" required class="form-input" placeholder="example@domain.com">
            </div>

            <?php echo captcha_html(); ?>

            <button type="submit" class="btn-submit auth-btn">인증메일 보내기</button>
        </form>

        <?php if($config['cf_cert_use'] != 0 && $config['cf_cert_find'] != 0) { ?> 
        <div class="cert-section">
            <h3 class="cert-section-title">본인인증으로 찾기</h3>
            <div class="cert-buttons">
                <?php if(!empty($config['cf_cert_simple'])) { ?>
                    <button type="button" id="win_sa_kakao_cert" class="btn-cert win_sa_cert" data-type="">간편인증</button>
                <?php } if(!empty($config['cf_cert_hp']) || !empty($config['cf_cert_ipin'])) { ?>
                    <?php if(!empty($config['cf_cert_hp'])) { ?>
                        <button type="button" id="win_hp_cert" class="btn-cert">휴대폰 본인확인</button>
                    <?php } if(!empty($config['cf_cert_ipin'])) { ?>
                        <button type="button" id="win_ipin_cert" class="btn-cert">아이핀 본인확인</button>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<script>    
$(function() {
    var pageTypeParam = "pageType=find";

	<?php if($config['cf_cert_use'] && $config['cf_cert_simple']) { ?>
	// TOSS 간편인증
	var url = "<?php echo G5_INICERT_URL; ?>/ini_request.php";
	var type = "";    
    var params = "";
    var request_url = "";
    
	$(".win_sa_cert").click(function() {
		type = $(this).data("type");
		params = "?directAgency=" + type + "&" + pageTypeParam;
        request_url = url + params;
        call_sa(request_url);
	});
    <?php } ?>
    
    <?php if($config['cf_cert_use'] && $config['cf_cert_ipin']) { ?>
    // 아이핀인증
    var params = "";
    $("#win_ipin_cert").click(function() {
        params = "?" + pageTypeParam;
        var url = "<?php echo G5_OKNAME_URL; ?>/ipin1.php"+params;
        certify_win_open('kcb-ipin', url);
        return;
    });
    <?php } ?>
    
    <?php if($config['cf_cert_use'] && $config['cf_cert_hp']) { ?>
    // 휴대폰인증
    var params = "";
    $("#win_hp_cert").click(function() {
        params = "?" + pageTypeParam;
        <?php     
        switch($config['cf_cert_hp']) {
            case 'kcb':                
                $cert_url = G5_OKNAME_URL.'/hpcert1.php';
                $cert_type = 'kcb-hp';
                break;
            case 'kcp':
                $cert_url = G5_KCPCERT_URL.'/kcpcert_form.php';
                $cert_type = 'kcp-hp';
                break;
            case 'kcp_v2':
                $cert_url = G5_KCPCERT_V2_URL.'/kcpcert_form.php';
                $cert_type = 'kcp_v2-hp';
                break;
            case 'lg':
                $cert_url = G5_LGXPAY_URL.'/AuthOnlyReq.php';
                $cert_type = 'lg-hp';
                break;
            default:
                echo 'alert("기본환경설정에서 휴대폰 본인확인 설정을 해주십시오");';
                echo 'return false;';
                break;
        }
        ?>
        certify_win_open("<?php echo $cert_type; ?>", "<?php echo $cert_url; ?>"+params);
        return;
    });
    <?php } ?>
});

function fpasswordlost_submit(f)
{
    <?php echo chk_captcha_js(); ?>
    return true;
}
</script>
