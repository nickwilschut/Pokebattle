<?php

// Create Attack class.
class Attack extends Pokemon {
	public $name;
	public $hitpoints;

	protected function __construct ($name, $hitpoints) {  
	    $this->name = $name;
	    $this->hitpoints = $hitpoints;
	}

	// Function to print out pokemon hitpoints.
    public function getAttack() {
    	return $this->hitpoints;
    }

    // Function to calculate the left hitpoints of the pokemon.
    public function doAttack($damage, $defendingPokemon, $attackingPokemon) {
        // calculate totaldamage with pokemonweakness.
        if ($attackingPokemon->energyType == $defendingPokemon->weaknessEnergyType) {
            $totaldamage = $damage * $defendingPokemon->weaknessMultiplier;
        }

        // calculate totaldamage with pokemonresistance.
        if ($attackingPokemon->energyType == $defendingPokemon->resistanceEnergyType) {
            $totaldamage = $damage - $defendingPokemon->resistanceAmount;
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