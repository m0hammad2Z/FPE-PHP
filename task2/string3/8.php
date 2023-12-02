<?php
    $sentence = 'That new trainee is so genius.';
    $newWord = 'Our';
    echo preg_replace('/^\w+/', $newWord, $sentence);
?>
