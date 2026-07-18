import os
from PIL import Image

def make_white_logo():
    img_dir = os.path.dirname(os.path.abspath(__file__))
    logo_path = os.path.join(img_dir, 'brand_logo.png')
    white_logo_path = os.path.join(img_dir, 'brand_logo_white.png')
    
    if not os.path.exists(logo_path):
        print(f"Error: {logo_path} not found.")
        return
        
    img = Image.open(logo_path).convert("RGBA")
    data = img.getdata()
    
    new_data = []
    for item in data:
        # item is (R, G, B, A)
        # Keep the alpha channel (A), but make R, G, B fully white (255, 255, 255)
        new_data.append((255, 255, 255, item[3]))
        
    img.putdata(new_data)
    img.save(white_logo_path, "PNG")
    print(f"Successfully created white logo at {white_logo_path}")

if __name__ == "__main__":
    make_white_logo()
