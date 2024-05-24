<?php

class Kendaraan {
    public $merk;
    public $model;

    public function __construct($merk, $model) {
        $this->merk = $merk;
        $this->model = $model;
    }

    public function info() {
        return "Merk: $this->merk, Model: $this->model";
    }
}

class Mobil extends Kendaraan {
    public $jumlahPintu;

    public function __construct($merk, $model, $jumlahPintu) {
        parent::__construct($merk, $model);
        $this->jumlahPintu = $jumlahPintu;
    }

    public function infoLengkap() {
        return "Merk: $this->merk, Model: $this->model, Jumlah Pintu: $this->jumlahPintu";
    }
}

$mobilBaru = new Mobil("Toyota", "Corolla", 4);
echo $mobilBaru->infoLengkap();

?>
