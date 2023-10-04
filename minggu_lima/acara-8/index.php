<?php
include 'Calculator.php';

$calculator = new Calculator();

$a = 10;
$b = 5;

echo "Hasil Penambahan: " . $calculator->tambah($a, $b) . "<br>";
echo "Hasil Pengurangan: " . $calculator->kurang($a, $b) . "<br>";
echo "Hasil Perkalian: " . $calculator->kali($a, $b) . "<br>";
echo "Hasil Pembagian: " . $calculator->bagi($a, $b) . "<br>";

