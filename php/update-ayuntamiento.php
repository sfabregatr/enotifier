<?php
	include 'bd_con.php';
	include 'error_log/';

	session_start();

	$id = $_SESSION['id'];
	$cont = $_GET['cont'];
	$cont_cero = 1;

	$sql = "DELETE FROM seguir WHERE id_usuario = $id";
	$mysqli->query($sql);

	while($cont > $cont_cero){

		$id_ayuntamiento = $_GET['marcados_'. $cont_cero . ''];

		if(isset($_GET['marcados_'. $cont_cero . ''])){
			$sql = "INSERT INTO seguir (id_usuario, id_ayuntamiento) VALUES('$id','$id_ayuntamiento')";
			$mysqli->query($sql);
		}

		$cont_cero++;
}

$mysqli->close();
header("Location: ../cuenta-update/");

?>