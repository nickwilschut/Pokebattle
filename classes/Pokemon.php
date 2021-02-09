<?php

// Create Pokemon class
class Pokemon {

	private static $count=0;

	private $name;
	private $attack = [];
	private $energyType;
	private $hitpoints;
	private $health;
	private $resistanceEnergyType;
	private $resistanceAmount;
	private $weaknessEnergyType;
	private $weaknessMultiplier;

	protected function __construct ($name, $attack, $energyType, $hitpoints, $health, $resistanceEnergyType, $resistanceAmount, $weaknessEnergyType, $weaknessMultiplier) {  
	    $this->name = $name;
	    $this->attack = $attack;
	    $this->energyType = $energyType;
	    $this->hitpoints = $hitpoints;
	    $this->health = $health;
	    $this->resistanceEnergyType = $resistanceEnergyType;
	    $this->resistanceAmount = $resistanceAmount;
	    $this->weaknessEnergyType = $weaknessEnergyType;
	    $this->weaknessMultiplier = $weaknessMultiplier;
	    pokemon::$count++;
		return true;
	}

	public function __get($name) {
      	return $this->$name;
  	}

	public function __destruct () {
		pokemon::$count--;
	}

    // Fuction to get all alive pokemons
	public static function getPopulation() {
		return pokemon::$count;
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