from PIL import Image, ImageOps
img = Image.open('temp_extracted.png').crop((123, 225, 877, 775)).convert('L')
img = ImageOps.autocontrast(ImageOps.invert(img))
data_alpha = img.getdata()
new_data = []
for a in data_alpha:
    new_data.append((46, 139, 87, a))
out = Image.new('RGBA', img.size)
out.putdata(new_data)
out.save('c:\\xampp\\htdocs\\g7\\clinic-prototype\\img\\brand_logo.png')
