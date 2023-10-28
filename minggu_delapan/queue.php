<?php
class AntrianPintuMasuk
{
    private $antrian = array();

    public function TambahKeAntrian($pengunjung)
    {
        array_push($this->antrian, $pengunjung);
    }

    public function ProsesPintuMasuk()
    {
        if (empty($this->antrian)) {
            return "Antrian kosong, tidak ada yang masuk.";
        }
        $pengunjung = array_shift($this->antrian);
        return "Pengunjung " . $pengunjung . " telah memasuki tempat hiburan.";
    }
}

$antrian = new AntrianPintuMasuk();

$antrian->TambahKeAntrian("A");
$antrian->TambahKeAntrian("B");
$antrian->TambahKeAntrian("C");

echo $antrian->ProsesPintuMasuk() . "\n";
echo $antrian->ProsesPintuMasuk() . "\n";
echo $antrian->ProsesPintuMasuk() . "\n";
echo $antrian->ProsesPintuMasuk() . "\n"; // Output: Antrian kosong, tidak ada yang masuk.
?>

