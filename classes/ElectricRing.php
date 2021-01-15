<?php 

// Create attack class for pokemon Pikachu.
class ElectricRing extends Attack {

	function __construct() {
		$name = 'ElectricRing';
		$hitpoints = '50';
		parent::__construct($name, $hitpoints);
	}
}


?>