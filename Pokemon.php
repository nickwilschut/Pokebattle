<?php

class Pokemon {
	public $name;
	public $energyType;
	public $hitpoints;
	public $health;
	public $attacks;
	public $weakness;
	public $resistance;

	public function __construct ($name = "Rattata", $energyType = "normal", $hitpoints = "20", $health = "20", $attacks = "10", $weakness = "*", $resistance = null) {  
	    $this->name = $name;
	    $this->energyType = $energyType;
	    $this->hitpoints = $hitpoints;
	    $this->health = $health;
	    $this->attacks = $attacks;
	    $this->weakness = $weakness;
	    $this->resistance = $resistance;
	}

	public function __toString () {
	    return json_encode($this);
	}

	public function sayName () {
        echo '<p>' . $this->name . '</p>';
    }

    public function getHealth () {
    	echo '<p>' . $this->health . '</p>';
    }

    /*
    public function getAttacks () {
    	echo '<p>' . $this->energyType . ' ' . $this->attacks . '</p>';
    }
	*/
}

?>