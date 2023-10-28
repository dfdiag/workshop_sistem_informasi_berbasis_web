<?php
class Stack
{
    private $stack = array();

    public function Push($item)
    {
        array_push($this->stack, $item);
    }

    public function Pop()
    {
        if ($this->IsEmpty()) {
            return "Tumpukan kosong";
        }
        return array_pop($this->stack);
    }

    public function IsEmpty()
    {
        return empty($this->stack);
    }
}

class AplikasiPengolahKata
{
    private $dokumen = "";
    private $undoStack;
    private $redoStack;

    public function __construct()
    {
        $this->undoStack = new Stack();
        $this->redoStack = new Stack();
    }

    public function TambahTeks($teks)
    {
        $this->undoStack->Push($this->dokumen);
        $this->dokumen .= $teks;
        $this->redoStack = new Stack();
    }

    public function Undo()
    {
        $undo = $this->undoStack->Pop();
        if ($undo !== "Tumpukan kosong") {
            $this->redoStack->Push($this->dokumen);
            $this->dokumen = $undo;
        }
    }

    public function Redo()
    {
        $redo = $this->redoStack->Pop();
        if ($redo !== "Tumpukan kosong") {
            $this->undoStack->Push($this->dokumen);
            $this->dokumen = $redo;
        }
    }

    public function TampilkanDokumen()
    {
        echo "Dokumen: " . $this->dokumen . "\n";
    }
}

$aplikasi = new AplikasiPengolahKata();

$aplikasi->TambahTeks("Halo, ");
$aplikasi->TambahTeks("ini ");
$aplikasi->TambahTeks("contoh ");
$aplikasi->TambahTeks("pengolah ");
$aplikasi->TambahTeks("kata.");

$aplikasi->TampilkanDokumen(); // Output: Dokumen: Halo, ini contoh pengolah kata.

$aplikasi->Undo();

$aplikasi->TampilkanDokumen(); // Output: Dokumen: Halo, ini contoh pengolah.

$aplikasi->Redo();

$aplikasi->TampilkanDokumen(); // Output: Dokumen: Halo, ini contoh pengolah kata.
?>

