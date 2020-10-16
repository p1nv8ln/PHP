<?php
function repondre_oui_ou_non ($phrase) {
    while (true) {
    $reponse = readline($phrase . " - (o)ui/(n)on ");
    if ($reponse === "o") {
        return true;
    } elseif ($reponse === 'n') {
        return false;
    }
}

}

$resultat = repondre_oui_ou_non('Aimez-vous le php ?');

var_dump($resultat);
