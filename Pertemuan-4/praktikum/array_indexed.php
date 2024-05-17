<?php
$array = [1,2,3,4,5]

echo $array[1];
echo "<br><pre>";
print_r ($array);
echo "</pre>";

$umur = ["Wafi" => 23, "alex" => 14];
$umur = ["Mamat" => 23];
$umur = ["Mumun" => 23];
echo "<br><pre>";
print_r ($umur);
echo "</pre>";

foreach ($umur as $nama => $umur ) {
    echo "namanya: $nama <br> umurnya : $umur <br>";
}

//array multidimensi

$buahBuahan = [
    ["nama" => "Apel", "Warna" => "Merah"],
    ["nama" => "Pisang", "Warna" => "Kuning"],
    ["nama" => "Durian", "Warna" => "kuning"],
    ["nama" => "Kesemek", "Warna" => "Jingga"],
];

echo "<br><pre>";

echo"</pre?>";

?>

<table border ="2">
    <tr>
        <th>nama</th>
        <th>nama</th>
    </tr>

    <?php foreach ($buahBuahan as $buah); {?>

    <tr>
        <td><?php echo  $buah['nama'] ?></td>
        <td><?=  $buah['warna'] ?></td>
    </tr>

    <?php } ?>
</table>