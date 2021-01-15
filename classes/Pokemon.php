<?php

// Create Pokemon class
class Pokemon {

	public static $count=-1;

	public $name;
	public $energyType;
	public $hitpoints;
	public $health;

	public function __construct ($name, $energyType, $hitpoints, $health) {  
	    $this->name = $name;
	    $this->energyType = $energyType;
	    $this->hitpoints = $hitpoints;
	    $this->health = $health;
	    pokemon::$count++;
		return true;
	}


	public function __destruct () {
		pokemon::$count--;
	}

	public function __toString () {
	    return json_encode($this);
	}

    // Function to print out pokemon hitpoints.
    public function getHitpoints() {
    	return $this->hitpoints;
    }

    // Fuction to get all alive pokemons
	public function getPopulation() {
		return pokemon::$count;
    }
}

?>