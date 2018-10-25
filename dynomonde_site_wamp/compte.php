<?php
session_start();
if ($_SESSION['identification'] != true)
{
    header('Location: login.php');
}
?>
<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Dynomonde</title>
    <link rel="stylesheet" href="css/style.php" media="all" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' />
</head>
<body>
    <h1 class="principal">DYNOMONDE REMAKE</h1>

    <ul class="menu">
        <li>
            <a href="index.php">Accueil</a>
        </li>
        <li>
            <a href="jouer.php">Jouer</a>
        </li>
        <li>
            <a href="commentjouer.php">Comment Jouer?</a>
        </li>
        <li>
            <a href="forum.php">Forum</a>
        </li>
        <li>
            <a href="wiki.php">Wiki</a>
        </li>
    </ul>
    <?php
    if ($_SESSION['identification'] = true){
        echo 'Bienvenue '.$_SESSION['login'];
        echo "<br/>";
    }
    ?>
    <form action="logout.php" method="POST">
        <input type="submit" name="submit" value="Se deconnecter" />
        <br />
    </form>
</body>
</html>
