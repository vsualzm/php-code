<?php

// case 1
// $x = 1;

// while ($x <= 10) {
//     if ($x % 2 == 0) {
//         echo "GENAP COK:$x\n";
//     } else {
//         echo "nilai:$x\n";
//     }
//     $x++;
// }

// case 2 dowhile
// $x = 1;

// do {
//   echo "The number is: $x <br>";
//   $x++;
// } while ($x <= 5);


// for 
// for ($x = 1; $x <= 10; $x++) {
//     echo $x . ":jancokkk\n";
// }

// foreach 

// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $color) {
//     echo "$color\n";
// }

// $fruits = array('apple', 'banana', 'orange');

// foreach ($fruits as $index => $fruit) {
//     $index++;
//     echo "Index: " . $index . ", Fruit: " . $fruit . "\n";
// }

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $val) {
    echo "$x = $val\n";
}