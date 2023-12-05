<?php
    $serverName = 'localhost';
    $username = 'postgres';
    $password = '12345678';
    $database = 'test';
    $port = '5432';

    try{
        $conn = new PDO("pgsql:host=$serverName;port=$port;dbname=$database;user=$username;password=$password");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully <br>";
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }

?>