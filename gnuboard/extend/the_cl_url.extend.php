<?php
if (!defined('_GNUBOARD_')) exit;

/**
 * the_cl Pretty URL 헬퍼
 * - 카페24: 문서 루트 실제 폴더(/about/index.php 등) + 이 헬퍼
 * - .htaccess/nginx conf 없이도 /about, /clinic/growth 형태 사용
 */

function the_cl_route_map()
{
    static $map = null;
    if ($map !== null) {
        return $map;
    }

    $map = array(
        'home'              => '/',
        'index'             => '/',

        'about'             => '/about',
        'about/greeting'    => '/about/greeting',
        'about/doctors'     => '/about/doctors',
        'about/tour'        => '/about/tour',
        'about/location'    => '/about/location',
        'sub1_1'            => '/about',
        'sub1_2'            => '/about/greeting',
        'sub1_3'            => '/about/doctors',
        'sub1_4'            => '/about/tour',
        'sub1_5'            => '/about/location',

        'clinic/growth'             => '/clinic/growth',
        'clinic/short-stature'      => '/clinic/short-stature',
        'clinic/precocious-puberty' => '/clinic/precocious-puberty',
        'clinic/obesity'            => '/clinic/obesity',
        'clinic/underweight'        => '/clinic/underweight',
        'clinic/allergy'            => '/clinic/allergy',
        'clinic/infusion'           => '/clinic/infusion',
        'sub2_1'                    => '/clinic/growth',
        'sub2_2'                    => '/clinic/short-stature',
        'sub2_3'                    => '/clinic/precocious-puberty',
        'sub2_4'                    => '/clinic/obesity',
        'sub2_5'                    => '/clinic/underweight',
        'sub2_6'                    => '/clinic/allergy',
        'sub2_7'                    => '/clinic/infusion',

        'info/hours'        => '/info/hours',
        'info/process'      => '/info/process',
        'info/exams'        => '/info/exams',
        'info/uninsured'    => '/info/uninsured',
        'sub3_1'            => '/info/hours',
        'sub3_2'            => '/info/process',
        'sub3_3'            => '/info/exams',
        'sub3_4'            => '/info/uninsured',

        'community/cases'   => '/community/cases',
        'community/faq'     => '/community/faq',
        'community/notice'  => '/community/notice',
        'community/write'   => '/community/write',
        'sub4_1'            => '/community/cases',
        'sub4_2'            => '/community/faq',
        'sub4_3'            => '/community/notice',
        'write'             => '/community/write',

        // conf 없는 환경: 상세는 /community/notice/view/?id=1
        'community/notice/view' => '/community/notice/view',
        'community/cases/view'  => '/community/cases/view',

        'privacy'           => '/privacy',
        'terms'             => '/terms',
        'uninsured'         => '/uninsured',
        'login'             => '/login',
        'register'          => '/register',
    );

    return $map;
}

function the_cl_file_to_path_map()
{
    static $map = null;
    if ($map !== null) {
        return $map;
    }

    $map = array(
        'index.php'       => '/',
        'sub1_1.php'      => '/about',
        'sub1_2.php'      => '/about/greeting',
        'sub1_3.php'      => '/about/doctors',
        'sub1_4.php'      => '/about/tour',
        'sub1_5.php'      => '/about/location',
        'sub2_1.php'      => '/clinic/growth',
        'sub2_2.php'      => '/clinic/short-stature',
        'sub2_3.php'      => '/clinic/precocious-puberty',
        'sub2_4.php'      => '/clinic/obesity',
        'sub2_5.php'      => '/clinic/underweight',
        'sub2_6.php'      => '/clinic/allergy',
        'sub2_7.php'      => '/clinic/infusion',
        'sub3_1.php'      => '/info/hours',
        'sub3_2.php'      => '/info/process',
        'sub3_3.php'      => '/info/exams',
        'sub3_4.php'      => '/info/uninsured',
        'sub4_1.php'      => '/community/cases',
        'sub4_2.php'      => '/community/faq',
        'sub4_3.php'      => '/community/notice',
        'sub4_1_view.php' => '/community/cases/view',
        'sub4_3_view.php' => '/community/notice/view',
        'write.php'       => '/community/write',
        'privacy.php'     => '/privacy',
        'terms.php'       => '/terms',
        'uninsured.php'   => '/uninsured',
        'login.php'       => '/login',
        'register.php'    => '/register',
    );

    return $map;
}

/**
 * @param string $key
 * @param array  $params
 * @return string
 */
function the_cl_url($key, $params = array())
{
    if (!is_array($params)) {
        $params = array();
    }

    $key = (string) $key;
    $path = null;

    if ($key === 'notice_view' || $key === 'sub4_3_view') {
        $path = '/community/notice/view';
        // id 는 쿼리로 유지 (폴더 방식, conf 불필요)
    } elseif ($key === 'cases_view' || $key === 'sub4_1_view') {
        $path = '/community/cases/view';
    } else {
        $map = the_cl_route_map();
        if (isset($map[$key])) {
            $path = $map[$key];
        } else {
            $path = '/' . ltrim($key, '/');
        }
    }

    $base = defined('G5_URL') ? rtrim(G5_URL, '/') : '';
    if ($path === '/') {
        $url = $base . '/';
    } else {
        // 디렉터리 엔트리 안정성: 끝 슬래시 (…/about/ → index.php)
        $url = $base . rtrim($path, '/') . '/';
    }

    if (!empty($params)) {
        $qs = http_build_query($params);
        if ($qs !== '') {
            $url .= '?' . $qs;
        }
    }

    return $url;
}

function the_cl_current_pretty_path()
{
    $req_path = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '';
    if ($req_path) {
        $req_path = rawurldecode($req_path);
        // pretty 폴더 진입: /about/, /clinic/growth/ 등
        if (
            strpos($req_path, '/theme/the_cl/sub/') === false
            && strpos($req_path, '/bbs/') === false
            && strpos($req_path, '/adm/') === false
        ) {
            $norm = rtrim($req_path, '/');
            if ($norm === '' || $norm === '/index.php') {
                return '/';
            }
            // /about/index.php → /about
            if (substr($norm, -10) === '/index.php') {
                $norm = substr($norm, 0, -10);
            }
            if ($norm !== '' && strpos($norm, '.php') === false) {
                return $norm === '' ? '/' : $norm;
            }
        }
    }

    if (defined('_INDEX_') && _INDEX_) {
        return '/';
    }

    $script = '';
    if (!empty($_SERVER['SCRIPT_FILENAME'])) {
        $script = basename($_SERVER['SCRIPT_FILENAME']);
    } elseif (!empty($_SERVER['SCRIPT_NAME'])) {
        $script = basename($_SERVER['SCRIPT_NAME']);
    }

    $file_map = the_cl_file_to_path_map();
    if ($script && isset($file_map[$script])) {
        $path = $file_map[$script];
        if (($script === 'sub4_3_view.php' || $script === 'sub4_1_view.php') && !empty($_GET['id'])) {
            // path 는 view, id 는 쿼리 — canonical 은 path 만
            return $path;
        }
        return $path;
    }

    $norm = $req_path ? rtrim($req_path, '/') : '';
    return $norm === '' ? '/' : $norm;
}

function the_cl_canonical_url()
{
    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (isset($_SERVER['SERVER_PORT']) && (string) $_SERVER['SERVER_PORT'] === '443')
        || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
    $proto = $https ? 'https' : 'http';
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
    $path = the_cl_current_pretty_path();
    if ($path === '/') {
        return $proto . '://' . $host . '/';
    }
    $url = $proto . '://' . $host . rtrim($path, '/') . '/';
    // 상세 글 id
    if (!empty($_GET['id']) && (strpos($path, '/view') !== false)) {
        $url .= '?id=' . (int) $_GET['id'];
    }
    return $url;
}

/**
 * 구 theme/.../*.php 직접 접근 시 pretty 로 301
 * (pretty 엔트리로 들어온 경우는 제외)
 */
function the_cl_maybe_legacy_redirect()
{
    if (defined('THE_CL_PRETTY_ENTRY') && THE_CL_PRETTY_ENTRY) {
        return;
    }
    if (defined('G5_IS_ADMIN') && G5_IS_ADMIN) {
        return;
    }
    $method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
    if ($method !== 'GET' && $method !== 'HEAD') {
        return;
    }

    $script = isset($_SERVER['SCRIPT_NAME']) ? str_replace('\\', '/', $_SERVER['SCRIPT_NAME']) : '';
    if ($script === '' || strpos($script, '/theme/the_cl/sub/') === false) {
        // 루트 index.php → /
        if (preg_match('#/index\.php$#', $script)
            && strpos($script, '/theme/') === false
            && strpos($script, '/bbs/') === false
            && strpos($script, '/adm/') === false
            && strpos($script, '/plugin/') === false
        ) {
            $dir = str_replace('\\', '/', dirname($script));
            if ($dir === '/' || $dir === '\\' || $dir === '.') {
                $qs = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';
                $loc = (defined('G5_URL') ? rtrim(G5_URL, '/') : '') . '/';
                if ($qs !== '') {
                    $loc .= '?' . $qs;
                }
                header('Location: ' . $loc, true, 301);
                exit;
            }
        }
        return;
    }

    $file = basename($script);
    $map = the_cl_file_to_path_map();
    if (!isset($map[$file])) {
        return;
    }

    $params = array();
    if (($file === 'sub4_3_view.php' || $file === 'sub4_1_view.php') && isset($_GET['id'])) {
        $params['id'] = (int) $_GET['id'];
    }
    // action=delete 등 유지
    foreach ($_GET as $k => $v) {
        if ($k === 'id') {
            continue;
        }
        if (is_string($v) || is_numeric($v)) {
            $params[$k] = $v;
        }
    }

    if ($file === 'sub4_3_view.php') {
        $url = the_cl_url('notice_view', $params);
    } elseif ($file === 'sub4_1_view.php') {
        $url = the_cl_url('cases_view', $params);
    } else {
        $key = preg_replace('/\.php$/', '', $file);
        $url = the_cl_url($key, $params);
    }

    header('Location: ' . $url, true, 301);
    exit;
}

// common 로드 직후 1회
the_cl_maybe_legacy_redirect();
