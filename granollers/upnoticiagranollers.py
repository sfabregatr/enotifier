from noticiaNueva import getNoticiaNueva, hayNueva

from scrapweb import obtenerTitulo, obtenerImagen, obtenerEntrada, obtenerTexto

from traductor import traducir

from publicador import publicarNoticia




### VARIABLES ###



#Link Web a scrapear

web = "https://www.granollers.cat"



#Link del apartado de noticias web a scrapear

webNoticias = 'https://www.granollers.cat/noticies/'



### FIN VARIABLES ###





### SCRAPEO DE PAGINA ###



#Titulo 



scrapTitulo = "h2"



#Imagen



scrapImagen = "foto-right right"



#Entrada



scrapEntrada = "lead"



#Texto



scrapTexto = "field-item even"



### FIN SCRAPEO DE PAGINA ###




### CODIGO ###



resultadoNoticiaNueva = getNoticiaNueva(web, webNoticias)



resultadoHayNoticia = 0



resultadoHayNoticia, resultadoNoticiaNueva = hayNueva(resultadoNoticiaNueva)



if resultadoHayNoticia == 1: 


    titulo = obtenerTitulo(resultadoNoticiaNueva, scrapTitulo)



    imagen = obtenerImagen(resultadoNoticiaNueva, scrapImagen)



    entrada = obtenerEntrada(resultadoNoticiaNueva, scrapEntrada)



    texto = obtenerTexto(resultadoNoticiaNueva, scrapTexto)



    ## Verificar Scrapeo ##

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



else: #Poner a 0 despues de pruebas

    print("No hay noticias")



### FIN CODIGO ###