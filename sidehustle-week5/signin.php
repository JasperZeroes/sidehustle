<?php
	session_start();
	include("database.php");
if (isset($_POST['submit'])){if (isset($_POST['username']) && isset($_POST['password']))

	//set users param
	$username = $_POST['username'];
	$password = $_POST['password'];
	
		//checks if the data submitted matches the one in our database using prepared statement

	$sql = "SELECT * FROM users where username = ?";
	$stmt = mysqli_stmt_init($conn);
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "s", $username );
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	$row = mysqli_fetch_assoc($result);

	if($row){
		$passcheck = password_verify($password, $row['password']);
		if ($passcheck == false){
			echo "Incorrect Password. Please try again!";
		}else{
			$_SESSION['sessionId'] = $row['id'];
			$_SESSION['sessionUser'] = $row['username'];
			//echo "Logged in successfully";
			header("Location: index.php");
			exit();	
		}	
	}else{
		echo "Error fetching result";
	}
}		
?>

<html>
<head> 
	<title> LOGIN </title>
</head>
<body> 
	<h1> LOGIN </h1>
	<div> 
       	
	<form action ="login.php" method="post"><br>
	<input type="text" name="username" placeholder="Username" pattern ="[a-zA-Z0-9]+" required />
	<br><br>
	
	<input type="password" name="password" placeholder="Password" required /><br><br> 
	<button type ="submit" name = "submit" value ="submit"> Login </button>
	</form>	

	</div>
	
	<p> Don't have an account? <a href = "signup.php"> Click here to Register!</a> </p> 
</body>

</html>