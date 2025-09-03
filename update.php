<?php

include_once("config.php");



if(isset($_POST['id'], $_POST['name'], $_POST['email'], $_POST['password']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "UPDATE users_main SET name=:name , password=:password, email=:email where id=:id ";

    $prep = $conn->prepare($sql);

    $prep->bindParam(':id' , $id);
    $prep->bindParam(':name' , $name);
    $prep->bindParam(':email' , $email);
    $prep->bindParam(':password' , $password);


    if ($prep->execute()) {
        header('Location:dashboard.php');
        exit;
    } else {
        echo '<p style="color:red;">Update failed. Please try again.</p>';
    }
} else {
    echo '<p style="color:red;">Missing required fields.</p>';
}







?>