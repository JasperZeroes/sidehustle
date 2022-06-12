<?php
	session_start();
	include("database.php");
//if (!isset($_SESSION['sessionUser'])){
	
//}else{
	unset($_SESSION['sessionUser']);
	unset($_SESSION['sessionId']);
	header("Location: signin.php?success= 'Loggedout sucessfully'");
	exit();