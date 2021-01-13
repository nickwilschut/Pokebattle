<?php

// Create resistance class.
class EnergyType {
	public $name;
	public $amount;

	public function __construct ($name, $amount) {  
	    $this->name = $name;
	    $this->amount = $amount;
	}

	public function __toString () {
	    return json_encode($this);
	}
}

?>