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

function showScore(){
   $.ajax({  
      url: "blocks/score.php",
      cache: false,
      success: function(html){ 
         $("#score").html(html);      
      }           
   });
}

$(document).ready(function(){  
   showMessages(); 
   showMoney();  
   showScore();
   setInterval('showMessages()',1000);  
   setInterval('showMoney()',1000);
   setInterval('showScore()',1000);
});


/*$.ajax({
   url: "user_cabinet.php",
   success: function(){
   $("#list_messages").append("<?php include 'bloks/messages.php';?>");
   }
});*/

function checkusername(username){
   var username_pattern = /[0-9a-z]{4,20}/;
   return username_pattern.test(username);
}

function checkauthform(obj) {
   var password_1 = obj.password_1.value;
	var password_2 = obj.password_2.value;
   
	var email_pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
	var password_pattern = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{4,15}$/;
   
	var valid = checkusername(obj.username.value);
	var valid1 = email_pattern.test(obj.email.value);
	var valid2 = password_pattern.test(password_1);
	
   var message = '';
   
   if (!valid){
		message = message +"Username is incorrect!\n";
   }
	if (!valid1) {
      message = message +"Email is incorrect!\n";
   }
	if (!valid2) {
      message = message +"Password is incorrect!\n";
   }
	if (!(password_1 == password_2)){
      message = message +"Passwords are not equal!\n";
   }
	if (valid &&  valid1 && valid2 && (password_1 == password_2)) {
		alert("Registeration is successfull!");
   }
   else {
      alert("Entered data is incorrect: \n" + message);
   }
	
}

function checktransactform(obj){
   var money_pattern = /[0-9]/;
   var valid = checkusername(obj.receiver.value);
	var valid1 = money_pattern.test(obj.money.value);
   if (valid &&  valid1) {
      alert("Transaction is successfull!");
      obj.receiver.value = '';
      obj.money.value = '';
   }
   else if(!valid)
   {
      alert("Receiver is incorrect!");
   }
   else if(!valid1)
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
