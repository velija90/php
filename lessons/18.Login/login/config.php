<?php 
session_start();

$user="root";
$pass="";
$server="localhost";
$dbname="test2db";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
}
catch(PDOExpection $e){
    echo "Conection failed: ".$e->getMessage();
}
?>