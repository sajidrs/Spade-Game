<?php 

	session_start();
	
	if (isset($_SESSION['name']) && isset($_SESSION['username']) && isset($_SESSION['password'])){
			echo "<h3>Welcome, <u>". $_SESSION['name'] ."</u></h3>" ;
	}else{
		header( 'Location: login.html' ) ;
		exit;
	}
	
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Team 2 - Killer Cut-throat Spades</title>
    
    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
	
   </head>
   <body>
		<div class="col-xs-4 col-md-offset-4">
		<a class="btn btn-primary btn-large btn-block" href="index.html#game">Play Now!</a>
		<a class="btn btn-primary btn-large btn-block" href="login.html">View Player Stats</a>
		</div>
   </body>
</html>