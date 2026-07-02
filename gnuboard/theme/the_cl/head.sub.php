<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$g5_debug['php']['begin_time'] = $begin_time = get_microtime();

$g5['title'] = isset($g5['title']) ? strip_tags($g5['title']) : '';

// $page_title 변수가 정의되어 있는 경우 그누보드 타이틀 변수로 대체 연동
if (!$g5['title'] && isset($page_title) && $page_title) {
    $g5['title'] = strip_tags($page_title);
}

if (defined('_INDEX_')) {
    $g5_head_title = "삼성더클성장의원 - 소아 내분비 전문";
} else {
    $g5_head_title = ($g5['title'] ? $g5['title'] . ' - ' : '') . '삼성더클성장의원';
}

// 메타 디스크립션 설정 (SEO / GSO 최적화)
if (isset($g5['description']) && $g5['description']) {
    $g5_head_description = strip_tags($g5['description']);
} else if (isset($page_description) && $page_description) {
    $g5_head_description = strip_tags($page_description);
} else {
    $g5_head_description = "송파구 잠실역에 위치한 삼성더클성장의원입니다. 대학병원 교수 출신 소아내분비 세부전문의가 소아 성장 클리닉, 성조숙증, 소아 비만, 예상키 및 뼈나이 검사를 1:1 맞춤 진료합니다.";
}

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php
// 반응형 테마이므로 기기 감지 결과와 무관하게 뷰포트 메타를 항상 출력
echo '<meta name="viewport" id="meta_viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,viewport-fit=cover">'.PHP_EOL;
if (G5_IS_MOBILE) {
    echo '<meta name="HandheldFriendly" content="true">'.PHP_EOL;
    echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;
} else {
    echo '<meta http-equiv="imagetoolbar" content="no">'.PHP_EOL;
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">'.PHP_EOL;
}

if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>
<title><?php echo $g5_head_title; ?></title>
<meta name="description" content="<?php echo htmlspecialchars($g5_head_description, ENT_QUOTES, 'UTF-8'); ?>">
<?php
// 기본 MedicalClinic 스키마 생성 (GSO / AI 최적화)
$clinic_schema = [
    "@context" => "https://schema.org",
    "@type" => "MedicalClinic",
    "name" => "삼성더클성장의원",
    "alternateName" => "더클성장의원, THE CL",
    "description" => "송파구 잠실에 위치한 소아 성장 클리닉으로, 소아내분비 세부전문의가 성조숙증, 저신장, 소아비만, 예상키 진단, 뼈나이 분석 등을 정밀 진료합니다.",
    "url" => G5_URL . "/",
    "telephone" => "02-1234-5678",
    "logo" => G5_THEME_URL . "/img/brand_logo.png",
    "image" => G5_THEME_URL . "/img/interior.png",
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "올림픽로 329, 3층 329, 330, 331호",
        "addressLocality" => "서울특별시",
        "addressRegion" => "송파구",
        "postalCode" => "05510",
        "addressCountry" => "KR"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => "37.5165",
        "longitude" => "127.1025"
    ],
    "openingHoursSpecification" => [
        [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => ["Tuesday", "Wednesday", "Friday"],
            "opens" => "10:00",
            "closes" => "18:30"
        ],
        [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => ["Thursday"],
            "opens" => "13:00",
            "closes" => "20:30"
        ],
        [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => ["Saturday"],
            "opens" => "08:30",
            "closes" => "15:00"
        ]
    ],
    "medicalSpecialty" => "Pediatrics"
];
echo '<script type="application/ld+json">' . json_encode($clinic_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . PHP_EOL;

// 페이지 특화 추가 스키마 출력 (예: FAQPage)
if (isset($page_schema_json) && $page_schema_json) {
    echo '<script type="application/ld+json">' . json_encode($page_schema_json, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . PHP_EOL;
}
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo G5_THEME_URL; ?>/img/favicon.ico?v=3" type="image/x-icon">
<link rel="icon" href="<?php echo G5_THEME_URL; ?>/img/favicon.png?v=3" type="image/png">
<link rel="stylesheet" href="<?php echo G5_THEME_URL; ?>/css/style.css?v=48">
<!--[if lte IE 8]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "<?php echo G5_URL ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
<?php if (defined('G5_USE_SHOP') && G5_USE_SHOP) { ?>
var g5_theme_shop_url = "<?php echo G5_THEME_SHOP_URL; ?>";
var g5_shop_url = "<?php echo G5_SHOP_URL; ?>";
<?php } ?>
<?php if(defined('G5_IS_ADMIN')) { ?>
var g5_admin_url = "<?php echo G5_ADMIN_URL; ?>";
<?php } ?>
</script>
<?php
add_javascript('<script src="'.G5_JS_URL.'/jquery-1.12.4.min.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery-migrate-1.4.1.min.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/common.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/wrest.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/placeholders.min.js"></script>', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/font-awesome/css/font-awesome.min.css">', 0);

if(G5_IS_MOBILE) {
    add_javascript('<script src="'.G5_JS_URL.'/modernizr.custom.70111.js"></script>', 1); // overflow scroll 감지
}
if(!defined('G5_IS_ADMIN'))
    echo $config['cf_add_script'];
?>
</head>
<body<?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>
