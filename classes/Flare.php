<?php 

// Create attack class for pokemon Pikachu.
class Flare extends Attack {

	function __construct() {
		$name = 'Flare';
		$hitpoints = '30';
		parent::__construct($name, $hitpoints);
	}
	
}


?>