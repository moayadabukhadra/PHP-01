<?php

$fruits = ['apple', 'ornage', 'pear'];

# array length 

// echo count($fruits);

# search array

// var_dump((in_array('apple',$fruits)));

# add to array 


$fruits[] = 'grape';

// print_r($fruits);



array_push($fruits,'blueberry'); # adds to the end of the array 
array_unshift($fruits,'strawberry'); # adds to the begining of the array 
// print_r($fruits);


# Remove from the array 

// array_pop($fruits); # removes the last element 
// array_shift($fruits); # removes the first element 
// unset($fruits[2]);  # removes at specific index
// print_r($fruits);

# chunk array 

$chunked_array = array_chunk($fruits,2);
// print_r($chunked_array);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1,$arr2);

// print_r($arr3);
$arr4 = [...$arr1];
// print_r($arr4);


$a = ['green','yellow','blue'];

$b = ['apple','orange','pear'];

$c = array_combine($a,$b);

// print_r($c);

$flipped = array_flip($c);
// print_r($flipped);


$numbers = range(1,20);

$newNumbers = array_map(function($number){

return "Number  {$number}";

},$numbers);

// print_r($newNumbers);

$lessThan10 = array_filter($numbers , fn($number) => $number <= 10 );

print_r($lessThan10);

