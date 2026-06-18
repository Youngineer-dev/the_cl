<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$G5_URL = G5_THEME_URL;

// 테마 헤더 인클루드
include_once(G5_THEME_PATH.'/header.html.php');
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Member</p>
    <h1 class="sub-hero-title">가입 완료</h1>
    <p class="sub-hero-subtitle">삼성더클성장의원의 회원이 되신 것을 축하합니다</p>
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
      <li class="current">가입 완료</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    
    <div class="auth-card-wrap reveal" style="max-width: 600px;">
      <div class="auth-card" style="text-align: center; padding: 40px 24px;">
        <div class="auth-card-header" style="margin-bottom: 28px;">
          <div style="font-size: 48px; color: var(--c-primary); margin-bottom: 16px;">🎉</div>
          <h2 class="auth-card-title" style="font-size: 22px; font-weight: 600; color: var(--c-primary-dark);">WELCOME!</h2>
          <p class="auth-card-desc" style="font-size: 14px; color: var(--c-text-light); margin-top: 10px; line-height: 1.6;">
            <strong><?php echo get_text($mb['mb_name']); ?></strong>님의 회원가입을 진심으로 축하드립니다.<br>
            정직하고 신뢰받는 동반자가 되어 성장의 골든타임을 함께하겠습니다.
          </p>
        </div>

        <div style="background: var(--c-primary-pale); border-radius: 6px; padding: 20px; margin-bottom: 30px; text-align: left; font-size: 13px; color: var(--c-text); line-height: 1.8;">
          <div style="margin-bottom: 6px;"><strong>아이디:</strong> <span style="color: var(--c-primary-dark); font-weight: 500;"><?php echo $mb['mb_id']; ?></span></div>
          <div><strong>이메일 주소:</strong> <span style="color: var(--c-primary-dark); font-weight: 500;"><?php echo $mb['mb_email']; ?></span></div>
        </div>

        <div style="display: flex; gap: 12px; justify-content: center;">
          <a href="<?php echo G5_URL; ?>/index.php" class="btn-cancel" style="display: inline-flex; align-items: center; justify-content: center; width: 140px; height: 52px; box-sizing: border-box; border: 1px solid var(--c-border); border-radius: 6px; font-size: 14px; font-weight: 500; color: var(--c-text-light); background: #ffffff; transition: all 0.3s; text-decoration: none;">홈으로 이동</a>
          <a href="<?php echo G5_BBS_URL; ?>/login.php" class="btn-submit auth-btn" style="width: 140px; height: 52px; box-sizing: border-box; display: inline-flex; align-items: center; justify-content: center; text-decoration: none; font-size: 14px;">로그인하기</a>
        </div>
      </div>
    </div>

  </div>
</main>

<?php
// 테마 푸터 인클루드
include_once(G5_THEME_PATH.'/footer.html.php');
?>
