<?php
$number = 5985;
var_dump($number);
echo "<br>";

$negativeNumber= -345;
var_dump($negativeNumber);
echo "<br>";

$hexaNumber = 0x8c;
var_dump($hexaNumber);
echo "<br>"; 

$octalNumber = 047;
var_dump($octalNumber);
echo "<br>";

$floatNumber = 10.365;
var_dump($floatNumber);
echo "<br>";

// floating point dengan E notation Plus (2.4 x 1000)
$floatNumber= 2.4e3;
var_dump($floatNumber);
echo "<br>";

// floating point dengan E notation Minus (8 x 0.00001)
$floatMinNumber= 8E-5;
var_dump($floatMinNumber);
echo "<br>";

echo strlen("Hello World");
echo strpos("Hello World","World");
?>
