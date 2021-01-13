<?php 

// Create weakness class for pokemon Pikachu.
class PikachuWeakness extends Weakness {

	function __construct() {
		$energytype = 'fire';
		$multiplier = '1.5';
		parent::__construct($energytype, $multiplier);
	}
	
}


?>