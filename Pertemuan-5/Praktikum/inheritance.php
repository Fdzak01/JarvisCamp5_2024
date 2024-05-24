<?php
class Buah {

    public $nama;
    public $warna;
    public $rasa;

    public function __construct($nama, $warna, $rasa){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->rasa = $rasa;
    }

    public function jatuh(){
        echo "$this->nama jatuh \n";
    }
}

class Jeruk extends Buah {

    public $jenis;

    public function __construct($nama, $warna, $rasa, $jenis){
        parent::__construct($nama, $warna, $rasa);
        $this->jenis = $jenis;
    }

    public function printjenis(){
        echo "Ini adalah jeruk $this->jenis dengan warna $this->warna dan rasa $this->rasa \n";
    }
}

// Example usage
$jeruk = new Jeruk("Jeruk", "Oranye", "Manis", "Sunkist");
$jeruk->printjenis();
$jeruk->jatuh();
?>
