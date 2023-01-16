import os

from os import path

from noticiaNueva import getNoticiaNueva, hayNueva

from scrapweb import obtenerTitulo, obtenerImagen, obtenerEntrada, obtenerTexto

from traductor import traducir

from publicador import publicarNoticia



### VARIABLES ###



#Link Web a scrapear

web = "https://www.esplugues.cat"



#Link del apartado de noticias web a scrapear

webNoticias = 'https://www.esplugues.cat/'



 #para obtener el link

claseNoticia = "imatge_Destacada"



### FIN VARIABLES ###





### SCRAPEO DE PAGINA ###



#Titulo 



scrapTitulo = "parent-fieldname-title"



#Imagen



scrapImagen = "newsImageContainer"



#Entrada



scrapEntrada = "parent-fieldname-description"



#Texto



scrapTexto = "'parent-fieldname-text'"



### FIN SCRAPEO DE PAGINA ###

### CODIGO ###



resultadoNoticiaNueva = getNoticiaNueva(web, webNoticias, claseNoticia)



resultadoHayNoticia = 0



resultadoHayNoticia, resultadoNoticiaNueva = hayNueva(resultadoNoticiaNueva)



if resultadoHayNoticia == 1: #Poner a 1 despues de pruebas



    #Eliminar foto antigua

    if path.exists("fotoesplugues.jpg"):

        os.remove("fotoesplugues.jpg")



    titulo = obtenerTitulo(resultadoNoticiaNueva, scrapTitulo)



    imagen = obtenerImagen(resultadoNoticiaNueva, scrapImagen)



    entrada = obtenerEntrada(resultadoNoticiaNueva, scrapEntrada)



    texto = obtenerTexto(resultadoNoticiaNueva, scrapTexto)



    ## Verificar Scrapeo ##



    #print(titulo+"\n\n")

    #print(imagen+"\n\n")

    #print(entrada+"\n\n")

    print("Obtener Noticia: OK")



    ## Fin Verificar Scrapeo ##



    ### TRADUCIR NOTICIA ###

    

    tituloTrad, entradaTrad, textoTrad = traducir(titulo,entrada,texto)



    print("Traduccion: OK")



    ### FIN TRADUCIR NOTICIA ###





    ### SUBIR NOTICIA ###



    print("Publicando noticia...")



    noticiaPublicada = publicarNoticia(tituloTrad, imagen, entradaTrad, textoTrad)

    print('Noticia publicada')

    ### FIN SUBIR NOTICIA ###

    ### FIN CODIGO ###



else: 

    print("No hay noticias")



### FIN CODIGO ###