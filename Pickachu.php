<?php

class Pickachu extends Pokemon {

    public function __construct($name, $energyType, $hitpoints, $health, $weakness, $resistance, $electric_ring, $pika_punch) {
	    parent::__construct($name, $energyType, $hitpoints, $health, $weakness, $resistance, $electric_ring, $pika_punch);
	}
}

$Pickachu = new Pickachu('Pickachu','Energy','60','60','Fire','Fighting','50','20',);


?>