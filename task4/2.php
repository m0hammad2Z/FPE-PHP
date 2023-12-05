<?php
    $startTime = microtime(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- 1 -->
    <form action="2.php" method="post">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" name="printemailpassword" value="Submit">
    </form>
    
    <?php 
    // for 6
        $startTime = microtime(true);

        if(isset($_POST['printemailpassword'])){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $email = $_POST['email'];
                $password = $_POST['password'];
                echo "this a post method <br>";
            }else if($_SERVER['REQUEST_METHOD'] == 'GET'){
                $email = $_GET['email'];
                $password = $_GET['password'];
                echo "this a get method <br>";
            }
        }
    ?>

    <!-- end 1 -->


    <!-- 2 -->

    <form action="2.php" method="post">
        <input type="text" name="url">
        <input type="submit" name="redirectToeUrl" value="Submit">
    </form>

    <?php

        if(isset($_POST['redirectToeUrl'])){
            $url = $_POST['url'];
            header("Location: $url");
        }

    ?>

    <!-- end 2 -->

    <!-- 3 -->

    <form action="2.php" method="post">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <select name="operation">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="submit" name="calculate" value="Submit">
    </form>

    <?php 
        if(isset($_POST['calculate'])){
            $num1= $_POST['num1'];
            $num2 = $_POST['num2'];

            switch($_POST['operation']){
                case 'add':
                    echo $num1 + $num2;
                    break;
                case 'sub':
                    echo $num1 - $num2;
                    break;
                case 'mul':
                    echo $num1 * $num2;
                    break;
                case 'div':
                    echo $num1 / $num2;
                    break;
            }
        }
    ?>


    <!-- end 3 -->

    <!-- 4 -->  
    
    <form action="2.php" method="post">
        <input type="text" name="task">
        <input type="submit" name="addTask" value="Add Task">
    </form>

    <?php 
        if(isset($_POST['addTask'])){
            $task = $_POST['task'];
            $tasks = [];
            if(isset($_COOKIE['tasks'])){
                $tasks = unserialize($_COOKIE['tasks']);
            }
            array_push($tasks, $task);
            setcookie('tasks', serialize($tasks), time() + 3600);
        }

        if(isset($_COOKIE['tasks'])){
            $tasks = unserialize($_COOKIE['tasks']);
            foreach($tasks as $task){
                echo $task . "<br>";
            }
        }
    ?>


<!-- end 4 -->

<!-- 5 -->
<?php 
    echo $_SERVER['SCRIPT_NAME'] . "<br>";
?>
    <!-- end 5 -->
    
    
    <!-- 7 -->
    <?php 
        $counter =  isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
        $counter++;
        setcookie('counter', $counter, time() + 3600);
        echo 'counter: ' . $counter . "<br>";
    ?>

    <!-- end 7 -->

    <!-- 8 -->
    
        <?php 
            echo 'Visitors number = ' . $counter . "<br>";
        ?>

        <!-- end 8 -->
        

    
</body>
</html>


<?php 

//6
$endTime= microtime(true);

echo "Time: " . ($endTime - $startTime) . "<br>";

?>