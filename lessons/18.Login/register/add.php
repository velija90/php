<?php

	include_once('config.php');	

    $errors = array();

	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

        if (empty($username)) 
        {
            array_push($errors, "Username is required"); 
        }
        else if (!preg_match("/^[a-zA-ZëË ]*$/",$username)) 
		{
            array_push($errors, "Only letters and white space allowed");
		}
        if (empty($email)) { 
            array_push($errors, "Email is required"); 
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			$empEmail = "Invalid email format";
		}
        if (empty($password)) { array_push($errors, "Password is required"); }

        if (count($errors) == 0) 
        {
            $sql = "insert into users (username, password, email) values (:username, :password, :email)";
            $sqlQuery = $conn->prepare($sql);
        
            $sqlQuery->bindParam(':username', $username); 
            $sqlQuery->bindParam(':password', $password); 
            $sqlQuery->bindParam(':email', $email);

            $sqlQuery->execute();

            echo "Data saved successfully ...";
        }
	}
?>