# 삼성더클성장의원 — 클리닉 프로토타입

소아 내분비 전문 클리닉(삼성더클성장의원) 홈페이지 프로토타입입니다.
**최종 목표는 그누보드5(Gnuboard5) 환경으로의 이식**이며, 모든 코드는 그누보드5 이식을 전제로 작성합니다.

---

## 1. 프로젝트 개요

| 항목      | 내용                                                                  |
| --------- | --------------------------------------------------------------------- |
| 사이트명  | 삼성더클성장의원 (Samsung The CL Growth Clinic)                       |
| 분야      | 소아 내분비 / 성장 클리닉                                             |
| 형태      | 반응형 원페이지 + 다중 서브페이지                                     |
| 이식 대상 | **그누보드5 (Gnuboard5)**                                             |
| 언어      | PHP (서버 include 구조), HTML5, CSS3, Vanilla JS                      |
| 폰트      | Noto Sans KR, Cormorant (Google Fonts)                                |
| 스크롤    | [Lenis](https://github.com/darkroomengineering/lenis) 부드러운 스크롤 |

---

## 2. 디렉터리 구조

```
clinic-prototype/
├── head.php              # 공통 헤더 (DOCTYPE ~ <nav>까지) — 모든 페이지가 include
├── tail.php              # 공통 푸터 (footer ~ </html>, JS 로드)
├── index.php             # 메인 페이지 (Hero/About/Doctors/Programs/Space/Contact)
├── css/
│   └── style.css         # 전체 스타일시트 (그린 테마)
├── js/
│   └── main.js           # 스크롤 리빌, 모바일 메뉴, 헤더 효과, 퀵메뉴
├── img/                  # 이미지 에셋 (로고, 히어로, 의료진 등)
└── sub/                  # 서브페이지
    ├── sub1_x.php        # About  — 병원소개/인사말/의료진/둘러보기/오시는길
    ├── sub2_x.php        # Clinic — 성장평가/저신장/성조숙/소아비만/갑상선/당뇨/영양수액
    ├── sub3_x.php        # Info   — 진료시간/진료절차/검사항목/비급여
    └── sub4_x.php        # Community — 치료사례/FAQ/공지사항
```

### 페이지 매핑

| 그룹      | 메뉴                                                                    | 파일                            |
| --------- | ----------------------------------------------------------------------- | ------------------------------- |
| About     | 병원 소개 / 원장 인사말 / 의료진 소개 / 둘러보기 / 오시는 길            | `sub/sub1_1.php` ~ `sub1_5.php` |
| Clinic    | 성장 평가 / 저신장 / 성조숙 / 소아 비만 / 갑상선 질환 / 당뇨 / 영양수액 | `sub/sub2_1.php` ~ `sub2_7.php` |
| Info      | 진료 시간 / 진료 절차 / 검사 항목 / 비급여                              | `sub/sub3_1.php` ~ `sub3_4.php` |
| Community | 치료 사례 / FAQ / 공지사항                                              | `sub/sub4_1.php` ~ `sub4_3.php` |

---

## 3. 공통 include 구조

모든 페이지는 `head.php` → 본문 → `tail.php` 순서로 구성합니다.

```php
<?php
$page_title = "병원 소개";        // 페이지별 <title> 및 헤더 텍스트
include_once('../head.php');      // 메인은 './head.php'
?>

<!-- 페이지 본문 -->

<?php
include_once('../tail.php');      // 메인은 './tail.php'
?>
```

- `$page_title` : 미설정 시 기본값(`삼성더클성장의원 - 소아 내분비 전문`)이 사용됩니다.
- 경로는 메인(`index.php`)에서는 `./`, 서브(`sub/`)에서는 `../`를 사용합니다.

---

## 4. 그누보드5 이식 핵심 규칙 ⚠️

> **모든 코드는 이 규칙을 지켜 작성합니다.** 프로토타입 단계에서 미리 그누보드 관례를 따라야 이식 시 수정 범위가 최소화됩니다.

### 4-1. 경로 변수 `$G5_URL`

에셋·링크 경로는 **절대 하드코딩하지 않고** 항상 `$G5_URL` 변수를 통해 출력합니다.

```php
<link rel="stylesheet" href="<?php echo $G5_URL; ?>/css/style.css">
<img src="<?php echo $G5_URL; ?>/img/logo.png">
<a href="<?php echo $G5_URL; ?>/sub/sub1_1.php">병원 소개</a>
```

- **프로토타입**: `head.php` 상단에서 `$_SERVER['SCRIPT_NAME']`을 기준으로 `/clinic-prototype` 위치를 자동 감지하여 `$G5_URL`을 설정합니다.
- **그누보드5 이식 시**: 그누보드의 전역 경로 상수/변수(예: `G5_URL`, `$g5['url']` 또는 테마 경로)로 치환하면 됩니다. 코드 전반이 `$G5_URL` 한 변수만 참조하므로 **한 곳만 바꾸면 전체 경로가 정리**됩니다.

### 4-2. head/tail 분리

그누보드의 `_head.php` / `_tail.php` 구조와 1:1로 대응되도록 공통 레이아웃을 `head.php` / `tail.php`로 분리해 둡니다. 이식 시 본문(콘텐츠) 영역만 그누보드 콘텐츠/스킨으로 옮기면 됩니다.

### 4-3. 이식 시 변환 체크리스트

- [ ] `$G5_URL` → 그누보드 전역 경로(`G5_URL` 상수 등)로 치환
- [ ] `head.php` / `tail.php` → 그누보드 `_head.php` / `_tail.php` 또는 테마 레이아웃에 통합
- [ ] 정적 서브페이지 → 그누보드 **콘텐츠(CT)** 또는 별도 스킨/페이지로 이관
- [ ] 게시판성 메뉴(공지사항·FAQ·치료사례) → 그누보드 **게시판(보드)** 으로 연결
- [ ] 전화/지도/예약 링크 → 실제 정보로 교체 (현재 더미: `02-1234-5678` 등)
- [ ] 외부 CDN(Lenis, Google Fonts) → 운영 정책에 맞게 로컬/CDN 결정

---

## 5. 주요 기능 (`js/main.js`)

| 기능               | 설명                                                 |
| ------------------ | ---------------------------------------------------- |
| 부드러운 스크롤    | Lenis 기반 (`lerp 0.15`, `wheelMultiplier 1.2`)      |
| 스크롤 리빌        | `.reveal` 요소를 IntersectionObserver로 1회 노출     |
| 헤더 효과          | 60px 이상 스크롤 시 `.scrolled` 클래스 부여          |
| 퀵메뉴             | 400px 이상 스크롤 시 우측 퀵버튼 노출                |
| 햄버거 메뉴        | 풀스크린 `.nav-overlay` 토글 (ESC·링크 클릭 시 닫힘) |
| 앵커 스무스 스크롤 | `a[href^="#"]` 헤더 높이 보정 이동                   |
| 히어로 패럴랙스    | 스크롤에 따른 배경 scale/translate                   |

---

## 6. 로컬 실행

PHP가 필요합니다(`include` 구조). 프로토타입은 PHP 내장 서버로 확인합니다.

```bash
# clinic-prototype의 상위 폴더에서 실행하면
# $G5_URL 자동 감지(/clinic-prototype)와 동일한 경로 구조가 됩니다.
php -S localhost:8000

# 브라우저
# http://localhost:8000/clinic-prototype/index.php
```

> 단순 파일 열기(`file://`)나 정적 서버로는 PHP include가 동작하지 않습니다.

---

## 7. 디자인 시스템

- **테마**: 그린 계열 (`css/style.css`에서 관리)
- **타이포**: 본문 Noto Sans KR / 영문 장식 Cormorant
- **반응형**: 모바일 햄버거 + 풀스크린 내비 오버레이
- **모티프**: `✦`(스타) 구분자, `Grow Together, Grow Healthy` 슬로건

---

## 8. 작업 원칙

1. **그누보드5 이식 우선** — 경로는 `$G5_URL`, 레이아웃은 head/tail 분리 원칙을 항상 지킵니다.
2. **경로 하드코딩 금지** — 모든 내부 링크/에셋은 `$G5_URL`을 경유합니다.
3. **공통 영역 분리 유지** — 공통 UI는 `head.php`/`tail.php`, 페이지 고유 콘텐츠만 각 파일에 둡니다.
4. **더미 데이터 표기** — 실제 정보(전화·주소·사업자번호 등)는 이식 시 교체 대상임을 명확히 합니다.
