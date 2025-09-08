<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "ushtrime";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

}catch(Expectation $e){      
    echo "Error: ".$e ->getMessage();
}

















?>