<?php
include_once('config.php');

$id = $_GET['id'];
$sql = "SELECT  * FROM users_main Where id = :id";

$prep = $conn->prepare($sql);

$prep->bindParam(':id', $id);

$prep->execute();

$data = $prep->fetch();

if (!$data) {
    echo '<p style="color:red;">User not found.</p>';
    echo '<a href="dashboard.php">Back to Dashboard</a>';
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>

        form>input{
            margin-bottom:10px;
            font-size:20px;
            padding:5px;

        }
        button {
            background:none;
            border: none;
            border:1px solid black;
            font-size:20px;
            cursor: pointer;
        }

</style>
        <form action="update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $data['id']?>"><br>

<input type="text" name="name" value="<?php echo $data['name']?>"><br>

<input type="text" name="email" value="<?php echo $data['email']?>"><br>

<input type="text" name="password" value="<?php echo $data['password']?>"><br>


<br><br>

<button type="submit" name="update">UPDATE</button>
</form>


<a href="dashboard.php">Dashboard</a>
</body>
</html>