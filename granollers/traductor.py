import googletrans
from googletrans import Translator

def traducir(titulo, entrada, texto):

    translator = Translator()

    tituloDump = ''.join(titulo)

    entradaDump = ''.join(entrada)

    textoDump = ''.join(texto)


    tituloTraducido = translator.translate(tituloDump, dest='es')

    entradaTraducido = translator.translate(entradaDump, dest='es')

    textoTraducido = translator.translate(textoDump, dest='es')

    tituloDef = tituloTraducido.text

    entradaDef = entradaTraducido.text

    textoDef = textoTraducido.text

    return(tituloDef, entradaDef, textoDef)