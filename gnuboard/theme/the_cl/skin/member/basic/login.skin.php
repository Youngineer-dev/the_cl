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
    <h1 class="sub-hero-title">로그인</h1>
    <p class="sub-hero-subtitle">삼성더클성장의원에 오신 것을 환영합니다</p>
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
      <li class="current">로그인</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    
    <div class="auth-card-wrap reveal">
      <div class="auth-card">
        <div class="auth-card-header">
          <h2 class="auth-card-title">SIGN IN</h2>
          <p class="auth-card-desc">아이디와 비밀번호를 입력해주세요</p>
        </div>

        <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post" class="auth-form">
          <input type="hidden" name="url" value="<?php echo $login_url ?>">
          
          <div class="form-group">
            <label for="login_id" class="form-label">아이디</label>
            <input type="text" name="mb_id" id="login_id" class="form-input" placeholder="아이디를 입력하세요" required autofocus autocomplete="username">
          </div>

          <div class="form-group">
            <label for="login_pw" class="form-label">비밀번호</label>
            <input type="password" name="mb_password" id="login_pw" class="form-input" placeholder="비밀번호를 입력하세요" required autocomplete="current-password">
          </div>

          <div class="form-helper">
            <label class="remember-me">
              <input type="checkbox" name="auto_login" id="login_auto_login">
              <span class="checkbox-custom"></span>
              로그인 상태 유지 (자동로그인)
            </label>
            <a href="<?php echo G5_BBS_URL ?>/password_lost.php" class="find-link">아이디/비밀번호 찾기</a>
          </div>

          <button type="submit" class="btn-submit auth-btn">로그인</button>
        </form>

        <div class="auth-card-footer">
          <p>아직 회원이 아니신가요? <a href="<?php echo G5_BBS_URL ?>/register.php" class="join-link">회원가입 하기</a></p>
        </div>
      </div>
    </div>

  </div>
</main>

<script>
jQuery(function($){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    if( $( document.body ).triggerHandler( 'login_sumit', [f, 'flogin'] ) !== false ){
        return true;
    }
    return false;
}
</script>
<?php include_once(G5_THEME_PATH.'/footer.html.php'); ?>
