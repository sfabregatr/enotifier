    <div class="contenedor">
        <div class="box1">
            <div class="card mb-4">
                <div class="card-header"><i class="fa-solid fa-user"></i> <b>Usuario</b>
                </div>
                <div class="centrar">
                    <!-- Formulario Login de Bootstrap -->
                    <form method="post" action="/php/login.php">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Iniciar Sesión</h3>
                            <div class="form-outline mb-4">
                            <label class="form-label" for="typeEmailX-2">Correo Electronico</label>
                                <input type="email" id="typeEmailX-2" required="required" name="email" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline mb-4">
                            <label class="form-label" for="typePasswordX-2">Contraseña</label>
                                <input type="password" id="typePasswordX-2" required="required" name="password" class="form-control form-control-lg" />
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

        <div class="box2">
            <div class="card mb-4">
                <div class="card-header"><i class="fa-regular fa-newspaper"></i> <b>Últimas Noticias</b>
                </div>
                <div class="noticia-contenedor">
                    <div class="card mb-4">
                        <div class="card-header"><i class="fa-solid fa-circle-info"></i> <b>Información</b>
                        </div>
                        <div class="centrar-texto">
                            <p style="text-align: center;"><a href="/login/">Entra en tu cuenta</a> o <a href="/register/"> registrate</a> para informarte de las últimas noticias</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>