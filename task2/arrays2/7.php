<?php
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64,
                      76, 63, 75, 76, 73, 68, 62, 73, 72, 65,
                      74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$average = array_sum($temperatures) / count($temperatures);
echo "Average Temperature is: $average<br>";
sort($temperatures);
echo "List of seven lowest temperatures: ";
for ($i = 0; $i < 7; $i++) {
    echo $temperatures[$i] . ", ";
}
echo "<br>List of seven highest temperatures: ";

for ($i = count($temperatures) - 7; $i < count($temperatures); $i++) {
    echo $temperatures[$i] . ", ";
}

?>