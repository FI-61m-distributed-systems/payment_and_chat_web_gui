<?php include "start.php";?>
<?php 
  $messages = null/*getAllMessages(30)*/;/*a-�, �� ����������� ����� 2��2 �� 30-�� ������� ����������*/
  /*���������� ������ 2��2 � username, text_massage � time*/
  for ($i = 0; $i < count($messages); $i++) {
    $username = 'Username'/*$messages[$i]["username"]*/;
    $text_message = 'Text of message:)'/*$messages[$i]["text_massage"]*/;
    $time = '00:00:00 01.01.17'/*$messages[$i]["time"]*/;
    include "pattern_message.php";
  }
?>