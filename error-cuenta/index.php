<?php 
include '../php/bd_con.php';
include '../templates/header.php';
?>

    <div class="contenedor">
        <div class="box-centrada">
            <div class="card mb-4">
                <div class="card-header"><i class="fa-regular fa-message"></i> <b>Mensaje</b>
                </div>
                <div class="centrar">
                    <p>El nombre de usuario o contraseña no es correcto!</p>
                    <p><button onclick="window.location='../login';" class="btn btn-primary btn-lg btn-block" type="submit">Volver</button></p>
                </div>
            </div>
        </div>
    </div>

<?php 
include '../templates/footer.php';
?>

