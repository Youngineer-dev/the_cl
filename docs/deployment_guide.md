# 삼성더클성장의원 그누보드5 테마 배포 및 실서버 이전 가이드 (Deployment Guide)

본 문서는 로컬 개발 환경에서 이식 및 검증이 완료된 `the_cl` 테마를 실제 웹호스팅(실서버) 환경의 그누보드5 기본 버전에 반영하기 위한 수동 배포 가이드라인입니다.

---

## 1. 서버 파일 업로드 지침

개발 완료된 테마 폴더 및 확장 기능 스크립트를 서버의 알맞은 경로에 배치합니다. 로컬 프로젝트의 `gnuboard/` 폴더 구조를 실서버의 그누보드 설치 경로에 동일하게 미러링하여 업로드할 수 있습니다.

### ① 테마 디렉터리 업로드 (`theme/the_cl/`)
로컬의 `gnuboard/theme/the_cl/` 폴더 내의 모든 파일과 하위 폴더들을 실서버 그누보드 설치 경로 하위의 **`theme/the_cl/`** 폴더에 업로드합니다.

* **업로드할 폴더**:
  * `css/` : 테마 전체 스타일시트 파일 (`style.css` - 4,000줄 이상의 테마 디자인 스타일 포함)
  * `js/` : 프론트엔드 인터랙션 스크립트 (`main.js` - Lenis 스크롤, AOS 효과 등 포함)
  * `img/` : 로고 및 메인/서브페이지 이미지 리소스 5종 (`brand_logo.png`, `doctor.png`, `hero.png`, `interior.png`, `programs.png`)
  * `skin/` : 로그인/회원가입 커스텀 스킨 (`skin/member/basic/`)
    * `login.skin.php` : 커스텀 로그인 화면
    * `register.skin.php` : 커스텀 약관 동의 화면
    * `register_form.skin.php` : 커스텀 원페이지 회원 정보 입력 화면
    * `register_result.skin.php` : 커스텀 회원가입 완료 화면
  * `sub/` : DB 데이터 및 커스텀 페이지가 연동된 동적 서브페이지 26개 파일
    * `_common.php`, `_board_data.php` (설정 및 더미 데이터 파일)
    * `login.php`, `register.php`, `write.php` (로그인, 회원가입, 글쓰기 커스텀 라우팅 페이지)
    * `sub1_1.php` ~ `sub1_5.php` (소개, 인사말, 의료진, 둘러보기, 오시는길)
    * `sub2_1.php` ~ `sub2_7.php` (성장평가, 저신장, 성조숙, 소아비만, 갑상선, 당뇨, 영양수액)
    * `sub3_1.php` ~ `sub3_4.php` (진료시간, 진료절차, 검사항목, 비급여)
    * `sub4_1.php`, `sub4_1_view.php` (치료사례 목록/상세)
    * `sub4_2.php` (FAQ static accordion page)
    * `sub4_3.php`, `sub4_3_view.php` (공지사항 목록/상세)

* **업로드할 파일 (theme/the_cl/ 루트)**:
  * `theme.config.php` : 테마 메타 데이터 및 기본 회원/게시판 스킨 매핑 설정 파일
  * `index.php` : 테마 메인 랜딩 페이지
  * `head.php` : 글로벌 테마 헤더 통합 로더 (경로 변수 `$G5_URL` 정의 포함)
  * `head.sub.php` : 메타 정보 및 메인 CSS/JS 로드부
  * `tail.php` : 글로벌 테마 푸터 통합 로더
  * `tail.sub.php` : 구글 애널리틱스 및 최종 닫는 태그 포함부
  * `header.html.php` : 테마 사이트 헤더 및 네비게이션 오버레이 메뉴 마크업
  * `footer.html.php` : 테마 마퀴 슬로건 트랙, 푸터 정보, 퀵 버튼 마크업

> **⚠️ 제외할 항목**:
> 개발 편의용 파이썬 스크립트 파일들(`.py`), Git 관리용 디렉터리(`.git`), PDF 및 임시 스크린샷 파일 등은 실서버 배포 대상에서 제외합니다.

### ② 확장 리디렉션 스크립트 업로드 (`extend/`)
그누보드의 글 작성/수정 완료 시 기존 기본 상세 뷰 대신 테마의 전용 서브페이지 상세 뷰(`sub4_3_view.php`, `sub4_1_view.php`)로 자동 리디렉션 처리해 주는 확장 스크립트 파일을 업로드합니다.

* **서버 업로드 경로**: `[그누보드 설치 경로]/extend/the_cl_redirect.extend.php` (로컬 `gnuboard/extend/the_cl_redirect.extend.php` 파일)
* **스크립트 소스 코드**:
```php
<?php
if (!defined('_GNUBOARD_')) exit;

// 글 작성/수정 시 테마의 커스텀 subpage 상세화면으로 이동하도록 훅 필터링
add_replace('write_update_move_url', 'the_cl_write_redirect', 10, 5);
function the_cl_write_redirect($redirect_url, $board, $wr_id, $w, $qstr) {
    if ($board['bo_table'] == 'notice') {
        return G5_THEME_URL . '/sub/sub4_3_view.php?id=' . $wr_id;
    } else if ($board['bo_table'] == 'gallery') {
        return G5_THEME_URL . '/sub/sub4_1_view.php?id=' . $wr_id;
    }
    return $redirect_url;
}
?>
```

---

## 2. 관리자 페이지 환경 설정

실서버 그누보드 관리자 페이지(`http://실제도메인/adm/`)에 접속한 뒤 아래 설정을 적용합니다.

### ① 테마 활성화
1. 관리자 메뉴에서 **`환경설정 -> 테마설정`** 메뉴로 이동합니다.
2. 테마 목록에서 `삼성더클성장의원 테마 (the_cl)`을 확인합니다.
3. 우측의 **[테마적용]** 버튼을 클릭하여 테마를 활성화합니다.

### ② 테마 회원 스킨 선택
1. **`환경설정 -> 기본환경설정`** 메뉴로 이동합니다.
2. 페이지 하단부의 **`회원 스킨`** 및 **`모바일 회원 스킨`** 옵션을 찾습니다.
3. 셀렉트 박스에서 **`(테마) basic`**을 선택합니다.
   * *유의 사항*: 이 설정을 적용해야 테마 내 `skin/member/basic/` 에 설계된 로그인, 회원가입, 가입 완료 화면이 정상적으로 구동됩니다.
4. 설정을 저장합니다.

### ③ 게시판 생성 (테이블 연동)
1. **`게시판관리 -> 게시판관리`** 메뉴로 이동합니다.
2. 우측 상단의 **[게시판 추가]** 버튼을 통해 다음 두 게시판을 순서대로 생성합니다.
   * **공지사항 게시판**:
     * **TABLE**: **`notice`** (반드시 소문자 일치)
     * **게시판 제목**: `공지사항`
   * **치료 사례 게시판**:
     * **TABLE**: **`gallery`** (반드시 소문자 일치)
     * **게시판 제목**: `치료 사례`
3. 생성된 게시판에 글을 등록하여 정상 노출 및 상세 페이지 리디렉션 흐름을 최종 확인합니다.

