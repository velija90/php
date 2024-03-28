<?php

	include_once('config.php');	

    $errors = array();

	if(isset($_POST['submit']))
	{
		$fName = $_POST['firstName'];
        $lName = $_POST['lastName'];
		$password = $_POST['password'];
        $cPassword = $_POST['confirmPassword'];
		$email = $_POST['email'];
    
        if (empty($fName)) 
        {
            array_push($errors, "First Name is required"); 
        }
        else if (!preg_match("/^[a-zA-ZëË ]*$/",$fName)) 
		{
            array_push($errors, "Only letters are allowed");
		}
        if (empty($lName)) 
        {
            array_push($errors, "First Name is required"); 
        }
        else if (!preg_match("/^[a-zA-ZëË ]*$/",$lName)) 
		{
            array_push($errors, "Only letters are allowed");
		}
        if (empty($email)) { 
            array_push($errors, "Email is required"); 
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			$empEmail = "Invalid email format";
		}
        if (empty($password)) { array_push($errors, "Password is required"); }

        if (empty($cPassword)) { array_push($errors, "Comfrim Password is required"); }

        else if ($cPassword != $password) { array_push($errors, "Comfrim Password is is not same as the first password"); }

        if (count($errors) == 0) 
        {
            $sql = "insert into users (firstname, lastname, email, password) values (:fName, :lName, :email, :password)";
            $sqlQuery = $conn->prepare($sql);
        
            $sqlQuery->bindParam(':fName', $fName); 
            $sqlQuery->bindParam(':lName', $lName);
            $sqlQuery->bindParam(':email', $email);
            $sqlQuery->bindParam(':password', $password); 

            $sqlQuery->execute();

            echo "Data saved successfully ...";
        }
	}
?>