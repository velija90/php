<?php
$host = "localhost";
$user = "root";
$pass = "";
try{
    $conn= new PDO("mysql:host=$host",$user,$pass);
    $sql = "Create database test2db";
    $conn->exec($sql);
    echo "Database is Created";
}
catch(Exception $e){
    echo "Database not created, something went wrong!";
}
?>