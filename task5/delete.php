<?php
include_once("employees.php");

$id = $_GET['id'];

Employee::delete($id);

header("Location: ./index.php");

?>

