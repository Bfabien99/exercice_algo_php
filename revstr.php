<?php
// Écrivez un programme PHP pour inverser une chaîne sans utiliser la fonction de chaîne intégrée
$chaine = "awas";
$rev = "";
for($i=1;$i<=strlen($chaine);$i++){
    if($i == strlen($chaine)){
        $rev.= $chaine[0];
        break;
    }
    $rev.= $chaine[-$i];
}
echo $rev;