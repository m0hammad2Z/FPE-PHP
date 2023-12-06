

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

    <div class = "container d-flex justify-content-center align-items-center" style = "height: 100vh;">
        <div class = "col-md-6">
            <a href = "index.php"><i class = "fas fa-arrow-left"></i></a>
            <h2 class = "text-center">Sign Up</h2>
            <p class="text-center">Create an account now!</p>
            <form action="register.php" method="POST">
                <div class = "form-group">
                    <label for = "name">Name</label>
                    <input type = "text" class = "form-control" id = "name" placeholder = "Enter your name" name="name">
                </div>

                <div class = "form-group">
                    <label for = "email">Email</label>
                    <input type = "text" class = "form-control" id = "email" placeholder = "Enter your email" name="email">
                </div>
                <div class = "form-group">
                    <label for = "password">Password</label>
                    <input type = "password" class = "form-control" id = "password" placeholder = "Enter your password" name="pass">
                </div>
                <div class = "form-group">
                    <label for = "confirm_password">Confirm Password</label>
                    <input type = "password" class = "form-control" id = "confirm_password" placeholder = "Confirm your password" name="confirm_pass">
                </div>
                <button type = "submit" class = "btn btn-primary col-12">Sign Up</button>
            </form>
            <div class = "text-center mt-3">
                <a href = "login.php">Already have an account? Login here</a>
            </div>
        </div>
    
</body>
</html>

<?php 

    include_once("user.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        // Regex for email validation
        $emailRegex = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/";
        $passRegex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";

        if(!preg_match($emailRegex, $email)){
            echo "Invalid email";
            return;
        }

        if(!preg_match($passRegex, $pass)){
            echo "Invalid password";
            return;
        }

        if($pass != $_POST['confirm_pass']){
            echo "Passwords do not match";
            return;
        }

        if($name == '' || $email == '' || $pass == ''){
            echo "Please fill in all fields";
            return;
        }


        $user = new User(null, $name, $email, $pass);
        $user->add();

        echo "User added successfully";

        // header("Location: ./index.php");
    }

?>