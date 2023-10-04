<?php
interface hitungLuas {
    public function hitungLuasPersegi($sisi);

    public function hitungLuasSegitiga($alas, $tinggi);

    public function hitungLuasLingkaran($radius);
}

class Rumus implements hitungLuas {

    public function hitungLuasPersegi($sisi) {
        return $sisi * $sisi;
    }

    public function hitungLuasSegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }

    public function hitungLuasLingkaran($radius) {
        return 3.14 * $radius * $radius;
    }
}

$tolongHitung = new Rumus();

echo "Luas Persegi: " . $tolongHitung->hitungLuasPersegi(5) . "\n";
echo "Luas Segitiga: " . $tolongHitung->hitungLuasSegitiga(6, 8) . "\n";
echo "Luas Lingkaran: " . $tolongHitung->hitungLuasLingkaran(4) . "\n";
?>
