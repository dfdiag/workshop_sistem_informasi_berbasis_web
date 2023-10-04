<?php
class Tablet {
    protected $merk;
    protected $camera;
    protected $memory;

    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    protected function infoTablet() {
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
        return $this->infoTablet();
    }
}

$tablet = new Tablet("Samsung", 12, 64);
$handphone = new Handphone("iPhone", 16, 128, "iPhone 13");

// Anda tidak dapat mengakses $tablet->infoTablet() karena protected.
// echo $tablet->infoTablet() . "<br>";

// Namun, Anda dapat mengakses infoTablet() dari objek Handphone.
echo $handphone->infoHandphone() . "<br>";
echo $handphone->beliHandphone();

