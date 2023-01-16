<?php 
include 'php/bd_con.php';
include 'templates/header.php';

if(!isset($_SESSION['email'])){
   include 'templates/no-user.php';
}else{

   if($_SESSION['id_rol'] == 1){
      include 'templates/user-page.php';
   }

   if($_SESSION['id_rol'] == 2){
      include 'templates/admin-page.php';
   }
}


include 'templates/footer.php';
?>



