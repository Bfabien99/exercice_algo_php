<?php
// Ecrire un programme PHP pour vérifier si un nombre donné est un nombre premier ou non
$is_prime = true;
$nb = (int) readline("Entrer un nombre : ");
if($nb == 1 || $nb == 2){
    echo "$nb est un nombre premier";
}elseif($nb>2)
{
    for($i=2; $i<$nb; $i++){
        if($nb % $i == 0){
            $is_prime = false;
            break;
        }
    }
    if($is_prime){
        echo "$nb is prime";
    }
    else{
        echo "$nb is not prime";
    }
}