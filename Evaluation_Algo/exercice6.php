<?php 


$Manches = 1;
$ScoreOrdi = 0;
$ScoreUti = 0;

// Je demande à l'utilisateur son nom qui va servir dans le score.
echo "Comment voulez-vous vous appeler ?\n";
$pseudo = readline();


// Je lance le for qui va se réaliser à chaque fois que le joueur souhaite faire une manche.
for ($i=1; $i<=$Manches; $i++){
    echo "Manche $i\n \n";

    // Ce for sert à gérer chaque manche ou j va de 1 à 3 pour qu'il se réalise 3 fois.
    for ($j=1; $j<=3; $j++){

        $choixUti = "i";
        
        // Je demande à l'utilisateur de choisir et je lui redemande à chaque fois qu'il ne met pas de réponse valide.
        while ($choixUti!="Pierre" and $choixUti!="Feuille" and $choixUti!="Ciseaux"){
            $choixUti = readline("Partie $j : Choisissez (Pierre/Feuille/Ciseaux) : ");
            if ($choixUti!="Pierre" and $choixUti!="Feuille" and $choixUti!="Ciseaux"){
                echo "Choix invalide ! Veuillez choisir Pierre, Feuille ou Ciseaux !\n \n";
            }
        }

        // Je fais générer à l'ordinateur son choix gr^ce à un nombre aléatoire qui est associé à un choix.
        $choixOrdi = rand(1, 3);
        switch ($choixOrdi){
            case 1:
                $choixOrdi = "Pierre";
                break;
            case 2:
                $choixOrdi = "Feuille";
                break;
            case 3:
                $choixOrdi = "Ciseaux";
                break;
        }
        // J'annonce le choix de l'ordi. 
        echo "L'ordinateur choisit : $choixOrdi\n";

        // Ici est le cas d'égalité où l'on doit rejouer le tour, un message adapté est donc affiché et le compteur est abaissé pour revenir au tour actuel quand le for reprendra.
        if ($choixUti==$choixOrdi){
            echo "Egalité ! La partie se rejoue !\n \n";
            $j--;
        }

        // Ici sont gérer tous les cas différents en fonction des choix du joueur et de l'ordinateur, quand l'un gagne, son score est augmenté de 1. 
        switch(true){
            case $choixUti=="Pierre" and $choixOrdi=="Ciseaux":
                echo "L'utilisateur gagne !\n";
                $ScoreUti++;
                break;
            case $choixUti=="Pierre" and $choixOrdi=="Feuille":
                echo "L'ordinateur gagne !\n";
                $ScoreOrdi++;
                break;
            case $choixUti=="Feuille" and $choixOrdi=="Pierre":
                echo "L'utilisateur gagne !\n";
                $ScoreUti++;
                break;
            case $choixUti=="Feuille" and $choixOrdi=="Ciseaux":
                echo "L'ordinateur gagne !\n";
                $ScoreOrdi++;
                break;
            case $choixUti=="Ciseaux" and $choixOrdi=="Feuille":
                echo "L'utilisateur gagne !\n";
                $ScoreUti++;
                break;
            case $choixUti=="Ciseaux" and $choixOrdi=="Pierre":
                echo "L'ordinateur gagne !\n";
                $ScoreOrdi++;
                break;
        }
        
    }
    // Ici on anonce le score après cette manche, qui se cumule dans le cas où plusieurs manche sont jouées.
    echo "Score après la manche $i : $pseudo ($ScoreUti) - Ordinateur ($ScoreOrdi)\n";
    

    // Initialisation de la variable $reponse, ce qui servira dans la boucle pour obliger l'utilisateur à entrer un réponse valable pour continuer ou quitter le programme.
    $reponse = "P";

    while ($reponse!="o" and $reponse!="O" and $reponse!="n" and $reponse!="N"){
        echo "\n";
        $reponse = readline("Voulez-vous faire une autre manche ? (O/N) ");
    }

    // Si l'utilisateur répond oui alors il continuera et lancera une nouvelle manche.
    if ($reponse=="O" or $reponse=="o"){
        $Manches++;
    }
    // Si l'utilisateur répond non, la partie se termine et le score est écrit dans un fichier texte.
    elseif ($reponse=="N" or $reponse=="n"){
        echo "\nFin du jeu. Le résultat final a été enregistré dans le fichier resultats.txt.";
        $fp = fopen("resultats.txt", "a");
        fwrite($fp, "Score après $i manche(s) : $pseudo ($ScoreUti) - Ordinateur ($ScoreOrdi)\n");
        fclose($fp);
    }
}