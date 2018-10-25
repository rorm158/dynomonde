<?php
session_start();

$_SESSION['user'] = array(

	"id" => 1,
	"pseudo" => $_SESSION['login']

);

$bdd = new PDO("mysql:host=127.0.0.1;dbname=chatbox;charset=utf8", "root", "");

if(isset($_GET['url'])) {
	$url = $_GET['url'];
}else{
	$url ="home";
}

if($url =="home"){
	require_once "chatbox/home.php.php";
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Dynomonde</title>
    <link rel="stylesheet" href="css/style.php" media="all" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' />
</head>
<body>
    <h1 class="principal">JOUER</h1>
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
</body>
</html>

minijeu
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>jeu</title>
  <style type="text/css">
    #jeu{
      width: 400px;
      height: 400px;
      border: 2px black solid;
      overflow: hidden;
      position: relative;
    }
    .fond{
      margin-bottom:-5px; 
      z-index: 10;
      position: relative;
    }
    #vj{
      z-index: 100; 
      position: absolute; 
      top: 10px; 
      left: 48px;
    }
    #vr{
      z-index: 80; 
      position: absolute; 
      top: -200px; 
      left: 0px;
    }
  </style>
</head>

<body>
  Collisions : <span id="info">0</span>
  <div id="jeu">
    <img id="fond1" class="fond" src="testminijeu/route.png">
    <img id="fond2" class="fond" src="testminijeu/route.png">
    <img id="vj" src="testminijeu/vj.png">
    <img id="vr" src="testminijeu/vr.png">
  </div>
  <audio preload="auto" id="son"><source src="testminijeu/beep.mp3" type="audio/mp3"><source src="testminijeu/beep.ogg" type="audio/ogg"></audio>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>
    $(function() {
      var ok = 1;
      function deplace()
      {
        $('#vr').animate({top: '-=600'}, 2500, 'linear', function(){
          var vrX = Math.floor(Math.random()*194)+70;
          var vrY = 400;
          $('#vr').css('top',vrY);
          $('#vr').css('left',vrX);
          ok = 1;
        });
        $('.fond').animate({top: '-=360'}, 1000, 'linear', function(){
          $('.fond').css('top',0);
          deplace();
        });
      };
       
      $(document).keydown(function(e){
        if (e.which == 39)
        {
          vjX = parseInt($('#vj').css('left'));
          if (vjX < 280)
          $('#vj').css('left', vjX+30);
        }
        if (e.which == 37)
        {
          vjX = parseInt($('#vj').css('left'));
          if (vjX > 70)
            $('#vj').css('left', vjX-30);
        }
      });

      function collision()
      {
        vjX = parseInt($('#vj').css('left'));
        vrX = parseInt($('#vr').css('left'));
        vjY = 10;
        vrY = parseInt($('#vr').css('top'));
        if (((vrX > vjX) && (vrX < (vjX+66)) && (vrY > vjY) && (vrY < (vjY+150)) && (ok == 1)) 
        || ((vjX > vrX) && (vjX < (vrX+66)) && (vrY > vjY) && (vrY < (vjY+150)) && (ok == 1)))
        {
          $('#son')[0].play();
          collision = parseInt($('#info').text()) + 1;
          $('#info').text(collision);
      ok = 0;
        }
      }
      deplace();
      setInterval(collision, 20);
    });
  </script>
</body>
</html>
