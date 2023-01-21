<?php

class Buah
{

    //property
    public $nama;
    public $warna;

    //methods
    function tampilDeskripsi()
    {
        echo "<br /> Nama Buah $this->nama dengan warna $this->warna";
    }
}


$pisang = new Buah();
$pisang->nama = "Pisang";
$pisang->warna = "Kuning";

$mangga = new Buah();
$mangga->nama = "Mangga";

echo $pisang->warna;
echo "<br /> $mangga->nama";
echo $pisang->tampilDeskripsi();
