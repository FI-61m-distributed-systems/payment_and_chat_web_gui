<?php  
   include "functions.php";
   sendMessage($_SESSION["username"],$_POST["user_text"],date("H:i:s d.m.y"));
?>
