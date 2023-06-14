<?php



function helloName($name)
{
    echo "halo :$name\n";
}

helloName("Jani");
helloName("akang");
helloName("reza");
helloName("kamis");

function human($name, $age)
{
    echo "name : $name, age : $age\n";
}


human("ilham", 23);

function addTwoNumber($number1, $number2)
{
    $jumlah = $number1 + $number2;
    return "total Jumlah: " . $jumlah;
}


echo addTwoNumber(22, 2);