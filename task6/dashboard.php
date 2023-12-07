<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<div class = "container d-flex justify-content-center align-items-center" >
        <div class = "col-md-12">
            <h2 class = "text-center">Admin</h2>
            <p class="text-center">Manage your users!</p>      
            
<?php
    include_once("user.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($_POST['_method'] == 'PUT'){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = new User($id, $name, $email, $password);
            $user->update();

            
        }else if($_POST['_method'] == 'DELETE'){
            $id = $_GET['id'];
            if($id == ""){
                return;
            }
            User::delete($id);
        }
    }

    
    $users = User::getAll();

    echo "<table class='table'>";
    echo "<thead class='thead-dark'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Password</th>";
    echo "<th>Edit</th>";
    echo "<th>Delete</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach ($users as $user) {
        echo "<tr>";
        echo "<td><form action='./dashboard.php' method='POST'><input type='hidden' name='id' value='". $user['id'] ."'>". $user['id'] ."</td>";
        echo "<td><input type='text' name='name' value='". $user['name'] ."' class='form-control'></td>";
        echo "<td><input type='text' name='email' value='". $user['email'] ."' class='form-control'></td>";
        echo "<td><input type='text' name='password' value='". $user['password'] ."' class='form-control'></td>";
        echo "<td><input type='hidden' name='_method' value='PUT'><input type='submit' value='Edit' class='btn btn-primary'></form></td>";
        echo "<td><form action='./dashboard.php?id=". $user['id'] ."' method='POST'><input type='hidden' name='_method' value='DELETE'><input type='submit' value='Delete' class='btn btn-danger'></form></td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";    
?>

</div></div>
    
</body>
</html>