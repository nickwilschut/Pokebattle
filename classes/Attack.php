<?php

// Create Attack class.
class Attack {
	public $name;
	public $hitpoints;

	public function __construct ($name, $hitpoints) {  
	    $this->name = $name;
	    $this->hitpoints = $hitpoints;
	}

	// Function to print out pokemon hitpoints.
    public function getAttack() {
    	return $this->hitpoints;
    }

    // Function to calculate the left hitpoints of the pokemon.
    public function doAttack($damage, $defendingPokemon, $attackingPokemon, $weakness, $resistance) {
        // calculate totaldamage with pokemonweakness.
        if ($attackingPokemon->energyType == $weakness[0]) {
            $totaldamage = $damage * $weakness[1];
        }

        // calculate totaldamage with pokemonresistance.
        if ($attackingPokemon->energyType == $resistance[0]) {
            $totaldamage = $damage - $resistance[1];
        }

        // calculate leftover hitpoints of the defending pokemon.
    	if ($defendingPokemon->hitpoints > $totaldamage) {
    		$lefthitpoints = $defendingPokemon->hitpoints - $totaldamage;
            return $lefthitpoints;
    	} else {
            return 'Dead';
    	}
    }
}

?>