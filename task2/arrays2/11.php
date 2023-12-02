<!-- Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 

Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248 -->


<?php
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 === 0) {
        echo $i . ', ';
    }
}

?> 