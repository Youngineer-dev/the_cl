# -*- coding: utf-8 -*-
"""
recv_img/ 실사 인테리어 사진 -> 테마 이미지 생성 (1회성)
각 배치 위치의 표시 규격에 맞춰 중앙 크롭 + JPG/WebP 병행 생성.
"""
import os
from PIL import Image, ImageDraw

SRC = 'recv_img/KakaoTalk_20260731_091429993{}.jpg'
IMG = os.path.join('gnuboard', 'theme', 'the_cl', 'img')

# (소스번호, 출력파일명, 폭, 높이, 용도)
JOBS = [
    ('_22', 'sub_hero_bg',           1920, 1080, '서브페이지 상단 히어로 배경'),
    ('_19', 'home_about_1',           900,  720, '홈 About 상단 이미지'),
    ('_21', 'home_about_2',           800,  560, '홈 About 하단 이미지'),
    ('_09', 'about_intro',           1280,  720, '병원소개 대표 (입구 파사드)'),
    ('_14', 'about_care_diagnosis',  1152,  864, '병원소개 item1 (검사실)'),
    ('_23', 'about_lifestyle',       1152,  864, '병원소개 item2 (대기 라운지)'),
]

# 둘러보기 갤러리 (4:3 그리드)
GALLERY = [
    ('_04', 'space_01', 'Hall',             '진료 대기 홀'),
    ('_18', 'space_02', 'Reception',        '접수 데스크'),
    ('_21', 'space_03', 'Waiting Lounge',   '대기 공간'),
    ('_15', 'space_04', 'Consulting Room',  '진료실'),
    ('_13', 'space_05', 'Counseling Room',  '상담실'),
    ('_10', 'space_06', 'Treatment Room',   '처치실'),
    ('_11', 'space_07', 'Corridor',         '이동 동선'),
    ('_24', 'space_08', 'Information Desk', '안내 데스크'),
    ('_20', 'space_09', 'Clinic View',      '클리닉 전경'),
]


def fit_cover(im, tw, th):
    sw, sh = im.size
    scale = max(tw / sw, th / sh)
    im = im.resize((round(sw * scale), round(sh * scale)), Image.LANCZOS)
    left = (im.size[0] - tw) // 2
    top = (im.size[1] - th) // 2
    return im.crop((left, top, left + tw, top + th))


def emit(src_no, name, w, h, q=82, qw=78):
    im = Image.open(SRC.format(src_no)).convert('RGB')
    im = fit_cover(im, w, h)
    jpg = os.path.join(IMG, name + '.jpg')
    im.save(jpg, 'JPEG', quality=q, optimize=True, progressive=True)
    im.save(os.path.join(IMG, name + '.webp'), 'WEBP', quality=qw, method=6)
    return im, os.path.getsize(jpg) / 1024


made = []
for no, name, w, h, note in JOBS:
    im, kb = emit(no, name, w, h)
    made.append((name, im, f'{w}x{h}  {kb:.0f}KB  {note}'))

for no, name, en, kr in GALLERY:
    im, kb = emit(no, name, 800, 600)
    made.append((name, im, f'800x600  {kb:.0f}KB  {en} / {kr}'))

for name, _, note in made:
    print(f'{name:24} {note}')

# 결과 검수용 컨택트 시트
CW, CH, COLS = 480, 360, 5
rows = (len(made) + COLS - 1) // COLS
canvas = Image.new('RGB', (CW * COLS, CH * rows), 'white')
d = ImageDraw.Draw(canvas)
for i, (name, im, _) in enumerate(made):
    t = im.copy()
    t.thumbnail((CW - 8, CH - 26), Image.LANCZOS)
    x, y = (i % COLS) * CW, (i // COLS) * CH
    canvas.paste(t, (x + 4, y + 24))
    d.rectangle([x, y, x + CW, y + 22], fill='#1f4d3a')
    d.text((x + 8, y + 6), name, fill='white')
os.makedirs('.preview', exist_ok=True)
canvas.save('.preview/result.jpg', quality=86)
print('\n검수 시트: .preview/result.jpg', canvas.size)
