function checkauthform(obj) {
	var user_name = obj.username.value;
	var email = obj.email.value;
	var pass_word_1 = obj.password_1.value;
	var pass_word_2 = obj.password_2.value;
    
	var user_name_pattern = /[0-9a-z]+/;
	var email_pattern = /[0-9a-z_]+@[0-9a-z_]+\.[a-z]{2,5}/;
	var pass_word_pattern = /[0-9a-z]+/;
  
	var valid = user_name_pattern.test(user_name);
	var valid1 = email_pattern.test(email);
	var valid2 = pass_word_pattern.test(pass_word_1);
  
	if (valid &&  valid1 && valid2 && (obj.password_1.value == obj.password_2.value)) {
		alert("Registeration is successfull!");
		/*$('#login').hide();/*не працює*/
	}
	else {
        alert("Entered data are incorrect!");
		/*$("#login :text, :password :enabled").css("color", "red");/*не працює*/
	}
}
    