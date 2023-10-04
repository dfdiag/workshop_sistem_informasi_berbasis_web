<?php
interface Animal {
    public function makeSound();
}

class Dog implements Animal {
    public function makeSound() {
        echo "Bark!";
    }
}

class Cat implements Animal {
    public function makeSound() {
        echo "Meow!";
    }
}

$Dog1 = new Dog();
$Dog1->makeSound();
echo "\n";

