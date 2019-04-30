import time
from selenium import webdriver
from bs4 import BeautifulSoup
import requests
import time
import csv

myfile = open('states.txt')
states_raw = myfile.readlines()
myfile.close()
states = []
for state in states_raw:
    states.append(state.strip(' \n'))
print(states)

link = []
def get_schools(states):
    url_start = 'https://collegescorecard.ed.gov/search/?avg_net_price=1000..&completion_rate=0.01..&median_earnings=1000..&state='
    url_end = '&sort=salary:desc'
    url = url_start + state + url_end
    driver = webdriver.Chrome('/Users/andreagiraldo/Documents/college/chromedriver')
    driver.get(url)
    time.sleep(5)
    html = driver.page_source
    bsObj = BeautifulSoup(html, 'html.parser')
    h1_list = bsObj.find_all('h1')
    for h in h1_list:
        if h.find('a'):
            link.append(h.find('a')['href'])
    driver.quit()

for state in states:
    get_schools(state)
    print(link)

l = open('colleges.csv', 'w', newline='', encoding = 'utf-8')
c = csv.writer(l)
header = ['school_name', 'city_name', 'state_name', 'cost', 'grad_rate', 'salary', 'website']
c.writerow(header)
base_url = 'https://collegescorecard.ed.gov'
full_url = []
for url in link:
    full_url.append(base_url + url)
for university in full_url:
    try:
        driver = webdriver.Chrome('/Users/andreagiraldo/Documents/college/chromedriver')
        driver.get(university)
        time.sleep(3)
        html = driver.page_source
        bsObj = BeautifulSoup(html, 'html.parser')
        school_name = bsObj.find('h1' , {'data-bind':'name'})
        school_name = school_name.get_text()
        city_name = bsObj.find('span' , {'data-bind':'city'})
        city_name = city_name.get_text()
        state_name = bsObj.find('span' , {'data-bind':'state'})
        state_name = state_name.get_text()
        cost = bsObj.find('span' , {'data-bind':'average_cost'})
        cost = cost.get_text()
        grad_rate = bsObj.find('span' , {'data-bind':'grad_rate'})
        grad_rate = grad_rate.get_text()
        salary = bsObj.find('span' , {'data-bind':'average_salary'})
        salary = salary.get_text()
        website = bsObj.find('a' , {'data-bind':'school_link'})
        website = website.get('href')
        row = [school_name, city_name, state_name, cost, grad_rate, salary, website]
        c.writerow(row)
        #print(school_name)
        #print(city_name)
        #print(state_name)
        #print(cost)
        #print(grad_rate)
        #print(salary)
        #print(website)
    except:
        print('Not a valid link')
driver.quit()
l.close()
