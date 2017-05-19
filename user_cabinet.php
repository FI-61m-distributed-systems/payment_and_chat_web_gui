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
        <a action="logout.php" href="index.html" class="logout">Log out</a>
        <a href="" action="" class="user"><?php echo $_SESSION["email"]?></a>
      </h1>
			<!-- вище, замість User, по сесії передаватиметься Username -->
			</hgroup>		
		</header>
		<div id="main">
			<div id="leftblok">
				<ul>
					<li><a href="user_cabinet.php" title="Головна">My cabinet</a></li>																																																				
					<li><a href="game.html">Game</a></li>
				</ul>
			</div>
			<div id="content">
				<div id="content_header">
					<div id="label_content">My cabinet</div>
					<div id="my_balance">My balance: <div id="amount"></div></div>
				</div>
				<div id="content_main">
					<hr>
          <div id="lable_transaction">Transaction</div>
          <br>
          <form name="transaction" method="post">
              <p>Receiver: <input type="text" name ="receiver" size="20" placeholder="Enter receivers login..."></p>
              <br>
              <p>Amount: <input type="text" name ="amount" size="9" placeholder="Enter amount..."></p>
              <br>
              <input type="button" value="Submit" class="" onClick="checktransactform(transaction)">
              <input type="reset" value="Cencel">
          </form>
        </div>
			</div>
		
      <div id= "rightblok">
        <div id="label_chat">Chat</div>
        <hr>
        <form name="send_message" action="" method="post" onsubmit="">
          <div id="write_message">
            <textarea type="text" id="user_text" placeholder="To write a message..." maxlength="255" rows="3" class="write_field"></textarea>
            <p><input type="submit" name="button_send" value="Send" class="button_send" onclick="addMessage()"></p>
          </div>
        </form>
        <div id="list_messages"></div>
      </div>
    </div>
		<footer>© Miss me? 2017</footer>
	</body>
</html>
