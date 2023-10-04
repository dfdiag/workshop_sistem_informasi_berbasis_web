<?php
abstract class Person
{
	abstract public function greet();
}

class English extends Person
{
	public function greet()
	{
		return "How are you?"; 
	}
}
class German extends Person
{
	public function greet()
	{
		return "Wie geht es dir?"; 
	}
}
class French extends Person
{
	public function greet()
	{
		return "Comment vas-tu?"; 
	}
}

//English person
$Wiliam = new English;

//German person
$Selamet = new German;

//French person
$Dafid = new French;

echo "tolong ucapkan 'apa kabar' dalam bahasa kalian\n";
echo "Wiliam :". $Wiliam->greet()."(English)\n\n";
echo "Selamet:". $Selamet->greet()."(German)\n\n";
echo "Dafid:". $Dafid->greet()."(French)\n\n";
