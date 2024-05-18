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

class Jeruk extends Buah{

    public $jenis;
    public function __construct($nama, $warna, $rasa){
        parent:: __construct("Jeruk", $warna, $rasa);
        $this->jenis = $jenis;
    }

    public function printjenis(){
        echo "ini adalah jeruk $this->jenis dengan warna $this->warna this->rasa n\";
    }

}