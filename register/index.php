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
                    <form action="../php/registro.php" method="post" oninput="password2.setCustomValidity(password2.value != password.value ? 'Las contraseñas no coinciden' : '')">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Registro</h3>

                            <div class="form-outline mb-4">
                            <label class="form-label" for="typeEmailX-2">Nombre</label>
                                <input type="text" id="typeEmailX-2" required="required" name="nombre" class="form-control form-control-lg" />
                            </div>
                            <div class="form-outline mb-4">
                            <label class="form-label" for="typeEmailX-2">Correo Electronico</label>
                                <input type="email" id="typeEmailX-2" required="required" name="email" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline mb-4">
                            <label class="form-label" for="typePasswordX-2">Contraseña</label>
                                <input type="password" id="typePasswordX-2" required="required" name="password" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline mb-4">
                            <label class="form-label" for="typePasswordX-2">Repetir Contraseña</label>
                                <input type="password" id="typePasswordX-2" required="required" name="password2" class="form-control form-control-lg" />
                            </div>

                            <button class="btn btn-primary btn-lg btn-block" type="submit">Crear cuenta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php 
include '../templates/footer.php';
?>



