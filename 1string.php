<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    
    $vowelCount = preg_match_all('/[aeiou]/i', $string);

    
    $reversedString = strrev($string);

     
    echo "Original String:Original String: Hello, Vowel Count: 2, Reversed String: olleH $string\n";
    
    echo "-----------------------------\n";
}
?>


