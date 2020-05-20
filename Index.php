<?php

require 'Pokemon.php';
$Pickachu = new Pokemon('Pickachu','Energy','60','60','Fire','Fighting','50','20',);
$Charmeleon = new Pokemon('Charmeleon','Fire','60','60','water','Lightning','10','30',);
print_r('<pre>'. $Pickachu . '</pre>');
print_r('<pre>'. $Charmeleon . '</pre>');
//print_r('<pre>'. $Nuzzle . '</pre>');


?>