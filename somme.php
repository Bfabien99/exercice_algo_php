<?php
// Ecrire un programme PHP pour calculer la somme des chiffres d'un nombre donné
$number = 1111112;
$somme = 0;

$snumber = (string)$number;
for($i=0;$i<strlen($snumber);$i++){
    $somme += (int)$snumber[$i];
}
echo $somme;