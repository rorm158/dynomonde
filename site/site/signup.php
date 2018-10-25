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
<body class="signup">
    <div id="signupbox">
        <div class="left-box">
            <h1> Inscription</h1>
            <a href="index.php">Accueil</a>

            <form action="signup.php" method="POST">

                <input type="text" name="username" placeholder="Nom d'utilisateur" />

                <input type="text" name="email" placeholder="Email" />

                <input type="password" name="password" placeholder="Mot de passe" />

                <input type="password" name="password2" placeholder="Confirmer mot de passe" />

                <input type="submit" name="signup" value="S'inscrire" />
            </form>
</div>
        <div class="right-box">
            <h1 class="signinwith">
                Sign in with
                <br />Social Network
            </h1>

            <button class="social facebook">Log in with Facebook</button>
            <button class="social twitter">Log in with Twitter</button>
            <button class="social google">Log in with Google+</button>


        </div>
        <div class="or">OR</div>
    </div>

</body>
</html>
<?php
if (isset($_POST['signup'])) {
    if ($_POST['password'] == $_POST['password2']) {  //alors on sauvegarde les données dans la bdd
        $_SESSION['login'] = $_POST['username'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['identification'] = true;
        header('Location: index.php');
    }else{
        echo 'Les deux mots de passe ne correspondent pas';
    }
}
?>