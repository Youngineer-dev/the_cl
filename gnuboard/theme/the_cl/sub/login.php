<?php
$page_title = "로그인";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
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
      <li><a href="<?php echo $G5_URL; ?>/index.php">Home</a></li>
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

        <form action="#" method="POST" class="auth-form">
          <div class="form-group">
            <label for="mb_id" class="form-label">아이디</label>
            <input type="text" name="mb_id" id="mb_id" class="form-input" placeholder="아이디를 입력하세요" required autofocus autocomplete="username">
          </div>

          <div class="form-group">
            <label for="mb_password" class="form-label">비밀번호</label>
            <input type="password" name="mb_password" id="mb_password" class="form-input" placeholder="비밀번호를 입력하세요" required autocomplete="current-password">
          </div>

          <div class="form-helper">
            <label class="remember-me">
              <input type="checkbox" name="remember_me" id="remember_me">
              <span class="checkbox-custom"></span>
              로그인 상태 유지
            </label>
            <a href="#" class="find-link">아이디/비밀번호 찾기</a>
          </div>

          <button type="submit" class="btn-submit auth-btn">로그인</button>
        </form>

        <div class="auth-card-footer">
          <p>아직 회원이 아니신가요? <a href="<?php echo $G5_URL; ?>/sub/register.php" class="join-link">회원가입 하기</a></p>
        </div>
      </div>
    </div>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
