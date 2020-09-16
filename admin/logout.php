<?php 
session_start();
if(isset($_SESSION['isloggedin']))
{
	session_destroy();
	header('location:login.php');
}
?>