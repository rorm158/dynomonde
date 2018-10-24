<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dynomonde</title>
        <link rel="stylesheet" href="style.php" media="all" type="text/css" />
         <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
    </head>
    <body>
         <h1 class="principal">JOUER</h1>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="jouer.php">Jouer</a></li>
            <li><a href="commentjouer.php">Comment Jouer?</a></li>
            <li><a href="forum.php">Forum</a></li>
            <li><a href="wiki.php">Wiki</a></li>
        </ul>
    </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Chat jQuery</title>
      <style type="text/css">
      #conversation {
        width: 300px;
        height: 400px;
        border: black 1px solid;
        background-color: #efecca;
        overflow-x: hidden;
        overflow-y: scroll; 
        padding: 5px;
        margin-left: 10px;
      }
      fieldset {
        width: 330px;
        background-color: #e6e2af;
        border: black 1px solid;
      }    
    </style>
  </head>
  
  <body>
   <fieldset>
     <legend>Un chat en jQuery</legend>
      <div id="conversation"></div><br />
      <form action="#" method="post">
        <input type="text" id="nom" value="pseudo" size="6">
        <input type="text" id="message" size="27">
        <button type="button" id="envoyer" title="Envoyer"><img src="envoyer.gif"></button>
      </form>
    </fieldset>
      jquery
       $(function() {
    afficheConversation();
      
    $('#envoyer').click(function() {
        var nom = $('#nom').val();
        var message = $('#message').val();
        $.post('chat.php', {
            'nom': nom,
            'message': message
        }, afficheConversation);
    });

    function afficheConversation() {
      $('#conversation').load('ac.htm');
      $('#message').val('');
      $('#message').focus();
    }
      
    setInterval(afficheConversation, 4000);
  });

  </body>
</html>
php 
<?php
$nom = $_POST['nom'];                    //On récupère le pseudo et on le stocke dans une variable
$message = $_POST['message'];            //On fait de même avec le message
$ligne = $nom.' > '.$message.'<br>';     //Le message est créé
$leFichier = file('ac.htm');             //On lit le fichier ac.htm et on stocke la réponse dans une variable (de type tableau)
array_unshift($leFichier, $ligne);       //On ajoute le texte calculé dans la ligne précédente au début du tableau
file_put_contents('ac.htm', $leFichier); //On écrit le contenu du tableau $leFichier dans le fichier ac.htm
?>
