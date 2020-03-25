<?php

require 'PokeBattle.php';

$Pikachu = new Pokemon(
	'Pikachu',
	'Lightning',
	60,
	[['Electric Ring', 50],['Pika Punch', 20]],
	['Fire',1.5],
	['Fighting',20]

);

$Charmeleon = new Pokemon(
	'Charmeleon',
	'Fire',
	60,
	[['Head Butt', 10],['Flare', 10]],
	['Water',2],
	['Lightning',10]

);

print_r("<pre>Charmeleon's HP:". $Charmeleon->health . '</pre>');
$Pikachu->attack($Charmeleon, 0);

print_r("<pre>Charmeleon's HP after battle ". $Charmeleon->health . '</pre>');
print_r("<pre>Pikachu's HP:". $Pikachu->health. '</pre>');

$Charmeleon->attack($Pikachu, 1);
print_r("<pre>Pikachu's HP after battle ". $Pikachu->health. '</pre>')


?>