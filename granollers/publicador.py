import pymysql

def publicarNoticia(title, imagen, entrada, texto):
  #database connection
  connection = pymysql.connect(host="localhost",user="root",passwd="",database="sfabregat_tfg")
  cursor = connection.cursor()

  id="4"

  # queries for inserting values
  insert = 'INSERT INTO noticia(id_ayuntamiento, titulo, articulo, imagen) VALUES('+str(id)+', "'+title+'", "'+texto+'", "'+imagen+'");'

  #executing the quires
  cursor.execute(insert)
      

  #commiting the connection then closing it.
  connection.commit()
  connection.close()

  return ("Noticia publicada")