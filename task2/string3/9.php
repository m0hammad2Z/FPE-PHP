<?php
    $string1 = 'dragonball';
    $string2 = 'dragonboll';
    $diffPosition = strspn($string1 ^ $string2, "\0");
    echo "First difference between two strings at position $diffPosition: \"$string1[$diffPosition]\" vs \"$string2[$diffPosition]\"";
?>
