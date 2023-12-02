<!-- Write a PHP script to generate unique random 10 numbers within a specific range. 

Sample Input: (11, 20)
Sample Output: 17 16 13 20 14 19 18 15 11 12 -->


<?php
$numbers = range(11, 20);
shuffle($numbers);
for ($i = 0; $i < 10; $i++) {
    echo $numbers[$i] . ' ';
}
?>