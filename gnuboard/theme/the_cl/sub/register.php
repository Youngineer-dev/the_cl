<?php
$page_title = "회원가입";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Member</p>
    <h1 class="sub-hero-title">회원가입</h1>
    <p class="sub-hero-subtitle">삼성더클성장의원의 가족이 되어 더 나은 서비스를 경험하세요</p>
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
      <li class="current">회원가입</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    
    <div class="auth-card-wrap reveal" style="max-width: 700px;">
      <div class="auth-card">
        <div class="auth-card-header">
          <h2 class="auth-card-title">CREATE ACCOUNT</h2>
          <p class="auth-card-desc">삼성더클성장의원 회원가입을 위한 정보를 작성해주세요</p>
        </div>

        <form action="#" method="POST" class="auth-form">
          
          <!-- 약관 동의 영역 -->
          <div class="terms-section">
            <h4 class="terms-title">이용약관 및 개인정보 수집 동의</h4>
            
            <div class="terms-box-wrap">
              <label class="terms-label">이용약관 (필수)</label>
              <div class="terms-box">
                [이용약관]<br>
                제1조 (목적)<br>
                본 약관은 삼성더클성장의원(이하 "의원")이 제공하는 웹서비스의 이용조건 및 절차에 관한 사항을 규정함을 목적으로 합니다.<br>
                제2조 (회원의 정의)<br>
                "회원"이라 함은 의원 웹사이트에 접속하여 본 약관에 동의하고 가입 양식을 제출하여 서비스를 이용하는 고객을 뜻합니다.
              </div>
              <label class="remember-me terms-agree">
                <input type="checkbox" name="agree_terms" id="agree_terms" required>
                <span class="checkbox-custom"></span>
                위 이용약관에 동의합니다.
              </label>
            </div>

            <div class="terms-box-wrap" style="margin-top: 20px;">
              <label class="terms-label">개인정보 수집 및 이용 동의 (필수)</label>
              <div class="terms-box">
                [개인정보 수집 및 이용 항목]<br>
                1. 수집 항목: 이름, 아이디, 비밀번호, 이메일, 휴대폰 번호<br>
                2. 수집 목적: 회원 식별, 서비스 안내, 진료 예약 관련 고지<br>
                3. 보유 및 이용 기간: 회원 탈퇴 시 혹은 법정 의무 보관 기간 종료 시까지
              </div>
              <label class="remember-me terms-agree">
                <input type="checkbox" name="agree_privacy" id="agree_privacy" required>
                <span class="checkbox-custom"></span>
                위 개인정보 수집 및 이용에 동의합니다.
              </label>
            </div>
          </div>

          <div class="form-divider"></div>

          <!-- 정보 입력 영역 -->
          <div class="form-grid">
            <div class="form-group">
              <label for="mb_id" class="form-label">아이디 (필수)</label>
              <input type="text" name="mb_id" id="mb_id" class="form-input" placeholder="영문, 숫자 4~12자" required autocomplete="username">
            </div>

            <div class="form-group">
              <label for="mb_name" class="form-label">이름 (필수)</label>
              <input type="text" name="mb_name" id="mb_name" class="form-input" placeholder="실명을 입력해 주세요" required autocomplete="name">
            </div>

            <div class="form-group">
              <label for="mb_password" class="form-label">비밀번호 (필수)</label>
              <input type="password" name="mb_password" id="mb_password" class="form-input" placeholder="영문/숫자/특수문자 조합 8자 이상" required autocomplete="new-password">
            </div>

            <div class="form-group">
              <label for="mb_password_re" class="form-label">비밀번호 확인 (필수)</label>
              <input type="password" name="mb_password_re" id="mb_password_re" class="form-input" placeholder="비밀번호를 다시 한번 입력해 주세요" required autocomplete="new-password">
            </div>

            <div class="form-group">
              <label for="mb_email" class="form-label">이메일 주소 (필수)</label>
              <input type="email" name="mb_email" id="mb_email" class="form-input" placeholder="example@domain.com" required autocomplete="email">
            </div>

            <div class="form-group">
              <label for="mb_hp" class="form-label">휴대폰 번호 (필수)</label>
              <input type="tel" name="mb_hp" id="mb_hp" class="form-input" placeholder="010-0000-0000" required autocomplete="tel">
            </div>
          </div>

          <button type="submit" class="btn-submit auth-btn" style="margin-top: 36px;">가입 완료하기</button>
        </form>

        <div class="auth-card-footer">
          <p>이미 계정이 있으신가요? <a href="<?php echo $G5_URL; ?>/sub/login.php" class="join-link">로그인 하러가기</a></p>
        </div>
      </div>
    </div>

  </div>
</main>

<?php
include_once(G5_PATH.'/tail.php');
?>
