<?php

// Get init.php for class structure.
require_once 'init.php';


// new pokemons.
$Pikachu = new Pikachu();
$Charmeleon = new Charmeleon();


// Pokebattle.

// Print Charmeleon hitpoints before battle.
echo 'Charmeleon has ' . $Charmeleon->hitpoints . ' hitpoints currently.<br> Pikachu attacks Charmeleon with ' . $Pikachu->attack[0] . ' hitpoints.<br>';
echo 'Charmeleon has a resistance for ' . $Charmeleon->resistanceEnergyType .  ', with an amount of: ' . $Charmeleon->resistanceAmount . '.<br>';
echo 'Charmeleon has a weakness for ' . $Charmeleon->weaknessEnergyType .  ', with an multiplier of: ' . $Charmeleon->weaknessMultiplier . '.<br>';



// Print Charmeleon hitpoints after battle. 
$ElectricRingResult = $Pikachu->doAttack($Pikachu->attack[0], $Charmeleon, $Pikachu);
if ($ElectricRingResult == 'Dead') {
	unset($Charmeleon);
	echo 'Charmeleon is dead.<br>';
	?><img src="images/DeadCharmeleon.png"><br><br><?php
} else {
	echo 'Charmeleon has ' . $ElectricRingResult . ' hitpoints left!<br>';
	?><img src="images/Charmeleon.png"><br><br><?php
}



// Print Pikachu hitpoints before battle.
echo 'Pikachu has ' . $Pikachu->hitpoints . ' hitpoints currently.<br> Charmeleon attacks Pikachu with ' . $Charmeleon->attack[0] . ' hitpoints.<br>';
echo 'Pikachu has a resistance for ' . $Pikachu->resistanceEnergyType .  ', with an amount of: ' . $Pikachu->resistanceAmount . '.<br>';
echo 'Pikachu has a weakness for ' . $Pikachu->weaknessEnergyType .  ', with an multiplier of: ' . $Pikachu->weaknessMultiplier . '.<br>';



// Print Pikachu hitpoints after battle. 
$FlareResult = $Charmeleon->doAttack($Charmeleon->attack[0], $Pikachu, $Charmeleon);
if ($FlareResult == 'Dead') {
	unset($Pikachu);
	echo 'Pikachu is dead.<br>';
	?><img src="images/DeadPikachu.png"><br><?php
} else {
	echo 'Pikachu has ' . $FlareResult . ' hitpoints left!';
	?><br><img src="images/Pikachu.png"><?php
}




// Call to getPopulation method to print all alive pokemons.
echo '<br><br>There are currently ' . Pokemon::getPopulation() . ' pokemons alive.<br>';
?>