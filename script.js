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
    