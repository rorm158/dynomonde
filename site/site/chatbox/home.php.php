<?php

// Form send messages
if(isset($_POST['send'])) {
	if(isset($_POST['message'])) {
		if(!empty($_POST['message'])) {
			if(strlen($_POST['message']) <= 500) {

				$message = htmlspecialchars($_POST['message']);

				$req = $bdd->prepare("INSERT INTO messages (pseudo, message) VALUES (?,?)");
				$req->execute(array($_SESSION['user']['pseudo'], $message));

			} else {
				$error = "Votre message doit faire moins de 500 caractères !";
			}
		} else {
			$error = "Vous devez entrer un message !";
		}
	}
}



require_once "chatbox/home.view.php";
?>
