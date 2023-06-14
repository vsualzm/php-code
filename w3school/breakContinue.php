<?php

// case 1
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "The number is: $x \n";
}

// case 2

// for ($x = 0; $x < 10; $x++) {
//     if ($x == 4) {
//         continue;
//     }
//     echo "The number is: $x <br>";
// }


// case3
// $x = 0;

// while($x < 10) {
//   if ($x == 4) {
//     break;
//   }
//   echo "The number is: $x <br>";
//   $x++;
// }

// case4
// $x = 0;

// while ($x < 10) {
//     if ($x == 4) {
//         $x++;
//         continue;
//     }
//     echo "The number is: $x <br>";
//     $x++;
// }