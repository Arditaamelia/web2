<?php
// membuat variable
$mahasiswa1 = ["Ardita Amelia", "Sistem Informasi", 011, [01, 23, 032]];

// panggil variable
echo 'Nama: ' . $mahasiswa1[0] . "<br>"; // concatenation
echo "Jurusan:  $mahasiswa1[1] <br>"; // string interpolation
echo "IPS semester 1: " . $mahasiswa1[3] [0];