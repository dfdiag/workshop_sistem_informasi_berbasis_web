<?php
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

