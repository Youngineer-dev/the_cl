# -*- coding: utf-8 -*-
"""
테마 이미지 최적화 (1회성 실행 스크립트)
  - og.png      : 카카오/페북 OG 규격 1200x630 JPG (WebP 미사용 — 크롤러 호환)
  - 사진류      : JPG 재압축 + WebP 병행 생성
  - 로고        : 표시 크기의 2배(480x96)로 축소, 알파 유지 PNG + WebP
원본은 img/_original_backup/ 으로 이동 보관합니다.
"""
import os
import shutil
from PIL import Image

IMG = os.path.join(os.path.dirname(os.path.abspath(__file__)),
                   'gnuboard', 'theme', 'the_cl', 'img')
BACKUP = os.path.join(IMG, '_original_backup')
os.makedirs(BACKUP, exist_ok=True)

report = []


def kb(path):
    return os.path.getsize(path) / 1024


def backup(name):
    src = os.path.join(IMG, name)
    if os.path.exists(src):
        shutil.copy2(src, os.path.join(BACKUP, name))


def save_jpg(im, out, quality, max_kb=None):
    """품질을 낮춰가며 max_kb 이하로 맞춘다."""
    im = im.convert('RGB')
    q = quality
    while True:
        im.save(out, 'JPEG', quality=q, optimize=True, progressive=True)
        if max_kb is None or kb(out) <= max_kb or q <= 60:
            return q
        q -= 5


def save_webp(im, out, quality):
    im.save(out, 'WEBP', quality=quality, method=6)


def fit_cover(im, tw, th):
    """비율 유지하며 채운 뒤 중앙 크롭."""
    sw, sh = im.size
    scale = max(tw / sw, th / sh)
    im = im.resize((round(sw * scale), round(sh * scale)), Image.LANCZOS)
    left = (im.size[0] - tw) // 2
    top = (im.size[1] - th) // 2
    return im.crop((left, top, left + tw, top + th))


# ── 1. OG 이미지: 1200x630 JPG, 200KB 이하 ────────────────────────────
backup('og.png')
src = os.path.join(IMG, 'og.png')
before = kb(src)
im = Image.open(src)
out = os.path.join(IMG, 'og.jpg')
q = save_jpg(fit_cover(im, 1200, 630), out, 88, max_kb=200)
report.append(('og.png -> og.jpg', before, kb(out), f'1200x630 q{q}'))
os.remove(src)

# ── 2. 원장 사진: 알파가 전부 불투명 → JPG 안전 전환 ──────────────────
backup('doctor.png')
src = os.path.join(IMG, 'doctor.png')
before = kb(src)
im = Image.open(src)
assert im.convert('RGBA').getchannel('A').getextrema() == (255, 255), \
    'doctor.png 에 실제 투명 픽셀이 존재합니다 — JPG 전환 중단'
save_jpg(im, os.path.join(IMG, 'doctor.jpg'), 88)
save_webp(im.convert('RGB'), os.path.join(IMG, 'doctor.webp'), 85)
report.append(('doctor.png -> doctor.jpg', before,
               kb(os.path.join(IMG, 'doctor.jpg')), '766x816 q88'))
report.append(('  + doctor.webp', 0,
               kb(os.path.join(IMG, 'doctor.webp')), 'WebP q85'))
os.remove(src)

# ── 3. 히어로 배경 (CSS background) ───────────────────────────────────
backup('hero_main.png')
src = os.path.join(IMG, 'hero_main.png')
before = kb(src)
im = Image.open(src)
save_jpg(im, os.path.join(IMG, 'hero_main.jpg'), 85)
save_webp(im.convert('RGB'), os.path.join(IMG, 'hero_main.webp'), 82)
report.append(('hero_main.png -> .jpg', before,
               kb(os.path.join(IMG, 'hero_main.jpg')), '1080x608 q85'))
report.append(('  + hero_main.webp', 0,
               kb(os.path.join(IMG, 'hero_main.webp')), 'WebP q82'))
os.remove(src)

# ── 4. 진료과목 아이콘 6종: 900x900 -> 280x280 (표시 140px의 2배) ─────
for n in ['icon_growth', 'icon_short', 'icon_precocious',
          'icon_obesity', 'icon_underweight', 'icon_allergy']:
    fn = n + '.jpg'
    backup(fn)
    src = os.path.join(IMG, fn)
    before = kb(src)
    im = Image.open(src).resize((280, 280), Image.LANCZOS)
    save_jpg(im, src, 82)
    save_webp(im.convert('RGB'), os.path.join(IMG, n + '.webp'), 80)
    report.append((fn, before, kb(src), '280x280 q82'))
    report.append(('  + ' + n + '.webp', 0,
                   kb(os.path.join(IMG, n + '.webp')), 'WebP q80'))

# ── 5. 소개 사진 3종: 재압축 (원본 해상도 유지) ───────────────────────
for fn in ['about_intro.jpg', 'about_care_diagnosis.jpg', 'about_lifestyle.jpg']:
    backup(fn)
    src = os.path.join(IMG, fn)
    before = kb(src)
    im = Image.open(src)
    save_jpg(im, src, 80)
    save_webp(im.convert('RGB'), os.path.join(IMG, fn[:-4] + '.webp'), 78)
    report.append((fn, before, kb(src), f'{im.size[0]}x{im.size[1]} q80'))
    report.append(('  + ' + fn[:-4] + '.webp', 0,
                   kb(os.path.join(IMG, fn[:-4] + '.webp')), 'WebP q78'))

# ── 6. 로고 2종: 1500x300 -> 480x96 (표시 240x48의 2배), 알파 유지 ────
for fn in ['brand_logo.png', 'brand_logo_white.png']:
    backup(fn)
    src = os.path.join(IMG, fn)
    before = kb(src)
    im = Image.open(src).convert('RGBA').resize((480, 96), Image.LANCZOS)
    im.save(src, 'PNG', optimize=True)
    save_webp(im, os.path.join(IMG, fn[:-4] + '.webp'), 90)
    report.append((fn, before, kb(src), '480x96 alpha 유지'))
    report.append(('  + ' + fn[:-4] + '.webp', 0,
                   kb(os.path.join(IMG, fn[:-4] + '.webp')), 'WebP q90 alpha'))

# ── 결과 ──────────────────────────────────────────────────────────────
print(f"{'파일':<34}{'이전':>10}{'이후':>10}  비고")
print('-' * 78)
tb = ta = 0.0
for name, b, a, note in report:
    tb += b
    ta += a
    bs = f'{b:,.0f}KB' if b else '-'
    print(f'{name:<34}{bs:>10}{a:>9,.0f}KB  {note}')
print('-' * 78)
print(f"{'합계':<34}{tb:>9,.0f}KB{ta:>9,.0f}KB  "
      f"({(1 - ta / tb) * 100:.0f}% 감소)")
