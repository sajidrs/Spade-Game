<?php 

session_start();

$name = trim($_POST['name']);
$username = trim($_POST['username']);
$password = trim($_POST['password']);
	
	
	if( preg_match('/[A-Za-z]/', $name) && preg_match('/[A-Za-z0-9]/', $username) && strlen($password) >=6){
		$_SESSION["name"] = $name;
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		header( 'Location:welcome.php' ) ;
		exit;
	}
	else{
		header( 'Location:login.html' ) ;
		exit;
	}

?>

