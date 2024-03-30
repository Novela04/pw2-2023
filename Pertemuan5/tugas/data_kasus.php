<?php

require_once 'class_kasus.php'; 

$nasi_goreng = new Food("Nasi Goreng", "Makanan Utama", 15000);
$es_teh = new Beverage("Es Teh", "Minuman Dingin", 5000);

echo "Informasi tentang makanan:<br>";
$nasi_goreng->getInfo();
echo "<br>";

echo "Informasi tentang minuman:<br>";
$es_teh->getInfo();

?>
