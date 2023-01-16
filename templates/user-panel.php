<?php

    $nombre = $_SESSION['nombre'];

    $email = $_SESSION['email'];

    $id = $_SESSION['id'];

    $cont =1;

?>    



    <div class="contenedor">

        <div class="box1">

            <div class="card mb-4">

                <div class="card-header"><i class="fa-solid fa-user"></i> <b>Usuario</b>

                </div>

                <div class="centrar">

                    <img src="../images/admin-default.jpg" class="user-panel-foto"><br>

                    <button class="btn btn-primary btn-lg btn-block"  onclick="alert('Esta función de momento no esta habilitada');" type="submit" style="margin: auto; margin-bottom: 30px;">Cambiar Imagen</button>

                </div>



                <div class="box-centrada">

                    <div class="card mb-4">

                            <div class="card-header"><i class="fa-regular fa-square-check"></i> <b>Ayuntamientos</b>

                            </div>

                            

                            <div class="centrar" style="margin: auto; margin: 30px;">

                                <form method="get" action="/php/update-ayuntamiento.php">

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

                                                    ?> 

                                                        <div class="form-check form-switch">

                                                          <input class="form-check-input" type="checkbox" name="marcados_<?php echo $id_ayuntamiento ?>" value="<?php echo $id_ayuntamiento ?>" checked>

                                                          <label class="form-check-label"><?php echo $nombre_ayuntamiento ?></label>

                                                        </div>

                                                    <?php

                                                    $active = "false";


                                            }

                                            if($active == "true"){
                                            ?>
                                                <div class="form-check form-switch">

                                                  <input class="form-check-input" type="checkbox" name="marcados_<?php echo $id_ayuntamiento ?>" value="<?php echo $id_ayuntamiento ?>">

                                                  <label class="form-check-label"><?php echo $nombre_ayuntamiento ?></label>

                                                </div>
                                            <?php
                                            }

                                        }

                                    } 

                                    ?>



                                    <input value="<?php echo $cont?>" name="cont" type="hidden">



                                    <button class="btn btn-primary btn-lg btn-block" type="submit" style="margin: auto; margin-top: 10px; margin-bottom: 20px;">Actualizar Datos</button>  



                                </form>

                            </div>

                    </div>

                </div>

            </div>

        </div>





        <div class="box2">

            <div class="card mb-4">

                <div class="card-header"><i class="fa-regular fa-newspaper"></i> <b>Datos de usuario</b></div>

                    <div class="centrar"> 

                        <h3 class="mb-5" style="margin-top: 20px">Modificar datos de usuario</h3>

                            <form method="post" action="/php/update.php" oninput="password2.setCustomValidity(password2.value != password.value ? 'Las contraseñas no coinciden' : '')">

                            <div class="form-outline mb-4">

                            <label class="form-label" for="typeEmailX-2">Nombre</label>

                                <input type="text" id="typeEmailX-2" required="required" value= "<?php echo $nombre ?>"name="nombre" class="form-control form-control-lg" />

                            </div>

                            <div class="form-outline mb-4">

                            <label class="form-label" for="typeEmailX-2">Correo Electronico</label>

                                <input type="email" id="typeEmailX-2" required="required" name="email" placeholder= "<?php echo $email ?>" class="form-control form-control-lg" disabled/>

                            </div>



                            <div class="form-outline mb-4">

                            <label class="form-label" for="typePasswordX-2">Nueva Contraseña</label>

                                <input type="password" id="typePasswordX-2" required="required" name="password" class="form-control form-control-lg" />

                            </div>



                            <div class="form-outline mb-4">

                            <label class="form-label" for="typePasswordX-2">Repetir Nueva Contraseña</label>

                                <input type="password" id="typePasswordX-2" required="required" name="password2" class="form-control form-control-lg" />

                            </div>   

                        <button class="btn btn-primary btn-lg btn-block" type="submit" style="margin: auto; margin-bottom: 30px;">Actualizar Datos</button>    

                        </form>         

                    </div>

            </div>

        </div>

    </div>

  