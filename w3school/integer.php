<?php

$x = 123;
var_dump(is_int($x)); // bool(true)

$x = 59.85;
var_dump(is_int($x)); // bool(false) harusnya true

$x = 10.365;
var_dump(is_float($x)); //bool(true)

$x = 1.9e411;
var_dump($x);

$x = acos(8);
var_dump($x);

echo "----------\n";

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));


// casting String to Float 

$x = "2000.000";
$int_cast = (int) $x;
echo $int_cast;