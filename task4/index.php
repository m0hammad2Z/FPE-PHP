<?php
    //1
    class SimpleClass{
        public function __construct(){
            echo 'MyClass class has initialized!';
        }
    }

    $simpleClass = new SimpleClass();
    
    echo "<br>";
    
    //2
    class IntroduceClass{
        public function __construct($name){
            echo 'Hello,'.  $name;
        }
    }

    $introduceClass = new IntroduceClass('Ahmad');
    echo "<br>";

    //3 
    class FactorialClass{
        public function __construct($number){
            $factorial = 1;
            for ($x=$number; $x>=1; $x--){
                $factorial = $factorial * $x;
            }
            echo 'Factorial of $number is '. $factorial;
        }
    }

    $factorialClass = new FactorialClass(5);
echo "<br>";

    //4

    class SortClass{
        public function __construct($array){
            sort($array);
            echo 'Sorted array is '; print_r($array);
        }
    }

    $sortClass = new SortClass([11, -2, 4, 35, 0, 8, -9]);
    echo "<br>";

    //5
    class TwoDataDiffClass{
        public function __construct($date1, $date2){
            $diff = abs(strtotime($date2) - strtotime($date1));
            echo 'Difference is: '. $diff;
        }
    }
    

    $twoDateDiff = new TwoDataDiffClass('2020-09-01', '2020-09-10');
echo "<br>";


    //6
    class ConvertToDate{
        public function __construct($date){
            $date = date('Y-m-d', strtotime($date));
            echo 'Date is: '. $date;
        }
    }

    $convrtToDate = new ConvertToDate('2020-09-01');

?>