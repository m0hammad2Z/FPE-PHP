<?php
    $originalString = 'The brown fox';
    $newString = substr_replace($originalString, 'quick ', 4, 0);
    echo $newString;
?>
