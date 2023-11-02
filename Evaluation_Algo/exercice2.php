<?php

// Initialisaton de la variable qui va server dans la boucle pour le menu du programme.
$est_Vrai = true;

echo "  ****    Table de multiplication ****\n \n";

// Boucle qui va permettre le fonctionnement continue du programme tant que l'utilise ne décide pas de quitter.
while ($est_Vrai==true){
    $est_Vrai = false;
    // On demande le nombre que l'utilisateur veut.
    $nb = readline("Entrer le nombre pour lequel vous voulez la table de multiplication : ");

    // On utilise une boucle for alant de 1 à 10 pour afficher à chaque fois le résultat de la table de multiplication
    for ($i=1; $i<11; $i++){

        // Ce if sert purment pour l'esthétique du programme lors de l'écriture de la réponse, sans ce if, la ligne avec 10 ne s'aligne pas avec les autres réponse.
        if ($i!=10){
        echo "$nb       x $i     = " . ($nb*$i) . "\n"; 
        }
        else{
            echo "$nb       x $i    = " . ($nb*$i) . "\n";
        }
    }

    // Initialisation de la variable $reponse, ce qui va servir dans la boucle qui permettra d'obliger l'utilisateur à entrer un réponse valable pour continuer ou quitter le programme.
    $reponse = "P";

    while ($reponse!="o" and $reponse!="O" and $reponse!="n" and $reponse!="N"){
        echo "\n";
        $reponse = readline("Voulez-vous continuer ? ");
    }

    // Si l'utilisateur répond oui alors il continuera sinon il quite le programme.
    if ($reponse=="O" or $reponse=="o"){
        $est_Vrai = true;
    }
}





