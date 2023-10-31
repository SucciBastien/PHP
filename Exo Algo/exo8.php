<?php

$question = readline("Entrez le numéro de question que vous voulez voir : ");

if ($question==1){

    $dimension1 = readline("Entrez le nombre de ligne du tableau : ");
    $dimension2 = readline("Entrez le nombre de colonne du tableau : ");
    $tab = [];
    $max = 0;

    for ($i=0; $i<$dimension1; $i++){
        for ($j=0; $j<$dimension2; $j++){
            $tab[$i][$j] = readline("Entrez le nombre que vous voulez placer ligne " . $i+1 . " colonne " . $j+1 . " : ");
        }
    }

    for ($i=0; $i<$dimension1; $i++){
        for ($j=0; $j<$dimension2; $j++){
            echo $tab[$i][$j];
        }
        echo "\n";
    }

    $max = $tab[1][1];

    for ($i=0; $i<$dimension1; $i++){
        for ($j=0; $j<$dimension2; $j++){
            if ($tab[$i][$j]>$max)
                $max = $tab[$i][$j];
        }
    }

    echo "Le plus grand nombre de ce tableau est $max.\n \n";

}
elseif ($question==2){

    // Pyramide

    // Je récupère le nombre d'étages que je veux dans ma pyramide
    $etage = readline("Entrez le nombre d'étage que vous voulez pour la pyramide : ")+1;
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

    // Triangle

    // Je récupère le nombre d'étage pour mon triangle
    $etage = readline("Entrez le nombre d'étage qu'aura le triangle : ")+1;

    // Je créer le triangle en ajoutant une condition pour le remplissage du traingle différent de son exterieur
    for ($i=0; $i<$etage; $i++){
        for ($j=0; $j<$i; $j++){
            if ($j==0 or $j==$i-1 or $i==$etage-1)
                echo "X";
            else
                echo "O";
        }
        echo "\n";
    }

}