<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// $G5_URL이 정의되어 있지 않거나 테마 경로가 아닌 경우 바인딩
if (!isset($G5_URL)) {
    $G5_URL = G5_THEME_URL;
}
?>
<style>
/* PC 화면일 때 팝업창을 좌측 영역으로 긴밀히 밀착시키는 정렬 (애니메이션 충돌 방지 포함) */
@media (min-width: 1024px) {
    .theme-popup {
        top: 50% !important;
        left: 7vw !important; /* 좌측 여백을 10vw에서 4vw로 더욱 밀착 */
        transform: translate(0, -50%) !important;
        animation: none !important;
        opacity: 1 !important;
    }
}
</style>
<?php
/* ============================================================
   메인 팝업 콘텐츠 데이터 (동적 JSON 설정 연동)
   ============================================================ */
$popup_data_file = G5_THEME_PATH . '/data/popup_config.json';
$popup_slides = array();
$popup_ratio = '1 / 1';
$popup_width = '440px';
$popup_key   = 'thecl-popup-v1';

if (file_exists($popup_data_file)) {
    $json_content = @file_get_contents($popup_data_file);
    if ($json_content) {
        $popup_config = json_decode($json_content, true);
        if (is_array($popup_config)) {
            if (!empty($popup_config['popup_key'])) $popup_key = $popup_config['popup_key'];
            if (!empty($popup_config['popup_width'])) $popup_width = $popup_config['popup_width'];
            if (!empty($popup_config['popup_ratio'])) $popup_ratio = $popup_config['popup_ratio'];
            
            if (isset($popup_config['slides']) && is_array($popup_config['slides'])) {
                $active_slides = array();
                foreach ($popup_config['slides'] as $slide) {
                    if (isset($slide['use_flag']) && ($slide['use_flag'] === true || $slide['use_flag'] === 'true' || $slide['use_flag'] == 1)) {
                        $active_slides[] = $slide;
                    }
                }
                usort($active_slides, function($a, $b) {
                    $order_a = isset($a['order']) ? (int)$a['order'] : 0;
                    $order_b = isset($b['order']) ? (int)$b['order'] : 0;
                    return $order_a - $order_b;
                });
                $popup_slides = $active_slides;
            }
        }
    }
}

$popup_total = count($popup_slides);

// 팝업 항목이 없으면 팝업창 비활성화
if ($popup_total === 0) return;
?>

<!-- ============================================================
     MAIN POPUP (정사각 이미지형 / 자동 슬라이드)
     ============================================================ -->
<div class="theme-popup" id="themePopup"
     data-popup-key="<?php echo $popup_key; ?>"
     style="--popup-ratio: <?php echo $popup_ratio; ?>; --popup-w: <?php echo $popup_width; ?>;"
     role="dialog" aria-label="삼성더클 소식 팝업" hidden>

  <!-- 이미지 스테이지 (정사각 + 꽉 채움) -->
  <div class="popup-stage" id="popupHandle">
    <div class="popup-slides">
      <?php foreach ($popup_slides as $i => $slide) { ?>
        <div class="popup-slide<?php echo $i === 0 ? ' is-active' : ''; ?>" data-index="<?php echo $i; ?>">
          <?php if (!empty($slide['link'])) { ?>
            <a href="<?php echo $slide['link']; ?>" style="display: block; width: 100%; height: 100%;">
              <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>" draggable="false" style="cursor: pointer; width: 100%; height: 100%; object-fit: cover;">
            </a>
          <?php } else { ?>
            <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>" draggable="false">
          <?php } ?>
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
