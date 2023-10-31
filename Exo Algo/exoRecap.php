<?php



while (true){

    echo "Choisissez à quel programme vous voulez lancer :\n \n1) Génere un nobmre entre 1 et 20 et vous donne une idée de quel nombre c'est.\n \n2) Affiche un message en fonction du résultat d'une nombre aléatoire entre 0 et 20.\n \n3) Devine qui.\n \n4) Nombre pair est divisible par 3.\n \nQ pour quitter le programme.\n \n";
    $numero = readline();
    echo "\n";

    switch ($numero){
        case 1:
            echo "\nUn nombre entre 1 et 20 va être généré.\n \n";
            $nb = rand(1, 20);
            switch ($nb){
                case $nb<6:
                    echo "Il est compris entre 1 et 5.\n \n";
                    break;
                case $nb<11:
                    echo "Il est compris entre 6 et 10.\n \n";
                    break;
                case $nb<16:
                    echo "Il est compris entre 11 et 15.\n \n";
                    break;
                case $nb<21:
                    echo "Il est compris entre 16 et 20.\n \n";
                    break;
            }
            break;
        case 2:
            echo "\nUn nombre entre 1 et 20 va être généré et un message vous sera affiché.\n \n";
            $nb = rand(1, 20);
            echo "Nombre : $nb.\n \n";
            switch ($nb){
                case $nb<8:
                    echo "Bonjour\n \n";
                    break;
                case $nb<15:
                    echo "Salut\n \n";
                    break;
                case $nb<21:
                    echo "Hello\n \n";
                    break;
            }
            break;
        case 3:
            echo "\nJe vais vous poser quelques questions pour savoir à qui vous pensez.\n \n Répondez aux questions par true pour oui et par false pour non.\n \n";
            $homme = "x";
            while ($homme!="true" and $homme!="false"){
                echo "Répondez par true ou false.\n \n";
                $homme = readline("Est-ce que votre personnage est un homme ? ");
            }
            $homme = filter_var($homme, $filter = FILTER_VALIDATE_BOOL, $options = 0);
            echo "\n";
            $moustache = "x";
            while ($moustache!="true" and $moustache!="false"){
                echo "Répondez par true ou false.\n \n";
                $moustache = readline("Est-ce que votre personnage a une moustache ? ");
            }
            $moustache = filter_var($moustache, $filter = FILTER_VALIDATE_BOOL, $options = 0);
            echo "\n";
            if ($moustache==true and $homme==true){
                echo "Votre personnage est le Colonel Moutarde !\n \n";
                break;
            }
            $lunettes = "x";
            while ($lunettes!="true" and $lunettes!="false"){
                echo "Répondez par true ou false.\n \n";
                $lunettes = readline("Est-ce que votre personnage porte des lunettes ? ");
            }
            $lunettes = filter_var($lunettes, $filter = FILTER_VALIDATE_BOOL, $options = 0);
            echo "\n";
            if ($lunettes==false and $homme==false and $moustache==false){
                echo "Votre personnage est Melle Rose !\n \n";
                break;
            }
            $chapeau = "x";
            while ($chapeau!="true" and $chapeau!="false"){
                echo "Répondez par true ou false.\n \n";
                $chapeau = readline("Est-ce que votre personnage porte un chapeau ? ");
            }
            $chapeau = filter_var($chapeau, $filter = FILTER_VALIDATE_BOOL, $options = 0);
            echo "\n";
            if ($chapeau==true and $homme==true and $moustache==false and $lunettes==true){
                echo "Votre personnage est Professeur Violet !\n \n";
                break;
            }
            if ($homme==true and $moustache==false and $lunettes==true and $chapeau==false){
                echo "Votre personnage est Révérend Olive !\n \n";
                break;
            }
            if($homme==false and $moustache==false and $lunettes==true and $chapeau==false){
                echo "Votre personnage est Révérend Olive !\n \n";
                break;
            }
            else{
                echo "Votre personnage n'existe pas !\n \n";
                break;
            }
            break;
        case 4:
            
        case $numero=="q" or $numero=="Q":
            exit("Au revoir !");
        default:
            echo "Choix invalide !\n \n";
    }
}



