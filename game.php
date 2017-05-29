<?php 
   session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Payment system</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles\style.css">
		<script src="jquery-3.2.1.js"></script>
		<script src="script.js"></script>
   </head>
	<body>
		<header>
			<hgroup>
            <h1>Payment system
               <a href="index.html" action="logout.php" class="logout">Log out</a>
               <a href="" action="" class="user"><?php echo $_SESSION["username"]?></a>
            </h1>
         </hgroup>		
      </header>
		<div id="main">
			<div id="leftblok">
				<ul>
					<li><a href="user_cabinet.php" title="Головна">My cabinet</a></li>																																																				
					<li><a href="game.php">Game</a></li>
            </ul>
         </div>
			<div id="content">
				<div id="content_header">
					<div id="label_game_name">GAME 2048</div>
					<div id="my_balance">My balance: <div id="money"></div></div>
            </div>
				<div id="content_main">
					<hr>

               <div id="grid-container"></div>
               <a href="" action="reset.php" class="button_reset">Try again</a>
               <div id="rules">
                  <hr>
                  <strong >How to play:</strong> Use your <strong>arrow keys</strong> to move the tiles. 
                  <br>
                  When two tiles with the same number touch, they <strong>merge into one!</strong>
               </div>
               
            </div>
         </div>
         
         <div id= "rightblok">
            <div id="label_chat">Chat</div>
            <hr>
            <form name="send_message" action="" method="post" onsubmit="">
               <div id="write_message">
                  <textarea type="text" id="user_text" name="user_text" placeholder="To write a message..." maxlength="255" rows="3" class="write_field"></textarea>
                  <p><input type="submit" id="button_send" name="button_send" value="Send" class="button_send" onclick="sendMessage()"></p>
               </div>
            </form>
            <div id="list_messages"></div>
         </div>
      </div>
      <footer>© Miss me? 2017 </footer>
   </body>
</html>
