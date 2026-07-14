# 카페24 Pretty URL (`.htaccess` 없이)

## 왜 `.htaccess` 가 안 되나

카페24 **뉴아우토반(OpenResty/nginx)** 은 문서 루트에 `.htaccess`를 올려도  
**RewriteRule 을 적용하지 않는 경우가 많습니다.**  
(순수 Nginx는 원래 `.htaccess`를 읽지 않음. 카페24 호환 레이어가 상품/설정에 따라 다름)

그래서 rewrite 없이, **실제 폴더 + `index.php`** 로 pretty URL을 만듭니다.

| 주소 | 서버에 존재하는 파일 |
|------|---------------------|
| `https://도메인/about/` | `/www/about/index.php` |
| `https://도메인/clinic/growth/` | `/www/clinic/growth/index.php` |

서버는 “있는 폴더의 index.php”만 실행하면 되므로 **conf / .htaccess 불필요**입니다.

## 업로드할 것

1. **폴더 엔트리 전체** (그누보드 루트 = `/www` 에 그대로)
   - `about/`, `clinic/`, `info/`, `community/`, `privacy/`, `terms/`, `uninsured/`, `login/`, `register/`
   - 로컬 위치: `gnuboard/about/`, `gnuboard/clinic/` …

2. **extend**
   - `extend/the_cl_url.extend.php` (필수)
   - `extend/the_cl_redirect.extend.php`

3. **테마**
   - `theme/the_cl/` (링크·canonical 변경분)
   - `theme/the_cl/sub/_pretty_entry.php`

4. **`.htaccess`는 없어도 됨** (올려도 rewrite 안 먹으면 무시됨)

## 테스트

1. `https://도메인/about/` → 병원 소개  
2. `https://도메인/clinic/growth/` → 성장평가  
3. `https://도메인/community/notice/` → 공지  
4. `https://도메인/community/notice/view/?id=1` → 공지 상세  
5. 예전 주소 `.../theme/the_cl/sub/sub2_1.php` → **301** → `/clinic/growth/`

끝 슬래시(`/about/`)를 권장합니다. (`/about` 은 호스팅이 폴더로 넘겨 주기도 함)

## 상세 URL 형태 (conf 없을 때)

| 목록 | 상세 |
|------|------|
| `/community/notice/` | `/community/notice/view/?id=숫자` |
| `/community/cases/` | `/community/cases/view/?id=숫자` |

(`/community/notice/12` 형태는 rewrite 가 있어야 가능)

## 주의

- `adm`, `bbs`, `data` 등 기존 그누보드 폴더 이름은 건드리지 마세요.
- pretty 폴더를 실수로 지우면 해당 주소만 404가 납니다.
- 메인 `/` 는 기존 그누보드 `index.php` 그대로 사용합니다.
