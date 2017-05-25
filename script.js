function showMoney(){
   $.ajax({  
      url: "blocks/money.php",
      cache: false,
      success: function(html){ 
         $("#money").html(html);      
      }           
   });
}

function showMessages(){  
   $.ajax({  
      url: "blocks/messages.php",  
      cache: false,  
      success: function(html){  
         $("#list_messages").html(html);  
      }  
   });  
}

$(document).ready(function(){  
   showMessages(); 
   showMoney();  
   setInterval('showMessages()',1000);  
   setInterval('showMoney()',1000);
});


/*$.ajax({
   url: "user_cabinet.php",
   success: function(){
   $("#list_messages").append("<?php include 'bloks/messages.php';?>");
   }
});*/

function check_username(username){
   var username_pattern = /[0-9a-z]{4,20}/;
   return username_pattern.test(username);
}

function check_password(password_){
   var password_pattern = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{4,15}$/;
   return password_pattern.test(password_);
}

function check_email(email){
   var email_pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   return email_pattern.test(email);
}

function checkAuthform(obj) {
	var valid_email = check_email(obj.email.value);
	var valid_password = check_password(obj.password_.value);
   
   var message = '';
	if (!valid_email) {
      message = message +"Email is incorrect!\n";
   }
	if (!valid_password) {
      message = message +"Password is incorrect!\n";
   }
	if (valid_email && valid_password) {
		alert("Authentification is uccessfull!");
   }
   else {
      alert("Entered data is incorrect: \n" + message);
   }
}

function checkRegform(obj) {
   var password_1 = obj.password_1.value;
	var password_2 = obj.password_2.value;
   
	var valid_username = check_username(obj.username.value);
	var valid_email = check_email(obj.email.value);
	var valid_password = check_password(password_1);
	
   var message = '';
   
   if (!valid_username){
		message = message +"Username is incorrect!\n";
   }
	if (!valid_email) {
      message = message +"Email is incorrect!\n";
   }
	if (!valid_password) {
      message = message +"Password is incorrect!\n";
   }
	if (!(password_1 == password_2)){
      message = message +"Passwords are not equal!\n";
   }
	if (valid_username &&  valid_email && valid_password && (password_1 == password_2)) {
		alert("Registeration is successfull!");
   }
   else {
      alert("Entered data is incorrect: \n" + message);
   }
	
}

function checkTransactform(obj){
   var money_pattern = /[0-9]/;
   var valid_username = checkusername(obj.receiver.value);
	var valid_money = money_pattern.test(obj.money.value);
   if (valid_username &&  valid_money) {
      alert("Transaction is successfull!");
      obj.receiver.value = '';
      obj.money.value = '';
   }
   else if(!valid_username)
   {
      alert("Receiver is incorrect!");
   }
   else if(!valid_money)
   {
      alert("Amount is incorrect!");
   }
}

function sendMessage(){
	var text_massage = $('#user_text').val();
	if (text_massage != ""){
      $.ajax({  
         url: "blocks/sendmessage.php",
         cache: false,
         success: function(){ 
            alert("Message is send!"); 
         }           
      });
      showMessages();
      document.getElementById('user_text').value='';
   }
}
