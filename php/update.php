<?php
	include 'bd_con.php';
	session_start();

	$nombre = $_POST['nombre'];

	$password = md5($_POST['password']);

	$password2 = md5($_POST['password2']);

	$id = $_SESSION['id'];

	if (strcmp($password, $password2) == 0)
	{

		$sql = "UPDATE usuarios SET nombre ='$nombre', password = '$password' WHERE id=$id";
		
		$mysqli->query($sql);

			$select = "SELECT * FROM usuarios WHERE id = $id";

			$result = mysqli_query($mysqli, $select);

		   if(mysqli_num_rows($result) > 0){

				$row = $result->fetch_assoc();

			    $nombre = $row['nombre'];

			    $_SESSION['nombre'] = $nombre;
			}

		$mysqli->close();
		header("Location: ../cuenta-update/");

	}else{

		alert("Ha habido un error");
		$mysqli->close();
		header("Location: ../panel-de-usuario/");

	}

?>