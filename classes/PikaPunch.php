<?php 

// Create attack class for pokemon Pikachu.
class PikaPunch extends Pikachu {

	public $name;
	public $hitpoints;

	public function __construct () {  
	    $this->name = 'PikaPunch';
	    $this->hitpoints = '20';
	}
}


?>