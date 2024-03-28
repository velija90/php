<?php

$server = "localhost";
$user = "root";
$pass = "";
$connect = mysqli_connect($server,$user,$pass);
if(!$connect)
     die("Connection Failed".mysli_connect_error());
else
     //echo "Successfully connected with Database";

     $query = "CREATE DATABASE Shkolla123";
     if(mysqli_connect($connect,$query)){
        echo "Database created successfully with the name Shkolla123!"
     }
     else{
        echo "Error creating database: ".mysqli_error($connect);
     }
mysqli_close($connect);