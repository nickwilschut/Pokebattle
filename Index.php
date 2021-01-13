<?php
// Get init.php for class structure.
require_once 'init.php';

// new pokemons.
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

// get pokemon hitpoints.
$PikachuHitpoints = $Pikachu->getHitpoints();
$CharmeleonHitpoints = $Charmeleon->getHitpoints();

// get Attack hitpoints.
$ElectricRingAttack = $ElectricRing->getAttack();
$FlareAttack = $Flare->getAttack();


// Pokebattle.
$ElectricRing->doAttack($ElectricRingAttack, $CharmeleonHitpoints, $CharmeleonWeaknessData, $CharmeleonResistanceData);
$Flare->doAttack($FlareAttack, $PikachuHitpoints, $PikachuWeaknessData, $PikachuResistanceData);




/*



$ElectricRing = new PickachuAttack('ElectricRing', '50');
$Pickapunch = new PickachuAttack('Pickapunch', '20');
$PickachuWeakness = new PickachuWeakness('Fire', '* 1,5');
$PickachuResistance = new PickachuResistance('Fighting', '20');

$Charmeleon = new Charmeleon();
$Headbutt = new CharmeleonAttack('Headbutt', '10');
$Flare = new CharmeleonAttack('Pickapunch', '30');
$CharmeleonWeakness = new CharmeleonWeakness('Water', '* 2');
$CharmeleonResistance = new CharmeleonResistance('Lightning', '10');

print_r('<pre>'. $Pickachu . '</pre>');
print_r('<pre>'. $Charmeleon . '</pre>');

$PickachuWeakness->sayWeakness();
$ElectricRing->sayAttack();
$Pickapunch->sayAttack();
$PickachuResistance->sayResistance();

$CharmeleonWeakness->sayWeakness();
$Headbutt->sayAttack();
$Flare->sayAttack();
$CharmeleonResistance->sayResistance();
// $Pickachu->sayName();


*/
?>