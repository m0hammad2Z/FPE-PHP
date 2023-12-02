<!-- Write a PHP script to get the shortest/longest string length from an array. 

Sample Input:

 $words =  array("abcd","abc","de","hjjj","g","wer")

Expected Output : 

The shortest array length is 1. The longest array length is 4.
  -->


<?php
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$shortest = strlen($words[0]);
$longest = strlen($words[0]);

foreach ($words as $word) {
    if (strlen($word) < $shortest) {
        $shortest = strlen($word);
    }
    if (strlen($word) > $longest) {
        $longest = strlen($word);
    }
}

echo "The shortest array length is $shortest. The longest array length is $longest.";
?>