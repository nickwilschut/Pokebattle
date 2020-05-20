<?php

class Pokemon {
	public $name;
	public $energyType;
	public $hitpoints;
	public $health;
	public $weakness;
	public $resistance;
	public $damage;

	public function __construct ($name, $energyType, $hitpoints, $health, $weakness, $resistance, $damage) {  
	    $this->name = $name;
	    $this->energyType = $energyType;
	    $this->hitpoints = $hitpoints;
	    $this->health = $health;
	    $this->weakness = $weakness;
	    $this->resistance = $resistance;
	    $this->damage = $damage;
	}

	public function __toString () {
	    return json_encode($this);
	}

	public function sayName() {
        echo '<p>' . $this->name . '</p>';
    }

    public function getHealth() {
    	echo '<p>' . $this->health . '</p>';
    }
}

?>