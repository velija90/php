
<html>
	<head>
	</head>
	<body>

		<form method="post" action="detyra1111.php">
			Username: <input type="text" name="Username"><br><br>
			Password: <input type="password" name="Password"><br><br>
			<input type="submit" value="Log in">
			<input type="reset" value="Cancel">
		</form>
	</body>
</html>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$username = $_POST['Username'];
		$password = $_POST['Password'];
		if(empty($username) || empty($password))
		{
			echo '<script>alert("Username or Password is empty")</script>';
		}
		elseif($username == 'arianit' && $password === 'tershnjaku')
		{
			echo "<script>alert('Welcome!')</script>";
			// echo "<script>window.open('login1.php','_self')";
		}
		else
		{
			'<script>alert("Username and Password is incorrect!)';
		}
	}
	else
	{
		echo '<script>alert("Metoda nuk eshte POST!")';
	}
?>

