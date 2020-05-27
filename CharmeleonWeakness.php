<?php

class CharmeleonWeakness extends Charmeleon {
	
	public $name;
	public $amount;

	function __construct($name, $amount) {
		$this->name = $name;
		$this->amount = $amount;
	}

	public function sayWeakness() {
        echo '<p>' . $this . '</p>';
    }
}

?>