<?php 
//Tugas1
//
//membuat fungsi mengitung luas segitia

function segitiga($alas,$tinggi){
 $hasil = 1/2 * $alas * $tinggi;
 return $hasil;
}
echo "hasil dari perhitungan segitiga :". segitiga(2,2);
echo "\n";

//Tugas 2

$KALIMAT_SATU = "Saya Ganteng Pakai Banget";
$KALIMAT_DUA = "Babi adalah musuh saya Angry Bird 2014";
echo "Jumlah seluruh kalimat :";
print_r(str_word_count($KALIMAT_SATU ." ".$KALIMAT_DUA));
echo " kata";
echo "\n";

echo "\n";
echo md5($KALIMAT_SATU);
echo "\n";
echo md5($KALIMAT_DUA);

//merubah kata menjadi huruf besar
$lowerCase = "Saya ganteng";
echo "\n";
echo strtoupper($lowerCase);
echo "\n";
echo strtolower($lowerCase);
echo "\n";
