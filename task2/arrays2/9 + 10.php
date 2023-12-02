<?php
$colors = array("red","blue", "white","yellow");

function upperCase($colors) {
    foreach ($colors as $color) {
        echo strtoupper($color) . '<br>';
    }
}

upperCase($colors);


function lowerCase($colors) {
    foreach ($colors as $color) {
        echo strtolower($color) . '<br>';
    }
}


lowerCase($colors);


?>