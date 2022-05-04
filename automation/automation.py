from selenium import webdriver

chrome_browser = webdriver.Chrome('./chromedriver')

chrome_browser.maximize_window()

chrome_browser.get('http://127.0.0.1/School_Project')

username = chrome_browser.find_element_by_id('username')
username.clear()
username.send_keys("A180410@UNACH.MX")

password= chrome_browser.find_element_by_id('password')
password.clear()
password.send_keys("A180410")

btn_login = chrome_browser.find_element_by_id('btnCheck')

btn_login.click()