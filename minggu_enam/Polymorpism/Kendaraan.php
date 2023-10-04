<?php
// Antarmuka untuk kendaraan yang dapat mengonsumsi bahan bakar
interface FuelConsumable {
    public function refuel();
}

// Kelas abstrak untuk kendaraan
abstract class Vehicle {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function start();
    abstract public function stop();
}

// Kelas yang mengimplementasikan antarmuka FuelConsumable
class Car extends Vehicle implements FuelConsumable {
    public function start() {
        echo $this->name . " car is starting." . PHP_EOL;
    }

    public function stop() {
        echo $this->name . " car is stopping." . PHP_EOL;
    }

    public function refuel() {
        echo $this->name . " car is refueling." . PHP_EOL;
    }
}

// Kelas yang mengimplementasikan antarmuka FuelConsumable
class Motorcycle extends Vehicle implements FuelConsumable {
    public function start() {
        echo $this->name . " motorcycle is starting." . PHP_EOL;
    }

    public function stop() {
        echo $this->name . " motorcycle is stopping." . PHP_EOL;
    }

    public function refuel() {
        echo $this->name . " motorcycle is refueling." . PHP_EOL;
    }
}

// Kelas yang mengimplementasikan antarmuka FuelConsumable
class Bus extends Vehicle implements FuelConsumable {
    public function start() {
        echo $this->name . " bus is starting." . PHP_EOL;
    }

    public function stop() {
        echo $this->name . " bus is stopping." . PHP_EOL;
    }

    public function refuel() {
        echo $this->name . " bus is refueling." . PHP_EOL;
    }
}

// Fungsi untuk menjalankan kendaraan
function operateVehicle(Vehicle $vehicle) {
    $vehicle->start();
    $vehicle->refuel(); // Jika kendaraan dapat mengonsumsi bahan bakar
    $vehicle->stop();
}

// Contoh penggunaan polimorfisme
$car = new Car("Sedan");
$motorcycle = new Motorcycle("Sports Bike");
$bus = new Bus("Tourist Bus");

operateVehicle($car);
operateVehicle($motorcycle);
operateVehicle($bus);

