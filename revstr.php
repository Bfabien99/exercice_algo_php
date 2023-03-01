<?php
// Écrivez un programme PHP pour inverser une chaîne sans utiliser la fonction de chaîne intégrée
$chaine = "Stamp";
$rev = "";
for($i=1;$i<=strlen($chaine);$i++){
    $rev.= $chaine[-$i];
}
echo $rev;