<?php
session_start();
echo 'Bienvenue '.$_SESSION['login'];
echo "<br/>";
?><a href="index.php">Accueil</a><?php
if ($_SESSION['identification'] != true)
{
    header('Location: login.php');
}
?>
<form action="deco.php" method="POST">
    <input type="submit" name="submit" value="Se deconnecter" />
    <br />
</form>
<?php
if (isset($_POST['submit'])) {
    header('Location: deco.php');
}
?>
