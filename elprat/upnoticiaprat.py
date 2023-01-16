from bs4 import BeautifulSoup

import requests

from googletrans import Translator

import pymysql
       

translator = Translator()



# get last

website_last = 'https://www.elprat.cat/actualitat/noticies'

result_last = requests.get(website_last)

content_last = result_last.text

soup_last = BeautifulSoup(content_last, 'lxml')



link_list_last = soup_last.find('h3', class_="noticia_titol")



archivo_last = link_list_last.find('a')['href']





with open("last.txt") as f:

    verult = f.read()

f.close() 





if verult != archivo_last:



    # How To Get The HTML



    result = requests.get(archivo_last)

    content = result.text

    soup = BeautifulSoup(content, 'lxml')



    # Titulo





    box = soup.find('h1', class_='title-slim')



    box = ''.join(box)

    traducido = translator.translate(box, dest='es')

    box = traducido.text



    # imagen

    imgs = soup.find_all(class_='img-contenido')



    for img in imgs:

            link = img.find('img')['src']

    imagen = ''.join(link)

            

    #texto

    textos = soup.find_all('div', class_='container content contenido')



    txt = list()



    count = 0

    for i in textos:

        if count < 1:

            txt.append(i.text)

        else:

            break

        count += 1



    str1 = ''.join(txt)

    traducido = translator.translate(str1, dest='es')

    str1 = traducido.text

    title = box

    imageen = imagen
 
    #database connection
    connection = pymysql.connect(host="localhost",user="root",passwd="",database="sfabregat_tfg")
    cursor = connection.cursor()

    id="3"

    # queries for inserting values
    insert = 'INSERT INTO noticia(id_ayuntamiento, titulo, articulo, imagen) VALUES('+str(id)+', "'+title+'", "'+str1+'", "'+imagen+'");'


    #executing the quires
    cursor.execute(insert)
        

    #commiting the connection then closing it.
    connection.commit()
    connection.close()


    file = open("last.txt", 'w')  

    file.write(archivo_last)

    file.close() 

    print('Noticia publicada')

else:

    print('No hay noticias nuevas')

    







