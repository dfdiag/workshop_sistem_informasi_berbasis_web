<?php
/*
Silahkan ubah ($input_checkNumber) sesuai nomor yang ingin di ketahui apakah nomer tersebut ganjil atau genap.
proses aritmatika dilakukan sebelum memasukan pada hasil ($resultNumber)
*/

$input_checkNumber = 100;
$resultNumber = $input_checkNumber %2!=0; 
switch ($resultNumber){
   case true: echo "bilangan ganjil";
      break;
   case false: echo "bilangan genap";
      break;
   default: echo "error";
      break;
}
?>
