from bs4 import BeautifulSoup
import requests

def getNoticiaNueva(web, website_last, claseNoticia):
  # get last
    headers = {'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36'}
    result_last = requests.get(website_last, headers=headers)
    content_last = result_last.text
    soup_last = BeautifulSoup(content_last, 'lxml')

    i=0

    with open("last.txt") as f:
        archivo_last = f.read()
        f.close() 

    with open('last.txt', 'w') as d:
        d.write("")
        d.close()

    for a in soup_last.find_all('a', href=True):
        if "transparencia" in a['href']:
            i=1

        if i==1:
            if "transparencia" in a['href']:
                i=1
            else:     
                link= a['href']
                i=2
                with open('last.txt', 'w') as f:
                    f.write(link)
                break

    return(archivo_last)


def hayNueva(antigua):

    bandera=0
    with open("last.txt") as f:
        verult = f.read()
    f.close() 

    if verult == antigua:
        bandera=0
    else:
        bandera=1

    return(bandera, verult)



