<?php


$cars = array("Volvo", "BWM", "Toyota");


// mencari tahu berapa adda jumlah array
// echo "isi dalam array: " . count($cars);
// echo "isi dalam array: count($cars) ";s

foreach ($cars as $index => $car) {
    $index++;
    echo "Index:" . $index . ", Car: " . $car . "\n";
}


// assosiace 


$age = array("peter" => 20, "BEN" => 22, "katy" => 30);
// echo "peter" . $age['peter'];

// looping 

foreach ($age as $name => $valueages) {
    echo "NAME : " . "$name\n" . "AGE: " . $valueages . "\n";
}


// sorting array 

// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key

echo "--------------\n";
$mobil = array("Volvo", "BMW", "Toyota");
asort($mobil);


foreach ($mobil as $mobils) {
    echo $mobils . "\n";
}