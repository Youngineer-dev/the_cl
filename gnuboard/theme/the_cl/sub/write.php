<?php
$page_title = "게시글 작성";
include_once('./_common.php');
include_once(G5_PATH.'/head.php');

$w = isset($_GET['w']) ? clean_xss_tags($_GET['w']) : '';
$bo_table = isset($_GET['bo_table']) ? clean_xss_tags($_GET['bo_table']) : 'notice';
if ($bo_table == 'cases') $bo_table = 'gallery';
$wr_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$write = [];
$notice_list = [];
if ($w == 'u' && $wr_id) {
    $write = sql_fetch(" SELECT * FROM {$g5['write_prefix']}{$bo_table} WHERE wr_id = '$wr_id' ");
    if (!$write) {
        alert('글이 존재하지 않습니다.');
    }
    $board = sql_fetch(" SELECT bo_notice FROM {$g5['board_table']} WHERE bo_table = '$bo_table' ");
    $notice_list = explode(',', trim($board['bo_notice'] ?? ''));
}
?>

<!-- SUB HERO -->
<section class="sub-hero">
  <div class="sub-hero-bg"></div>
  <div class="sub-hero-overlay"></div>
  <div class="sub-hero-content reveal">
    <p class="sub-hero-category">Community</p>
    <h1 class="sub-hero-title">게시글 작성</h1>
    <p class="sub-hero-subtitle">의원의 새로운 소식이나 치료 사례를 기록하는 공간입니다</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb-wrap">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="<?php echo $G5_URL; ?>/index.php">Home</a></li>
      <li class="separator">></li>
      <li><span style="text-transform: uppercase;">Community</span></li>
      <li class="separator">></li>
      <li class="current">글쓰기</li>
    </ul>
  </div>
</div>

<!-- MAIN CONTENT -->
<main class="sub-main">
  <div class="container">
    
    <div class="write-form-wrap reveal" style="max-width: 750px;">
      <div class="write-form-card">
        <div class="write-form-header">
          <h2 class="write-form-title">WRITE POST</h2>
          <p class="write-form-desc">게시판 성격에 맞는 양식이 자동으로 활성화됩니다</p>
        </div>

        <form action="<?php echo G5_BBS_URL; ?>/write_update.php" method="POST" enctype="multipart/form-data" class="auth-form write-form">
          <input type="hidden" name="w" value="<?php echo $w; ?>">
          <input type="hidden" name="wr_id" value="<?php echo $wr_id; ?>">
          <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
          
          <div class="form-grid" style="grid-template-columns: 1fr 1fr;">
            
            <!-- 1. 게시판 선택 -->
            <div class="form-group" style="grid-column: span 2;">
              <label for="bo_table" class="form-label">게시판 선택</label>
              <select name="bo_table" id="bo_table" class="form-input form-select" <?php echo $w == 'u' ? 'disabled' : ''; ?>>
                <option value="notice" <?php echo $bo_table == 'notice' ? 'selected' : ''; ?>>공지사항 (Notice)</option>
                <option value="gallery" <?php echo $bo_table == 'gallery' ? 'selected' : ''; ?>>치료 사례 (Treatment Cases)</option>
              </select>
              <?php if ($w == 'u') { ?>
                <input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
              <?php } ?>
            </div>

            <!-- 2. 게시판별 카테고리 (분류) - 그누보드 ca_name -->
            <div class="form-group" style="grid-column: span 2;">
              <label for="ca_name" class="form-label">분류 선택</label>
              <select name="ca_name" id="ca_name" class="form-input form-select">
                <!-- Javascript에서 옵션 동적 갱신 -->
              </select>
            </div>

            <!-- 3. 공지사항 옵션 (Notice 전용) -->
            <div class="form-group" id="notice_option_wrap" style="grid-column: span 2; display: flex; flex-direction: row; align-items: center; gap: 8px;">
              <label class="remember-me">
                <input type="checkbox" name="notice" id="notice_pinned" value="1" <?php echo (isset($write['wr_id']) && in_array($write['wr_id'], $notice_list)) ? 'checked' : ''; ?>>
                <span class="checkbox-custom"></span>
                이 글을 공지로 상단 고정
              </label>
            </div>

            <!-- 4. 치료 사례 전용 지표 입력 영역 (cases 전용 여분 필드 wr_1 ~ wr_4 매핑) -->
            <div class="form-group" id="case_stats_wrap" style="grid-column: span 2; display: none; background: var(--c-bg-cream); padding: 24px; border-radius: 8px; border: 1px solid var(--c-border); margin-bottom: 8px;">
              <h4 style="font-size: 14px; font-weight: 600; color: var(--c-primary-dark); margin-bottom: 16px; display: flex; align-items: center; gap: 6px;">
                <span style="font-size: 16px;">📈</span> 치료 지표 입력 (치료사례 전용 통계 정보)
              </h4>
              <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                <div class="form-group">
                  <label for="wr_1" class="form-label">지표 1 항목명 (wr_1)</label>
                  <input type="text" name="wr_1" id="wr_1" class="form-input" placeholder="예: 치료 기간, 평가 항목" value="<?php echo isset($write['wr_1']) ? get_text($write['wr_1']) : '치료 기간'; ?>">
                </div>
                <div class="form-group">
                  <label for="wr_2" class="form-label">지표 1 수치/값 (wr_2)</label>
                  <input type="text" name="wr_2" id="wr_2" class="form-input" placeholder="예: 24개월, 7종" value="<?php echo isset($write['wr_2']) ? get_text($write['wr_2']) : ''; ?>">
                </div>
                <div class="form-group">
                  <label for="wr_3" class="form-label">지표 2 항목명 (wr_3)</label>
                  <input type="text" name="wr_3" id="wr_3" class="form-input" placeholder="예: 성장 결과, 관리 플랜" value="<?php echo isset($write['wr_3']) ? get_text($write['wr_3']) : '성장 결과'; ?>">
                </div>
                <div class="form-group">
                  <label for="wr_4" class="form-label">지표 2 수치/값 (wr_4)</label>
                  <input type="text" name="wr_4" id="wr_4" class="form-input" placeholder="예: +18.5cm, 수립 완료" value="<?php echo isset($write['wr_4']) ? get_text($write['wr_4']) : ''; ?>">
                </div>
              </div>
            </div>

            <!-- 5. 작성자 및 비밀번호 -->
            <div class="form-group">
              <label for="wr_name" class="form-label">작성자명</label>
              <input type="text" name="wr_name" id="wr_name" class="form-input" value="<?php echo isset($write['wr_name']) ? get_text($write['wr_name']) : (isset($member['mb_nick']) ? $member['mb_nick'] : '관리자'); ?>" required>
            </div>

            <?php if (!$is_member || ($w == 'u' && !$write['mb_id'])) { ?>
            <div class="form-group">
              <label for="wr_password" class="form-label">비밀번호</label>
              <input type="password" name="wr_password" id="wr_password" class="form-input" placeholder="비밀번호 설정" required autocomplete="new-password">
            </div>
            <?php } ?>

            <!-- 6. 글 제목 -->
            <div class="form-group" style="grid-column: span 2;">
              <label for="wr_subject" class="form-label">제목</label>
              <input type="text" name="wr_subject" id="wr_subject" class="form-input" placeholder="글 제목을 입력하세요" value="<?php echo isset($write['wr_subject']) ? get_text($write['wr_subject']) : ''; ?>" required>
            </div>

            <!-- 7. 글 내용 (텍스트 에디터) -->
            <div class="form-group" style="grid-column: span 2;">
              <label for="wr_content" class="form-label">내용</label>
              <textarea name="wr_content" id="wr_content" class="form-input form-textarea" placeholder="치료 과정 또는 공지 내용을 입력하세요." required><?php echo isset($write['wr_content']) ? get_text($write['wr_content']) : ''; ?></textarea>
            </div>

            <!-- 8. 대표 썸네일 / 첨부 파일 1 -->
            <div class="form-group" style="grid-column: span 2;">
              <label class="form-label" id="file_label_1">대표 이미지 (치료 사례는 리스트 썸네일로 표출)</label>
              <div class="file-input-wrap">
                <input type="file" name="bf_file[]" id="file_1" class="file-input-hidden">
                <label for="file_1" class="btn-file-select">파일 선택</label>
                <span id="file_name_1" class="file-name-text">선택된 파일 없음</span>
              </div>
            </div>

            <!-- 9. 일반 첨부 파일 2 -->
            <div class="form-group" style="grid-column: span 2;">
              <label class="form-label">첨부 파일 2</label>
              <div class="file-input-wrap">
                <input type="file" name="bf_file[]" id="file_2" class="file-input-hidden">
                <label for="file_2" class="btn-file-select">파일 선택</label>
                <span id="file_name_2" class="file-name-text">선택된 파일 없음</span>
              </div>
            </div>

          </div>

          <!-- 버튼 컨트롤러 -->
          <div class="write-actions">
            <a href="javascript:history.back();" class="btn-cancel">취소</a>
            <button type="submit" class="btn-submit write-submit">등록하기</button>
          </div>
        </form>

      </div>
    </div>

  </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const boTableSelect = document.getElementById('bo_table');
  const caNameSelect = document.getElementById('ca_name');
  const caseStatsWrap = document.getElementById('case_stats_wrap');
  const noticeOptionWrap = document.getElementById('notice_option_wrap');
  const fileLabel1 = document.getElementById('file_label_1');

  // 게시판별 카테고리 옵션 데이터 정의
  const categories = {
    notice: [
      { value: '안내', text: '공지안내' },
      { value: '소식', text: '병원소식' },
      { value: '이벤트', text: '이벤트' }
    ],
    gallery: [
      { value: '저신장', text: '저신장 클리닉' },
      { value: '성조숙', text: '성조숙 클리닉' },
      { value: '소아비만', text: '소아비만 클리닉' },
      { value: '갑상선', text: '갑상선 질환' },
      { value: '성장평가', text: '정밀 성장평가' }
    ],
    faq: [
      { value: '진료/예약', text: '진료 및 예약' },
      { value: '검사/치료', text: '검사 및 치료' },
      { value: '비용/보험', text: '비용 및 실손보험' }
    ]
  };

  const currentCategory = "<?php echo isset($write['ca_name']) ? get_text($write['ca_name']) : ''; ?>";

  // 게시판 선택 변경 이벤트 핸들러
  function handleBoardChange(boTable) {
    // 1. 카테고리 동적 갱신
    caNameSelect.innerHTML = '';
    const options = categories[boTable] || [];
    options.forEach(opt => {
      const el = document.createElement('option');
      el.value = opt.value;
      el.textContent = opt.text;
      if (currentCategory && opt.value === currentCategory) {
        el.selected = true;
      }
      caNameSelect.appendChild(el);
    });

    // 2. 게시판별 커스텀 필드 제어
    if (boTable === 'gallery') {
      caseStatsWrap.style.display = 'block';
      noticeOptionWrap.style.display = 'none';
      fileLabel1.textContent = '대표 이미지 (치료 사례 리스트 썸네일 이미지 - 필수)';
    } else if (boTable === 'notice') {
      caseStatsWrap.style.display = 'none';
      noticeOptionWrap.style.display = 'flex';
      fileLabel1.textContent = '첨부 파일 1 (선택)';
    } else {
      caseStatsWrap.style.display = 'none';
      noticeOptionWrap.style.display = 'none';
      fileLabel1.textContent = '첨부 파일 1 (선택)';
    }
  }

  // 초기 로드 시 실행 및 주소창 파라미터 감지
  const urlParams = new URLSearchParams(window.location.search);
  const paramBoTable = urlParams.get('bo_table');

  if (paramBoTable && categories[paramBoTable]) {
    boTableSelect.value = paramBoTable;
  }
  
  handleBoardChange(boTableSelect.value);

  // 셀렉트 박스 체인지 리스너 등록
  boTableSelect.addEventListener('change', function() {
    handleBoardChange(this.value);
  });

  // 파일 핸들링 스크립트
  const file1 = document.getElementById('file_1');
  const file2 = document.getElementById('file_2');
  
  if (file1) {
    file1.addEventListener('change', function() {
      document.getElementById('file_name_1').textContent = this.files[0] ? this.files[0].name : '선택된 파일 없음';
    });
  }
  if (file2) {
    file2.addEventListener('change', function() {
      document.getElementById('file_name_2').textContent = this.files[0] ? this.files[0].name : '선택된 파일 없음';
    });
  }
});
</script>

<?php
include_once(G5_PATH.'/tail.php');
?>
