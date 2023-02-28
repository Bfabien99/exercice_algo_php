<?php
// Écrivez un programme PHP pour calculer la somme de tous les nombres pairs de 1 à 100
$somme = 0;
for($i=1; $i<=100; $i++){
    if($i%2==0){
        echo "i: $i, modulo: ",$i%2,", somme: $somme + $i = ",$somme+$i,"\n";
        $somme += $i;
    }else{

    }
}

echo "resultat : $somme";