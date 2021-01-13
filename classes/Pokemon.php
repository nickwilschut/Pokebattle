<?php

// Create Pokemon class
class Pokemon {
	public $name;
	public $energyType;
	public $hitpoints;
	public $health;

	public function __construct ($name, $energyType, $hitpoints, $health) {  
	    $this->name = $name;
	    $this->energyType = $energyType;
	    $this->hitpoints = $hitpoints;
	    $this->health = $health;
	}

	public function __toString () {
	    return json_encode($this);
	}

	// Function to print out pokemon name.
	public function sayName() {
        echo '<p>' . $this->name . '</p>';
    }

    // Function to print out pokemon hitpoints.
    public function getHitpoints() {
    	return $this->hitpoints;
    }
}

?>