<?php 

// Create pokemon Pikachu class.
class Pikachu extends Pokemon {
	
	function __construct() {
		$name = 'Pikachu';
		$energyType = 'Lightning';
		$hitpoints = '60';
		$health = '60';
		$resistanceEnergyType = 'Fighting';
		$resistanceAmount = '20';
		$weaknessEnergyType = 'Fire';
		$weaknessMultiplier = '1.5';
		parent::__construct($name, $energyType, $hitpoints, $health, $resistanceEnergyType, $resistanceAmount, $weaknessEnergyType, $weaknessMultiplier);
	}
}


?>