<?php

// Create resistance class.
class Weakness {
	public $energytype;
	public $multiplier;

	public function __construct ($energytype, $multiplier) {  
	    $this->energytype = $energytype;
	    $this->multiplier = $multiplier;
	}
	
	// Function to get the energyType and multiplier.
	public function getWeakness() {
		$Weaknessdata = array($this->energytype, $this->multiplier);
    	return $Weaknessdata;
    }
}

?>