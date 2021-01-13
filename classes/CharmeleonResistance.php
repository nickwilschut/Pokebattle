<?php 

// Create resistance class for pokemon Charmeleon.
class CharmeleonResistance extends Resistance {

	function __construct() {
		$energytype = 'Lightning';
		$amount = '10';
		parent::__construct($energytype, $amount);
	}
	
}


?>