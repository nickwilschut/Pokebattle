<?php 

// Create pokemon Pikachu class.
class Pikachu extends Pokemon {
	
	function __construct() {
		$name = 'Pikachu';
		$attack = array (
			'50',
			'20',
		);
		$energyType = 'Lightning';
		$hitpoints = '60';
		$health = '60';
		$resistanceEnergyType = 'Fighting';
		$resistanceAmount = '20';
		$weaknessEnergyType = 'Fire';
		$weaknessMultiplier = '1.5';
		parent::__construct($name, $attack, $energyType, $hitpoints, $health, $resistanceEnergyType, $resistanceAmount, $weaknessEnergyType, $weaknessMultiplier);
	}
}


?>