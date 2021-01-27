<?php 

// Create attack class for pokemon Pikachu.
class ElectricRing extends Pikachu {

	public $name;
	public $hitpoints;

	public function __construct () {  
	    $this->name = 'ElectricRing';
	    $this->hitpoints = '50';
	}
}


?>