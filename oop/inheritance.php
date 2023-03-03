<?php
class Sayur
{
    public $nama;
    public $warna;
    public $berat;
    public $harga;

    public function __construct(string $nama, string $warna, string $berat)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->berat = $berat;
    }

    public function set_harga(int $harga)
    {
        $this->harga = $harga;
    }

    public function get_harga()
    {
        return $this->harga;
    }
}


class Daunan extends Sayur
{
    public function message()
    {
        echo "ini adalah sayur {$this->nama} yang berwarna {$this->warna} dengan satuan berat {$this->berat}";
    }
}

$Sawi = new Daunan('Sawi', 'Hijau', 'ikat');

$Sawi->message();
$Sawi->set_harga(2500);
echo "\n";
echo "Harganya : " . $Sawi->get_harga();
