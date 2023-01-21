<?php

class Buah
{

    //property
    public $nama;
    public $warna;

    // function __construct($a, $b)
    // {
    //     $this->nama = $a;
    //     $this->warna = $b;
    // }
}

$pisang = new Buah("Pisang", "Kuning");

echo $pisang->warna;
echo "<br />";
echo $pisang->nama;
