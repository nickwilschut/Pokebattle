<?php

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

	public function sayName() {
        echo '<p>' . $this->name . '</p>';
    }

    public function getHealth() {
    	echo '<p>' . $this->health . '</p>';
    }
}

?>