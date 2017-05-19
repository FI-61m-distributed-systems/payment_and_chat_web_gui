<?php 
function getAmount(){
   /*тут буде HTTP запит*/
   $amount = 200;
   return $amount;
}
   
function getMessages($period) {
   /*тут буде HTTP запит*/
   $arr = array( array('Вася', 'Hi!', '00:00:00 01.01.17' ), 
                array('Миша', 'Привет!', '00:00:01 01.01.17'), 
                array('Андрей', 'Привіт!', '00:00:02 01.01.17'));
	return $arr;
} 

function chekUser($email,$password){
   /*тут буде HTTP запит*/
   $chek = true;
   return $chek;
}
?>
