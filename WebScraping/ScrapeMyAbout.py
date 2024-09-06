from bs4 import BeautifulSoup as bs
import requests

url = "https://vibrant-arrow.pages.dev/about"
webContent = requests.get(url).content

myScrape = bs(webContent, 'html.parser')
    
print(myScrape)