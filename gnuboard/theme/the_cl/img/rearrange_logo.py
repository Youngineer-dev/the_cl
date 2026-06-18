import os
from PIL import Image, ImageDraw, ImageFont

def get_text_width(text, font):
    # Returns the exact width of the text rendered with the given font
    bbox = font.getbbox(text)
    return bbox[2] - bbox[0]

def get_text_height(text, font):
    # Returns the exact height of the text rendered with the given font
    bbox = font.getbbox(text)
    return bbox[3] - bbox[1]

def rearrange_logo():
    logo_path = 'gnuboard/theme/the_cl/img/brand_logo.png'
    backup_path = 'gnuboard/theme/the_cl/img/brand_logo_backup.png'
    
    # 1. Back up original if it hasn't been done yet
    if not os.path.exists(backup_path):
        if os.path.exists(logo_path):
            img_orig = Image.open(logo_path)
            img_orig.save(backup_path)
            print("Backup created at:", backup_path)
        else:
            print("Error: brand_logo.png not found")
            return
            
    # Always load from the backup to avoid repeated slicing of already sliced images
    img = Image.open(backup_path)
    
    # 2. Crop symbol from backup (y=0 to y=387)
    symbol = img.crop((0, 0, img.width, 387))
    symbol_bbox = symbol.getbbox()
    symbol_cropped = symbol.crop(symbol_bbox)
    
    # Resize symbol to target canvas height (300px)
    canvas_height = 300
    sym_w, sym_h = symbol_cropped.size
    sym_new_h = canvas_height
    sym_new_w = int(sym_w * (sym_new_h / sym_h))
    symbol_resized = symbol_cropped.resize((sym_new_w, sym_new_h), Image.Resampling.LANCZOS)
    
    # 3. Create the text canvas dynamically using system fonts
    hangul_font_path = 'C:/Windows/Fonts/malgunbd.ttf' # Malgun Gothic Bold
    english_font_path = 'C:/Windows/Fonts/arial.ttf'    # Arial
    
    # Base font sizes
    hangul_font_size = 80
    hangul_font = ImageFont.truetype(hangul_font_path, hangul_font_size)
    
    # Text contents
    part1 = "삼성"
    part2 = "더클"
    part3 = "성장의원"
    full_hangul = part1 + part2 + part3
    english_text = "SAMSUNG THE CL GROWTH CLINIC"
    
    # Colors (RGBA)
    color_green = (46, 139, 87, 255) # Primary Green #2E8B57
    color_gold = (184, 150, 62, 255) # Accent Warm Gold #B8963E
    
    # Calculate exact widths to align texts
    w_p1 = get_text_width(part1, hangul_font)
    w_p12 = get_text_width(part1 + part2, hangul_font)
    w_total_hangul = get_text_width(full_hangul, hangul_font)
    h_hangul = get_text_height(full_hangul, hangul_font)
    
    # Fit the English subtitle font size to match the hangul's total width exactly
    eng_font_size = 40
    eng_font = ImageFont.truetype(english_font_path, eng_font_size)
    while eng_font_size > 5:
        w_eng = get_text_width(english_text, eng_font)
        if w_eng <= w_total_hangul:
            break
        eng_font_size -= 0.5
        eng_font = ImageFont.truetype(english_font_path, int(eng_font_size) if eng_font_size.is_integer() else eng_font_size)
        
    w_eng = get_text_width(english_text, eng_font)
    h_eng = get_text_height(english_text, eng_font)
    
    # Vertically arrange Hangul and English on a text canvas
    # Let's add some vertical margin
    text_gap = 25 # Gap between Hangul and English
    text_canvas_width = w_total_hangul
    text_canvas_height = h_hangul + text_gap + h_eng + 10 # small buffer
    
    text_img = Image.new('RGBA', (text_canvas_width, text_canvas_height), (0, 0, 0, 0))
    draw = ImageDraw.Draw(text_img)
    
    # Draw Hangul parts
    # Draw "삼성" at x=0
    draw.text((0, 0), part1, font=hangul_font, fill=color_green)
    # Draw "더클" at x=w_p1 (aligned precisely)
    draw.text((w_p1, 0), part2, font=hangul_font, fill=color_gold)
    # Draw "성장의원" at x=w_p12
    draw.text((w_p12, 0), part3, font=hangul_font, fill=color_green)
    
    # Draw English text (centered under Hangul, or left-aligned)
    # Since we matched the width, left-aligned x=0 works perfectly, or center if slightly smaller
    eng_x = (w_total_hangul - w_eng) // 2
    eng_y = h_hangul + text_gap
    draw.text((eng_x, eng_y), english_text, font=eng_font, fill=color_green)
    
    # 4. Resize text canvas to match the overall logo height beautifully
    # Text height should be balanced, e.g., about 160px high within the 300px logo canvas
    target_txt_h = 160
    txt_w, txt_h = text_img.size
    txt_new_h = target_txt_h
    txt_new_w = int(txt_w * (txt_new_h / txt_h))
    text_resized = text_img.resize((txt_new_w, txt_new_h), Image.Resampling.LANCZOS)
    
    # 5. Composite logo (Symbol + Text)
    gap = 50 # spacing between symbol and text
    canvas_width = sym_new_w + gap + txt_new_w
    
    new_logo = Image.new('RGBA', (canvas_width, canvas_height), (0, 0, 0, 0))
    
    # Paste Symbol
    new_logo.paste(symbol_resized, (0, 0), symbol_resized)
    
    # Paste Text (vertically centered)
    txt_paste_y = (canvas_height - txt_new_h) // 2
    new_logo.paste(text_resized, (sym_new_w + gap, txt_paste_y), text_resized)
    
    # Save output
    new_logo.save(logo_path, 'PNG')
    print(f"Successfully generated new horizontal logo with customized text styles at: {logo_path}")
    print(f"Dimensions: {new_logo.size}")

if __name__ == '__main__':
    rearrange_logo()
