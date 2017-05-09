function checkauthform(obj) {
	var username = obj.username.value;
	var email = obj.email.value;
	var password_1 = obj.password_1.value;
	var password_2 = obj.password_2.value;
    
	var username_pattern = /[0-9a-z]{4,20}/;
	var email_pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
	var password_pattern = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{4,15}$/;
  
	var valid = username_pattern.test(username);
	var valid1 = email_pattern.test(email);
	var valid2 = password_pattern.test(password_1);
	
	if (valid &&  valid1 && valid2 && (password_1 == password_2)) {
		alert("Registeration is successfull!");
		/*window.location.href = 'повний шлях/index.html';*/ /*redirect на сторінку index.html*/
	}
	else {
        alert("Entered data is incorrect!");
		/*$("#login :text, :password :enabled").css("color", "red");*//*не працює*/
	}
	if (!valid){
		alert("Username is incorrect!");
	}
	if (!valid1) {
		alert("Email is incorrect!");
	}
	
	if (!valid2) {
		alert("Password is incorrect!");
	}
	if (!(password_1 == password_2)){
		alert("Passwords are not equal!");
	}
}

function addMessage(){
	var t = new Date();
    var h = t.getHours();
    var m = t.getMinutes();
    var s = t.getSeconds();
	var d = t.getDate();
	var mn = t.getMonth()+1;
	var y = t.getFullYear();
    var result_time = h+":"+m+":"+s;
	var result_date = d+"."+mn+"."+y;
	var chat_massage=$('#user_text').val();
    $('#list_messages').append('<div id = "chat_massage"><ul><li><div id="chat_username">'
	+'Username'+'</div><div id="chat_time">'/*тут по сесії передаватиметься Username*/
	+result_time+" "+result_date+'</div></li><li>'
	+chat_massage+'</li></ul></div>');
	/*$('#input: text').val()=0;*/
	document.getElementById('user_text').value='';
}
