<?php

class Attack extends Pokemon{
	public $name;
	public $energyType;
	public $attacks;

	public function __construct($name, $energyType, $attacks) {
	    $this->name = $name;
	    $this->energyType = $energyType;
	    $this->attacks = $attacks;
	}

	public function __toString () {
	    return json_encode($this);
	}

	public function getAttacks () {
    	echo '<p>' . $this->energyType . ' ' . $this->attacks . '</p>';
    }

}

$Nuzzle = new Attack (
	$name = "Nuzzle", 
	$energyType = "20",
	$attacks = "Normal", 
);

$ThunderShock = new Attack (
	$name = "ThunderShock",
	$attacks = "40",
	$energyType = "Lightning", 
);

$MegaDrain = new Attack (
	$name = "MegaDrain",
	$attacks = "40",
	$energyType = "Grass", 
);

$LeafStorm = new Attack (
	$name = "LeafStorm",
	$attacks = "130",
	$energyType = "Grass", 
);

?>

















