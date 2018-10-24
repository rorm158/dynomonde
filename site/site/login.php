<?php
session_start();
?>
<html lang="fr">
<head>
    <meta charset="UTF-8" />

    <title>Dynomonde</title>

    <link rel="stylesheet" type="text/css" href="style2_css.php" />

    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' />
</head>
<body>
    <div class="loginbox">
        <img src="images/avatar2.png" class="avatar" />
        <h1>Connexion</h1>
        <a href="index.php">Accueil</a>
        <form action="login.php" method="POST">

            <p>Nom d'utilisateur</p>
            <input type="text" name="login" value="" placeholder="Nom d'utilisateur" />

            <p>Mot de passe</p>
            <input type="text" name="mdp" value="" placeholder="Mot de passe" />

            <input type="submit" name="login" value="Login" />

            <a class="b" href="#">Mot de passe oublié ?</a>
            <br />
            <a class="b" href="signup.php">Créer un compte</a>
        </form>
    </div>
</body>
</html>
<?php
if (isset($_POST['login'])) {
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['mdp'] = $_POST['mdp'];
    $_SESSION['identification'] = true;
    header('Location: index.php');
}
?>
