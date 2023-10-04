<?php
class Person 
{
	public $name;
	function set_name($set_name)
	{
		$this->name = new $set_name;
	}
	function get_name()
	{
		return $this->name;
	}

}

$person1 = new Person();
// properties can be accessed directly
echo "Hai " . $person1->name = 'Kurniawan.deb'; 
echo "<hr>";
// methods can be accessed directly
echo $person1->get_name();


?>

