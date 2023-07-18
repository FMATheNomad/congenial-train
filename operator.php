<?php
// Operator Aritmatika
$a = 10;
$b = 5;

$penjumlahan = $a + $b;
echo "Hasil Penjumlahan: " . $penjumlahan . "<br>";

$pengurangan = $a - $b;
echo "Hasil Pengurangan: " . $pengurangan . "<br>";

$perkalian = $a * $b;
echo "Hasil Perkalian: " . $perkalian . "<br>";

$pembagian = $a / $b;
echo "Hasil Pembagian: " . $pembagian . "<br>";

$sisaBagi = $a % $b;
echo "Sisa Bagi: " . $sisaBagi . "<br>";

$pangkat = $a ** $b;
echo "Hasil Pangkat: " . $pangkat . "<br>";

// Operator Penugasan
$c = 15;
$c += 5;
echo "Nilai c setelah ditambah 5: " . $c . "<br>";

$d = 20;
$d *= 2;
echo "Nilai d setelah dikali 2: " . $d . "<br>";

// Operator Pembanding
$angka1 = 10;
$angka2 = 5;

if ($angka1 > $angka2) {
    echo "angka1 lebih besar dari angka2 <br>";
}

if ($angka1 == $angka2) {
    echo "angka1 sama dengan angka2 <br>";
} else {
    echo "angka1 tidak sama dengan angka2 <br>";
}

// Operator Logika
$x = true;
$y = false;

if ($x && !$y) {
    echo "x adalah true dan y adalah false <br>";
}

// Operator Increment/Decrement
$counter = 0;
$counter++;
echo "Nilai counter setelah diincrement: " . $counter . "<br>";

$counter--;
echo "Nilai counter setelah didecrement: " . $counter . "<br>";

// Operator String
$namaDepan = "John";
$namaBelakang = "Doe";
$namaLengkap = $namaDepan . " " . $namaBelakang;
echo "Nama lengkap: " . $namaLengkap . "<br>";
?>