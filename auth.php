<?php 
   session_start();
   include "blocks/functions.php";
   $email = htmlspecialchars($_POST["email"]);
   $password = htmlspecialchars($_POST["password"]);
   $password = md5($password);

   if(chekUser($email,$password)) {
      $_SESSION["email"] = $email;
   }
   else {
      $_SESSION["error_auth"] = 1;
      header("Location:  index.html");
      exit;
   }
   header("Location:  user_cabinet.php");
   exit;
?>
