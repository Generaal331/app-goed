<?php

    require_once('connect.php');
     session_start();
    ob_start();
    if(!isset($_SESSION['customerID']) ||
        empty($_SESSION['customerID'])){
        header("location: login.php");
    } 
?>


<!DOCTYPE html>
<html>
<head>
	<title>App</title>
	<meta name="viewport" content="width=device-width, initail-scale=1" />
	<script type="text/javascript" src="js/script.js"></script>
 	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
 <div class="blok1">Welkom lets get startet
   <div id="buttons">
   <form method="get" action="eten.php">
     <button class="button button4">1</button>
   </form>
     <br>
   <form method="get" action="stats.php">
     <button class="button button4">2</button>
   </form>
     <br>
     <form method="get" action="set.php">
     <button class="button button4">3</button>
 	</form>
     <br>
     <form method="get" action="gym.php">
     <button class="button button4">4</button>
 	</form>
     <br>
    <form method="get" action="timer.html">
     <button class="button button4">5</button>
    </form>
    </div>
  </div>
</div>

</body>
</html>