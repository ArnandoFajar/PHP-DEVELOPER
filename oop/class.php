<?php

class Fruits
{
    public $name;
    public $color;
    public $supplier;

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

    function set_color($color)
    {
        $this->color = $color;
    }
    function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruits();
$apple->set_name('apel manis warna');
$apple->set_color('Merah');
echo $apple->get_name();
echo "\n";
echo $apple->get_color();
