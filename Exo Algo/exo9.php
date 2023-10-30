<?php

$question = readline("Entrez le numéro de question que vous voulez voir : ");

if ($question==1){

    $chomage = array("Autriche"=>4.9, "Allemagne"=>9.3, "Danemark"=>4.8, "Espagne"=>9.4, "France"=>9.7);

    echo "Le chomage pour chaque pays : \n";

    foreach ($chomage as $pays => $value){
        echo "Le taux de chomage du pays " . $pays . " est de " . $value . "%\n \n";
    }

    echo "Le chomage de chaque pays en dessous de 5% : \n";

    foreach ($chomage as $pays => $value){
        if ($value<=5){
            echo "Le taux de chomage de l'" . $pays . " est de " . $value . "%\n \n";
        }
    }

    

    $min = $tab[0][0];
    $paysMin = "";

    foreach ($chomage as $pays => $value){
        if ($value<=$min){
            $min = $value;
            $paysMin = $pays;
        }
    }

    echo "Le pays avec le plus petit taux de chommage est le pays " . $paysMin . "avec un taux de " . $min . "%\n \n";
}
elseif ($question==2){

}
elseif ($question==3){
    
}
elseif ($question==4){
    
}