<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="add.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" required>
        <br>
        <label for="salary">Salary</label>
        <input type="number" name="salary" id="salary" required>
        <br>
        <input type="submit" value="Add">
    </form>

    <?php
        include_once("employees.php");

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $salary = $_POST['salary'];

            $emp = new Employee(null, $name, $address, $salary);
            $emp->add();

            header("Location: ./index.php");
        }
    ?>
    
</body>
</html>