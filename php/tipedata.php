<?php
$nim = 'A';
$nama = "Muhammad Elgar";
$umur = 18;
$nilai = 82.25;
$status = TRUE;

echo "---Belajar Tipe Data --- <br><br>";
echo "Tipe Data Char : " . $nim . "<br>";
echo "Tipe Data String : . $nama<br>";
print "Tipe Data int : " . $umur;
print ",br>";
printf ("Tipe Data float : %.5f<br><br>", $nilai);
echo "Tipe Data Boolean : <br><br>";
if ($status)
    echo "status : Aktif";
else
    echo "status : Tidak Aktif";