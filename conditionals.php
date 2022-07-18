<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}

*/

// $age = 25;

// if ($age > 18){
//     echo 'You are old enough to vote!';
// }
// else {
//     echo 'Sorry, you are too young to vote.';

// }


// $t = date("H");
// if ($t < 12){
//     echo "Good Morining";
// }
// elseif ($t < 17){
//     echo "Good Afternoon";
// }
// else {
//     echo "Good Evening";
// }

$numbers = [1,2,3,4];

// if(!empty($numbers)){
//     echo "Array is Not Empty";
// }
// else {
//     echo "Array is Empty";
// }

// $first_Number =  !empty($numbers) ? $numbers[0]: "Empty Array";

// echo $first_Number;

# Switch 
$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is not red, blue, nor green!';
}
?>