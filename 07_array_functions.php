<?php
// these function is to manipulate arrays, filter then et cetera

// $fruits = ['apple','orange','lemon','watermelon'];

// get length
// echo count($fruits);
// search array, retruns a boolean 
// var_dump(in_array('apple',$fruits));
// add in array
// $fruits[] = 'grapes';
// print_r($fruits);
// // or using push 
// array_push($fruits, 'banana');
// print_r($fruits);
// // or add at the beginening
// array_unshift($fruits, 'mango');
// print_r($fruits);
// remove from array 
// array_pop($fruits);
// print_r($fruits);
// // or remove from the begining 
// array_shift($fruits);
// print_r($fruits);
// // unset will remove certain item with its index 
// unset($fruits[0]);
// print_r($fruits);
// split into 2 chunks 
// $chunked = array_chunk($fruits,2);
// print_r($chunked)
// merging two arrays
// $arr1 = [1,5,8,9];
// $arr2 = [8,7,9,3];
// $arr3 = array_merge($arr1,$arr2);
// // or using the spread operator 
// $arr4 = [...$arr1,...$arr2];
// print_r($arr4);
// using combine 

// $a = ['blue','magenta','yellow'];
// $b = ['grapes','grapefruit','banana'];
// $c = array_combine($b ,$a);
// // print_r($c);
// // // or we can get the keys of that created dictionary
// // $keys = array_keys($c);
// // print_r($keys);

// // we can use flip 

// $flipped = array_flip($c);
// print_r($flipped);

// creating an array with a range of numbers 
// $numbers = range(1,20);

// print_r($numbers);

// // mapping through an array
// $new_numbers = array_map(function($number){
//     return "Number ${number}";
// }, $numbers);
// print_r($new_numbers);

// filter array method 

// $lessthan10 = array_filter($numbers, fn($number) => $number <= 10);
// print_r($lessthan10)

// reduce array, calculating the sum
// $sum = array_reduce($numbers,fn($carry,$number)=>
// $carry + $number);

// print_r($sum);
?>