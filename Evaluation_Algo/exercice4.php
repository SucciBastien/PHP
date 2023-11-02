<?php

// Initialisation des tableau contenant les informations des avions
$Avion = ["BOING747", "AIRBUSA380", "LEARJET45", "DC10", "CONCORDE", "ANTONOV32"];
$CodeAvion = ["B0", "AB", "LJ", "DC", "CO", "AN"];
$VitesseCroisiere = [800, 950, 700, 900, 1400, 560];
$RayonAction = [10000, 12000, 4500, 8000, 16000, 2500];

// Initialisaton de la variable qui va server dans la boucle pour le menu du programme.
$est_Vrai = true;

echo "  ****  STATISTIQUES AVIONS  ****\n \n";

// Boucle qui va permettre le fonctionnement continue du programme tant que l'utilise ne décide pas de quitter.
while ($est_Vrai==true){

    $est_Vrai = false;
    echo "\n";

    // Initialisation de la variable qui va permettre de vérifier si le code avion entré existe ou non.
    $present = false;

    while ($present==false){
        // Demande du code de l'avion recherché.
        $code = readline("Entrez le code de l'avion : ");

        // Vérification de l'existence de l'avion tout en gardant le rang de l'avion dans le tableau si il existe.
        for ($i=0; $i<count($CodeAvion); $i++){
            if ($code==$CodeAvion[$i]){
                $ligne = $i;
                $present = true;
            }
        }
        // Si l'avion n'existe pas, un message le fesant savoir est écrit et le code est à nouveau demandé.
        if ($present==false){
            echo "Cet avion n'existe pas.\n \n";
        }
    }

    // Affichage des informations de l'avion recherché.
    echo "Avion : " . $Avion[$ligne] . " Vitesse : " . $VitesseCroisiere[$ligne] . " Rayon d'action : " . $RayonAction[$ligne] . "\n \n";

    // Demande à l'utilisateur si il souhaite voir les statistiques des avions en général telle que le plus rapide et le rayon d'action moyen.
    $edit = readline("Voulez-vous éditer les statistiques (O/N) ");

    // Si l'utilisateur souhaite l'afficher, on recherche l'avion le plus rapide et on calcul le rayon d'action moyen pour ensuite les affichés.
    if ($edit=="o" or $edit=="O"){
        $Vmax = $VitesseCroisiere[0];
        for ($i=1; $i<count($VitesseCroisiere); $i++){
            if ($VitesseCroisiere[$i]>$Vmax){
                $Vmax = $VitesseCroisiere[$i];
                $ligneVmax = $i;
            }
        }
        echo " L'avion qui vole le plus vite est le " . $Avion[$ligneVmax] . " à " . $Vmax . " km/h.\n";
        echo " La moyenne des rayon d'action est de : " . array_sum($RayonAction)/count($RayonAction) . "\n \n"; 
    }

    // Initialisation de la variable $reponse, ce qui servira dans la boucle pour obliger l'utilisateur à entrer un réponse valable pour continuer ou quitter le programme.
    $reponse = "P";

    while ($reponse!="o" and $reponse!="O" and $reponse!="n" and $reponse!="N"){
        echo "\n";
        $reponse = readline("Voulez-vous faire une autre recherche (O/N) ");
    }

    // Si l'utilisateur répond oui alors il continuera sinon il quite le programme.
    if ($reponse=="O" or $reponse=="o"){
        $est_Vrai = true;
    }
    elseif ($reponse=="N" or $reponse=="n"){
        echo "\nAu revoir et à bientôt !";
    }

}