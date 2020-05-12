<?php

$Charmeleon = new Charmeleon(
	$name = 'Charmeleon',
	$energyType = 'Grass', 
	$hitpoints = '120', 
	$health = '120', 
	$attacks = null,
	$weakness = 'fire', 
	$resistance = 'normal'
);

class Charmeleon extends Pokemon {

    public function __construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance) {
	    parent::__construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance);
	}
}

?>