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
   
   function getBlocks(){
      return array( array('1', '2', '3', '4'), 
      array('5', '6', '7', '8'), 
      array('9', '10', '11', '12'),
      array('13', '14', '15', '16'));
   }
   
   function chekUser($email,$password){
      /*$chek = тут буде HTTP запит*/
      return true;
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
      
      $result = file_get_contents('http://адреса_сервера_отримувача', false, $context);
   }
   
   function getUsername($email){
      /*тут буде HTTP запит*/
      return "User_name";
   }
?>
