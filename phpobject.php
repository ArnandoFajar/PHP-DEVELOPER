<?php
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
        return "My Car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("Red", "Lamborghini");
echo $myCar->message();

$myCar = new Car("Black Metalic", "Avanza");
echo $myCar->message();
