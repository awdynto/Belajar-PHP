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

// Pisang warisan dari Buah
class Pisang extends Buah {
    public function halo() {
      echo "Halo Nama Saya Pisang";
    }
}

$pisang = new Pisang("Pisang", "Kuning");

echo $pisang->halo();
?>