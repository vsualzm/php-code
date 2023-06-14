<?php


$x = 1000;
var_dump($x);


$y = 20.12;
var_dump($y);

// $a = true;
// $b = false;

$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);


// buat kelas 
class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}


$myCar = new Car("Black", "Volvo");
echo $myCar->message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar->message();


?>