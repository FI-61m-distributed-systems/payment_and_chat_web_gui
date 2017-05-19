<?php 
	include "functions.php";
   $messages = getMessages($period);
   for ($i = count($messages)-1; $i>=0 ; $i--){
      $username = $messages[$i][0];
      $text_message = $messages[$i][1];
      $time = $messages[$i][2];
      include "pattern_message.php";
   }
?>
