<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$G5_URL = G5_THEME_URL;
include_once(G5_THEME_PATH.'/header.html.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Member</p>
    <h1 class="sub-hero-title">아이디/비밀번호 찾기</h1>
    <p class="sub-hero-subtitle">가입 시 등록하신 이메일로 계정 정보를 보내드립니다</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">Member</span></li>
      <li class="separator">></li>
      <li class="current">아이디/비밀번호 찾기</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">

    <div class="auth-card-wrap reveal">
      <div class="auth-card">
        <div class="auth-card-header">
          <h2 class="auth-card-title">FIND INFO</h2>
          <p class="auth-card-desc">
            회원가입 시 등록하신 이메일 주소를 입력해 주세요.<br>
            해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.
          </p>
        </div>

        <form name="fpasswordlost" action="<?php echo $action_url ?>" onsubmit="return fpasswordlost_submit(this);" method="post" autocomplete="off" class="auth-form">
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

        <div class="auth-card-footer">
          <p>비밀번호가 기억나셨나요? <a href="<?php echo G5_BBS_URL ?>/login.php" class="join-link">로그인 하러가기</a></p>
        </div>
      </div>
    </div>

  </div>
</main>

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
<?php include_once(G5_THEME_PATH.'/footer.html.php'); ?>
