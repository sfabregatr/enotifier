<?php 
include '../php/bd_con.php';
include '../templates/header2.php';

if(!isset($_SESSION['email'])){
   header("Location: ../login/");
}else{
   include '../templates/user-panel.php';
}

include '../templates/footer.php';
?>
