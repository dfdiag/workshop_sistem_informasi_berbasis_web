<?php
class Tablet {
    public $merk;
    public $camera;
    public $memory;

    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function infoTablet() {
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
}

$tablet = new Tablet("Samsung", 12, 64);
$handphone = new Handphone("iPhone", 16, 128, "iPhone 13");

echo $tablet->infoTablet() . "<br>";
echo $handphone->infoTablet() . "<br>";
echo $handphone->beliHandphone();

