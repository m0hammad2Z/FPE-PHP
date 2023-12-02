<?php
    $originalString = 'The quick brown fox jumps over the lazy dog';
    $words = explode(' ', $originalString);
    $newString = implode(' ', array_slice($words, 0, 5));
    echo $newString;
?>
