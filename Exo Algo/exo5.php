<?php

$question = readline("Entrez le numéro de question que vous voulez lancer : ");

if ($question==1){
    echo "Question 1 : \n \n";

    $nb = random_int(1,9);

    echo "Le nombre aléatoire est $nb.\n \n";

    for ($i=1; $i<=10; $i++)
        echo "$i x $nb =" . ($nb*$i) . "\n \n";
}
elseif ($question==2){
    echo "Question 2 : \n \n";

    $nb = readline("Entrez un nombre : ");

    echo "Les 5 nombres suivants sont : \n";
    for ($i=1; $i<=5;$i++)
        echo $nb-$i . "\n \n";

    echo "Les 5 nombres précédents sont : \n";
    for ($i=1; $i<=5;$i++)
        echo $nb+$i . "\n \n";
}
elseif ($question==3){
    echo "Question 3 : \n \n";

    $nb = readline("Entrez un nombre : ");
    $resultat = 1;

    for ($i=1; $i<=$nb; $i++)
        $resultat = $i * $resultat;

    echo "La factorielle de $nb est $resultat.\n \n";
}
elseif ($question==4){
    echo "Question 4 : \n \n";

    $nb = readline("Entrez un nombre : ");
    $nbPetit = $nb;
    $nbGrand = $nb;

    for ($i=1; $i<=4; $i++){
        $nb = readline("Entrez un nombre : ");
        if ($nb<=$nbPetit)
            $nbPetit = $nb;
        elseif ($nb>=$nbGrand)
            $nbGrand = $nb;
    }

    echo "Le plus grand nombre parmis ceux entrés est : $nbGrand.\n \n";
    echo "Le plus petit nombre parmis ceux entrés est : $nbPetit.\n \n"; 
}









