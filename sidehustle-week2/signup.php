<?php
session_start();
	include("connection.php");
	include ("function.php");

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	 $user_name = $_POST["user_name"];
	$password= $_POST["password"];

	if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
		$user_id = random_num(20);
		$query = "insert into users(user_id, user_name, password) values('$user_id','$user_name', '$password')";
		
		mysqli_query($con, $query);

		header("Location : login.php");
		die;
		}else
		{
		echo "Please enter a valid information";
		}
	}

?>


<html>
	<head>
		<title>SignUp</title>
	</head>
	<body>
		<div id = "box">
			<form method ="post">
				<div style= "font-size: 20px,margin :10px;">SignUp</div><br>

				Username  <input id = "text" type ="text" name ="user_name"><br><br>
				Password  <input id = "text" type ="password" name ="password"><br><br>
				
					<input id = "button" type ="submit" value ="SignUp"><br><br>
				<a href = "login.php">Click to Login</a><br><br>
				
			</form>
		</div>
		
	</body>
	
</html>