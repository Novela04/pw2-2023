<?php

require_once 'class_kasus.php'; 

// Contoh penggunaan kelas Food
$nasi_goreng = new Food("Nasi Goreng", "Makanan Utama", 15000);
$es_teh = new Beverage("Es Teh", "Minuman Dingin", 5000);

// Menampilkan informasi tentang makanan
echo "Informasi tentang makanan:<br>";
$nasi_goreng->getInfo();
echo "<br>";

// Menampilkan informasi tentang minuman
echo "Informasi tentang minuman:<br>";
$es_teh->getInfo();

?>
