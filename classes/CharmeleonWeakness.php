<?php 

// Create weakness class for pokemon Charmeleon.
class CharmeleonWeakness extends Weakness {

	function __construct() {
		$energytype = 'water';
		$multiplier = '2';
		parent::__construct($energytype, $multiplier);
	}
	
}


?>