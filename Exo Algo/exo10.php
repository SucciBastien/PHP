<?php
require "fonctions.php";

while (true){
    echo "\n \n \n";
    echo "Choisissez une fonction : \n \n1) Calculer le prix TTC en fonction du prix unitaire HT, du nombre d'articles et du taux de TVA.\n \n2) Calculer le PGCD de deux nombres.\n \n3) Calculer le PPCM de deux nombres.\n \n4) Afficher la table de multiplication d'un nombre.\n \n5) Calculer la factorielle d'un nombre.\n \n6) Calculer la somme des valeurs d'un tableau.\n \n7) Créer un pyramide d'étoiles avec un certain nombre d'étages.\n \nQ pour quitter le menu.\n \n";
    $numero = readline();
    switch($numero){
        case 1:
            echo "\n \nCalcul du prix total TTC :\n \n";
            echo TTC((float)readline("Entrez le prix à l'unité HT du produit : "), (int)readline("Entrez le nombre d'article : "), (float)readline("Entrez le taux de TVA en pourcentage : "));
            break;
        case 2:
            echo "\n \nCalcul du PGCD :\n \n";
            echo PGCD((int)readline("Entrez le premier nombre entier : "), (int)readline("Entrez le second nombre entier : "));
            break;
        case 3:
            echo "\n \nCalcul du PPCM :\n \n";
            echo PPCM((int)readline("Entrez le premier nombre entier : "), (int)readline("Entrez le second nombre entier : "));
            break;
        case 4:
            echo "\n \nCalcul de la table de multiplication :\n \n";
            TableMult((float)readline("Entrez un nombre : "));
            break;
        case 5:
            echo "\n \nCalcul de la factorielle :\n \n";
            echo factorielle((int)readline("Entrez un nombre entier : "));
            break;
        case 6:
            echo "\n \nCalcul de la somme des valeurs d'un tableau :\n \n";
            $dimension = (int)readline("Entrez la taille de votre tableau : ");
            $tab = [];
            for ($i=0; $i<$dimension; $i++){
                $tab[$i] = (float)readline("Entrez la valeur numéro " . ($i+1) . " du tableau : ");
            }
            echo TabSum($tab);
            break;
        case 7:
            echo "\n \nDessin d'une pyramide :\n \n";
            Pyramide((int)readline("Entrez le nombre d'étages pour votre pyramide : "));
            break;
        case $numero=="q" or $numero=="Q":
            exit("\n \nAu revoir!");
        default:
            echo "\n \nChoix invalide";
    }
}

