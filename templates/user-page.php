<?php

    $nombre = $_SESSION['nombre'];

    $email = $_SESSION['email'];

    $id = $_SESSION['id'];

    $lista = array();

    $cont=0;

?>    


    <div class="contenedor">
        <div class="box1">
            <div class="card mb-4">
                <div class="card-header"><i class="fa-solid fa-user"></i> <b>Usuario</b>
                </div>
                <div class="centrar">

                	<h3 style="margin-top: 10px;">Hola <?php echo $nombre?></h3>

                	<img src="../images/admin-default.jpg" class="user-panel-foto"><br>

                	<h4>Seguidos:</h4>

                	<ul class="list-group list-group-flush">

                		<?php

                            $select_ayuntamiento = "SELECT * FROM ayuntamiento";

                            $result = mysqli_query($mysqli, $select_ayuntamiento);

                            if(mysqli_num_rows($result) > 0){

                                while ($row = $result->fetch_assoc()){

                                    $active = "true";

                                    $cont = $cont+1;

                                    $nombre_ayuntamiento = $row["nombre"];

                                    $id_ayuntamiento = $row["id"];

                                    $seguir_ayuntamiento = "SELECT id_ayuntamiento FROM seguir WHERE id_usuario = $id AND id_ayuntamiento = $id_ayuntamiento";

                                    $resultado = mysqli_query($mysqli, $seguir_ayuntamiento);

                                    if(mysqli_num_rows($resultado) > 0){
                                        echo '<li class="list-group-item"><i class="fa-regular fa-square-check"></i> '.$nombre_ayuntamiento.'</li>';
                                        array_push($lista, $id_ayuntamiento);
                                    }
                                }
                            } 

                		?>

					</ul>

                	<button class="btn btn-primary btn-lg btn-block"  onclick="window.location='../panel-de-usuario/';" type="submit" style="margin: auto; margin-bottom: 30px; margin-top: 30px;"><i class="fa-regular fa-gear"></i> Ajustes</button>

                </div>
            </div>
        </div>

        <div class="box2">
            <div class="card mb-4">
                <div class="card-header"><i class="fa-regular fa-newspaper"></i> <b>Últimas Noticias</b>
                </div>

                <?php
                    $noticia_ayuntamiento = "SELECT * FROM noticia ORDER BY id DESC LIMIT 10";

                    $noticia_result = mysqli_query($mysqli, $noticia_ayuntamiento);

                    if(mysqli_num_rows($noticia_result) > 0){
                        $i = 0;
                        while ($row2 = $noticia_result->fetch_assoc()){
                            $id_noticia = $row2["id"];
                            $id_ayuntamiento = $row2["id_ayuntamiento"];
                            $titulo = $row2["titulo"];
                            $articulo = $row2["articulo"];
                            $imagen = $row2["imagen"];
                            $date = $row2["date"];
                            
                            $date = str_split($date);

                            $year = $date[0] . $date[1] . $date[2] .  $date[3];

                            $mes = $date[5] . $date[6];

                            $dia = $date[8] . $date[9];

                            $date = $dia . '-' . $mes . '-' . $year;


                            $buscar_ayuntamiento = "SELECT * FROM ayuntamiento WHERE id = $id_ayuntamiento";

                            $buscar_result = mysqli_query($mysqli, $buscar_ayuntamiento);

                            $row3 = $buscar_result->fetch_assoc();
                            
                            $nombre_ayuntamiento = $row3["nombre"];

                            $favicon_ayuntamiento = $row3["favicon"];


                            if (in_array($id_ayuntamiento, $lista)) {
                               ?>
                                    <div class="noticia-contenedor">
                                        <div class="card mb-4">
                                            <div class="card-header"><h3><img src="<?php echo $favicon_ayuntamiento;?>" style="width: 20px; height: 35px; margin-bottom: 10px;"> <b><?php echo $nombre_ayuntamiento;?></b></h3></div>
                                            <div class="centrar-texto">
                                                <h4><?php echo $titulo;?></h4>
                                                <br>
                                                <p><?php echo $articulo;?></p>
                                                <br><br>
                                                <div class="centrar-img">
                                                    <img src="<?php echo $imagen;?>" style="width: 100%; margin: auto;">
                                                    <br><br>
                                                    <h6 style="float: right;"><?php echo $date;?></h6>
                                                </div>
                                                <br>
                                           </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    }

                ?>
            </div>
        </div>
    </div>


