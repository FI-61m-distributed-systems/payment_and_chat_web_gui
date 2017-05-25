<?php 
   session_start();
   unset($_POST["email"]);
   unset($_POST["password"]);
   header("Location:  index.html");
   exit;
?>
