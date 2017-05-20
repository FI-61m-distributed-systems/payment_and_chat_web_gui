<?php 
   session_start();
   include "blocks/functions.php";
   $email = htmlspecialchars($_POST["email"]);
   $password = md5(htmlspecialchars($_POST["password"]));
   
   if(chekUser($email,$password)) {
      $_SESSION["email"] = $email;
      $_SESSION["username"] = getUsername($email);
   }
   else {
      $_SESSION["error_auth"] = 1;
      header("Location:  index.html");
      exit;
   }
   header("Location:  user_cabinet.php");
   exit;
?>
