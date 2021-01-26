<?php

// Create Pokemon class
class Pokemon {

	private static $count=0;

	public $name;
	public $energyType;
	public $hitpoints;
	public $health;
	public $resistanceEnergyType;
	public $resistanceAmount;
	public $weaknessEnergyType;
	public $weaknessMultiplier;

	protected function __construct ($name, $energyType, $hitpoints, $health, $resistanceEnergyType, $resistanceAmount, $weaknessEnergyType, $weaknessMultiplier) {  
	    $this->name = $name;
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


	public function __destruct () {
		pokemon::$count--;
	}

	public function __toString () {
	    return json_encode($this);
	}

    // Fuction to get all alive pokemons
	public static function getPopulation() {
		return pokemon::$count;
    }
}

?>