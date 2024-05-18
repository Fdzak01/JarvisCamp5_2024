<?php

class Buah {

    public $nama;
    public $warna;
    public $rasa;

    public function __construct($nama,$warna,$rasa){
        $this->nama =$nama;
        $this->warna =$warna;
        $this->rasa =$rasa;
    }

    public function jatuh(){
        echo "$this->nama jatuh \n";
    }
}

class Mobil{

    public $warna;
    public $merek;

    public function berjalan(){
        echo "$this->merk berjalan \n";
    }
    public function mengerem(){
        echo "$this->merk mengerem \n";
    }
}

$jeruk = new Buah("jeruk","orange","Manis & Asam");
$jeruk->jatuh();
echo "Buah $jeruk->nama berwarna $jeruk->warna memilki rasa $jeruk->rasa \n";

$toyota = new Mobil();
$toyota->merk = "Toyota";
$toyota->warna ="Silver";
$toyota->berjalan();
$toyota->mengerem();
echo "Mobil $toyota->merk berwarna $toyota->warna";


echo "\n";