<?php 

class Pickachu extends Pokemon {

	function __construct() {
		$name = 'Pickachu';
		$energyType = 'Lightning';
		$hitpoints = '60';
		$health = '60';
		parent::__construct($name, $energyType, $hitpoints, $health);
	}
	
}


?>