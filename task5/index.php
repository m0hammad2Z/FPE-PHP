<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewData</title>
</head>
<body>

<?php
    include_once("employees.php");

    $emps = Employee::getAll();

    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>Salary</th>
    </tr>";
    foreach ($emps as $emp) {
        echo "<tr>";
        echo "<td>" . $emp['id'] . "</td>";
        echo "<td>" . $emp['name'] . "</td>";
        echo "<td>" . $emp['address'] . "</td>";
        echo "<td>" . $emp['salary'] . "</td>";
        echo "<td><a href='./update.php?id=" . $emp['id'] . "'>Edit</a></td>";
        echo "<td><a href='./delete.php?id=" . $emp['id'] . "'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
?>

<a href="./add.php">Add employee</a>

    
</body>
</html>