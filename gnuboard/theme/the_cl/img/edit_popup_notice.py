import os
from PIL import Image, ImageDraw, ImageFont

def get_text_width(text, font):
    bbox = font.getbbox(text)
    return bbox[2] - bbox[0]

def get_text_height(text, font):
    bbox = font.getbbox(text)
    return bbox[3] - bbox[1]

def make_icon_alpha(crop_img, target_color):
    rgba = crop_img.convert("RGBA")
    data = rgba.getdata()
    new_data = []
    for item in data:
        # Background is around (244, 236, 223)
        dist = ((item[0]-244)**2 + (item[1]-236)**2 + (item[2]-223)**2)**0.5
        if dist < 25:
            new_data.append((0, 0, 0, 0))
        else:
            # smooth alpha transition
            alpha = int(min(255, dist * 2.2))
            new_data.append((target_color[0], target_color[1], target_color[2], alpha))
    rgba.putdata(new_data)
    return rgba

def edit_popup_notice():
    script_dir = os.path.dirname(os.path.abspath(__file__))
    popup_path = os.path.join(script_dir, 'popup_notice.png')
    backup_path = os.path.join(script_dir, 'popup_notice_backup.png')
    font_path = os.path.join(script_dir, 'Pretendard-SemiBold.ttf')
    
    if not os.path.exists(popup_path):
        print("popup_notice.png not found!")
        return

    # 1. Backup original
    if not os.path.exists(backup_path):
        img_orig = Image.open(popup_path)
        img_orig.save(backup_path)
        print("Backup created at:", backup_path)
        
    # Always load from backup to allow clean edits and re-runs
    img = Image.open(backup_path).convert("RGB")
    
    # 2. Extract icons from backup (raw coordinates)
    phone_raw = img.crop((215, 580, 285, 695))
    msg_raw = img.crop((740, 580, 810, 695))
    
    # Clean the borders of the extracted icons
    w_ph, h_ph = phone_raw.size
    phone_clean = phone_raw.copy()
    for y in range(h_ph):
        edge_dark = (phone_clean.getpixel((0, y))[0] < 200) or (phone_clean.getpixel((w_ph-1, y))[0] < 200)
        if edge_dark or y < 14 or y > 99:
            for x in range(w_ph):
                phone_clean.putpixel((x, y), (244, 236, 223))
                
    w_msg, h_msg = msg_raw.size
    msg_clean = msg_raw.copy()
    for y in range(h_msg):
        edge_dark = (msg_clean.getpixel((0, y))[0] < 200) or (msg_clean.getpixel((w_msg-1, y))[0] < 200)
        if edge_dark or y < 14 or y > 99:
            for x in range(w_msg):
                msg_clean.putpixel((x, y), (244, 236, 223))
                
    # Create alpha-transparent recolored icons
    # Text/Icon primary color: Dark Sage Green
    color_dark_sage = (92, 110, 99) 
    phone_icon = make_icon_alpha(phone_clean, color_dark_sage)
    msg_icon = make_icon_alpha(msg_clean, color_dark_sage)
    
    # Crop them tightly to remove empty spaces
    phone_bbox = phone_icon.getbbox()
    phone_icon = phone_icon.crop(phone_bbox)
    msg_bbox = msg_icon.getbbox()
    msg_icon = msg_icon.crop(msg_bbox)
    
    # Resize icons to fit text height beautifully (e.g. height = 38px)
    icon_h = 38
    
    ph_w, ph_h = phone_icon.size
    phone_icon = phone_icon.resize((int(ph_w * icon_h / ph_h), icon_h), Image.Resampling.LANCZOS)
    
    m_w, m_h = msg_icon.size
    msg_icon = msg_icon.resize((int(m_w * icon_h / m_h), icon_h), Image.Resampling.LANCZOS)
    
    # 3. Erase old logo area and paste brand_logo.png
    logo_path = os.path.join(script_dir, 'brand_logo.png')
    if os.path.exists(logo_path):
        logo_img = Image.open(logo_path).convert("RGBA")
        # Target height = 110px, keep aspect ratio
        target_h = 110
        l_w, l_h = logo_img.size
        target_w = int(l_w * (target_h / l_h))
        logo_resized = logo_img.resize((target_w, target_h), Image.Resampling.LANCZOS)
        
        # Erase old logo area in img (y=230 to y=365) using background color (232, 220, 198)
        bg_color = (232, 220, 198)
        for y in range(230, 365):
            for x in range(90, 934):
                img.putpixel((x, y), bg_color)
                
        # Paste new logo at the center (centered at X=512, Y=295)
        logo_x = 512 - target_w // 2
        logo_y = 295 - target_h // 2
        img.paste(logo_resized, (logo_x, logo_y), logo_resized)
        print("New logo replaced at Y:", logo_y)
    else:
        print("brand_logo.png not found, skipping logo replacement")

    # 4. Erase old bottom area in the main image using row-based background copy
    # We erase y=545 to y=840, x=90 to x=934
    for y in range(545, 840):
        # Read clean background pixel from x=100 (definitely inside the card)
        bg_pixel = img.getpixel((100, y))
        for x in range(90, 934):
            img.putpixel((x, y), bg_pixel)
            
    # 4. Draw new elements
    draw = ImageDraw.Draw(img)
    
    # Draw Rounded Rect box
    # Coordinates: x1=180, y1=585, x2=844, y2=755 (height=170px)
    box_color = (134, 140, 128) # Sage green border
    draw.rounded_rectangle([180, 585, 844, 755], radius=28, outline=box_color, width=4)
    
    # Font setup
    font_size = 42
    font = ImageFont.truetype(font_path, font_size)
    
    # Prepare text
    text_phone = "전화  02-421-7757"
    text_msg = "문자  010-9680-0531"
    
    w_tphone = get_text_width(text_phone, font)
    h_tphone = get_text_height(text_phone, font)
    w_tmsg = get_text_width(text_msg, font)
    h_tmsg = get_text_height(text_msg, font)
    
    # Center lines inside the box
    # Box center: X = 512, Box Y range: 585 to 755 (height 170)
    line_gap = 25
    total_content_h = icon_h + line_gap + icon_h
    start_y = 585 + (170 - total_content_h) // 2
    
    y_l1 = start_y
    y_l2 = start_y + icon_h + line_gap
    
    # Line 1 (Phone)
    # Total width of: Phone Icon + Gap + Text
    gap_icon_text = 15
    l1_total_w = phone_icon.size[0] + gap_icon_text + w_tphone
    l1_start_x = 512 - l1_total_w // 2
    
    # Paste phone icon (vertically centered with text)
    icon_y_l1 = y_l1 + (h_tphone - icon_h) // 2
    img.paste(phone_icon, (l1_start_x, icon_y_l1), phone_icon)
    # Draw text
    draw.text((l1_start_x + phone_icon.size[0] + gap_icon_text, y_l1), text_phone, font=font, fill=color_dark_sage)
    
    # Line 2 (Msg)
    l2_total_w = msg_icon.size[0] + gap_icon_text + w_tmsg
    l2_start_x = 512 - l2_total_w // 2
    
    # Paste msg icon
    icon_y_l2 = y_l2 + (h_tmsg - icon_h) // 2
    img.paste(msg_icon, (l2_start_x, icon_y_l2), msg_icon)
    # Draw text
    draw.text((l2_start_x + msg_icon.size[0] + gap_icon_text, y_l2), text_msg, font=font, fill=color_dark_sage)
    
    # 5. Draw bottom label "전화 및 문자 예약 가능"
    bottom_font_size = 33
    bottom_font = ImageFont.truetype(font_path, bottom_font_size)
    text_bottom = "전화 및 문자 예약 가능"
    w_tbottom = get_text_width(text_bottom, bottom_font)
    
    # Place it below the box with a nice gap
    y_bottom = 755 + 32
    x_bottom = 512 - w_tbottom // 2
    draw.text((x_bottom, y_bottom), text_bottom, font=bottom_font, fill=color_dark_sage)
    
    # Save output
    img.save(popup_path)
    print("Successfully edited popup_notice.png")

if __name__ == '__main__':
    edit_popup_notice()
