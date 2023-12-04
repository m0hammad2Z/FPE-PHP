<?php 
//1
for($i = 1; $i <= 10; $i++){
    echo $i;
    if($i != 10)
        echo "-";
}

echo "<br>";

//2
$total = 0;
for($i = 1; $i <= 30; $i++)
    $total += $i;

echo $total;

echo "<br>";


//3
$currentLetter = 1;
for($i = 'A'; $i<='E'; $i++){
    for($j = 1; $j<=5 - $currentLetter; $j++){
        echo 'A';
    }
    for($j = 5 - $currentLetter; $j<5; $j++){
        echo $i;
    }

    echo "<br>";
    $currentLetter++;
}

echo "<br>";

//4
    $currentNumber = 1;
    for($i = 1; $i<=5; $i++){
        for($j = 1; $j<=5 - $currentNumber; $j++){
            echo 1;
        }
        for($j = 5 - $currentNumber; $j<5; $j++){
            echo $i;
        }

        echo "<br>";
        $currentNumber++;
    }

echo "<br>";

//4
    for($i = 1; $i<=5; $i++){
        for($j = 1; $j<=5; $j++){
            if($i == $j)
                echo $i;
            else
            echo 0;
        }

        echo "<br>";
    }

echo "<br>";


//5
function factorial($number){
    $factorial = 1;
    for($i = 1; $i<=$number; $i++){
        $factorial *= $i;
    }

    return $factorial;
}

echo factorial(5);
echo "<br>";

//6
function fibonacci(int $number){
    $firstNumber = 0;
    $secondNumber = 1;
    $fibonacci = 0;
    for($i = 1; $i<=$number; $i++){
        echo $fibonacci . " ";
        $fibonacci = $firstNumber + $secondNumber;
        $firstNumber = $secondNumber;
        $secondNumber = $fibonacci;
    }
}

echo fibonacci(5);
echo "<br>";

//7
function cCountCharacters($string){
    $count = 0;
    for($i = 0; $i<strlen($string); $i++){
        if($string[$i] == 'c' || $string[$i] == 'C')
            $count++;
    }

    return $count;
}

echo cCountCharacters('Orange Coding Academy');


// 8
echo "<table border='1' cellpadding='3px' cellspacing='0px'>";
for($i = 1; $i <= 5; $i++){
    echo "<tr>";
    for($j = 1; $j <= 5; $j++){
        echo "<td>" . $i . " * " . $j . " = " . $i*$j . "</td>";
    }
    echo "</tr>";
}


// 9
for($i = 1; $i <= 5; $i++){
    if($i % 3 == 0 && $i % 5 == 0)
        echo "FizzBuzz";
    else if($i % 3 == 0)
        echo "Fizz";
    else if($i % 5 == 0)
        echo "Buzz";
    else 
       echo $i;
}


//10
function generateFloydsTriangle($n) {
    $number = 1;

    for ($row = 1; $row <= $n; $row++) {
        for ($col = 1; $col <= $row; $col++) {
            echo $number . " ";
            $number++;
        }
        echo "<br>";
    }
}

$nLines = 5;

generateFloydsTriangle($nLines);


//11
function printPattern($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }

        for ($j = 1; $j <= $i; $j++) {
            echo chr(ord('A') + $j - 1) . " ";
        }

        echo "<br>";
    }

    for ($i = $n - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $n - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j <= $i; $j++) {
            echo chr(ord('A') + $j - 1) . " ";
        }

        echo "<br>";
    }
}

$nLines2 = 5;

printPattern($nLines2);


?>