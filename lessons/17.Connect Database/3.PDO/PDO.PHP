<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
    $conn = new PDO("mysql:host=$servername;dbname=test2db",$username,$password);
    // set the PDO error mode to expection
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOExpection $e){
    echo "Conection failed: ".$e->getMessage();
}
?>