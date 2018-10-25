<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Dynomonde</title>
    <link rel="stylesheet" href="style.php" media="all" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' />
</head>
<body>
    <?php
    if ($_SESSION['identification'] != true)
    {?>
    <h1 class="principal">DYNOMONDE REMAKE</h1>
    <ul class="menu">
        <li>
            <a href="index.php">Accueil</a>
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
        <li>
            <a href="login.php">Connexion</a>
        </li>
        <li>
            <a href="signup.php">Inscription</a>
        </li>
    </ul>
    <div class="nbmaj">Mise à jour 0.0.1</div>
    <img src="images\dino.png" align="left" />
    <div class="textemaj">Création de la base du site, avec le menu, les titres et quelques informations de base ROMAIN LE CONROMAIN LE CONROMAIN LE CONROMAIN LE CONROMAIN LE CONROMAIN LE CONROMAIN LE CONROMAIN LE CON</div>
    <div class="nbmaj">Mise à jour 0.0.1</div>
    <img src="images\dino.png" align="left" />
    <div class="textemaj">Création de la base du site, avec le menu, les titres et quelques informations de base</div>
    <div class="nbmaj">Mise à jour 0.0.1</div>
    <img src="images\dino.png" align="left" />
    <div class="textemaj">Création de la base du site, avec le menu, les titres et quelques informations de base</div>

    <?php
    }else{?>

    <ul class="util">
        <li><a><img class="utilimg" src="images/avatar2.png" /><br><?php echo $_SESSION['login']?></a>
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
    <div class="nbmaj">Mise à jour 0.0.1</div>
    <img src="images\dino.png" align="left" />
    <div class="textemaj">Création de la base du site, avec le menu, les titres et quelques informations de base ROMAIN LE CONROMAIN LE CONROMAIN LE CONROMAIN LE CONROMAIN LE CONROMAIN LE CONROMAIN LE CONROMAIN LE CON</div>
    <div class="nbmaj">Mise à jour 0.0.1</div>
    <img src="images\dino.png" align="left" />
    <div class="textemaj">Création de la base du site, avec le menu, les titres et quelques informations de base</div>
    <div class="nbmaj">Mise à jour 0.0.1</div>
    <img src="images\dino.png" align="left" />
    <div class="textemaj">Création de la base du site, avec le menu, les titres et quelques informations de base</div>

</body>
<?php }?>
</html>