<?php

$server = "localhost";
$user = "root";
$pass = "";
$connect = mysqli_connect($server,$user,$pass);
if(!$connect)
     die("Connection Failed".mysli_connect_error());
else
     echo "Successfully connected with Database";
mysqli_close($connect);