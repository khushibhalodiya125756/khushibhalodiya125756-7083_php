<?php
// Define a sample string to work with
$sampleString = "Hello World! Learning PHP is fun.";

echo "Original String: '" . $sampleString . "'\n";
echo "--------------------------------------------------\n\n";

// 1) strlen() - Gets the total length of the string (including spaces and punctuation)
$length = strlen($sampleString);
echo "1) strlen():\n";
echo "The length of the string is " . $length . " characters.\n\n";

// 2) strpos() - Finds the numerical position of a specific word or letter
// Note: String positions start at 0, not 1. It is case-sensitive.
$searchWord = "PHP";
$position = strpos($sampleString, $searchWord);
echo "2) strpos():\n";
echo "The word '" . $searchWord . "' starts at position " . $position . ".\n\n";

// 3) str_word_count() - Counts the total number of words in the string
$wordCount = str_word_count($sampleString);
echo "3) str_word_count():\n";
echo "The string contains a total of " . $wordCount . " words.\n\n";

// 4) strrev() - Reverses the entire string backwards
$reversedString = strrev($sampleString);
echo "4) strrev():\n";
echo "Reversed: '" . $reversedString . "'\n\n";

// 5) strtolower() - Converts all characters in the string to lowercase
$lowercaseString = strtolower($sampleString);
echo "5) strtolower():\n";
echo "Lowercase: '" . $lowercaseString . "'\n\n";

// 6) strtoupper() - Converts all characters in the string to uppercase
$uppercaseString = strtoupper($sampleString);
echo "6) strtoupper():\n";
echo "Uppercase: '" . $uppercaseString . "'\n";

?>