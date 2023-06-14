<?php
// Membuat fizzBuzz 
// Untuk angka yang habis dibagi dengan 3, ganti dengan kata "Fizz"
// Untuk angka yang habis dibagi dengan 5, ganti dengan kata "Buzz"
// Untuk angka yang habis dibagi dengan 3 dan 5, ganti dengan kata "FizzBuzz



// for ($i = 1; $i <= 15; $i++) {
//     if ($i % 3 == 0 && $i % 5 == 0) {
//         echo "index: " . $i . "(FIZZ BUZZ)\n";

//     } elseif ($i % 5 == 0) {
//         echo "index: " . $i . "(Buzz)\n";
//     } elseif ($i % 3 == 0) {
//         echo "index: " . $i . "(Fizz)\n";
//     } else {
//         echo "index: " . "$i\n";
//     }
// }


// dengan memakai function 


// function fizzBuzz($angka)
// {
//     for ($i = 1; $i <= $angka; $i++) {
//         if ($i % 3 == 0 && $i % 5 == 0) {
//             echo "index: " . $i . "(FIZZ BUZZ)\n";

//         } elseif ($i % 5 == 0) {
//             echo "index: " . $i . "(Buzz)\n";
//         } elseif ($i % 3 == 0) {
//             echo "index: " . $i . "(Fizz)\n";
//         } else {
//             echo "index: " . "$i\n";
//         }
//     }
// }

// fizzBuzz(20);


// $x = true and false;
// var_dump($x);


$array1 = array("data", "numerik", "desimal", "integeral");
$array2 = array("konguan", "dataset", "kabel", "nirmala");

$arrayCombine = array_merge($array1, $array2);
// print_r($arrayCombine);


foreach ($arrayCombine as $index => $array) {
    $index++;
    echo "index: " . $index . " " . $array . "\n";
}