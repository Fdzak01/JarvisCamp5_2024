<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Produk-Jarvis</title>
    <style>
        h1{
            text-align :center;
            color : Green;
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
        }


        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            text-align :center;
        }
    </style>
</head>
<body>
    <h1>INFORMASI PRODUK</h1>
    <table>
        <tr>
            <th>Produk</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Stok Barang</th>
        </tr>
        <?php
        $products = [
            ["barang" => "Printer", "Harga" => 1200000, "Deskripsi" => "Printer merk HP", "Stok" => 15],
            ["barang" => "Tablet", "Harga" => 2000000, "Deskripsi" => "Tablet merk Samsung", "Stok" => 8],
            ["barang" => "Mouse", "Harga" => 150000, "Deskripsi" => "Mouse merk Logitech", "Stok" => 50],
            ["barang" => "Speaker", "Harga" => 500000, "Deskripsi" => "Speaker merk JBL", "Stok" => 25],
            ["barang" => "Headset", "Harga" => 250000, "Deskripsi" => "Headset merk Sony", "Stok" => 30]
        ];

        foreach ($products as $product) {
            echo "<tr>";
            echo "<td>" . $product['barang'] . "</td>";
            echo "<td>" . number_format($product['Harga'], 0, ',', '.') . "</td>";
            echo "<td>" . $product['Deskripsi'] . "</td>";
            echo "<td>" . $product['Stok'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>