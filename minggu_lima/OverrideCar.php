<?php
//parent Car
class Car
{
	final public function hello()
	{
		return 'Beep!';
	}
}
//child 
class sportsCar extends Car 
{
	public function hello()
	{
		return 'Hello';
	}
}

//new object from sportsCar
$sportsCar1 = new sportsCar();

//acces sportsCar1
echo $sportsCar1->hello();
