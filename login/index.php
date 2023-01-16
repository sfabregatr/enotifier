<?php 
include '../php/bd_con.php';
include '../templates/header.php';
?>

    <div class="contenedor">
        <div class="box-centrada">
            <div class="card mb-4">
                <div class="card-header"><i class="fa-solid fa-user"></i> <b>Usuario</b>
                </div>
                <div class="centrar">
                    <!-- Formulario Login de Bootstrap -->
                    <form method="post" action="../php/login.php">
                    <div class="card-body p-5 text-center">
                        <h3 class="mb-5">Iniciar Sesión</h3>
                        <div class="form-outline mb-4">
                        <label class="form-label" for="typeEmailX-2">Correo Electronico</label>
                            <input type="email" required="required" id="typeEmailX-2" name="email" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="typePasswordX-2">Contraseña</label>
                            <input type="password" required="required" id="typePasswordX-2" name="password" class="form-control form-control-lg" />
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-start mb-4">
                            <label><a href="#" onclick="alert('Contacta con el administrtador');">¿Has olvidado tu contraseña?</a> </label>
                        </div>
                        <div class="form-check d-flex justify-content-start mb-4">
                            <label><a href="/register/">Crear Cuenta</a> </label>
                        </div>

                        <button class="btn btn-primary btn-lg btn-block" type="submit">Entrar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php 
include '../templates/footer.php';
?>


