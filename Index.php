<?php

require 'Pokemon.php';
require 'Pickachu.php';
require 'Charmeleon.php';
require 'PickachuAttack.php';
require 'PickachuWeakness.php';
require 'PickachuResistance.php';
// require 'ElectricRing.php';

$Pickachu = new Pickachu();
$Charmeleon = new Charmeleon();
$ElectricRing = new PickachuAttack('ElectricRing', '50');
$Pickapunch = new PickachuAttack('Pickapunch', '20');
$PickachuWeakness = new PickachuWeakness('Fire', '* 1,5');
$PickachuResistance = new PickachuResistance('Fighting', '20');

print_r('<pre>'. $Pickachu . '</pre>');
print_r('<pre>'. $Charmeleon . '</pre>');

$PickachuWeakness->sayWeakness();
$ElectricRing->sayAttack();
$Pickapunch->sayAttack();
$PickachuResistance->sayResistance();
// $Pickachu->sayName();



?>