from selenium import webdriver

firefox_browser = webdriver.Firefox('./geckodriver')

firefox_browser.maximize_window()

firefox_browser.get('http://127.0.0.1/School_Project')

usernameInput = firefox_browser.find_element_by_id('username')
user.clear()
user.send_keys("A180410@UNACH.MX")

pswd= firefox_browser.find_element_by_id('password')
password.clear()
password.send_keys("A180410")

btn_login = firefox_browser.find_element_by_id('btnCheck')

btn_login.click()