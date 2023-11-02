<?php

// Initialisaton de la variable qui va server dans la boucle pour le menu du programme.
$est_Vrai = true;

echo "  Racine de l'équation du 2nd degré\n           Y= aX² + bX +c\n";

// Boucle qui va permettre le fonctionnement continue du programme tant que l'utilise ne décide pas de quitter.
while ($est_Vrai==true){

    $est_Vrai = false;
    echo "\n";
    // On demande à l'utilisateur de saisir les valeurs qui nous interessent.
    $a = readline("Quelle est la valeur de a : ");
    $b = readline("Quelle est la valeur de b : ");
    $c = readline("Quelle est la valeur de c : ");

    // On calcul le delta.
    $delta = (pow($b, 2) - 4*$a*$c);
    // On gère chaque cas de figure possible grâce à un switch
    switch(true){
        // Dans le cas où a vaut 0, l'équation devient du premier degré, on le fait donc savoir à l'utilisateur. 
        case $a==0 and $b!=0:
            echo "\nL'équation est du premier degré !\n \n";
            echo "L'équation s'annule pour x = -(c/b) : " . (-($c/$b)) . "\n \n";
            break;
        // Dans le cas où a et b valent 0, l'équation n'en est plus une et n'est plus solvable, on le fait donc savoir à l'utilisateur.  
        case $a==0 and $b==0:
            echo "\nL'équation n'en est plus une !\n";
            break;
        // Au suivant sont les trois cas possible d'une vrai équation du second degré, on effectue tous le calculs et les renvoyont à l'utilisateur.
        case $delta<0:
            echo "L'équation ne possède pas de racine réelle :\ndelta = $delta\n \n";
            break;
        case $delta==0:
            echo "L'équation possède une racine double :\ndelta = $delta\n \n";
            echo "x1 = x2 = " . (-($b/(2*$a))) . "\n \n";
            break;
        case $delta>0:
            echo "L'équation possède deux racines distinctes :\n delta = $delta\n \n";
            echo "L'équation s'annule pour :\n";
            echo "x1 = " . ((-$b + sqrt($delta))/(2*$a)) . "\n";
            echo "x2 = " . ((-$b - sqrt($delta))/(2*$a)) . "\n \n";
            break;
    }

    // Initialisation de la variable $reponse, ce qui servira dans la boucle pour obliger l'utilisateur à entrer un réponse valable pour continuer ou quitter le programme.
    $reponse = "P";

    while ($reponse!="o" and $reponse!="O" and $reponse!="n" and $reponse!="N"){
        echo "\n";
        $reponse = readline("Voulez-vous continuer ? ");
    }

    // Si l'utilisateur répond oui alors il continuera sinon il quite le programme.
    if ($reponse=="O" or $reponse=="o"){
        $est_Vrai = true;
    }
    elseif ($reponse=="N" or $reponse=="n"){
        echo "\nAu revoir et à bientôt !";
    }
}