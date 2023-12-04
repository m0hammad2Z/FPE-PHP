<?php 
    // 1
    function isPrime($n) {
        if ($n == 1) {
            return 0;
        }
        for ($i = 2; $i <= $n/2; $i++) {
            if ($n % $i == 0) {
                return 0;
            }
        }
        return 1;
    }

    echo isPrime(6);
    
    echo "<br>";

    // 2
    $string = "Hello World";
    echo strrev($string);

    echo "<br>";

    // 3
    $lowerCaseString = "This is a string";
    if($lowerCaseString == strtolower($lowerCaseString)) {
        echo "String is in lower case";
    } else {
        echo "String is not in lower case";
    }

    echo "<br>";


    // 4
    $x = 12;
    $y = 23;

    $x = $x + $y;
    $y = $x - $y;
    $x = $x - $y;
    
    echo "$x  $y";
    echo "<br>";


    // 5
    function isArmstrongNumber($number) {
        $originalNumber = $number;
        $sum = 0;
    
        while ($number > 0) {
            $digit = $number % 10;
            $sum += pow($digit, 3);
            $number = (int)($number / 10);
        }
    
        if ($sum == $originalNumber) {
            echo "$originalNumber is Armstrong Number";
        } else {
            echo "$originalNumber is not Armstrong Number";
        }
    }
    
    isArmstrongNumber(407);
    echo "<br>";


    // 6
    function isPalindrome($str) {
        $cleanedStr = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($str));
        
        $reversedStr = strrev($cleanedStr);
    
        if ($cleanedStr == $reversedStr) {
            echo "Yes, it is a palindrome";
        } else {
            echo "No, it is not a palindrome";
        }
    }
    
    isPalindrome("Eva, can I see bees in a cave?");


    // 7
    $nonDuplcateArray = array(1,2,3,2,4,5,5);
    $resultNonDuplcateArray = array_unique($nonDuplcateArray);

    print_r($resultNonDuplcateArray);
    
    


    
    
?>