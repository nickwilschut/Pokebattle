<?php

class Attacks{
	public $name;
	public $energyType;
	public $attacks;

	public function __construct($name, $energyType, $attacks) {
	    $this->name = $name;
	    $this->energyType = $energyType;
	    $this->attacks = $attacks;
	}

	public function __toString () {
	    return json_encode($this);
	}

}

?>

















