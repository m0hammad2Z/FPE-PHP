<?php
$sentence = 'I am a full stack developer at orange coding academy';

$specificWord = 'Orange';

if (stripos($sentence, $specificWord) !== false) {
    echo 'Word Found!';
} else {
    echo 'Word Not Found!';
}
?>
