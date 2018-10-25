<?php
  // Recovery all messages
$bdd = new PDO("mysql:host=127.0.0.1;dbname=chatbox;charset=utf8", "root", "");
  $msgs = $bdd->query("SELECT * FROM messages ORDER BY id DESC");
  //LE BOUTON DENVOI IL EST CASSE
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" ; />
    <link rel="stylesheet" href="css/styleChat.php" type="text/css" />
    <title>Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="content">
        <div class="chatbox">
            <div class="msgs"></div>
            <div class="form">
                <form method="POST" action="">
                    <input type="text" name="message" placeholder="Message" />
                    <button type="submit" name="send">Envoyer</button>
                </form>
            </div>
        </div>
    </div>          
</body>
<script>    //je sais pas pourquoi mais ca marche pas, faut checker

	setInterval("messages()", 20);
	function messages() {
		$(".msgs").load("chatbox/chatbox_messages.view.php");
	}

</script>

</html>
