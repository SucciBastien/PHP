<?php 


$Manches = 1;
$ScoreOrdi = 0;
$ScoreUti = 0;

echo "Comment voulez-vous vous appeler ?\n";
$pseudo = readline();

for ($i=1; $i<=$Manches; $i++){
    echo "Manche $i\n \n";
    for ($j=1; $j<=3; $j++){
        $choixUti = "i";
        
        while ($choixUti!="Pierre" and $choixUti!="Feuille" and $choixUti!="Ciseaux"){
            $choixUti = readline("Partie $j : Choisissez (Pierre/Feuille/Ciseaux) : ");
            if ($choixUti!="Pierre" and $choixUti!="Feuille" and $choixUti!="Ciseaux"){
                echo "Choix invalide ! Veuillez choisir Pierre, Feuille ou Ciseaux\n \n";
            }
        }

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
        echo "L'ordinateur choisit : $choixOrdi\n";

        if ($choixUti==$choixOrdi){
            echo "Egalité ! La partie se rejoue !\n \n";
            $j--;
        }
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
    echo "Score après la manche $i : $pseudo ($ScoreUti) - Ordinateur ($ScoreOrdi)\n";
    
    $reponse = "P";

    while ($reponse!="o" and $reponse!="O" and $reponse!="n" and $reponse!="N"){
        echo "\n";
        $reponse = readline("Voulez-vous faire une autre manche ? (O/N) ");
    }

    // Si l'utilisateur répond oui alors il continuera sinon il quite le programme.
    if ($reponse=="O" or $reponse=="o"){
        $Manches++;
    }
    elseif ($reponse=="N" or $reponse=="n"){
        echo "\nFin du jeu. Le résultat final a été enregistré dans le fichier resultats.txt.";
        $fp = fopen("resultats.txt", "a");
        fwrite($fp, "Score après la manche $i : $pseudo ($ScoreUti) - Ordinateur ($ScoreOrdi)\n");
        fclose($fp);
    }
}