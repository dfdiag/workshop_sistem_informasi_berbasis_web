<?php
$nilaiPertama = array(
    80,
    70,
    60
);
$nilaiKedua = array(
    60,
    90,
    70
);
// mengurutkan nilai kecil ke besar
echo " Data Nilai Pertama yang telah diurutkan \n";
echo "output : \n";
sort($nilaiPertama);
print_r($nilaiPertama);
echo " Data Nilai Kedua yang telah diurutkan \n";
echo "output : \n";
sort($nilaiKedua);
print_r($nilaiKedua);

// menambahkan nilai baru = 100 -> nilai pertama 
array_push($nilaiPertama,100);
echo "nilai 100 berhasil ditambahkan: \n";
echo "output :";
print_r($nilaiPertama);
// menggabungkan nilai pertama dengan nilai kedua
echo "menggabungkan nilai pertama dengan nilai kedua \n";
echo "output : \n";
print_r(array_merge($nilaiPertama,$nilaiKedua));
?>