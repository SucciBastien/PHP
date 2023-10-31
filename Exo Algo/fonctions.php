<?php

function TTC($prixUniHT, $nbProduit, $TVA){
    $prixTotalTTC = round($prixUniHT * $nbProduit * (1 + $TVA / 100), $precision = 2, $mode = PHP_ROUND_HALF_UP);

    return "Votre prix total TTC est de  " . $prixTotalTTC . "€" . "\n";
}

function PGCD($nb1, $nb2){
    $reste = 1;
    $PGCD = min($nb1, $nb2);

    while ($reste!=0){
        $reste = fmod($nb1, $PGCD) + fmod($nb2, $PGCD);
        $PGCD--;
    }
    $PGCD++;
    return "Le PGCD de ces deux chiffres est : $PGCD.\n \n";
}
function PPCM($nb1, $nb2){
    $reste = 1;
    $PGCD = min($nb1, $nb2);

    while ($reste!=0){
        $reste = fmod($nb1, $PGCD) + fmod($nb2, $PGCD);
        $PGCD--;
    }
    $PGCD++;
    $PPCM = ($nb1 * $nb2)/$PGCD;
    return "Le PPCM de ces deux nombre est : $PPCM.\n \n";
}

function TableMult($nb){
    for ($i=1; $i<=10; $i++)
        echo "$i x $nb = " . ($nb*$i) . "\n \n";
}


function factorielle($nb){
    $resultat = 1;

    for ($i=1; $i<=$nb; $i++)
        $resultat = $i * $resultat;

    return "La factorielle de $nb est $resultat.\n \n";
}

function TabSum($tab){
    $somme = 0;

    foreach($tab as $key => $value){
        $somme = $somme + $value;
    }

    return "La somme des nombres de ce tableau est de $somme.\n \n";
}

function Pyramide($etage){
    $tab = [];
    
    // Je créer le tableau pour les premières ligne jusqu'au haut de la pyramide
    for ($i=0; $i<$etage; $i++){
        for ($j=0; $j<$i; $j++){
            $tab[$i][$j] = "*";
            echo $tab[$i][$j];
        }
        echo "\n";
    }

    // Je créer le tableau pour le reste de la pyramide
    for ($i=2; $i<$etage; $i++){
        for ($j=$i; $j<$etage; $j++){
            $tab[$i][$j] = "*";
            echo $tab[$i][$j];
        }
        echo "\n";
    }
}