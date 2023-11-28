<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="part3.php" method="post">
        <input type="text" name="name-input" placeholder="Enter your name">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name-input'];
        echo $name;
    }
?>



