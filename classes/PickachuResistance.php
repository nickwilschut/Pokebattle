<?php

class PickachuResistance extends Pickachu {
	
	public $name;
	public $amount;

	function __construct($name, $amount) {
		$this->name = $name;
		$this->amount = $amount;
	}

	public function sayResistance() {
        echo '<p>' . $this . '</p>';
    }
}

?>