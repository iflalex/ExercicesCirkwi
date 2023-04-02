// FACTORISER AU MIEUX LE CODE
<?php

require './Services/ServicesSheeps.php';

// Init moutons
$initSheeps = [
	[
		'name' => 'Danny', 
		'valeur' => 75
	],
	[
		'name' => 'Richard', 
		'valeur' => 60
	],
	[
		'name' => 'Gérard', 
		'valeur' => 120
	]
];

// Un tableau de moutons
$sheeps = (new ServicesSheeps())->createSheeps([], newSheeps: $initSheeps);

// J'ajoute un mouton
$addSheep = ['name' => 'Bertrand', 'valeur' => 25];
$sheeps = (new ServicesSheeps())->createSheeps($sheeps, newSheep: $addSheep);


// Je calcule la moyenne de la valeur de mes moutons
echo '<pre>';
(new ServicesSheeps())->sumSheeps($sheeps);
echo '</pre>';

// Ajout de 100 moutons aléatoires
$sheeps = (new ServicesSheeps())->createAleatoireSheeps($sheeps, 100);

// Je calcule a nouveaux la moyenne de la valeur de mes moutons
echo '<pre>';
(new ServicesSheeps())->sumSheeps($sheeps);
echo '</pre>';
?>