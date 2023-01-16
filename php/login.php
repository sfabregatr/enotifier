<?php
	include 'bd_con_lector.php';
	session_start();

	$email = $_POST['email'];

	$password = md5($_POST['password']);


	$select = "SELECT * FROM usuarios WHERE email = '$email' && password = '$password' ";

	$result = mysqli_query($mysqli, $select);

   if(mysqli_num_rows($result) > 0){

	$row = $result->fetch_assoc();

    $nombre = $row['nombre'];
    $id_rol = $row['id_rol'];
    $email = $row['email'];
    $id = $row['id'];

    $_SESSION['nombre'] = $nombre;
    $_SESSION['id_rol'] = $id_rol;
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $id;

	header("Location: ../");

	}else{
		header("Location: ../error-cuenta/");
	}
?>