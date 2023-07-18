<?php
// Pengulangan dengan for
echo "Pengulangan dengan for: ";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "<br>";

// Pengulangan dengan while
echo "Pengulangan dengan while: ";
$j = 1;
while ($j <= 5) {
    echo $j . " ";
    $j++;
}
echo "<br>";

// Pengulangan dengan do while
echo "Pengulangan dengan do while: ";
$k = 1;
do {
    echo $k . " ";
    $k++;
} while ($k <= 5);
echo "<br>";

// Pengulangan dengan foreach
echo "Pengulangan dengan foreach: ";
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $number) {
    echo $number . " ";
}
echo "<br>";

// Pengkondisian dengan if else
$nilai = 80;
echo "Pengkondisian dengan if else: ";
if ($nilai >= 80) {
    echo "Lulus";
} else {
    echo "Tidak Lulus";
}
echo "<br>";

// Pengkondisian dengan if else if else
$nilai = 75;
echo "Pengkondisian dengan if else if else: ";
if ($nilai >= 80) {
    echo "A";
} elseif ($nilai >= 70) {
    echo "B";
} elseif ($nilai >= 60) {
    echo "C";
} else {
    echo "D";
}
echo "<br>";

// Pengkondisian dengan ternary
$nilai = 85;
echo "Pengkondisian dengan ternary: ";
echo ($nilai >= 80) ? "Lulus" : "Tidak Lulus";
echo "<br>";

// Pengkondisian dengan switch statement
$nilai = "B";
echo "Pengkondisian dengan switch statement: ";
switch ($nilai) {
    case "A":
        echo "Pertahankan";
        break;
    case "B":
        echo "Harus lebih baik lagi";
        break;
    case "C":
        echo "Perbanyak belajar";
        break;
    default:
        echo "Belajar yang rajin ya";
}
?>