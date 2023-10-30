<?php

$question = readline("Entrez le numéro de question que vous voulez lancer : ");

if ($question==1){
    echo "Question 1 :\n";

    $nb = (float)readline("Saisissez un nombre à mettre au carré : ");

    echo "Votre nombre au carré est " . pow($nb, 2) . "\n";
}
elseif ($question==2){
    echo "Question 2 :\n";

    $prenom = readline("Saisissez votre prénom : ");

    echo "Bonjour " . $prenom . "\n";
}
elseif ($question==3){
    echo "Question 3 :\n";

    $prixUniHT = readline("Saisissez le prix HT de l'article : ");

    $nbProduit = readline("Saisissez le nombre d'article : ");

    $TVA = readline("Saisissez la valeur de TVA en % : ");

    $prixTotalTTC = round($prixUniHT * $nbProduit * (1 + $TVA / 100), $precision = 2, $mode = PHP_ROUND_HALF_UP);

    echo "Votre prix total TTC est de  " . $prixTotalTTC . "€" . "\n";    
}





