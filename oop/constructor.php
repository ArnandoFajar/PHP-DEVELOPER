<?php

class Fruit
{
    public $name;
    public $color;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_color()
    {
        return $this->color;
    }
}

$Jeruk = new Fruit("Jeruk", "jingga");

echo $Jeruk->get_name();
echo "\n";
echo $Jeruk->get_color();
