<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Dynomonde</title>
    <link rel="stylesheet" href="style.php" media="all" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' />
</head>
<body>
    <?php
    if ($_SESSION['identification'] == true)
    {?>
    <ul class="util">
        <li>
            <a>
                <img class="utilimg" src="images/avatar2.png" />
                <br /><?php echo $_SESSION['login']?>
            </a>
            <ul class="util2">
                <li>

                    <a href="compte.php">Profil</a>
                </li>
                <li>
                    <a href="logout.php">Déconnexion</a>
                </li>
            </ul>
        </li>
    </ul>
    <?php }?>
    <h1 class="principal">FORUM</h1>

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
    <p>
        Bienvenue blabla blabla blabla blabla blabla blabla blabla blabla blablablabla Bienvenue blabla blabla blabla blabla blabla blabla blabla blabla blablablablaBienvenue blabla blabla blabla blabla blabla blabla blabla blabla blablablablaBienvenue blabla blabla blabla blabla blabla blabla blabla blabla blablablablaBienvenue blabla blabla blabla blabla blabla blabla blabla blabla blablablabla.
    </p>
</body>
</html>