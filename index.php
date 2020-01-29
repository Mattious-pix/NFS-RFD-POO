<?php

require_once './classes/Vehicule.php';
require_once './classes/Voiture.php';

$voiture1 = new Voiture(1000, 'rouge');
$voiture1->vitesse = 30;

echo $voiture1->getnbrPlaces();

echo $voiture1->calculerEnergieCinetique();
echo "<br />";
$voiture1->vitesse = 10;
echo $voiture1->calculerEnergieCinetique();
