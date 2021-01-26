<?php

// Get init.php for class structure.
require_once 'init.php';


// new pokemons.
$Pikachu = new Pikachu();
$Charmeleon = new Charmeleon();
// new attacks.
$ElectricRing = new ElectricRing();
$Flare = new Flare();

// get Attack hitpoints.
$ElectricRingAttack = $ElectricRing->getAttack();
$FlareAttack = $Flare->getAttack();


// Pokebattle.

// Print Charmeleon hitpoints before battle.
echo 'Charmeleon has ' . $Charmeleon->hitpoints . ' hitpoints currently.<br> Pikachu attacks Charmeleon with ' . $ElectricRing->name . '. The attack hitpoints are: ' . $ElectricRing->hitpoints . '.<br>';
echo 'Charmeleon has a resistance for ' . $Charmeleon->resistanceEnergyType .  ', with an amount of: ' . $Charmeleon->resistanceAmount . '.<br>';
echo 'Charmeleon has a weakness for ' . $Charmeleon->weaknessEnergyType .  ', with an multiplier of: ' . $Charmeleon->weaknessMultiplier . '.<br>';


// Print Charmeleon hitpoints after battle. 
$ElectricRingResult = $ElectricRing->doAttack($ElectricRingAttack, $Charmeleon, $Pikachu);
if ($ElectricRingResult == 'Dead') {
	unset($Charmeleon);
	echo 'Charmeleon is dead.<br>';
} else {
	echo 'Charmeleon has ' . $ElectricRingResult . ' hitpoints left!<br><br>';
}




// Print Pikachu hitpoints before battle.
echo 'Pikachu has ' . $Pikachu->hitpoints . ' hitpoints currently.<br> Charmeleon attacks Pikachu with ' . $Flare->name . '. The attack hitpoints are: ' . $Flare->hitpoints . '.<br>';
echo 'Pikachu has a resistance for ' . $Pikachu->resistanceEnergyType .  ', with an amount of: ' . $Pikachu->resistanceAmount . '.<br>';
echo 'Pikachu has a weakness for ' . $Pikachu->weaknessEnergyType .  ', with an multiplier of: ' . $Pikachu->weaknessMultiplier . '.<br>';

// Print Pikachu hitpoints after battle. 
$FlareResult = $Flare->doAttack($FlareAttack, $Pikachu, $Charmeleon, $PikachuWeaknessData, $PikachuResistanceData);
if ($FlareResult == 'Dead') {
	unset($Pikachu);
	echo 'Pikachu is dead.';
} else {
	echo 'Pikachu has ' . $FlareResult . ' hitpoints left!';
}


// Call to getPopulation method to print all alive pokemons.
echo '<br><br>There are currently ' . Pokemon::getPopulation() . ' pokemons alive.<br>';


?>