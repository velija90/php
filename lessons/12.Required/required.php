<html>
	<head>
		<style>
			.empty {color: red;}
		</style>
	</head>
	<body>
		
<?php 
$empUsername ="";
$empEmail = ""; 
$empPassword = "";



 if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username=$_POST['Username'];
    $password=$_POST['Password'];
    $email=$_POST['Email'];


    if(empty($username) || empty($password) || empty($email))
    {
        $empUsername = 'Username is required';
        $empEmail = 'Email is required';       
        $empPassword = 'password is required';
    }
    else{
        echo'<script> alert("Register Succsesfuly")</script>';
    }
    }

?>


		<p><span class="empty">* Required</span></p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			Email: <input type="email" name="Email">
			<span class="empty">*<?php echo $empEmail;?></span><br><br>
			Username: <input type="text" name="Username">
			<span class="empty">*<?php echo $empUsername;?></span><br><br>
			Password: <input type="password" name="Password">
			<span class="empty">*<?php echo $empPassword;?></span><br><br>
			
			<input type="submit" value="Sign Up">
			<input type="reset" value="Cancel">
		</form>
		
	</body>
</html>
