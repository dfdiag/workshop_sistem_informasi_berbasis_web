<?php
$namaMakanan = array(
    'Bikang Bali',
    'Lapis Kreongan',
    'Pecel Garahan',
    'Rawon Leces',
    'Cimol Nganjuk',
    'Pentol Patrang',
    'Cakwe Kaliwates',
    'Getas Probolinggo',
    'Sate Madura',
    'Risoles Arjasa'
);

$count = 0;
foreach($namaMakanan as $makanan_item) {
 if($count <5){
 echo "$makanan_item \n";
 $count++;
 }
}
// for ($val;$val<5;$val++){
//  echo "$namaMakanan[$val]\n"; 
// }
?>