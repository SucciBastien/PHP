<?php

$question = readline("Entrez le numéro de question que vous voulez lancer : ");

if ($question==1){
    echo "Question 1 : " . "\n";

    $nb = readline("Entrez un nombre : ");

    if ($nb<0) 
        echo "Votre nombre est négatif." . "\n";
    else 
        echo "Votre nombre est positif." . "\n";
}
elseif ($question==2){
    echo "Question 2 : " . "\n";

    $nb1 = readline("Entrez un premier nombre : ");
    $nb2 = readline("Entrez un second nombre : ");

    if ($nb1>0 xor $nb2<0)
        echo "Le produit de vos nombres est positif." . "\n";
    else
        echo "Le produit de vos nombres est négatif." . "\n";
}
elseif ($question==3){
    echo "Question 3 : " . "\n";

    $nb = readline("Entrez un nombre : ");

    if ($nb<0) 
        echo "Votre nombre est négatif." . "\n";
    else if ($nb>0)
            echo "Votre nombre est positif." . "\n";
        else 
            echo "Votre nombre est positif et négatif." . "\n";    
}
elseif ($question==4){
    echo "Question 4 : " . "\n";

    $nb1 = readline("Entrez un premier nombre : ");
    $nb2 = readline("Entrez un second nombre : ");

    if (($nb1>0 xor $nb2<0) and $nb1!=0 and $nb2!=0)
        echo "Le produit de vos nombres est positif." . "\n";
    elseif ($nb1==0 or $nb2==0)
            echo "Le produit de vos nombres est positif et négatif." . "\n";
        else 
            echo "Le produit de vos nombres est négatif." . "\n";    
}
elseif ($question==5){
    echo "Question 5 : " . "\n";

    $age = readline("Entrez l'age de votre enfant : ");

    switch ($age){
        case $age>11: echo "Votre enfant est un Cadet." . "\n"; break;
        case $age>9: echo "Votre enfant est un Minime." . "\n"; break;
        case $age>7: echo "Votre enfant est un Pupille." . "\n"; break;
        case $age>5: echo "Votre enfant est un Poussin." . "\n"; break;
    }    
}
elseif ($question==6){
    echo "Question 6 : " . "\n";

    $heure = readline("Entrez l'Heure sans les minutes : ");
    $minute = readline("Entrez les minutes : ");

    if ($minute<59)
        echo "Il sera " . $heure . "h" . ($minute + 1) . "\n";
    else if (($minute=59) and ($heure<23))
            echo "Il sera " . ($heure + 1) . "h00" . "\n";
        else
            echo "Il sera 00h00" . "\n";    
}
elseif ($question==7){
    echo "Question 7 : " . "\n";

    $heure = readline("Entrez l'Heure sans les minutes : ");
    $minute = readline("Entrez les minutes : ");
    $seconde = readline("Entrez les secondes : ");

    if ($seconde<59)
        echo "Il sera " . $heure . "h" . $minute . " et " . ($seconde + 1) . "s" . "\n";
    else if (($seconde=59) and ($minute<59))
            echo "Il sera " . $heure . "h" . ($minute + 1) . " et 00s" . "\n";
        else if (($seconde=59) and ($minute=59) and ($heure<23))
                echo "Il sera " . ($heure + 1) . "h00 et 00s" . "\n";
            else 
                echo "Il sera 00h00 et 00s" . "\n";    
}
elseif ($question==8){
    echo "Question 8 : " . "\n";

    $nbPhotocopie = readline("Entrez le nombre de photocopies : ");

    if ($nbPhotocopie<11 and $nbPhotocopie>0)
        echo "Le prix sera de " . ($nbPhotocopie * 0.10) . ("€") . "\n";
    else if ($nbPhotocopie<31 and $nbPhotocopie>0)
            echo "Le prix sera de " . (1 + ($nbPhotocopie - 10) * 0.09) . ("€") . "\n";
        else if ($nbPhotocopie>31)
                echo "Le prix sera de " . (1.90 + ($nbPhotocopie - 30) * 0.08) . ("€") . "\n";
            else   
                echo "Nombre de photocopies invalide !" . "\n";    
}
elseif ($question==9){
    echo "Question 9 : " . "\n";

    $sexe = readline("Entrez H si vous êtes un Homme ou F si vous êtes une Femme : ");
    $age = readline("Entrez votre age : ");

    if (($sexe=="H") and ($age>20))
        echo "Vous êtes imposable." . "\n";
    else if ($sexe="F" and $age>17 and $age<36)
            echo "Vous êtes imposable." . "\n";
        else if ($sexe="H" or $sexe="F")
            echo "Vous n'êtes pas imposable." . "\n";
}
elseif ($question==10){
    echo "Question 10 : " . "\n";

    $jour = readline("Entrez le jour : ");
    $mois = readline("Entrez le mois : ");
    $annee = readline("Entrez l'année' : ");

    if ($jour==29 and $mois==2)
        echo "C'est une année bissextile." . "\n";
    else if ((fmod($annee, 4)==0) or (fmod($annee, 400)==0) and (fmod($annee, 100)!=0))
            echo "C'est une année bissextile" . "\n";
        else
            echo "Ce n'est pas une année bissextile" . "\n";    
}
?>