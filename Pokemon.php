<?php
class Pokemon {
	public $name;
	public $energyType;
	public $hitpoints;
	public $health;
	public $attacks;
	public $weakness;
	public $resistance;
	public $executeAttack;

	public function __construct ($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance, $executeAttack) {  
	    $this->name = $name;
	    $this->energyType = $energyType;
	    $this->hitpoints = $hitpoints;
	    $this->health = $health;
	    $this->attacks = $attacks;
	    $this->weakness = $weakness;
	    $this->resistance = $resistance;
	    $this->executeAttack = $executeAttack;
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
}

?>