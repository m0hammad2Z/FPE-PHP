
<?php

function colorizeFirstCharacter($inputString, $color = 'red') {

    $words = explode(' ', $inputString);
    foreach ($words as &$word) {
        if (!empty($word)) {
            $firstChar = substr($word, 0, 1); 
            $remainingChars = substr($word, 1);
            $word = '<span style="color: ' . $color . ';">' . $firstChar . '</span>' . $remainingChars;
        }
    }

    $outputString = implode(' ', $words);
    return $outputString;
}

$sampleString = 'PHP Tutorial';


$coloredString = colorizeFirstCharacter($sampleString);

echo $coloredString;
