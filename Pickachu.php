<?php

$Pickachu = new Pickachu(
	$name = 'Pickachu',
	$energyType = 'Energy', 
	$hitpoints = '100', 
	$health = '100', 
	$attacks = array (
		$Electric_Ring = array (
			$energyType = "20",
			$attacks = "Normal", 
		),

		$Picka_Punch = array (
			$attacks = "40",
			$energyType = "Lightning", 
		),
	),
	$weakness = 'water', 
	$resistance = 'dark'
);

class Pickachu extends Pokemon {

    public function __construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance) {
	    parent::__construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance);
	}
}


?>