<?php

class Buah
{
    public $name;
    public $color;

    function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct()
    {
        echo "ini adalah buah {$this->name} yang warnanya {$this->color}";
    }
}

$melon = new Buah('Melon', 'Hijau');
