<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "ushtrime";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
$sql = "CREATE TABLE users (
       id INT PRIMARY KEY AUTO_INCREMENT,
       name VARCHAR(255),
       email VARCHAR(255)
       )";

    $conn->exec($sql);
}catch(Expectation $e){      
    echo "Error: ".$e ->getMessage();
}

















?>