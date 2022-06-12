<?php
	session_start();
	include("database.php");
if (isset($_POST['submit'])){ if(isset($_POST['username'])&& isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword']))
	
	//set users param
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$hashpass = password_hash($password, PASSWORD_DEFAULT);
	
		//checks if the username already exists using prepared statement
	$sql = "SELECT * FROM users WHERE username = ?";
	$stmt = mysqli_stmt_init($conn);
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "s", $username );
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);
	$rowcount = mysqli_stmt_num_rows($stmt);

	if ($rowcount > 0){
			echo "Username already exists!";
	}elseif($password !== $confirmpassword){
		echo "Password does not match. Try again!";	
	}else{
			//inserts the username into database using prepared statement
            
		$sql = "INSERT INTO users(username, email, password) VALUES(?, ?, ?)";
		$stmt = mysqli_stmt_init($conn);
		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashpass );
		$result = mysqli_stmt_execute($stmt);
		
		if($result){
			header("Location: signin.php?success=registered");
			
		}else{
			echo "Oops! Something went wrong.Please, try again!";
		}		
	}
}

?>
<html>
<head> 
	<title> REGISTER </title>
</head>
<body> 
	<h1> REGISTER PAGE</h1> 
	<div> 
       	
	<form action ="signup.php" method="post"><br>
	<input type="text" name="username" placeholder="Username" pattern ="[a-zA-Z0-9]+" required />
	<br><br>
	<input type="email" name="email" placeholder ="Email" required /> <br><br>
	<input type="password" name="password" placeholder="Password" required /><br><br>
	<input type="password" name="confirmpassword" placeholder="ConfirmPassword" required /><br><br>	
	<button type ="submit" name = "submit" value ="submit"> Register</button>
	</form>	

	</div>
	
	<p> Already have an account? <a href = "signin.php"> Click here to login!</a> </p> 
</body>

</html>