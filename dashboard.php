<?php
include_once('config.php');
    include_once('config.php');
    $sql="SELECT * FROM users_main";
    $getUsers=$conn->prepare($sql);
    $getUsers->execute();

    $users=$getUsers->fetchALL();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <table class="table table-dark">

  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
<tbody>
                <?php
        foreach ($users as $user){
    ?>
 <tr>   
        <td><?= $user['name'];?>
        <td><?= $user['email'];?>
        <td><?= $user['password'];?>
         <td> <?= "<a href='delete.php?id=$user[id]'>Delete</a>| <a href='edit.php?id=$user[id]'> Update </a>"?></td>
</tr>
        <?php
        }

        ?>
</tbody>
 
</table>
</body>
</html>