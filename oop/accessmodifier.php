<?php

class Mobil
{
    public $name;
    public $warna;
    public $harga;

    function set_name(string $name)
    {
        $this->name = $name;
    }

    protected function set_warna(string $warna)
    {
        $this->warna = $warna;
    }

    private function set_harga(int $harga)
    {
        $this->harga = $harga;
    }
}

$avanza = new Mobil();

echo $avanza->set_name('avanza');
// $avanza->set_warna('abu abu'); //error
// $avanza->set_harga('180juta'); //error
