import os
from PIL import Image

script_dir = os.path.dirname(os.path.abspath(__file__))
popup_path = os.path.join(script_dir, 'popup_notice.png')

if os.path.exists(popup_path):
    img = Image.open(popup_path)
    
    # We will crop widely y=580 to 695 (height 115)
    # Inside this crop:
    # Top border of the box is at y ≈ 595 (which is offset 15)
    # Bottom border of the box is at y ≈ 680 (which is offset 100)
    
    # Let's crop the phone icon area x=215 to 285
    phone_raw = img.crop((215, 580, 285, 695))
    # We will erase the border lines by coloring them with background color (244, 236, 223)
    # Let's check which y rows have horizontal lines by looking at pixels near the left/right edges of the crop
    phone_clean = phone_raw.copy()
    w, h = phone_clean.size
    
    # Fill the borders
    # Top border is around y_offset 13 to 17
    # Bottom border is around y_offset 98 to 102
    # We can also dynamically clean any row where pixels near the edge (x=0..3 or x=w-4..w-1) are dark (which means a border line passes through)
    for y in range(h):
        # If the edges of this row are dark, it's a border line!
        edge_dark = (phone_clean.getpixel((0, y))[0] < 200) or (phone_clean.getpixel((w-1, y))[0] < 200)
        # Also clean the very top and very bottom margins that are outside the box
        if edge_dark or y < 14 or y > 99:
            for x in range(w):
                # Sample background color from a nearby clean pixel if possible, or use solid (244, 236, 223)
                phone_clean.putpixel((x, y), (244, 236, 223))
                
    phone_clean.save(os.path.join(script_dir, 'test_phone_clean.png'))
    
    # Do the same for msg icon
    msg_raw = img.crop((740, 580, 810, 695))
    msg_clean = msg_raw.copy()
    mw, mh = msg_clean.size
    for y in range(mh):
        edge_dark = (msg_clean.getpixel((0, y))[0] < 200) or (msg_clean.getpixel((mw-1, y))[0] < 200)
        if edge_dark or y < 14 or y > 99:
            for x in range(mw):
                msg_clean.putpixel((x, y), (244, 236, 223))
                
    msg_clean.save(os.path.join(script_dir, 'test_msg_clean.png'))
    print("Saved clean icons with borders erased.")
else:
    print("Not found")
