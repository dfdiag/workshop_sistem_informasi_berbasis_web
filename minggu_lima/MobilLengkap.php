<?php
class MobilLengkap {
    public function hidupkanMobil() {
        return "Mobil dinyalakan";
    }

    public function matikanMobil() {
        return "Mobil dimatikan";
    }

    public function ubahGigi($gigi) {
        return "Gigi diubah menjadi " . $gigi;
    }
}

class MobilBMW extends MobilLengkap {
    public function nontonTV() {
        return "TV dihidupkan, TV mencari channel, TV menampilkan gambar";
    }
}

class MobilBMWBeraksi {
    public function nontonTV(MobilBMW $bmw) {
        return $bmw->nontonTV();
    }

    public function hidupkanMobil(MobilBMW $bmw) {
        return $bmw->hidupkanMobil();
    }

    public function matikanMobil(MobilBMW $bmw) {
        return $bmw->matikanMobil();
    }

    public function ubahGigi(MobilBMW $bmw, $gigi) {
        return $bmw->ubahGigi($gigi);
    }
}

// Membuat objek MobilBMW
$bmw = new MobilBMW();

// Membuat objek MobilBMWBeraksi
$bmwBeraksi = new MobilBMWBeraksi();

// Memanggil metode-metode dari MobilBMWBeraksi
echo $bmwBeraksi->hidupkanMobil($bmw) . "<br>";
echo $bmwBeraksi->matikanMobil($bmw) . "<br>";
echo $bmwBeraksi->ubahGigi($bmw, 3) . "<br>";
echo $bmwBeraksi->nontonTV($bmw) . "<br>";

