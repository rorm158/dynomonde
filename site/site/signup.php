
<html>
<head>
    <title>Dynomonde</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="style.php" />
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' />
</head>
<body class="signup">
    <h1>Inscription</h1>
    <a href="index.php">Accueil</a>
        <div id="signupbox">
            <div class="left-box">
                <form method="POST" action="" role="form" class="container">
                    <div class="form-group">
                        <label for="pseudo">Pseudo :</label>
                        <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="mail">Adresse de courriel :</label>
                        <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="mail2">Confirmation de l'adresse de courriel :</label>
                        <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de passe :</label>
                        <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="mdp2">Confirmation du mot de passe :</label>
                        <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" class="form-control" />
                    </div>
                    <input type="submit" name="send" value="Je m'inscris" class="btn btn-default" />
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

    <div align="center">
        <?php
        if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
        }else{

            echo "Vous avez déja un compte ? Alors <a href=\"connexion.php\">connectez-vous</a>";

        }
        ?>
    </div>
    </form>
</body>
</html>

<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=chatbox', 'root', '');

if(isset($_POST['send'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);
    if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
        $pseudolength = strlen($pseudo);
        if($pseudolength <= 255) {
            if($mail == $mail2) {
                if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
                    $reqmail->execute(array($mail));
                    $mailexist = $reqmail->rowCount();
                    if($mailexist == 0) {
                        if($mdp == $mdp2) {
                            $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                            $insertmbr->execute(array($pseudo, $mail, $mdp));
                            $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                            $_SESSION['login'] = $_POST['pseudo'];
                            $_SESSION['email'] = $_POST['mail'];
                            $_SESSION['password'] = $_POST['mdp'];
                            $_SESSION['identification'] = true;
                        } else {
                            $erreur = "Vos mots de passes ne correspondent pas !";
                        }
                    } else {
                        $erreur = "Adresse mail déjà utilisée !";
                    }
                } else {
                    $erreur = "Votre adresse mail n'est pas valide !";
                }
            } else {
                $erreur = "Vos adresses mail ne correspondent pas !";
            }
        } else {
            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>

