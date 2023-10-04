<?php

abstract class Animal {
    abstract public function makeSound();
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow";
    }
}

class Goat extends Animal {
    public function makeSound()
    {
        echo "Mbek!";
    }
}

$kucing1= new Cat();

$kucing1->makeSound();
echo "\n";



