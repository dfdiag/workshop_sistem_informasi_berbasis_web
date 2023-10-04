<?php
class Tablet {
    private $merk;
    private $camera;
    private $memory;

    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    private function infoTablet() {
        return "Tablet {$this->merk} dengan kamera {$this->camera} MP dan {$this->memory} GB memory.";
    }
}

class Handphone extends Tablet {
    public $handphone_baru;

    public function __construct($merk, $camera, $memory, $handphone_baru) {
        parent::__construct($merk, $camera, $memory);
        $this->handphone_baru = $handphone_baru;
    }

    public function beliHandphone() {
        return "Membeli handphone {$this->handphone_baru}.";
    }

    public function infoHandphone() {
        // Anda tidak dapat mengakses $this->infoTablet() karena private.
        // return $this->infoTablet();

        // Namun, Anda masih bisa mengakses infoTablet() dari dalam class Tablet.
        return "Tablet {$this->merk} dengan kamera {$this->camera} MP dan {$this->memory} GB memory.";
    }
}

$tablet = new Tablet("Samsung", 12, 64);
$handphone = new Handphone("iPhone", 16, 128, "iPhone 13");

// Anda tidak dapat mengakses $tablet->infoTablet() karena private.
// echo $tablet->infoTablet() . "<br>";

// Namun, Anda masih bisa mengakses infoTablet() dari objek Handphone karena
// infoHandphone() mengembalikan informasi tersebut secara langsung.
echo $handphone->infoHandphone() . "<br>";
echo $handphone->beliHandphone();

