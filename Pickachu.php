<?php

class Pickachu extends Pokemon {

	$Pickachu = new Pokemon('Pickachu', 'Energy', '100', '100', '50', 'water', 'dark');

    public function __construct($name, $gender, $oneliner) {
	    parent::__construct($name, $gender, $this->team, $oneliner);
	}
}


?>