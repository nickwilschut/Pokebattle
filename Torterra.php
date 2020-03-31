<?php

class Torterra extends Pokemon {

    public function __construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance) {
	    parent::__construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance);
	}
}

$Torterra = new Torterra(
	$name = 'Torterra',
	$energyType = 'Grass', 
	$hitpoints = '120', 
	$health = '120', 
	$attacks = array (
		$MegaDrain = array(
			$name = "MegaDrain",
			$attacks = "40",
			$energyType = "Grass", 
		),

		$LeafStorm = array(
			$name = "LeafStorm",
			$attacks = "130",
			$energyType = "Grass", 
		),
	),
	$weakness = 'fire', 
	$resistance = 'normal'
);

?>