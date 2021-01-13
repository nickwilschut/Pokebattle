<?php 

// Create resistance class for pokemon Pikachu.
class PikachuResistance extends Resistance {

	function __construct() {
		$energytype = 'Fighting';
		$amount = '20';
		parent::__construct($energytype, $amount);
	}
	
}


?>