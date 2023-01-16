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

  titulo_ls = soup.find('h1', id=scrapTitulo)

  titulo = titulo_ls.text

  titulofinal = titulo.replace("  ", "")

  titulofinal = titulofinal.replace("\n", "")

  return(titulofinal)


def obtenerImagen(website, scrapImagen):
  
  imagen = website + "/image"

  return(imagen)

def obtenerEntrada(website, scrapEntrada):

  # Get HTML
  headersnot = {'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36'}
  result = requests.get(website, headers=headersnot)
  content = result.text
  soup = BeautifulSoup(content, 'lxml')

  # Entrada

  entradas = soup.find(id= scrapEntrada)
  nothing=""
  try:
    entrada = entradas.text
    return(entrada)
  except:
    return(nothing)
  
  


def obtenerTexto(website, scrapTexto):

  # Get HTML
  headersnot = {'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36'}
  result = requests.get(website, headers=headersnot)
  content = result.text
  soup = BeautifulSoup(content, 'lxml')

  #texto
  textos = soup.find_all('div', id="parent-fieldname-text")

  txt = list()

  count = 0
  for i in textos:
      if count < 1:
          txt.append(i.text)
      else:
          break
      count += 1

  return(txt)


