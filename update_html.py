import re
with open('c:\\xampp\\htdocs\\g7\\clinic-prototype\\index.html', 'r', encoding='utf-8') as f:
    content = f.read()
# Replace reveal-delay-X with data-aos-delay='X00'
content = re.sub(r'reveal reveal-delay-(\d)', lambda m: f'data-aos=\"fade-up\" data-aos-delay=\"{m.group(1)}00\"', content)
# Replace remaining reveal with data-aos
content = re.sub(r'\s*reveal\s*', ' ', content)
content = content.replace('class=\" \"', '')
content = content.replace('data-aos=\"fade-up\" data-aos-delay=', 'data-aos=\"fade-up\" data-aos-delay=')
# Also need to add AOS and Lenis CDNs
css_link = '<link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">\n  <link rel=\"stylesheet\" href=\"css/style.css\">'
content = content.replace('<link rel=\"stylesheet\" href=\"css/style.css\">', css_link)
js_link = '<script src=\"https://unpkg.com/@studio-freight/lenis@1.0.42/dist/lenis.min.js\"></script>\n  <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>\n  <script src=\"js/main.js\"></script>'
content = content.replace('<script src=\"js/main.js\"></script>', js_link)
with open('c:\\xampp\\htdocs\\g7\\clinic-prototype\\index.html', 'w', encoding='utf-8') as f:
    f.write(content)
