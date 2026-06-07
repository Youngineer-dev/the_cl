from PIL import Image
img = Image.open('c:\\xampp\\htdocs\\g7\\clinic-prototype\\img\\brand_logo.png')
data = img.getdata()
width, height = img.size
min_x = width
min_y = height
max_x = 0
max_y = 0
for y in range(height):
    for x in range(width):
        item = data[y * width + x]
        if item[0] < 200 and item[1] < 200 and item[2] < 200:
            if x < min_x: min_x = x
            if x > max_x: max_x = x
            if y < min_y: min_y = y
            if y > max_y: max_y = y
print('Real BBox:', min_x, min_y, max_x, max_y)
img = img.crop((min_x, min_y, max_x+1, max_y+1))
img.save('c:\\xampp\\htdocs\\g7\\clinic-prototype\\img\\brand_logo.png')
