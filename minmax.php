<?php
    // Écrivez un programme PHP pour trouver les valeurs maximales et minimales dans un tableau d'entiers.
    $tab = [2,2,3,1,5,5,9,5,6,7,8];
    $min = $tab[0];
    $max = $tab[0];

    for($i=0; $i<count($tab); $i++){
        echo "i = $i, tab[",$i,"] = {$tab[$i]}, min = $min, max = $max\n";
        if($tab[$i] <= $min){
            $max = $min;
            $min = $tab[$i];
        }elseif($tab[$i] >= $max){
            $max = $tab[$i];
        }
    }

    echo "max: $max, min: $min";
?>