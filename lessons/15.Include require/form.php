<?php 
$empUsername ="";
$empPassword = "";



 if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username = secure($_POST['Username']);
    $password = secure($_POST['Password']);
    


    if(empty($username) || empty($password) || empty($email))
    {
        if(empty($username))
        {
            $empUsername = 'Username is required';
          
        }
        if(empty($password))
        {
           
            $empPassword = 'password is required';
        }
    }
    else{
        echo'<script> alert("Register Succsesfuly")</script>';
    }
    }
    function secure($x){
        $x = htmlspecialchars($x);
        $x = trim($x);
        $x = stripslashes($x);
        return $x;
    }
?>