<?php

class greeting
{
    public static function welcome()
    {
        echo "Hello World !";
    }
}

//call static method
// greeting::welcome();
$sapa = new greeting();

$sapa->welcome();
