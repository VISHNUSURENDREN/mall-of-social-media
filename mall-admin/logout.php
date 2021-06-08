<?php 

session_start();      
unset($_SESSION["mall_email"]);
session_destroy();
if (isset($_COOKIE["mall_email"])) 
{ 
    setcookie("mall_email", ""); 
} 
if (isset($_COOKIE["mall_password"])) 
{ 
    setcookie("mall_password", ""); 
} 
if (!isset($_SESSION["mall_email"])) 
{ 
	header('Location: loginform.php');
}          
    
?>