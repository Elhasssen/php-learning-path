<?php 

$string = 'Hello world';
// get the length of a string
echo strlen($string);

// find the postiong of the first occurence of a substring
// in a string

echo strpos($string, 'l');

// find the lst occurence of a substring in a string 

echo strrpos($string, 'l');

// reverse a string 

echo strrev($string);

// convert all charachters to lowercase

echo strtolower($string);

// convert all charachters to uppercase

echo strtoupper($string);

// Uppers the first charachter of the each word

echo ucwords($string);

// return a portion of a string specified by the offset and length

echo substr($string,0,5);
echo substr($string,5);

// string replace
echo str_replace('world','everone',$string);
// 

// Startswith
if (str_starts_with($string, 'Hello')) {
    echo 'Yes';
}

// endswith 

if (str_ends_with($string, 'world')) {
    echo 'Yes';
}

// some methods that are used to security

$string2 = '<script>alert(1)</script>';
// echo $string2; // or 
echo htmlspecialchars($string2);
?>