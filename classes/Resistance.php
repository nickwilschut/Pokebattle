<?php

// Create resistance class.
class Resistance {
	public $energytype;
	public $amount;

	public function __construct ($energytype, $amount) {  
	    $this->energytype = $energytype;
	    $this->amount = $amount;
	}

	// Function to get the energyType and amount.
	public function getResistance() {
    	$Weaknessdata = array($this->energytype, $this->amount);
    	return $Weaknessdata;
    }
}

?>