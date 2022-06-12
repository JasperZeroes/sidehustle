<?php
session_start();
include("database.php");

if(!$_SESSION['sessionUser']){
	header("Location : login.php?error='You must log in first'");
}
?>

<html>
<head>
	<title>User login</title>
</head>
<body> <h1> HOMEPAGE</h1> 
	
	<h3>WELCOME <?php echo $_SESSION['sessionUser'];?>,to my website</h3> <br><br> 
	<p> Click here to logout. <a href="logout.php">Logout</a></p> 

</body>

</html>