<?php
$inputArray = array(1, 2, 3, 4, 5);

$location = 4;

array_splice($inputArray, $location - 1, 0, '$');

echo implode(' ', $inputArray);

?>
