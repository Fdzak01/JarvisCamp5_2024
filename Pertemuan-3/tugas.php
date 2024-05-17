<?php

//menampilkan angka ganjil
function tampilkanAngkaGanjil($angkaPertama, $angkaTerakhir) {
    $ganjil = [];
    for ($i = $angkaPertama; $i <= $angkaTerakhir; $i++) {
        if ($i % 2 != 0) {
            $ganjil[] = $i;
        }
    }
    return $ganjil;
}

//menampilkan angka genap
function tampilkanAngkaGenap($angkaPertama, $angkaTerakhir) {
    $genap = [];
    for ($i = $angkaPertama; $i <= $angkaTerakhir; $i++) {
        if ($i % 2 == 0) {
            $genap[] = $i;
        }
    }
    return $genap;
}

//menghitung aritmatika
function hitungAritmatika($angka1, $angka2, $operasi) {
    switch ($operasi) {
        case 'tambah':
            return $angka1 + $angka2;
        case 'kurang':
            return $angka1 - $angka2;
        case 'bagi':
            if ($angka2 != 0) {
                return $angka1 / $angka2;
            } else {
                return "Error: Pembagian dengan nol";
            }
        case 'kali':
            return $angka1 * $angka2;
        default:
            return "Operasi tidak valid";
    }
}


// Menampilkan angka ganjil dari 1 sampai 10
$ganjil = tampilkanAngkaGanjil(1, 10);
echo "Angka ganjil: " . implode(", ", $ganjil) . "\n";

// Menampilkan angka genap dari 1 sampai 10
$genap = tampilkanAngkaGenap(1, 10);
echo "Angka genap: " . implode(", ", $genap) . "\n";

// Menghitung aritmatika
echo "Tambah: " . hitungAritmatika(10, 5, 'tambah') . "\n";
echo "Kurang: " . hitungAritmatika(10, 5, 'kurang') . "\n";
echo "Bagi: " . hitungAritmatika(10, 5, 'bagi') . "\n";
echo "Kali: " . hitungAritmatika(10, 5, 'kali') . "\n";

?>
