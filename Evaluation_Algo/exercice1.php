<?php

// Initialisaton de la variable qui va server dans la boucle pour le menu du programme.
$est_Vrai = true;

echo "              CALCUL D'UN CERCLE\n";

// Boucle qui va permettre le fonctionnement continue du programme tant que l'utilise ne décide pas de quitter.
while ($est_Vrai==true){
    $est_Vrai = false;
    echo "\n";
    // On demande le rayon du cercle à l'utilisateur puis on renvoie les résultats des calculs de circonférence et de surface.
    $rayon = readline("Quel est le rayon du cercle : ");
    echo "Sa circonférence est de : " . (2*pi()*$rayon) . "\n";
    echo "Sa surface est de : " . (pi()*pow($rayon, 2)) . "\n";
    
    // Initialisation de la variable $reponse, ce qui va servir dans la boucle qui permettra d'obliger l'utilisateur à entrer un réponse valable pour continuer ou quitter le programme.
    $reponse = "P";

    while ($reponse!="o" and $reponse!="O" and $reponse!="n" and $reponse!="N"){
        echo "\n";
        $reponse = readline("Voulez-vous faire un autre calcul (O/N) : ");
    }

    // Si l'utilisateur répond oui alors il continuera (ou recomencera) le programme, sinon il le quitte avec un petit message.
    if ($reponse=="O" or $reponse=="o"){
        $est_Vrai = true;
    }
    if ($reponse=="N" or $reponse=="n"){
        echo "\nAu revoir et à bientôt !";
    }
}