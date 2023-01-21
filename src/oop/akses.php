<?php

class Buah
{

    private $nama; //hanya bisa diakses di kelasnya
    // protected $nama; //hanya bisa diakses di kelasnya dan warisannya
    // public $nama; //bisa diakses dimana aja


    function gantiNama($namaBaru)
    {
        $this->nama = $namaBaru;

        echo $this->nama;
    }
}

class Pisang extends Buah
{

    function gantiNama($namaBaru)
    {
        $this->nama = $namaBaru;
    }

    function tampilDeskripsi()
    {
        echo "<br /> Halo Saya $this->nama";
    }
}

$pisang = new Buah();
// $pisang->nama = "Pisang";

echo $pisang->gantiNama("Pisang");


// $pisangBaru = new Pisang();
// $pisangBaru->gantiNama("Pisang Baru");
// $pisangBaru->tampilDeskripsi();
