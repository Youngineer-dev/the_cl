<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// $G5_URL이 정의되어 있지 않거나 테마 경로가 아닌 경우 바인딩
if (!isset($G5_URL)) {
    $G5_URL = G5_THEME_URL;
}

/* ============================================================
   메인 팝업 콘텐츠 데이터 (정사각 이미지형)
   - 모든 정보를 이미지 한 장에 담습니다.
   - title : 접근성용 대체텍스트(alt)로 사용됩니다.
   - image : 슬라이드 이미지 (테마 /img 경로 기준)
   - 항목을 추가/수정하면 슬라이드와 카운터가 자동으로 갱신됩니다.
   ============================================================ */
$popup_slides = array(
    array(
        'title' => '사전 예약 안내',
        'image' => $G5_URL.'/img/popup_notice.png?v=1',
    ),
    array(
        'title' => '진료일정 안내',
        'image' => $G5_URL.'/img/popup_2.png?v=1',
    ),
);

/* 이미지 비율 (width / height) — PC·모바일 어디서든 동일하게 유지됩니다.
   기본은 정사각(1/1). 준비한 팝업 이미지 비율에 맞춰 변경하세요. (예: '1 / 1', '3 / 4', '16 / 9') */
$popup_ratio = '1 / 1';

/* 팝업 너비 (px) — 비율에 따라 높이는 자동 계산됩니다. */
$popup_width = '440px';

/* 팝업 식별 키 — 콘텐츠가 바뀌어 다시 노출하고 싶을 때 값을 변경하면
   '오늘 하루 그만보기'를 누른 사용자에게도 새 팝업이 다시 표시됩니다. */
$popup_key = 'thecl-popup-2026-07-07';

$popup_total = count($popup_slides);
?>
<!-- ============================================================
     MAIN POPUP (정사각 이미지형 / 드래그 이동 / 자동 슬라이드)
     ============================================================ -->
<div class="theme-popup" id="themePopup"
     data-popup-key="<?php echo $popup_key; ?>"
     style="--popup-ratio: <?php echo $popup_ratio; ?>; --popup-w: <?php echo $popup_width; ?>;"
     role="dialog" aria-label="삼성더클 소식 팝업" hidden>

  <!-- 이미지 스테이지 (정사각 + 꽉 채움 + 드래그 핸들) -->
  <div class="popup-stage" id="popupHandle">
    <div class="popup-slides">
      <?php foreach ($popup_slides as $i => $slide) { ?>
        <div class="popup-slide<?php echo $i === 0 ? ' is-active' : ''; ?>" data-index="<?php echo $i; ?>">
          <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>" draggable="false">
        </div>
      <?php } ?>
    </div>

    <!-- 닫기 버튼 (이미지 위 오버레이) -->
    <button type="button" class="popup-close" id="popupCloseX" aria-label="팝업 닫기">
      <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>

  <!-- 하단 컨트롤 바 -->
  <div class="popup-bar">
    <div class="popup-nav-group">
      <button type="button" class="popup-arrow popup-prev" aria-label="이전">
        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
      </button>
      <span class="popup-counter"><span class="popup-cur">1</span> / <span class="popup-total"><?php echo $popup_total; ?></span></span>
      <button type="button" class="popup-arrow popup-next" aria-label="다음">
        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
      </button>
    </div>

    <button type="button" class="popup-hide-today" id="popupHideToday">
      오늘 하루 그만보기
    </button>
  </div>
</div>
