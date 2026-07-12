import os
from PIL import Image

script_dir = os.path.dirname(os.path.abspath(__file__))
popup_path = os.path.join(script_dir, 'popup_notice.png')

if os.path.exists(popup_path):
    img = Image.open(popup_path)
    
    # Phone Icon y range
    phone_ys = []
    for y in range(600, 680):
        for x in range(220, 280):
            p = img.getpixel((x, y))
            if p[0] < 200:
                phone_ys.append(y)
    
    # Msg Icon y range
    msg_ys = []
    for y in range(600, 680):
        for x in range(740, 810):
            p = img.getpixel((x, y))
            if p[0] < 200:
                msg_ys.append(y)
                
    if phone_ys:
        print(f"Phone Icon y range: min={min(phone_ys)}, max={max(phone_ys)} (height {max(phone_ys)-min(phone_ys)+1}px)")
    if msg_ys:
        print(f"Msg Icon y range: min={min(msg_ys)}, max={max(msg_ys)} (height {max(msg_ys)-min(msg_ys)+1}px)")
else:
    print("Not found")
