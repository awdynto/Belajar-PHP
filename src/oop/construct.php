<?php
class Buah {
  // Properties
  public $nama;
  public $warna;

  //Construct
  function __construct($namaBaru, $warnaBaru) {
    $this->nama = $namaBaru;
    $this->warna = $warnaBaru;
  }

  // Methods
  function aturWarna($warnaBaru) {
    $this->warna = $warnaBaru;
  }

  function tampilDeskripsi() {
    echo "Buah $this->nama berwarna $this->warna";
  }
}

$pisang = new Buah("Pisang", "Kuning");

echo $pisang->nama;
echo "<br>";
echo $pisang->warna;
echo "<br>";
echo $pisang->tampilDeskripsi();
?>