<?php 

// Create pokemon Charmeleon class.
class Charmeleon extends Pokemon {

	function __construct() {
		$name = 'Charmeleon';
		$energyType = 'Fire';
		$hitpoints = '60';
		$health = '60';
		$resistanceEnergyType = 'Lightning';
		$resistanceAmount = '10';
		$weaknessEnergyType = 'Water';
		$weaknessMultiplier = '2';
		parent::__construct($name, $energyType, $hitpoints, $health, $resistanceEnergyType, $resistanceAmount, $weaknessEnergyType, $weaknessMultiplier);
	}
}


?>