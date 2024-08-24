<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count vowels
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);

    // Reverse string
    $reversedString = strrev($string);

    // Output
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

?>
