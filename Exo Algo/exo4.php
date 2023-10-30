<?php

$question = readline("Entrez le numéro de question que vous voulez lancer : ");

if ($question==1){
    echo "Question 1 :\n \n";

    $nb = 10;
    while ($nb<1 or $nb>3)
        $nb = readline("Entrez un nombre entre 1 et 3 : ");
}
elseif ($question==2){
    echo "Question 2 :\n \n";

    $nb = 100;
    while ($nb<10 or $nb>20){
        $nb = readline("Entrez un nombre entre 10 et 20 : ");
        if ($nb<10)
            echo "Plus Grand !\n \n";
        elseif ($nb>20)
            echo "Plus Petit !\n \n";
    }    
}
elseif ($question==3){
    echo "Question 3 :\n \n";

    $nb = readline("Entrez un nombre : ");
    $i = 0;

    while ($i<10){
        $i++;
        echo ($nb + $i) . "\n \n";
    }    
}
elseif ($question==4){
    echo "Question 4 :\n \n";

    $nb1 = readline("Entrez un premier nombre : ");
    $nb2 = readline("Entrez un second nombre : ");
    $reste = 1;
    $PGCD = min($nb1, $nb2);

    while ($reste!=0){
        $reste = fmod($nb1, $PGCD) + fmod($nb2, $PGCD);
        $PGCD--;
    }
    echo "Le PGCD de ces deux chiffres est : " . ($PGCD +1) . "\n \n";    
}
elseif ($question==5){
    echo "Question 5 :\n \n";

    $nb1 = readline("Entrez un premier nombre : ");
    $nb2 = readline("Entrez un second nombre : ");
    $PPCM = 1;
    $PGCD = min($nb1, $nb2);
    $reste = 1;

    while ($reste!=0){
        $reste = fmod($nb1, $PGCD) + fmod($nb2, $PGCD);
        $PGCD--;
    }

    $PGCD++;
    echo "$PGCD\n \n";

    $PPCM = ($nb1 * $nb2)/$PGCD;
    echo "Le PPCM de ces deux nombre est : $PPCM.\n \n";    
}











