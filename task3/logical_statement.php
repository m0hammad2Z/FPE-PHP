<?php 

// 1
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

$yearToCheck = 2013;

if (isLeapYear($yearToCheck)) {
    echo "$yearToCheck is a leap year";
} else {
    echo "$yearToCheck is not a leap year";
}


echo "<br>";

//2

function checkSeason($temperture){
    if($temperture < 20){
        echo "Winter";
    }else {
        echo "Summer";
    }
}

checkSeason(32);


echo "<br>";
// 3
function sum($num1 , $num2){
    $sum = 0;
    if($num1 == $num2){
        $sum = ($num1 + $num2) * 3;
    }else{
        $sum = $num1 + $num2;
    }
    
    echo $sum;
}

sum(12,32);

echo "<br>";

//4
function sum2($sum2num1 , $sum2num2){
    $sum = 0;
    if($sum2num1 + $sum2num2 == 30){
        return $sum2num1 + $sum2num2;
    }
    else{
        return false;
    }
}

echo sum2(12,18);
echo "<br>";


//5
function isMultipleBy3($number){
    if($number % 3 == 0){
        return true;
    }else{
        return false;
    }
}

echo isMultipleBy3(12);
echo "<br>";

// 6
function isBetween20and50($number){
    if($number > 20 && $number < 50){
        return true;
    }else{
        return false;
    }
}

echo isBetween20and50(30);
echo "<br>";

// 7
function findLargestNumber($num1 , $num2 , $num3){
    if($num1 > $num2 && $num1 > $num3){
        return $num1;
    }elseif($num2 > $num1 && $num2 > $num3){
        return $num2;
    }else{
        return $num3;
    }
}

echo findLargestNumber(10, 20, 4);
echo "<br>";


// 8
function calculateElectricityBill($units) {
    $totalBill = 0;
    if ($units <= 50) {
        $totalBill = $units * 2.50;
    } else {
        $totalBill = 50 * 2.50;

        if ($units <= 150) {
            $totalBill += ($units - 50) * 5.00;
        } else {
            $totalBill += 100 * 5.00;

            if ($units <= 250) {
                $totalBill += ($units - 150) * 6.20;
            } else {
                $totalBill += 100 * 6.20;
                $totalBill += ($units - 250) * 7.50;
            }
        }
    }

    return $totalBill;
}

echo calculateElectricityBill(300);
echo "<br>";

// 9
function calculator($num1 , $num2 , $operator){
    $result = 0;
    switch($operator){
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            $result = $num1 / $num2;
            break;
        default:
            echo "Invalid Operator";
    }
    return $result;
}

calculator(2, 34, "/");
echo "<br>";

//10
function canVote($age){
    if($age >= 18)
        return true;
    else
        return false;
}

if(canVote(23)){
    echo "You can vote";
}else{
    echo "You can't vote";
}

echo "<br>";

//11
function numberCondition($number){
    if($number = 0) echo "Positive";
    else if($number < 0) echo "Negative";
    else echo "zero";
}

numberCondition(0);
echo "<br>";

//12
function average($scores){
    if(count($scores) == 0) return 0;
    $sum =0;
    foreach($scores as $score) {
        $sum += $score;
    }
    return $sum/count($scores);
}

$scoresVar = [12, 23, 34, 45, 56, 67, 78, 89, 90];
echo average($scoresVar);

?>