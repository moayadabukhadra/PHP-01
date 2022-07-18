<?php

# Output

# echo
$name = "Moayad";
$age = 25;
// echo $name,$age;

# print 
// print $name;

# print_r()
// print_r([1,2,3]);

# var_dumb()
// var_dump("Moayad");

# var_export()
// var_export([1,2,3]);
// var_export("Moayad");


# Variables 

// echo   $name  . " is " . $age ." Years old." ;

// echo 5 + 5;
// echo 5 * 5;
// define("const name" , "value");


# Arrays 

$numbers = [1,2,3,4,5,6];
$fruits = array("apple","orange","pear");

// print_r($numbers);
// echo $fruits[1];

#Assoiative Array
$colors = [
    1 => "red",
    2 => "blue",
    3 => "green",
];

// echo $colors[1];

$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
  ];
  
//   echo $hex['red'];
//   var_dump($hex);

# Array of arrays

$person1 = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com',
  ];


$people = [
    $person1, //   [...$person1]
    [
      'first_name' => 'John',
      'last_name' => 'Doe',
      'email' => 'john@gmail.com',
    ],
    [
      'first_name' => 'Jane',
      'last_name' => 'Doe',
      'email' => 'jane@gmail.com',
    ],
  ];
  
//   var_dump($people);
  
//   Accessing values in a multi-dimensional array
//   echo $people[0]['first_name'];
//   echo $people[2]['email'];

  
?>



