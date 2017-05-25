<?php 
   function getMoney(){
      /*($amount =)тут буде HTTP запит*/
      return 200;
   }
   
   function getMessages($username,$period) {
      /*тут буде HTTP запит*/
      return array( array('Вася', 'Hi!', '00:00:00 01.01.17' ), 
      array('Миша', 'Привет!', '00:00:01 01.01.17'), 
      array('Андрей', 'Привіт!', '00:00:02 01.01.17'));
   } 
   
   function checkUser($email,$password){
      $postdata = http_build_query(
      array(
      'var1' => $email,
      'var2' => $password,
      )
      );
      
      $opts = array('http' =>
      array(
      'method'  => 'POST',
      'header'  => 'Content-type: text',
      'content' => $postdata
      )
      );
      
      $context = stream_context_create($opts);
      $result = file_get_contents('http://localhost/', false, $context);/*можливо буде щось інше, замість file_get_contents*/
      return $result;
   }
   
   function sendMessage($username,$user_text,$time) {
      $postdata = http_build_query(
      array(
      'var1' => $username,
      'var2' => $user_text,
      'var3' => $time
      )
      );
      
      $opts = array('http' =>
      array(
      'method'  => 'POST',
      'header'  => 'Content-type: text',
      'content' => $postdata
      )
      );
      
      $context = stream_context_create($opts);
      $result = file_get_contents('http://localhost/', false, $context);
   }
   
   function getUsername($email){
      $postdata = http_build_query(
      array(
      'var1' => $email
      )
      );
      
      $opts = array('http' =>
      array(
      'method'  => 'POST',
      'header'  => 'Content-type: text',
      'content' => $postdata
      )
      );
      
      $context = stream_context_create($opts);      
      $result = file_get_contents('http://localhost/', false, $context);
      return $result='User_name';
   }
?>
