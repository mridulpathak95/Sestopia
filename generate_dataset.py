from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from webdriver_manager.chrome import ChromeDriverManager
import re
import time

path = 'https://sestopia-team-h.000webhostapp.com/'

pages = ['index.php','skills1.php','skills2.php','skills4.php',
         'skills5.php','skills6.php','skills7.php']
##pages = ['skills1.php']

opt = Options()
opt.add_argument('--incognito')
opt.headless = True
driver = webdriver.Chrome(ChromeDriverManager().install(), options=opt)

d = {};

# loop through each page\
global text
for page in pages:
    print(page)
    url = path + page

    driver.get(url)

    #xpath for content
    xpath = '//div[@class="container"]'
    
    try:
        contents = driver.find_elements_by_xpath(xpath)
        text = ""
        k = 0
        for line in contents:
            text += line.text
            print(line.text)
            k = k+1
            if k > len(contents) - 3:
                break
 
    except:
        print('class not found')
    
    text = re.sub(r"[^a-zA-Z]+", ' ', text)
##    for char in '()[]{}=+!@#$%^&*~`;:|\-.,\n':
##        text=text.replace(char,'')
    print('----------------')
    text = text.lower()
    print(text)
    text_list = text.split()
    for key in text_list: 
        if d.get(key) == None:
            d[key] = []
        d[key].append(page)

driver.quit()
# save to json file
import json
with open('index.json','w') as fp:
    json.dump(d,fp,sort_keys=True)
    
