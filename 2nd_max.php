<?php
// Écrivez un programme PHP pour trouver le deuxième plus grand nombre dans un tableau d'entiers
$tab = [2,2,3,1,4,5,5,9,5,5,6,7,8];
$fmax = $tab[0];
$smax = $tab[0];

for($i=0; $i<count($tab);$i++){
    if($tab[$i]>=$fmax){
        $smax = $fmax;
        $fmax = $tab[$i];
    }elseif($tab[$i]>=$smax){
        $smax = $tab[$i];
    }
    echo "i = $i, tab[",$i,"] = {$tab[$i]}, fmax = $fmax, smax = $smax\n";
}

echo "max: $fmax, min: $smax";