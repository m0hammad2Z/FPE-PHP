<?php
    $string = '\"\1+2/3*2:2-3/4*3';
    $newString = preg_replace('/[^0-9]/', ' ', $string);
    echo $newString;
?>
