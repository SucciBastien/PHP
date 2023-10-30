<?php

$question = readline("Entrez le numéro de question que vous voulez lancer : ");

if ($question==1){
    echo "Question 1:\n \n";

    $nbNotes = readline("Entrez le nombre de notes : ");
    $tabNotes = [];
    $tot = 0;

    for ($i=0; $i<$nbNotes; $i++){
        $tabNotes[$i] = readline("Entrez la note : ");
    }

    foreach($tabNotes as $key => $value){
        $tot = $tot + $value;
    }

    echo "La moyenne de ces notes est de : " . ($tot / $nbNotes) . "\n";
}
elseif ($question==2){
    echo "Question 2:\n \n";

    $nbNb = readline("Entrez le nombre de nombres à mettre dans le tableau : ");
    $tabNb = [];
    $neg = 0;
    $pos = 0;

    for ($i=0; $i<$nbNb; $i++){
        $tabNb[$i] = readline("Entrez le nombre : ");
        if ($tabNb[$i]>=0){
            $pos++;
        }    
        elseif ($tabNb[$i]<=0){
            $neg++;
        }
    }

    echo "Il y a $pos nombres positifs dans ce tableau.\n \n";
    echo "Il y a $neg nombres négatifs dans ce tableau.\n \n";
}
elseif ($question==3){
    echo "Question 3:\n \n";

    $dimension = readline("Entrez le nombre de nombres à mettre dans le tableau : ");
    $tab = [];
    $somme = 0;

    for ($i=0; $i<$dimension; $i++){
        $tab[$i] = readline("Entrez le nombre : ");
    }

    foreach($tab as $key => $value){
        $somme = $somme + $value;
    }

    echo "La somme des nombres de ce tableau est de $somme.\n \n";    
}
elseif ($question==4){
    echo "Question 4:\n \n";

    $dimension = readline("Entrez le nombre de nombres à mettre dans les tableaux : ");
    $tab1 = [];
    $tab2 = [];
    $tabSomme = [];

    for ($i=0; $i<$dimension; $i++){
        $tab1[$i] = readline("Entrez le nombre pour le tableau 1 : ");
        $tab2[$i] = readline("Entrez le nombre pour le tableau 2 : ");
        $tabSomme[$i] = $tab1[$i] + $tab2[$i];
    }

    echo "Les sommes des éléments des tableaux 1 et 2 sont : ";
    echo implode(", ", $tabSomme) . "\n \n";    
}
elseif ($question==5){
    echo "Question 5:\n \n";

    $dimension = readline("Entrez le nombre de nombres à mettre dans le tableau : ");
    $tab = [];
    $nbGrand = 0;
    $ligne = 0;

    for ($i=0; $i<$dimension; $i++){
        $tab[$i] = readline("Entrez le nombre pour le tableau : ");
        if ($tab[$i]>$nbGrand){
            $nbGrand = $tab[$i];
            $ligne = $i + 1;
        }
    }

    echo "La plus grande valeur dans ce tableau est $nbGrand à la ligne $ligne.\n \n";    
}
elseif ($question==6){
    echo "Question 6:\n \n";

    $nbNotes = readline("Entrez le nombre de notes : ");
    $tabNotes = [];
    $tot = 0;
    $nbDessusMoy = 0;

    for ($i=0; $i<$nbNotes; $i++){
        $tabNotes[$i] = readline("Entrez la note : ");
        $tot = $tot + $tabNotes[$i];
    }

    $moy = $tot / $nbNotes;

    for ($i=0; $i<$nbNotes; $i++){
        if ($tabNotes[$i]>$moy){
            $nbDessusMoy++;
        }
    }

    echo "Il y a $nbDessusMoy notes au dessus de la moyenne.\n \n";    
}
elseif ($question==7){
    echo "Question 7:\n \n";

    $nbProduit = readline("Entrez le nombre de produits : ");
    $PrixUnite = [];
    $Quantite = [];
    $PrixTotal = 0;

    for ($i=0; $i<$nbProduit; $i++){
        $PrixUnite[$i] = readline("Entrez le prix unitaire du produit : ");
        $Quantite[$i] = readline("Entrez la quantité acheté du produit : ");
        $PrixTotal = $PrixTotal + ($PrixUnite[$i] * $Quantite[$i]);
    }

    echo "Le prix total de tous les produits achetés est de $PrixTotal.\n";    
}
