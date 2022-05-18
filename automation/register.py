from selenium import webdriver
from selenium.webdriver.support.ui import Select

chrome_browser = webdriver.Chrome('./chromedriver')

chrome_browser.maximize_window()

chrome_browser.get('http://127.0.0.1/School_Project')

select = Select(chrome_browser.find_element_by_id('role'))
select.select_by_value('admin')

username = chrome_browser.find_element_by_id('username')
username.clear()
username.send_keys("admin")

password= chrome_browser.find_element_by_id('password')
password.clear()
password.send_keys("admin")

btn_login = chrome_browser.find_element_by_id('btnCheck')
btn_login.click()


continue_link = chrome_browser.find_element_by_link_text('Registrar a un alumno')
continue_link.click();




matricula = chrome_browser.find_element_by_id("matricula")
matricula.clear()
matricula.send_keys('A180411')

name = chrome_browser.find_element_by_id("name")
name.clear()
name.send_keys('Cesar ')

pat = chrome_browser.find_element_by_id("ape_pat")
pat.clear()
pat.send_keys('Fernandez')

mat = chrome_browser.find_element_by_id("ape_mat")
mat.clear()
mat.send_keys('Clemente')

email = chrome_browser.find_element_by_id("email")
email.clear()
email.send_keys('cesarogdai01@gmail.com')

curp = chrome_browser.find_element_by_id("curp")
curp.clear()
curp.send_keys('FECCC000803H')

civil = chrome_browser.find_element_by_id("civil")
civil.clear()
civil.send_keys('Soltero')


estado = chrome_browser.find_element_by_id("estado")
estado.clear()
estado.send_keys('BIEN')

municipio = chrome_browser.find_element_by_id("municipio")
municipio.clear()
municipio.send_keys('Chiapa de Corzo')

colonia = chrome_browser.find_element_by_id("colonia")
colonia.clear()
colonia.send_keys('Jardines del Grijalva')

direccion = chrome_browser.find_element_by_id("direccion")
direccion.clear()
direccion.send_keys('Av. Rosa China #1110')

phone = chrome_browser.find_element_by_id("phone")
phone.clear()
phone.send_keys('9614561392')

celular = chrome_browser.find_element_by_id("celular")
celular.clear()
celular.send_keys('9614561392')

fecha_nac = chrome_browser.find_element_by_id("fecha_nac")
fecha_nac.clear()
fecha_nac.send_keys('08032000')

select_carrera = Select(chrome_browser.find_element_by_id('carreras'))
select_carrera.select_by_value('6')


select_dependencia = Select(chrome_browser.find_element_by_id('dependencia'))
select_dependencia.select_by_value('28137291')

male = chrome_browser.find_element_by_css_selector("input#male").click() 

register_btn = chrome_browser.find_element_by_id('register-btn')
register_btn.click()