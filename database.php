<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mall-of-social-media";
	$connect =  mysqli_connect($servername,$username,$password,$dbname);
	if(!$connect){
		die("Connection failed:".mysqli_connect_error());
	}
?>