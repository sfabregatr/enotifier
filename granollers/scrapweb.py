from bs4 import BeautifulSoup
import requests
import re
import urllib


def obtenerTitulo(website, scrapTitulo):
  
  # Get HTML
  headersnot = {'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36'}
  result = requests.get(website, headers=headersnot)
  content = result.text
  soup = BeautifulSoup(content, 'lxml')
  
  # Titulo

  titulo_ls = soup.find_all(scrapTitulo)

  titulo = titulo_ls[1]

  titulo = ''.join(titulo)

  titulo = titulo.replace("<h2>", "")

  return(titulo)


def obtenerImagen(website, scrapImagen):
  
  # Get HTML

  headersnot = {'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36'}
  result = requests.get(website, headers=headersnot)
  content = result.text
  soup = BeautifulSoup(content, 'lxml')

  # Imagen

  imgs = soup.find(class_=scrapImagen)


  return(imgs.find('a')['href'])

def obtenerEntrada(website, scrapEntrada):

  # Get HTML
  headersnot = {'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36'}
  result = requests.get(website, headers=headersnot)
  content = result.text
  soup = BeautifulSoup(content, 'lxml')

  # Entrada

  entradas = soup.find(class_= scrapEntrada)

  entrada = entradas.text


  return(entrada)


def obtenerTexto(website, scrapTexto):

  # Get HTML
  headersnot = {'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36'}
  result = requests.get(website, headers=headersnot)
  content = result.text
  soup = BeautifulSoup(content, 'lxml')

  #Texto
  textos = soup.find('div', class_="field-item even").findAll('p')

  article_text = ''

  for element in textos:
    article_text += '\n\n' + ''.join(element.findAll(text = True))
  return(article_text)
