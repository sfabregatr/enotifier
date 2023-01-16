<?php
session_start();
?>

<!doctype html>

<html>

<head>

<script src="../js/bootstrap.bundle.min.js"></script>

<link rel='stylesheet' href="../css/bootstrap.min.css">

<link href="../fontawesome/css/fontawesome.css" rel="stylesheet">

<link href="../fontawesome/css/fontawesome.css" rel="stylesheet">

<link href="../fontawesome/css/brands.css" rel="stylesheet">

<link href="../fontawesome/css/solid.css" rel="stylesheet">

<link rel='stylesheet' href="../css/mycss.css">

<link rel="icon" type="image/x-icon" href="../favicon.ico">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>E-Notifier</title>

</head>



<body>

    <!-- Inicio Menu -->

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">

        <div class="container-fluid">

            <a class="navbar-brand" href="/">

            <i class="fa-solid fa-wifi" style="color: #0d6efd;"></i>



                <span class="text-waring">E-Notifier</span>

            </a>



            <!-- boton del menu -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>



            <!-- collapse menu-->

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav me-auto">

                    <li class="nav-item">

                        <a class="nav-link" aria-current="page" id="inicio" href="../">Inicio</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link active" href="../panel-de-usuario/" id="panel-de-usuario">Panel de Usuario</a>

                    </li>

                </ul>



                <ul class="navbar-nav flex-row flex-wrap text-light">
                    <li class="nav-item col-6 col-md-auto p-3">
                        <?php
                            if(isset($_SESSION['email'])){
                                echo '<a class="navbar-brand" href="/php/logout.php/"><i class="fa-solid fa-right-from-bracket"></i></a>';
                            }else{
                                echo '<a class="navbar-brand" href="/login/"><i class="fa-solid fa-user"></i></a>';
                            }
                        ?>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

