<?php

class CharmeleonAttack extends Charmeleon {
	
	public $name;
	public $damage;

	function __construct($name, $damage) {
		$this->name = $name;
		$this->damage = $damage;
	}

	public function sayAttack() {
        echo '<p>' . $this . '</p>';
    }
}

?>