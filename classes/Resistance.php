<?php

// Create resistance class.
class Resistance {
	public $energytype;
	public $amount;

	public function __construct ($energytype, $amount) {  
	    $this->energytype = $energytype;
	    $this->amount = $amount;
	}

	public function __toString () {
	    return json_encode($this);
	}

	public function getResistance() {
    	//echo '<p>' . $this->hitpoints . '</p>';
    	return $this->energytype;
    	return $this->amount;
    }
}

?>