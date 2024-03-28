<html>
	<head>
		<style>
			.empty {color: red;}
		</style>
	</head>
	<body>
		<?php 
				$empName = "";
				$empLastName = "";
				$empEmail = "";
				$empPassword = "";
				$empConfirmPassword = "";
                $empConfirmPassword1 = "";
				$empGender ="";
				$empBirthday ="";
			
                if($_SERVER["REQUEST_METHOD"] == 'POST')
                {
                    $name =secure($_POST['name']);
                    if(empty($name))
                    {
                        $empName='Name is requierd';
                    }
                    else if(!preg_match("/^[a-zA-ZëË ]*$/",$name))
                    {
                        $empName='only letters and white space allowed';
                    }



                    $lastName =secure($_POST['lastName']);
                    if(empty($lastname))
                    {
                        $emplastName='last name is requierd';
                    }
                    else if(!preg_match("/^[a-zA-ZëË ]*$/",$lastName))
                    {
                        $emplastName='only letters and white space allowed';
                    }




                    $email =secure($_POST['email']);
                    if(empty($email))
                    {
                        $empEmail='email is requierd';
                    }
                    else if(!preg_match("/^[a-zA-ZëË ]*$/",$email))
                    {
                        $empEmail='only letters and white space allowed';
                    }



                    $password =secure($_POST['password']);
                    if(empty($password))
                    {
                        $empPassword='password is requierd';
                    }
                    


                    $confirmPassword =secure($_POST['confirmPassword']);
                    if(empty($confirmPassword))
                    {
                        $empconfirmPassword='password is requierd';
                    }
                    if($password !== $confirmPassword)
                    {
                        $empConfirmPassword1  ='pass nuk esht i njejt';
                    }
                    
                    


                    $gender =secure($_POST['gender']);
                    if(empty($gender))
                    {
                        $empGender='Name is requierd';
                    }
           

                    $birthday =secure($_POST['birthday']);
                    if(empty($name))
                    {
                        $empBirthday='Name is requierd';
                    }
                   

                }
			function secure($x) {
				$x = htmlspecialchars($x); //Ky funksion mundeson qe karakteret speciale te i konverton ne karaktere te HTML
				$x = trim($x);	//Ky funksion largon karakteret e panevojshme si (extra space, tab, newline etj), nga te dhenat hyrse te perdoruesit.
				$x = stripslashes($x);	//Ky funksion largon karakterin "\"(backslash).
				return $x;
			}


		?>


		
		<p><span class="empty">* Required</span></p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			Name: <input type="text" name="name">
			<span class="empty">*<?php echo $empName;?></span><br><br>
			Last Name: <input type="text" name="lastName">
			<span class="empty">*<?php echo $empLastName;?></span><br><br>
			Email: <input type="text" name="email">
			<span class="empty">*<?php echo $empEmail;?></span><br><br>
			Password: <input type="password" name="password">
			<span class="empty">*<?php echo $empPassword;?></span><br><br>
			Confirm Password: <input type="password" name="confirmPassword">
			<span class="empty">*<?php echo $empConfirmPassword;?></span><span class="empty">*<?php echo $empConfirmPassword1;?></span><br><br>
			Gender:<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Femer") echo "checked";?> value="Femer">F
				   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Mashkull") echo "checked";?> value="Mashkull">M
			<span class="empty">*<?php echo $empGender;?></span><br><br>
			Birthday: <input type="date" name="birthday">
			<span class="empty">*<?php echo $empBirthday;?></span><br><br>
			<input type="submit" value="Sign Up">
			<input type="reset" value="Cancel">
		</form>
		
		<?php echo $name.'<br>';?>
		<?php echo $lastName.'<br>';?>
		<?php echo $email.'<br>';?>
		<?php echo $password.'<br>';?>
		<?php echo $confirmPassword.'<br>';?>
		<?php echo $gender.'<br>';?>
		<?php echo $birthday.'<br>';?>
		
		
	</body>
</html>