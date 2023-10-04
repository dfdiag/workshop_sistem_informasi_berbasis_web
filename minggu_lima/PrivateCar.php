<?php
/* ================
 * Perent class Car
 * ================
 *
 */
class Car
{
	/*-----------------------------
	 * the $model property is private, this can be accessed
	 * only from inside the class
	 * ----------------------------
	 *
	 */

	private $model;
	
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
 * The child class tries to get a 
 * private property that belongs to 
 * the parent
 *==================================
 *
 */

class SportsCar extends Car {
	public function hello()
	{
		return "beep! I am <i>".$this->model."</i><br/>";
	}
}

//Create an new instance from the child class
$sportsCar1 = new SportsCar();

//set the class model name
$sportsCar1 -> setModel('Mercedes Benz');

//Access class model
echo $sportsCar1->hello();
