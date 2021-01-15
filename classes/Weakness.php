<?php

// Create resistance class.
class Weakness {
	public $energytype;
	public $multiplier;

	public function __construct ($energytype, $multiplier) {  
	    $this->energytype = $energytype;
	    $this->multiplier = $multiplier;
	}

	public function __toString () {
	    return json_encode($this);
	}
	
	// Function to get the energyType and multiplier.
	public function getWeakness() {
		$Weaknessdata = array($this->energytype, $this->multiplier);
    	return $Weaknessdata;
    }
}

?>