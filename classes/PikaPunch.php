<?php 

// Create attack class for pokemon Pikachu.
class PikaPunch extends Attack {

	function __construct() {
		$name = 'PickPunch';
		$hitpoints = '20';
		parent::__construct($name, $hitpoints);
	}
}


?>