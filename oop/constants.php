<?php

class Goodbye
{
    const LEAVING_MESSAGE = "Hello world";
}

echo Goodbye::LEAVING_MESSAGE;


echo "\n";
echo "\n";


class Pesanx
{
    const PESAN = "Ini adalah class PESAN";

    public function pesan()
    {
        echo self::PESAN;
    }
}

$SMS = new Pesanx();

$SMS->pesan();
