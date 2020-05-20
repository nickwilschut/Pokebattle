<?php

require 'Pokemon.php';
require 'Pickachu.php';
require 'Charmeleon.php';

print_r('<pre>'. $Pickachu . '</pre>');
print_r('<pre>'. $Charmeleon . '</pre>');
//print_r('<pre>'. $Nuzzle . '</pre>');
echo $Pickachu->electric_ring();


?>