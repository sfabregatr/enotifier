from bs4 import BeautifulSoup

import requests

from googletrans import Translator

import pymysql
       

translator = Translator()



# get last

website_last = 'https://www.santboi.cat/NPremsaW.nsf/ca-WebVistaNPTop10-BASE?ReadForm&Clau=Lesnoticies&Idioma=ca&Seu=N'

result_last = requests.get(website_last)

content_last = result_last.text

soup_last = BeautifulSoup(content_last, 'lxml')

link_list_last = soup_last.find('div', class_="contingut")

#print(link_list_last.attrs['href'])

archivo_last = "https://www.santboi.cat/NPremsaW.nsf/" + link_list_last.find('a')['href']





with open("last.txt") as f:

    verult = f.read()

f.close() 





if verult != archivo_last:



    # How To Get The HTML



    result = requests.get(archivo_last)

    content = result.text

    soup = BeautifulSoup(content, 'lxml')



    # Titulo





    box = soup.find('h1', class_='colort6')



    box = ''.join(box)

    traducido = translator.translate(box, dest='es')

    box = traducido.text



    # imagen

    imgs = soup.find_all(class_='centrat')



    for img in imgs:

            link = img.find('img')['src']

    imagen = ''.join(link)





    #texto

    textos = soup.find_all('p')

    txt = list()

    count = 0

    x=len(textos)

    while(count < x):

        if count > 2 and count < (x-3):

            txt.append(textos[count])

        count += 1

 
    str1 = ''.join([str(o) for o in txt])
    
    str2 = str1.replace('<span class="negreta">', '')
    str3 = str2.replace('<p>', '')
    str4 = str3.replace('<span>', '')
    str5 = str4.replace('</p>', '')
    str6 = str5.replace('</span>', '')

    traducido = translator.translate(str6, dest='es')

    str6 = traducido.text

    title = box

    imageen = imagen
 
    #database connection
    connection = pymysql.connect(host="localhost",user="root",passwd="",database="sfabregat_tfg")
    cursor = connection.cursor()

    id="1"

    # queries for inserting values
    insert = 'INSERT INTO noticia(id_ayuntamiento, titulo, articulo, imagen) VALUES('+str(id)+', "'+title+'", "'+str6+'", "'+imagen+'");'


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

    







