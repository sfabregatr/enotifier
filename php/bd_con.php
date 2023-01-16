<?php

$mysqli = new mysqli("localhost", "root", "", "sfabregat_tfg");

if ($mysqli->connect_errno) {

    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}



$acentos = $mysqli->query("SET NAMES 'utf8'");



?>