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
                    <p>Cuenta creada con exito!</p>
                    <p><button onclick="window.location='../login';" class="btn btn-primary btn-lg btn-block" type="submit">Log In</button></p>
                </div>
            </div>
        </div>
    </div>

<?php 
include '../templates/footer.php';
?>

