<?php

class PokeAttacks extends Pokemon {

    public function __construct($attacks) {
	    parent::__construct($attacks);
	}
}

$PokeAttacks = new PokeAttacks(
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
);

?>