<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

add_javascript('<script src="'.G5_JS_URL.'/jquery.register_form.js"></script>', 0);
if ($config['cf_cert_use'] && ($config['cf_cert_simple'] || $config['cf_cert_ipin'] || $config['cf_cert_hp']))
    add_javascript('<script src="'.G5_JS_URL.'/certify.js?v='.G5_JS_VER.'"></script>', 0);

$G5_URL = G5_THEME_URL;
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
      <li><a href="<?php echo G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">Member</span></li>
      <li class="separator">></li>
      <li class="current">회원정보 입력</li>
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

        <form id="fregisterform" name="fregisterform" action="<?php echo $register_action_url ?>" onsubmit="return fregisterform_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" class="auth-form">
          <input type="hidden" name="w" value="<?php echo $w ?>">
          <input type="hidden" name="url" value="<?php echo $urlencode ?>">
          <input type="hidden" name="agree" value="<?php echo $agree ?>">
          <input type="hidden" name="agree2" value="<?php echo $agree2 ?>">
          <input type="hidden" name="cert_type" value="<?php echo $member['mb_certify']; ?>">
          <input type="hidden" name="cert_no" value="">
          <input type="hidden" name="mb_nick" id="reg_mb_nick" value="<?php echo isset($member['mb_nick']) ? get_text($member['mb_nick']) : ''; ?>">
          <input type="hidden" name="mb_nick_default" value="<?php echo isset($member['mb_nick']) ? get_text($member['mb_nick']) : ''; ?>">
          <?php if (isset($member['mb_sex'])) {  ?><input type="hidden" name="mb_sex" value="<?php echo $member['mb_sex'] ?>"><?php }  ?>

          <!-- 약관 동의 영역 (원페이지 통합) -->
          <div class="terms-section" style="margin-bottom: 30px; border-bottom: 1px solid var(--c-border); padding-bottom: 30px;">
            <h4 class="terms-title" style="font-size: 16px; font-weight: 600; color: var(--c-primary); margin-bottom: 20px;">이용약관 및 개인정보 수집 동의</h4>
            
            <div class="terms-box-wrap">
              <label class="terms-label" style="font-size: 13px; font-weight: 500; color: var(--c-text); display: block; margin-bottom: 8px;">이용약관 (필수)</label>
              <div class="terms-box" style="height: 120px; overflow-y: auto; padding: 12px; border: 1px solid var(--c-border); border-radius: 4px; font-size: 12px; line-height: 1.6; color: var(--c-text-light); background: var(--c-primary-pale); margin-bottom: 10px;">
                <?php echo get_text($config['cf_stipulation']) ?>
              </div>
              <label class="remember-me terms-agree" for="agree_terms" style="display: inline-flex; align-items: center; gap: 8px; font-size: 13px; cursor: pointer;">
                <input type="checkbox" name="agree_terms" id="agree_terms" required>
                <span class="checkbox-custom"></span>
                위 이용약관에 동의합니다.
              </label>
            </div>

            <div class="terms-box-wrap" style="margin-top: 20px;">
              <label class="terms-label" style="font-size: 13px; font-weight: 500; color: var(--c-text); display: block; margin-bottom: 8px;">개인정보 수집 및 이용 동의 (필수)</label>
              <div class="terms-box" style="height: 120px; overflow-y: auto; padding: 12px; border: 1px solid var(--c-border); border-radius: 4px; font-size: 12px; line-height: 1.6; color: var(--c-text-light); background: var(--c-primary-pale); margin-bottom: 10px;">
                [개인정보 수집 및 이용 항목]<br>
                1. 수집 항목: 이름, 아이디, 비밀번호, 이메일, 휴대폰 번호<br>
                2. 수집 목적: 회원 식별, 서비스 안내, 진료 예약 관련 고지<br>
                3. 보유 및 이용 기간: 회원 탈퇴 시 혹은 법정 의무 보관 기간 종료 시까지
              </div>
              <label class="remember-me terms-agree" for="agree_privacy" style="display: inline-flex; align-items: center; gap: 8px; font-size: 13px; cursor: pointer;">
                <input type="checkbox" name="agree_privacy" id="agree_privacy" required>
                <span class="checkbox-custom"></span>
                위 개인정보 수집 및 이용에 동의합니다.
              </label>
            </div>
          </div>

          <!-- 정보 입력 영역 -->
          <div class="form-grid">
            <div class="form-group">
              <label for="reg_mb_id" class="form-label">아이디 (필수)</label>
              <input type="text" name="mb_id" value="<?php echo $member['mb_id'] ?>" id="reg_mb_id" <?php echo $required ?> <?php echo $readonly ?> class="form-input" placeholder="영문, 숫자 4~12자" required autocomplete="username">
              <span id="msg_mb_id" style="font-size: 11px; margin-top: 4px; display: block; color: var(--c-accent-light);"></span>
            </div>

            <div class="form-group">
              <label for="reg_mb_name" class="form-label">이름 (필수)</label>
              <input type="text" id="reg_mb_name" name="mb_name" value="<?php echo get_text($member['mb_name']) ?>" <?php echo $required ?> <?php echo $name_readonly; ?> class="form-input" placeholder="실명을 입력해 주세요" required autocomplete="name">
            </div>

            <div class="form-group">
              <label for="reg_mb_password" class="form-label">비밀번호 (필수)</label>
              <input type="password" name="mb_password" id="reg_mb_password" class="form-input" placeholder="영문/숫자/특수문자 조합 8자 이상" <?php echo $required ?> autocomplete="new-password">
            </div>

            <div class="form-group">
              <label for="reg_mb_password_re" class="form-label">비밀번호 확인 (필수)</label>
              <input type="password" name="mb_password_re" id="reg_mb_password_re" class="form-input" placeholder="비밀번호를 다시 한번 입력해 주세요" <?php echo $required ?> autocomplete="new-password">
            </div>

            <div class="form-group">
              <label for="reg_mb_email" class="form-label">이메일 주소 (필수)</label>
              <input type="hidden" name="old_email" value="<?php echo $member['mb_email'] ?>">
              <input type="text" name="mb_email" value="<?php echo isset($member['mb_email']) ? $member['mb_email'] : ''; ?>" id="reg_mb_email" class="form-input" placeholder="example@domain.com" required autocomplete="email">
            </div>

            <div class="form-group">
              <label for="reg_mb_hp" class="form-label">휴대폰 번호 (필수)</label>
              <input type="text" name="mb_hp" value="<?php echo get_text($member['mb_hp']) ?>" id="reg_mb_hp" <?php echo $hp_required; ?> <?php echo $hp_readonly; ?> class="form-input" placeholder="010-0000-0000" required autocomplete="tel">
              <?php if ($config['cf_cert_use'] && ($config['cf_cert_hp'] || $config['cf_cert_simple'])) { ?>
              <input type="hidden" name="old_mb_hp" value="<?php echo get_text($member['mb_hp']) ?>">
              <?php } ?>
            </div>

            <!-- 자동등록방지 캡차 -->
            <div class="form-group" style="grid-column: span 2; margin-top: 16px;">
              <label class="form-label" style="margin-bottom: 8px;">자동등록방지 (필수)</label>
              <div class="is_captcha_use">
                <?php echo captcha_html(); ?>
              </div>
            </div>
          </div>

          <div class="btn_confirm" style="display: flex; gap: 12px; margin-top: 36px; justify-content: center; align-items: center;">
            <a href="<?php echo G5_URL ?>" class="btn-cancel" style="display: inline-flex; align-items: center; justify-content: center; width: 140px; height: 52px; box-sizing: border-box; border: 1px solid var(--c-border); border-radius: 6px; font-size: 14px; font-weight: 500; color: var(--c-text-light); background: #ffffff; transition: all 0.3s; text-decoration: none;">취소</a>
            <button type="submit" id="btn_submit" class="btn-submit auth-btn" style="margin-top: 0; width: 180px; height: 52px; box-sizing: border-box; display: inline-flex; align-items: center; justify-content: center; padding: 0;"><?php echo $w==''?'가입 완료하기':'정보수정 완료'; ?></button>
          </div>
        </form>

        <div class="auth-card-footer">
          <p>이미 계정이 있으신가요? <a href="<?php echo G5_BBS_URL ?>/login.php" class="join-link">로그인 하러가기</a></p>
        </div>
      </div>
    </div>

  </div>
</main>

<script>
// 이름 입력 시 닉네임 필드 자동 매핑
document.addEventListener('DOMContentLoaded', function() {
    const nameInput = document.getElementById('reg_mb_name');
    const nickInput = document.getElementById('reg_mb_nick');
    if (nameInput && nickInput) {
        nameInput.addEventListener('input', function() {
            nickInput.value = this.value;
        });
    }
});

// submit 최종 폼체크
function fregisterform_submit(f)
{
    // 약관 동의 검사 (원페이지 통합 적용)
    if (f.agree_terms && !f.agree_terms.checked) {
        alert("이용약관에 동의하셔야 회원가입 하실 수 있습니다.");
        f.agree_terms.focus();
        return false;
    }
    if (f.agree_privacy && !f.agree_privacy.checked) {
        alert("개인정보 수집 및 이용에 동의하셔야 회원가입 하실 수 있습니다.");
        f.agree_privacy.focus();
        return false;
    }

    // 회원아이디 검사
    if (f.w.value == "") {
        var msg = reg_mb_id_check();
        if (msg) {
            alert(msg);
            f.mb_id.select();
            return false;
        }
    }

    if (f.w.value == "") {
        if (f.mb_password.value.length < 3) {
            alert("비밀번호를 3글자 이상 입력하십시오.");
            f.mb_password.focus();
            return false;
        }
    }

    if (f.mb_password.value != f.mb_password_re.value) {
        alert("비밀번호가 같지 않습니다.");
        f.mb_password_re.focus();
        return false;
    }

    if (f.mb_password.value.length > 0) {
        if (f.mb_password_re.value.length < 3) {
            alert("비밀번호를 3글자 이상 입력하십시오.");
            f.mb_password_re.focus();
            return false;
        }
    }

    // 이름 검사
    if (f.w.value=="") {
        if (f.mb_name.value.length < 1) {
            alert("이름을 입력하십시오.");
            f.mb_name.focus();
            return false;
        }
    }

    // 닉네임 필드값 이름값으로 대입
    if (f.mb_nick.value == "") {
        f.mb_nick.value = f.mb_name.value;
    }

    // 닉네임 검사
    if ((f.w.value == "") || (f.w.value == "u" && f.mb_nick.defaultValue != f.mb_nick.value)) {
        var msg = reg_mb_nick_check();
        if (msg) {
            // 알림 대신 닉네임 중복 가능성 처리 위해 이름 기반 닉네임 고유 검증 자동 대응
            f.mb_nick.value = f.mb_id.value; // 이름 중복 우려 시 아이디로 닉네임 강제 갱신
        }
    }

    // E-mail 검사
    if ((f.w.value == "") || (f.w.value == "u" && f.mb_email.defaultValue != f.mb_email.value)) {
        var msg = reg_mb_email_check();
        if (msg) {
            alert(msg);
            f.mb_email.select();
            return false;
        }
    }

    <?php if (($config['cf_use_hp'] || $config['cf_cert_hp']) && $config['cf_req_hp']) {  ?>
    // 휴대폰번호 체크
    var msg = reg_mb_hp_check();
    if (msg) {
        alert(msg);
        f.mb_hp.select();
        return false;
    }
    <?php } ?>

    <?php echo chk_captcha_js();  ?>

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
}
</script>
