<?php
include_once('config.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];

    $sql = "INSERT INTO users_main(name,password,email) VALUES (:name,:password,:email)";
    $sqlQuery=$conn->prepare($sql);

    $sqlQuery->bindParam(':name',$name);
    $sqlQuery->bindParam(':password',$password);
    $sqlQuery->bindParam(':email',$email);

    $sqlQuery->execute();

    echo "data saved";
}

?>