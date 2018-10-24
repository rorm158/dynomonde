<?php
session_start();
?>
<html lang="fr">
<head>
    <meta charset="UTF-8" />

    <title>Dynomonde</title>
    <link rel="stylesheet" type="text/css" href="style3_css.php" />
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' />
</head>
<body>

    <div id="login-box">
        <div class="left-box">
            <h1> Inscription</h1>

            <input type="text" name="username" placeholder="Nom d'utilisateur" />

            <input type="text" name="email" placeholder="Email" />

            <input type="password" name="mdp" placeholder="Mot de passe" />

            <input type="password" name="mdp2" placeholder="Confirmer mot de passe" />

            <input type="submit" name="signup" value="" />

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