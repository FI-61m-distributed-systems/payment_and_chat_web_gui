<!DOCTYPE html>
<html>
	<head>
		<title>Payment system</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles\style.css">
		<script src="jquery-1.2.6.js"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<hgroup>
			<h1>Payment system<a href="index.html" class="exit">Log out</a><a href="" action="" class="user">User</a></h1>
			<!-- вище, замість User, по сесії передаватиметься Username -->
			</hgroup>		
		</header>
		<div id="main">
			<div id="leftblok">
				<ul>
					<li><a href="user_cabinet.html" title="Головна">My cabinet</a></li>																																																				
					<li><a href="game.html">Game</a></li>
				</ul>
			</div>
			<div id="content">
				<div id="content_header">
					<div id="label_content">My cabinet</div>
					<div id="my_balance">My balance: <div id="amount"><script>Show_amount()</script></div></div>
				</div>
				<div id="content_main">
					<hr>
					
				</div>
			</div>
			<div id= "rightblok">
				<div id="label_chat">Chat</div>
				<hr>
				<!--<form name="send_message" action="" method="post" onsubmit="return send_messageform()";>-->
					<div id="write_message">
						<textarea type="text" id="user_text" placeholder="To write a message..." maxlength="255" rows="3" class="write_field"></textarea>
						<p><input type="submit" name="button_send" value="Send" class="button_send" onclick="addMessage()"></p>
					</div>
				<!--</form>-->
				<!-- шаблон для повідомлення -->
				<div id="list_messages">
					<div id="chat_massage">
						<ul>
							<li><div id="chat_username">Username</div><div id="chat_time">00:00:00 01.01.17 </div></li>																																																		
							<li>Text of message: bla-bla-bla:) bla-bla-bla:) bla-bla-bla:)</li>
						</ul>
					</div>
				</div>
				<!-- -->
			</div>
		</div>
		<footer>© Miss me? 2017</footer>
	</body>
</html>
