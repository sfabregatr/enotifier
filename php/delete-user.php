
<?php 
include '../php/bd_con.php';
include '../templates/header.php';

$id= $_POST['id'];

	if($_SESSION['id_rol'] == 2){

	    $query="DELETE FROM usuarios where id='$id'";

	    $data=mysqli_query($mysqli,$query);
?>

<div class="contenedor">
        <div class="box-centrada">
            <div class="card mb-4">
                <div class="card-header"><i class="fa-regular fa-message"></i> <b>Mensaje</b>
                </div>
                <div class="centrar">
					<?php

						    if($data){
						        echo"Usuario eliminado";
						    }else{
						        echo"El usuario no se pudo borrar";
						    }
						}
					?>

					<p><button onclick="window.location='../../';" class="btn btn-primary btn-lg btn-block" type="submit">Volver</button></p>

                </div>
            </div>
        </div>
    </div>

<?php 
include '../templates/footer.php';
?>

