<?php

$string = 'Moayad Abukhadra';

# string length
// echo strlen($string);

# find the position of the first occurrence of a substring
//  echo strpos($string, 'A');

# find the position of the last occurrence of a substring
// echo strrpos($string,"a");


// Reverse a string
// echo strrev($string);

// Convert all characters to lowercase
// echo strtolower($string);

// Convert all characters to uppercase
// echo strtoupper($string);

// Uppercase the first character of each word
// echo ucwords($string);

// String replace
// echo str_replace('Moayad', 'Hello', $string);

// Return portion of a string specified by the offset and length
// echo substr($string, 0, 5);
// echo substr($string, 5);

// Starts with
// if (str_starts_with($string, 'Moayad')) {
//   echo 'YES';
// }

// Ends with
// if (str_ends_with($string, 'ra')) {
//   echo 'YES';
// }

// HTML Entities
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Brad', 'nice guy');
printf('1 + 1 = %f', 1 + 1); // float
