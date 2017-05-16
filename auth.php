<?php 
  require_once "start.php";
  $email = htmlspecialchars($_POST["email"]);
	$password = htmlspecialchars($_POST["password"]);
	$password = md5($password);
	if(true/*chekUser($email,$password)*/) { //chekUser - ф-я, що повертає true, якщо користувач успішно зареєструвався
	  $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
	}
  else {
    $_SESSION["error_auth"] = 1;
    header("Location:  index.html");/*редерект обратно якщо помилка авторизації*/
    exit;
  }
  header("Location:  user_cabinet.php");/*редерект на сторінку user_cabinet.php*/
  exit;
?>
