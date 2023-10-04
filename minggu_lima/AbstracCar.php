<?php
abstract class Car 
{
	//properties
	protected $tankVolume;

	// non abstract class methods
	public function setTankVolume($volume)
	{
		$this -> tankVolume = $volume
	}
	//abstract method
	abstract public function calNumMilesOnFullTank();
}
