<?php

// Create attacks class.
class Attack {
	public $name;
	public $hitpoints;

	public function __construct ($name, $hitpoints) {  
	    $this->name = $name;
	    $this->hitpoints = $hitpoints;
	}

	public function __toString () {
	    return json_encode($this);
	}

	// Function to print out pokemon hitpoints.
    public function getAttack() {
    	//echo '<p>' . $this->hitpoints . '</p>';
    	return $this->hitpoints;
    }

    public function doAttack($damage, $hitpoints, $weakness, $resistance) {
    	print_r($weakness);
    	print_r($resistance);
    	if ($hitpoints > $damage) {
    		$lefthitpoints = $hitpoints - $damage;
    		print_r($lefthitpoints);
    	} else {
    		print_r('dead');
    	}

    	//return $this->damage;
    	//return $this->hitpoints;
    }
}

?>