<!-- Array -->

<?php

// Array menggunakan index
$produk = ["Laptop", "Mouse", "Keyboard"];
echo $produk[0]. "<br>";
echo $produk[1] . "<br>";
echo $produk[2] . "<br><br><br>";

// Array menggunakan Asosiatif
$arrow = [
    "nama" => "Jotaro",
    "stand" => "starplatinum",
    "muncul" => "s3",
];

echo "nama pengguna stand ". $arrow["nama"] . "<br>";
echo "nama stand pengguna ". $arrow["stand"] . "<br>";
echo "kemunculan pertama di ". $arrow["muncul"] . "<br>";

$produk2 = [
    ["nama" => "laptop", "harga" => 7000000, "stok" => 10],
    ["nama" => "mouse", "harga" => 1000000, "stok" => 5],
    ["nama" => "monitor", "harga" => 15000000, "stok" => 4],
];


echo "<h3>Daftar Produk</h3>";

foreach ($produk2 as $p) {
    echo "-<b>Nama Produk : </b> " . $p['nama'] . 
    "<br>-<b>Harga : </b> Rp." . number_format ($p["harga"], 0, ",","."). 
    "<br>-<b>stok yang ada</b> : " . $p['stok'] . 
    "<br> <br><hr>";
}

