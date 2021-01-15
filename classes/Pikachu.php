<?php 

// Create pokemon Pikachu class.
class Pikachu extends Pokemon {

	function __construct() {
		$name = 'Pikachu';
		$energyType = 'Lightning';
		$hitpoints = '60';
		$health = '60';
		parent::__construct($name, $energyType, $hitpoints, $health);
	}
}


?>