<?php
interface hitungLuas {
    public function hitungLuasPersegi($sisi);
    public function hitungLuasSegitiga($alas, $tinggi);
    public function hitungLuasLingkaran($radius);
}
class Persegi implements hitungLuas {
    public function hitungLuasPersegi($sisi) {
        return $sisi * $sisi;
    }

    public function hitungLuasSegitiga($alas, $tinggi) {
        return 0; 
    }

    public function hitungLuasLingkaran($radius) {
        return 0; 
    }
}

class Segitiga implements hitungLuas {
    public function hitungLuasPersegi($sisi) {
        return 0; 
    }

    public function hitungLuasSegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }

    public function hitungLuasLingkaran($radius) {
        return 0; 
    }
}

class Lingkaran implements hitungLuas {
    public function hitungLuasPersegi($sisi) {
        return 0; 
    }

    public function hitungLuasSegitiga($alas, $tinggi) {
        return 0;
    }

    public function hitungLuasLingkaran($radius) {
        return 3.14 * $radius * $radius;
    }
}

// Membuat objek class Persegi
$persegi = new Persegi();
echo "Luas Persegi: " . $persegi->hitungLuasPersegi(8) . " \n";

// Membuat objek dari class Segitiga
$segitiga = new Segitiga();
echo "Luas Segitiga: " . $segitiga->hitungLuasSegitiga(3, 6) . "\n";

// Membuat objek dari class Lingkaran
$lingkaran = new Lingkaran();
echo "Luas Lingkaran: " . $lingkaran->hitungLuasLingkaran(5) . "\n";
?>

