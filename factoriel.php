<?php
// Ecrire un programme PHP pour trouver la factorielle d'un nombre donné
$factoriel = 1;
$nb = (int)readline("Entrer un nombre : ");

for($i=1; $i<=$nb; $i++){
    $_a=$factoriel;
    $factoriel *= $i;
    echo "i: $i; factoriel: $_a * $i = $factoriel\n";
}