<?php

// Recovery all messages
$bdd = new PDO("mysql:host=127.0.0.1;dbname=chatbox;charset=utf8", "root", "");
$msgs = $bdd->query("SELECT * FROM messages ORDER BY id DESC");

?>


<?php while($msg = $msgs->fetch()) { ?>
	<b><?= $msg["pseudo"] ?></b> : <span class="message"><?= $msg['message'] ?><br />
<?php } ?>