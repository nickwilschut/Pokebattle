<?php

$Pickachu = new Pickachu(
	$name = 'Pickachu',
	$energyType = 'Energy', 
	$hitpoints = '100', 
	$health = '100', 
	$attacks = array (
		$Nuzzle,
		$ThunderShock,
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