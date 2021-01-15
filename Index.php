<?php

// Get init.php for class structure.
require_once 'init.php';


// new pokemons.
$getPopulation = new Pikachu();
$Pikachu = new Pikachu();
$Charmeleon = new Charmeleon();

// new attacks.
$ElectricRing = new ElectricRing();
$Flare = new Flare();

// new weaknesses.
$PikachuWeakness = new PikachuWeakness();
$CharmeleonWeakness = new CharmeleonWeakness();

// new resistance.
$PikachuResistance = new PikachuResistance();
$CharmeleonResistance = new CharmeleonResistance();

// get pokemon weaknesses.
$PikachuWeaknessData = $PikachuWeakness->getWeakness();
$CharmeleonWeaknessData = $CharmeleonWeakness->getWeakness();

// get pokemon resistance.
$PikachuResistanceData = $PikachuResistance->getResistance();
$CharmeleonResistanceData = $CharmeleonResistance->getResistance();

// get Attack hitpoints.
$ElectricRingAttack = $ElectricRing->getAttack();
$FlareAttack = $Flare->getAttack();


// Pokebattle.

// Print pokemon hitpoints before battle.
echo 'Charmeleon has ' . $Charmeleon->hitpoints . ' hitpoints currently.<br>';
echo 'Pikachu has ' . $Pikachu->hitpoints . ' hitpoints currently.<br><br>';

// Print pokemon hitpoints after battle. 
$ElectricRingResult = $ElectricRing->doAttack($ElectricRingAttack, $Charmeleon, $Pikachu, $CharmeleonWeaknessData, $CharmeleonResistanceData);
if ($ElectricRingResult == 'Dead') {
	unset($Charmeleon);
	echo 'Charmeleon is dead.<br>';
} else {
	echo 'Charmeleon has ' . $ElectricRingResult . ' hitpoints left!<br>';
}

$FlareResult = $Flare->doAttack($FlareAttack, $Pikachu, $Charmeleon, $PikachuWeaknessData, $PikachuResistanceData);
if ($FlareResult == 'Dead') {
	unset($Pikachu);
	echo 'Pikachu is dead.';
} else {
	echo 'Pikachu has ' . $FlareResult . ' hitpoints left!';
}


// Call to getPopulation method to print all alive pokemons.
echo '<br><br>There are currently ' . $getPopulation->getPopulation() . ' pokemons alive.<br>';


?>