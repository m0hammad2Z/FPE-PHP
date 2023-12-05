<?php 
        include_once("employees.php");

        $id = $_GET['id'];
        $emp = Employee::get($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="update.php<?php echo '?id=' . $id; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $emp->id ?>">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php echo $emp->name ?>">
        <br>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="<?php echo $emp->address ?>">
        <br>
        <label for="salary">Salary</label>
        <input type="number" name="salary" id="salary" value="<?php echo $emp->salary ?>">
        <br>
        <input type="submit" value="Update">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $salary = $_POST['salary'];

            $emp = new Employee($id, $name, $address, $salary);
            $emp->update();
            header("Location: ./index.php");
        }
        ?>

</body>
</html>