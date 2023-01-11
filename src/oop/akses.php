<?php
class Buah
{
  // Properties
  // Jenis Akses public, private, protected 
  // private $nama;
  // protected $nama;
  public $nama;

  public $warna;

  //Construct
  function __construct($namaBaru, $warnaBaru)
  {
    $this->nama = $namaBaru;
    $this->warna = $warnaBaru;
  }

  // Methods
  function aturWarna($warnaBaru)
  {
    $this->warna = $warnaBaru;
  }

  function tampilDeskripsi()
  {
    echo "Buah $this->nama berwarna $this->warna";
  }
}

// Pisang warisan dari Buah
class Pisang extends Buah
{
  public function halo()
  {
    echo "Halo Nama Saya $this->nama";
  }
}

$pisang = new Pisang("Pisang", "Kuning");

echo $pisang->nama;
echo "<br />";
echo $pisang->halo();
