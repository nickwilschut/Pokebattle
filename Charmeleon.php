<?php

class Charmeleon extends Pokemon {

    public function __construct($name, $energyType, $hitpoints, $health, $weakness, $resistance, $head_butt, $flare) {
	    parent::__construct($name, $energyType, $hitpoints, $health, $weakness, $resistance, $head_butt, $flare);
	}
}

$Charmeleon = new Charmeleon('Charmeleon','Fire','60','60','water','Lightning','10','30',);

?>