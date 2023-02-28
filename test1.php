<?php
    $i = $j = 1;

    while($i<=10){
        while($j<=10){
            echo "$i * $j\n";
            $j++;
            if($j>10){
                break;
            }
        }
        $i++;
        
    }
?>