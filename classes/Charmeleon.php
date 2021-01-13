<?php 

// Create pokemon Charmeleon class.
class Charmeleon extends Pokemon {

	function __construct() {
		$name = 'Charmeleon';
		$energyType = 'Fire';
		$hitpoints = '60';
		$health = '60';
		parent::__construct($name, $energyType, $hitpoints, $health);
	}
	
}


?>