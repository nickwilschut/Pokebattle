<?php

class Pokemon {
	public $name;
	public $energyType;
	public $hitpoints;
	public $health;
	public $weakness;
	public $resistance;
	public $electric_ring;
	public $pika_punch;
	public $head_butt;
	public $flare;

	public function __construct ($name, $energyType, $hitpoints, $health, $weakness, $resistance, $electric_ring = 0, $pika_punch = 0, $head_butt = 0, $flare = 0) {  
	    $this->name = $name;
	    $this->energyType = $energyType;
	    $this->hitpoints = $hitpoints;
	    $this->health = $health;
	    $this->weakness = $weakness;
	    $this->resistance = $resistance;
	    $this->electric_ring = $electric_ring;
	    $this->pika_punch = $pika_punch;
	    $this->head_butt = $head_butt;
	    $this->flare = $flare;
	}

	public function __toString () {
	    return json_encode($this);
	}

	public function electric_ring() {
        echo '<p>' . $this->electric_ring . '</p>';
    }

	public function sayName() {
        echo '<p>' . $this->name . '</p>';
    }

    public function getHealth() {
    	echo '<p>' . $this->health . '</p>';
    }
}

?>