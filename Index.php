<?php

require 'Pokemon.php';
require 'Pickachu.php';
require 'Charmeleon.php';
require 'PickachuAttack.php';
require 'PickachuWeakness.php';
require 'PickachuResistance.php';
require 'CharmeleonAttack.php';
require 'CharmeleonWeakness.php';
require 'CharmeleonResistance.php';
// require 'ElectricRing.php';

$Pickachu = new Pickachu();
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



?>