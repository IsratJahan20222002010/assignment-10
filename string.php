<?php
// Array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($string) {
    // Convert the string to lowercase for consistent vowel counting
    $string = strtolower($string);
    // Count the vowels in the string
    $vowelsCount = preg_match_all('/[aeiou]/', $string);
    return $vowelsCount;
}

// Loop through each string in the array
foreach ($strings as $string) {
    // Count the vowels
    $vowelCount = countVowels($string);
    // Reverse the string
    $reversedString = strrev($string);
    
    // Print the original string, vowel count, and reversed string
    echo "Original String: $string\n";
    echo "Vowel Count: $vowelCount\n";
    echo "Reversed String: $reversedString<br>";


    
}
?>