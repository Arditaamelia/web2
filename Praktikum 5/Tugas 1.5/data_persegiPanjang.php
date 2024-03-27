<?php
require_once('class_PersegiPanjang.php');
echo "Nilai: " . PersegiPanjang::NILAI;

// instansiasi object lingkaran
$lingkar1 = new persegiPanjang(10, 5);
$lingkar2 = new persegipanjang(7, 7);

// memanggil method dari object
echo "<br> Luas persegiPanjang 1: " . $lingkar1->getLuas();
echo "<br> Luas persegipanjang 2: " . $lingkar2->getLuas();

echo '<br>';

echo "<br> Keliling persegiPanjang 1: " . $lingkar1->getKeliling();
echo "<br> Keliling persegipanjang 2: " . $lingkar2->getKeliling();