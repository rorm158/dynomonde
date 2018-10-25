<?php
session_start();
?>
<html lang="fr">
<head>
    <meta charset="UTF-8" />

    <title>Dynomonde</title>

    <link rel="stylesheet" type="text/css" href="style.php" />

    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' />
</head>
<body class="login">
    <div class="loginbox">
        <img src="images/avatar2.png" class="avatar" />
        <h1>Connexion</h1>
        <a href="index.php">Accueil</a>
        <form action="login.php" method="POST">

            <p>Nom d'utilisateur</p>
            <input type="text" name="login" value="" placeholder="Nom d'utilisateur" />

            <p>Mot de passe</p>
            <input type="password" name="mdp" value="" placeholder="Mot de passe" />

            <input type="submit" name="submit" value="Login" />

            <a class="b" href="#">Mot de passe oublié ?</a>
            <br />
            <a class="b" href="signup.php">Créer un compte</a>
        </form>
    </div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {                  // il faut intégrer une recherche dans la bdd pour comparer le login et le mdp
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['mdp'] = $_POST['mdp'];
    $_SESSION['identification'] = true;
    header('Location: index.php');
}
?>
