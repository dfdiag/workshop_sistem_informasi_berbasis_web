<?php
/* ================
 * Perent class Car
 * ================
 *
 */
class Car
{
	/*-----------------------------
	 * the $model property is protected, this can be accessed
	 * from within the class and its child classes
	 * ----------------------------
	 *
	 */

	protected $model;

	/*------------------------------
	 * public setter method model
	 *------------------------------
	 */

	public function setModel($model)
	{
		$this->model=$model;
	}
}

/*==================================
 * The child class 
 *==================================
 *
 */

class SportsCar extends Car {

	/* --------------------------
	 * Has no problem to get a protected property 
	 * that belongs to the parent
	 * --------------------------
	 */
	public function hello()
	{
		return "beep! I am <i>".$this->model."</i><br/>";
	}
}

//Create an new instance from the child class
$sportsCar1 = new SportsCar();

//set the class model name
$sportsCar1 -> setModel('Mercedes Benz');

// access object sportCar
echo $sportsCar1->hello();
