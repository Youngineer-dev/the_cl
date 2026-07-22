<?php
$page_title = "팝업 관리자 모드";
$page_description = "삼성더클성장의원 메인 팝업 관리 페이지";
include_once('./_common.php');

// 관리자 권한 확인 (그누보드 슈퍼관리자 또는 관리자 등급)
if (!$is_admin) {
    echo "<script>alert('관리자 로그인 후 이용 가능합니다.'); location.href='".G5_BBS_URL."/login.php?url=".urlencode(G5_THEME_URL."/sub/popup_admin.php")."';</script>";
    exit;
}

// 데이터 디렉터리 및 팝업 저장 설정 경로
$data_dir = G5_THEME_PATH . '/data';
$upload_dir = G5_THEME_PATH . '/img/popup';
$config_file = $data_dir . '/popup_config.json';

if (!is_dir($data_dir)) {
    @mkdir($data_dir, 0755, true);
}
if (!is_dir($upload_dir)) {
    @mkdir($upload_dir, 0755, true);
}

// 팝업 설정 불러오기
function load_popup_config($file) {
    if (file_exists($file)) {
        $json = @file_get_contents($file);
        $data = json_decode($json, true);
        if (is_array($data)) return $data;
    }
    return array(
        'popup_key' => 'thecl-popup-v' . time(),
        'popup_width' => '440px',
        'popup_ratio' => '1 / 1',
        'slides' => array()
    );
}

// 팝업 설정 저장하기
function save_popup_config($file, $data) {
    return file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

$popup_config = load_popup_config($config_file);
$msg = '';
$msg_type = 'success';

// POST 요청 처리 (액션)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = isset($_POST['action']) ? trim($_POST['action']) : '';

    if ($action === 'add_slide') {
        $title = isset($_POST['title']) ? trim($_POST['title']) : '';
        $link = isset($_POST['link']) ? trim($_POST['link']) : '';
        $use_flag = isset($_POST['use_flag']) && $_POST['use_flag'] === '1';
        $order = isset($_POST['order']) ? (int)$_POST['order'] : count($popup_config['slides']) + 1;
        $image_url = isset($_POST['image_url']) ? trim($_POST['image_url']) : '';

        // 이미지 파일 업로드 처리
        if (isset($_FILES['image_file']) && $_FILES['image_file']['error'] === UPLOAD_ERR_OK) {
            $tmp_name = $_FILES['image_file']['tmp_name'];
            $filename = basename($_FILES['image_file']['name']);
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            $allowed = array('jpg', 'jpeg', 'png', 'gif', 'webp');
            
            if (in_array($ext, $allowed)) {
                $new_name = 'popup_' . time() . '_' . rand(100, 999) . '.' . $ext;
                $target = $upload_dir . '/' . $new_name;
                if (move_uploaded_file($tmp_name, $target)) {
                    $image_url = G5_THEME_URL . '/img/popup/' . $new_name;
                }
            } else {
                $msg = '허용되지 않는 이미지 확장자입니다. (jpg, jpeg, png, gif, webp 지원)';
                $msg_type = 'danger';
            }
        }

        if (empty($msg)) {
            if (empty($image_url)) {
                $msg = '팝업 이미지를 업로드하거나 이미지 URL을 입력해주세요.';
                $msg_type = 'danger';
            } else {
                $new_slide = array(
                    'id' => 'slide_' . time() . '_' . rand(100, 999),
                    'title' => $title,
                    'image' => $image_url,
                    'link' => $link,
                    'use_flag' => $use_flag,
                    'order' => $order
                );
                $popup_config['slides'][] = $new_slide;
                $popup_config['popup_key'] = 'thecl-popup-v' . time();
                save_popup_config($config_file, $popup_config);
                $msg = '새 팝업 슬라이드가 성공적으로 등록되었습니다.';
                $msg_type = 'success';
            }
        }

    } elseif ($action === 'edit_slide') {
        $slide_id = isset($_POST['slide_id']) ? trim($_POST['slide_id']) : '';
        $title = isset($_POST['title']) ? trim($_POST['title']) : '';
        $link = isset($_POST['link']) ? trim($_POST['link']) : '';
        $use_flag = isset($_POST['use_flag']) && $_POST['use_flag'] === '1';
        $order = isset($_POST['order']) ? (int)$_POST['order'] : 1;
        $image_url = isset($_POST['image_url']) ? trim($_POST['image_url']) : '';

        // 이미지 파일 신규 업로드 시 교체
        if (isset($_FILES['image_file']) && $_FILES['image_file']['error'] === UPLOAD_ERR_OK) {
            $tmp_name = $_FILES['image_file']['tmp_name'];
            $filename = basename($_FILES['image_file']['name']);
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            $allowed = array('jpg', 'jpeg', 'png', 'gif', 'webp');
            
            if (in_array($ext, $allowed)) {
                $new_name = 'popup_' . time() . '_' . rand(100, 999) . '.' . $ext;
                $target = $upload_dir . '/' . $new_name;
                if (move_uploaded_file($tmp_name, $target)) {
                    $image_url = G5_THEME_URL . '/img/popup/' . $new_name;
                }
            }
        }

        foreach ($popup_config['slides'] as &$slide) {
            if ($slide['id'] === $slide_id) {
                $slide['title'] = $title;
                if (!empty($image_url)) $slide['image'] = $image_url;
                $slide['link'] = $link;
                $slide['use_flag'] = $use_flag;
                $slide['order'] = $order;
                break;
            }
        }
        unset($slide);
        $popup_config['popup_key'] = 'thecl-popup-v' . time();
        save_popup_config($config_file, $popup_config);
        $msg = '팝업 슬라이드 정보가 수정되었습니다.';
        $msg_type = 'success';

    } elseif ($action === 'delete_slide') {
        $slide_id = isset($_POST['slide_id']) ? trim($_POST['slide_id']) : '';
        $new_slides = array();
        foreach ($popup_config['slides'] as $slide) {
            if ($slide['id'] === $slide_id) {
                if (strpos($slide['image'], '/img/popup/') !== false) {
                    $file_name = basename($slide['image']);
                    $local_file = $upload_dir . '/' . $file_name;
                    if (file_exists($local_file)) {
                        @unlink($local_file);
                    }
                }
                continue;
            }
            $new_slides[] = $slide;
        }
        $popup_config['slides'] = $new_slides;
        $popup_config['popup_key'] = 'thecl-popup-v' . time();
        save_popup_config($config_file, $popup_config);
        $msg = '팝업 슬라이드가 삭제되었습니다.';
        $msg_type = 'success';

    } elseif ($action === 'toggle_flag') {
        $slide_id = isset($_POST['slide_id']) ? trim($_POST['slide_id']) : '';
        foreach ($popup_config['slides'] as &$slide) {
            if ($slide['id'] === $slide_id) {
                $slide['use_flag'] = !$slide['use_flag'];
                break;
            }
        }
        unset($slide);
        $popup_config['popup_key'] = 'thecl-popup-v' . time();
        save_popup_config($config_file, $popup_config);
        $msg = '팝업 노출 상태가 변경되었습니다.';
        $msg_type = 'success';

    } elseif ($action === 'save_global_config') {
        $popup_width = isset($_POST['popup_width']) ? trim($_POST['popup_width']) : '440px';
        $popup_ratio = isset($_POST['popup_ratio']) ? trim($_POST['popup_ratio']) : '1 / 1';
        $reset_cache = isset($_POST['reset_cache']) && $_POST['reset_cache'] === '1';

        $popup_config['popup_width'] = $popup_width;
        $popup_config['popup_ratio'] = $popup_ratio;
        if ($reset_cache) {
            $popup_config['popup_key'] = 'thecl-popup-v' . time();
        }

        save_popup_config($config_file, $popup_config);
        $msg = '팝업 전역 설정이 성공적으로 저장되었습니다.';
        $msg_type = 'success';
    }

    $popup_config = load_popup_config($config_file);
}

// 정렬 순서대로 배치
usort($popup_config['slides'], function($a, $b) {
    $order_a = isset($a['order']) ? (int)$a['order'] : 0;
    $order_b = isset($b['order']) ? (int)$b['order'] : 0;
    return $order_a - $order_b;
});

include_once(G5_THEME_PATH.'/head.sub.php');
?>

<style>
/* 관리자 전용 레이아웃 및 팝업 관리 스타일 */
body {
    background-color: #f8fafc !important;
    margin: 0;
    padding: 0;
}
.admin-top-nav {
    background: #0f172a;
    color: #fff;
    padding: 12px 24px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.12);
    position: sticky;
    top: 0;
    z-index: 1000;
}
.admin-nav-inner {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.admin-logo-area {
    display: flex;
    align-items: center;
    gap: 14px;
}
.admin-brand img {
    height: 32px;
    width: auto;
    display: block;
}
.admin-title-badge {
    background: #0056b3;
    color: #ffffff;
    font-size: 12px;
    font-weight: 700;
    padding: 4px 12px;
    border-radius: 20px;
    letter-spacing: 0.5px;
}
.admin-user-area {
    display: flex;
    align-items: center;
    gap: 14px;
    font-size: 13px;
}
.admin-user-info {
    color: #94a3b8;
    font-weight: 500;
}
.admin-nav-link {
    color: #f1f5f9;
    text-decoration: none;
    font-weight: 600;
    padding: 7px 14px;
    border-radius: 6px;
    background: rgba(255,255,255,0.1);
    transition: all 0.2s ease;
}
.admin-nav-link:hover {
    background: rgba(255,255,255,0.2);
    color: #fff;
}
.admin-nav-link.logout {
    background: #dc3545;
    color: #fff;
}
.admin-nav-link.logout:hover {
    background: #bd2130;
}

.admin-container {
    max-width: 1200px;
    margin: 30px auto 80px;
    padding: 0 20px;
    font-family: var(--font-sans, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif);
    color: #333;
}
.admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 20px;
    border-bottom: 2px solid #0056b3;
    margin-bottom: 30px;
}
.admin-header h1 {
    font-size: 26px;
    font-weight: 700;
    color: #1a202c;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 12px;
}
.admin-badge {
    background: #0056b3;
    color: #fff;
    font-size: 13px;
    padding: 4px 10px;
    border-radius: 20px;
    font-weight: 600;
}
.admin-alert {
    padding: 14px 20px;
    border-radius: 8px;
    margin-bottom: 24px;
    font-size: 15px;
    font-weight: 500;
}
.admin-alert-success {
    background: #e6f4ea;
    color: #137333;
    border: 1px solid #ceead6;
}
.admin-alert-danger {
    background: #fce8e6;
    color: #c5221f;
    border: 1px solid #fad2cf;
}
.admin-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}
.stat-card {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    border: 1px solid #e2e8f0;
}
.stat-card .num {
    font-size: 32px;
    font-weight: 800;
    color: #0056b3;
    margin-top: 6px;
}
.stat-card .label {
    font-size: 14px;
    color: #64748b;
    font-weight: 500;
}
.admin-grid {
    display: grid;
    grid-template-columns: 1fr 340px;
    gap: 30px;
}
@media (max-width: 992px) {
    .admin-grid { grid-template-columns: 1fr; }
}
.panel {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
    border: 1px solid #e2e8f0;
    overflow: hidden;
    margin-bottom: 30px;
}
.panel-header {
    background: #f8fafc;
    padding: 16px 20px;
    border-bottom: 1px solid #e2e8f0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.panel-title {
    font-size: 17px;
    font-weight: 700;
    color: #1e293b;
    margin: 0;
}
.panel-body {
    padding: 20px;
}
.btn-primary {
    background: #0056b3;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.2s;
    font-size: 14px;
}
.btn-primary:hover { background: #004085; }
.btn-secondary {
    background: #6c757d;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 6px;
    font-weight: 600;
    cursor: pointer;
    font-size: 13px;
}
.btn-secondary:hover { background: #5a6268; }
.btn-danger {
    background: #dc3545;
    color: #fff;
    border: none;
    padding: 8px 14px;
    border-radius: 6px;
    font-weight: 600;
    cursor: pointer;
    font-size: 13px;
}
.btn-danger:hover { background: #bd2130; }
.btn-sm {
    padding: 5px 10px;
    font-size: 12px;
}
.form-group {
    margin-bottom: 18px;
}
.form-group label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 6px;
    color: #334155;
}
.form-control {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
    font-size: 14px;
    box-sizing: border-box;
}
.form-control:focus {
    border-color: #0056b3;
    outline: none;
    box-shadow: 0 0 0 3px rgba(0, 86, 179, 0.15);
}
.form-help {
    font-size: 12px;
    color: #64748b;
    margin-top: 4px;
}
.popup-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
}
.popup-table th, .popup-table td {
    padding: 14px;
    text-align: left;
    border-bottom: 1px solid #f1f5f9;
}
.popup-table th {
    background: #f8fafc;
    font-weight: 700;
    color: #475569;
}
.thumb-img {
    width: 64px;
    height: 64px;
    object-fit: cover;
    border-radius: 8px;
    border: 1px solid #e2e8f0;
    cursor: pointer;
}
.badge-active {
    background: #dcfce7;
    color: #15803d;
    padding: 4px 10px;
    border-radius: 12px;
    font-size: 12px;
    font-weight: 700;
}
.badge-inactive {
    background: #f1f5f9;
    color: #64748b;
    padding: 4px 10px;
    border-radius: 12px;
    font-size: 12px;
    font-weight: 700;
}
/* Modal */
.modal-overlay {
    position: fixed;
    top:0; left:0; width:100%; height:100%;
    background: rgba(0,0,0,0.5);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 99999;
}
.modal-overlay.active { display: flex; }
.modal-content {
    background: #fff;
    width: 90%;
    max-width: 540px;
    border-radius: 12px;
    padding: 24px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    position: relative;
    max-height: 90vh;
    overflow-y: auto;
}
.modal-title {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #0f172a;
}
.modal-close {
    position: absolute;
    top: 20px;
    right: 20px;
    background: none;
    border: none;
    font-size: 20px;
    cursor: pointer;
    color: #64748b;
}
</style>

<!-- 전용 관리자 상단 내비게이션 바 -->
<header class="admin-top-nav">
    <div class="admin-nav-inner">
        <div class="admin-logo-area">
            <a href="<?php echo G5_URL; ?>/index.php" class="admin-brand">
                <img src="<?php echo G5_THEME_URL; ?>/img/brand_logo_white.png?v=5" alt="삼성더클성장의원">
            </a>
            <span class="admin-title-badge">팝업 관리자 센터</span>
        </div>
        <div class="admin-user-area">
            <span class="admin-user-info">👤 관리자(<?php echo htmlspecialchars($member['mb_id']); ?>)님</span>
            <a href="<?php echo G5_URL; ?>/index.php" class="admin-nav-link" target="_blank">사이트 메인 ↗</a>
            <a href="<?php echo G5_BBS_URL; ?>/logout.php" class="admin-nav-link logout">로그아웃</a>
        </div>
    </div>
</header>

<div class="admin-container">
    <div class="admin-header">
        <h1>
            삼성더클 팝업 관리자 시스템
            <span class="admin-badge">ADMIN</span>
        </h1>
        <div>
            <a href="<?php echo G5_URL; ?>/index.php" target="_blank" class="btn-secondary" style="text-decoration:none;">메인페이지 바로가기 ↗</a>
        </div>
    </div>

    <?php if (!empty($msg)) { ?>
        <div class="admin-alert admin-alert-<?php echo $msg_type; ?>">
            <?php echo htmlspecialchars($msg); ?>
        </div>
    <?php } ?>

    <!-- 통계 및 요약 정보 -->
    <div class="admin-stats">
        <div class="stat-card">
            <div class="label">총 등록 팝업</div>
            <div class="num"><?php echo count($popup_config['slides']); ?>개</div>
        </div>
        <div class="stat-card">
            <div class="label">현재 활성 팝업</div>
            <div class="num" style="color: #16a34a;">
                <?php
                $active_cnt = 0;
                foreach ($popup_config['slides'] as $s) {
                    if (!empty($s['use_flag'])) $active_cnt++;
                }
                echo $active_cnt;
                ?>개
            </div>
        </div>
        <div class="stat-card">
            <div class="label">팝업 버전 (캐시 키)</div>
            <div class="num" style="font-size:18px; line-height:42px; color:#475569; word-break:break-all;">
                <?php echo htmlspecialchars($popup_config['popup_key']); ?>
            </div>
        </div>
    </div>

    <div class="admin-grid">
        <!-- 메인 목록 파트 -->
        <div class="main-column">
            <div class="panel">
                <div class="panel-header">
                    <h2 class="panel-title">등록된 팝업 목록</h2>
                    <button type="button" class="btn-primary btn-sm" onclick="openAddModal()">+ 신규 팝업 등록</button>
                </div>
                <div class="panel-body" style="padding:0;">
                    <?php if (empty($popup_config['slides'])) { ?>
                        <div style="padding: 40px; text-align: center; color: #94a3b8;">
                            등록된 팝업 슬라이드가 없습니다.<br>상단의 [신규 팝업 등록] 버튼을 눌러 새 팝업을 등록해주세요.
                        </div>
                    <?php } else { ?>
                        <table class="popup-table">
                            <thead>
                                <tr>
                                    <th style="width: 50px;">순서</th>
                                    <th style="width: 80px;">이미지</th>
                                    <th>제목 (Alt 텍스트)</th>
                                    <th>연결 링크</th>
                                    <th style="width: 90px;">상태</th>
                                    <th style="width: 140px;">관리</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($popup_config['slides'] as $slide) { ?>
                                    <tr>
                                        <td><strong><?php echo (int)$slide['order']; ?></strong></td>
                                        <td>
                                            <img src="<?php echo htmlspecialchars($slide['image']); ?>" alt="팝업 썸네일" class="thumb-img" onclick="previewImage('<?php echo htmlspecialchars($slide['image']); ?>')">
                                        </td>
                                        <td>
                                            <strong><?php echo htmlspecialchars($slide['title']); ?></strong>
                                        </td>
                                        <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                            <?php if (!empty($slide['link'])) { ?>
                                                <a href="<?php echo htmlspecialchars($slide['link']); ?>" target="_blank" style="color:#0056b3; font-size:13px;">
                                                    <?php echo htmlspecialchars($slide['link']); ?>
                                                </a>
                                            <?php } else { ?>
                                                <span style="color:#94a3b8;">-</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <form method="post" style="display:inline;">
                                                <input type="hidden" name="action" value="toggle_flag">
                                                <input type="hidden" name="slide_id" value="<?php echo htmlspecialchars($slide['id']); ?>">
                                                <button type="submit" class="<?php echo !empty($slide['use_flag']) ? 'badge-active' : 'badge-inactive'; ?>" style="border:none; cursor:pointer;">
                                                    <?php echo !empty($slide['use_flag']) ? '노출중' : '숨김'; ?>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <div style="display:flex; gap:6px;">
                                                <button type="button" class="btn-secondary btn-sm" onclick='openEditModal(<?php echo json_encode($slide); ?>)'>수정</button>
                                                <form method="post" style="display:inline;" onsubmit="return confirm('정말 이 팝업을 삭제하시겠습니까?');">
                                                    <input type="hidden" name="action" value="delete_slide">
                                                    <input type="hidden" name="slide_id" value="<?php echo htmlspecialchars($slide['id']); ?>">
                                                    <button type="submit" class="btn-danger btn-sm">삭제</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!-- 사이드바 설정 파트 -->
        <div class="side-column">
            <div class="panel">
                <div class="panel-header">
                    <h2 class="panel-title">팝업 기본 설정</h2>
                </div>
                <div class="panel-body">
                    <form method="post">
                        <input type="hidden" name="action" value="save_global_config">
                        <div class="form-group">
                            <label>팝업 너비 (Width)</label>
                            <input type="text" name="popup_width" class="form-control" value="<?php echo htmlspecialchars($popup_config['popup_width']); ?>" placeholder="예: 440px">
                            <div class="form-help">기본 추천값: 440px</div>
                        </div>
                        <div class="form-group">
                            <label>팝업 비율 (Aspect Ratio)</label>
                            <input type="text" name="popup_ratio" class="form-control" value="<?php echo htmlspecialchars($popup_config['popup_ratio']); ?>" placeholder="예: 1 / 1">
                            <div class="form-help">정사각형 1/1 또는 4/3 등</div>
                        </div>
                        <div class="form-group" style="margin-top:20px; padding: 12px; background:#f8fafc; border-radius:8px;">
                            <label style="display:flex; align-items:center; gap:8px; cursor:pointer; margin:0;">
                                <input type="checkbox" name="reset_cache" value="1" checked>
                                <span style="font-size:13px;">'오늘 하루 그만보기' 다시 노출하기 (캐시 리셋)</span>
                            </label>
                            <div class="form-help" style="margin-top:6px;">체크 시 팝업 버전을 자동 상향하여 이미 닫은 방문자에게도 팝업이 다시 노출됩니다.</div>
                        </div>
                        <button type="submit" class="btn-primary" style="width:100%; margin-top:10px;">전역 설정 저장</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 팝업 등록 모달 -->
<div class="modal-overlay" id="addModal">
    <div class="modal-content">
        <button class="modal-close" onclick="closeAddModal()">&times;</button>
        <h3 class="modal-title">신규 팝업 등록</h3>
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="add_slide">
            
            <div class="form-group">
                <label>팝업 제목 / 접근성 텍스트 (Alt)</label>
                <input type="text" name="title" class="form-control" placeholder="예: 여름방학 키성장 특별 이벤트" required>
            </div>

            <div class="form-group">
                <label>팝업 이미지 파일 업로드</label>
                <input type="file" name="image_file" class="form-control" accept="image/*">
                <div class="form-help">권장 규격: 800x800 px 이상의 정사각 이미지 (JPG, PNG, WEBP)</div>
            </div>

            <div class="form-group">
                <label>또는 이미지 URL 직접 입력</label>
                <input type="text" name="image_url" class="form-control" placeholder="http://... 또는 테마 이미지 경로">
            </div>

            <div class="form-group">
                <label>클릭시 이동할 링크 URL (선택사항)</label>
                <input type="text" name="link" class="form-control" placeholder="예: <?php echo G5_URL; ?>/sub/sub2_1.php">
            </div>

            <div class="form-group" style="display:flex; gap: 20px;">
                <div style="flex:1;">
                    <label>노출 순서</label>
                    <input type="number" name="order" class="form-control" value="<?php echo count($popup_config['slides']) + 1; ?>">
                </div>
                <div style="flex:1;">
                    <label>노출 여부</label>
                    <select name="use_flag" class="form-control">
                        <option value="1" selected>노출 (Active)</option>
                        <option value="0">숨김 (Inactive)</option>
                    </select>
                </div>
            </div>

            <div style="margin-top: 24px; display:flex; justify-content:flex-end; gap:10px;">
                <button type="button" class="btn-secondary" onclick="closeAddModal()">취소</button>
                <button type="submit" class="btn-primary">등록 완료</button>
            </div>
        </form>
    </div>
</div>

<!-- 팝업 수정 모달 -->
<div class="modal-overlay" id="editModal">
    <div class="modal-content">
        <button class="modal-close" onclick="closeEditModal()">&times;</button>
        <h3 class="modal-title">팝업 정보 수정</h3>
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="edit_slide">
            <input type="hidden" name="slide_id" id="edit_slide_id">
            
            <div class="form-group">
                <label>팝업 제목 / 접근성 텍스트 (Alt)</label>
                <input type="text" name="title" id="edit_title" class="form-control" required>
            </div>

            <div class="form-group">
                <label>이미지 교체 (새 파일 업로드)</label>
                <input type="file" name="image_file" class="form-control" accept="image/*">
                <div class="form-help">이미지를 변경하지 않으려면 첨부하지 마세요.</div>
            </div>

            <div class="form-group">
                <label>이미지 URL 경로</label>
                <input type="text" name="image_url" id="edit_image_url" class="form-control">
            </div>

            <div class="form-group">
                <label>클릭시 이동할 링크 URL</label>
                <input type="text" name="link" id="edit_link" class="form-control">
            </div>

            <div class="form-group" style="display:flex; gap: 20px;">
                <div style="flex:1;">
                    <label>노출 순서</label>
                    <input type="number" name="order" id="edit_order" class="form-control">
                </div>
                <div style="flex:1;">
                    <label>노출 여부</label>
                    <select name="use_flag" id="edit_use_flag" class="form-control">
                        <option value="1">노출 (Active)</option>
                        <option value="0">숨김 (Inactive)</option>
                    </select>
                </div>
            </div>

            <div style="margin-top: 24px; display:flex; justify-content:flex-end; gap:10px;">
                <button type="button" class="btn-secondary" onclick="closeEditModal()">취소</button>
                <button type="submit" class="btn-primary">수정 완료</button>
            </div>
        </form>
    </div>
</div>

<!-- 이미지 미리보기 모달 -->
<div class="modal-overlay" id="previewModal" onclick="closePreviewModal()">
    <div class="modal-content" style="max-width: 480px; text-align: center;" onclick="event.stopPropagation()">
        <button class="modal-close" onclick="closePreviewModal()">&times;</button>
        <h3 class="modal-title" style="margin-bottom:15px;">이미지 원본 미리보기</h3>
        <img id="previewImgSrc" src="" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow:0 4px 15px rgba(0,0,0,0.15);">
    </div>
</div>

<script>
function openAddModal() {
    document.getElementById('addModal').classList.add('active');
}
function closeAddModal() {
    document.getElementById('addModal').classList.remove('active');
}
function openEditModal(slide) {
    document.getElementById('edit_slide_id').value = slide.id;
    document.getElementById('edit_title').value = slide.title || '';
    document.getElementById('edit_image_url').value = slide.image || '';
    document.getElementById('edit_link').value = slide.link || '';
    document.getElementById('edit_order').value = slide.order || 1;
    document.getElementById('edit_use_flag').value = slide.use_flag ? "1" : "0";
    document.getElementById('editModal').classList.add('active');
}
function closeEditModal() {
    document.getElementById('editModal').classList.remove('active');
}
function previewImage(src) {
    document.getElementById('previewImgSrc').src = src;
    document.getElementById('previewModal').classList.add('active');
}
function closePreviewModal() {
    document.getElementById('previewModal').classList.remove('active');
}
</script>

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');
?>
