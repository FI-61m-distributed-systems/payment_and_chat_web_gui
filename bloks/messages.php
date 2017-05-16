<?php 
  $messages = null/*getAllMessages(30)*/;/*a-я, що повертатиме масив 2на2 із 30-ти останніх повідомлень*/
  /*атрибутами масиву 2на2 є username, text_massage і time*/
  for ($i = 4 /*count($messages)*/; $i>0 ; $i--) {
    $username = 'Username'/*$messages[$i]["username"]*/;
    $text_message = 'Text of message:)'/*$messages[$i]["text_massage"]*/;
    $time = '00:00:00 01.01.17'/*$messages[$i]["time"]*/;
    include "pattern_message.php";
  }
?>