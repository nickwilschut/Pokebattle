<?php

$Torterra = new Torterra(
	$name = 'Torterra',
	$energyType = 'Grass', 
	$hitpoints = '120', 
	$health = '120', 
	/*$attacks = array (
		"Nuzzle" => "20",
		"Thunder Shock" => "40",
	), */

	$attacks = array (
		$Nuzzle = array(
			"damage" => "20",
			"energyType" => "Normal", 
		),

		$ThunderShock = array(
			"damage" => "40",
			"energyType" => "Lightning", 
		),
	),
	$weakness = 'water', 
	$resistance = 'dark'
);

class Torterra extends Pokemon {

    public function __construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance) {
	    parent::__construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance);
	}
}


?>