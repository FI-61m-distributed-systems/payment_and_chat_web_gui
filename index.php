<!DOCTYPE html>
<html>
	<head>
		<title>Greeting page</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles\style.css">
		<script src="jquery-3.2.1.js"></script>
		<script src="script.js"></script>
   </head>
	<body>
		<header>
			<hgroup>
				<h1>Payment system<a href="index.html" title="Sing in">Sign in</a></h1>
         </hgroup>		
      </header>
		<div id="main">
			<div id="login">
				<div id="label_create_account">Sing in to Payment system</div>
            <hr>
				<form name="auth" action="auth.php" method="post">
					Enter email<input type="text" name="email" placeholder="example@mail"/>
					Enter password	<input type="password" name="password_" placeholder="*********"/>
					<p><input type="submit" name="button_auth" value="Login" class="button" onclick="checkAuthform(auth)"/></p>
					<hr>
            </form>
				<div id="create_account">
					<p>or</p>
					<a href="create_account.html" title="Create account">Create account</a>
            </div>
         </div>
      </div>
		<footer>© Miss me? 2017</footer>
   </body>
</html>
