<?php
$getDate = getdate();
$getDay = $getDate["mday"];
$getMon = $getDate["mon"];
$getYear = $getDate["year"];
echo "Tanggal : " . $getDay . "-" . $getMon . "-" . $getYear;
?>

