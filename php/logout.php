<?php

include 'bd_con_lector.php';

session_start();
session_unset();
session_destroy();

header('location: ../../');

?>