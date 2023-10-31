<?php

$question = readline("Entrez le numéro de question que vous voulez voir : ");


if ($question==1){

    $chomage = array("Autriche"=>4.9, "Allemagne"=>9.3, "Danemark"=>4.8, "Espagne"=>9.4, "France"=>9.7);

    echo "Entrez le numéro de question que vous souchiatez voir :\n \n1) Afficher tous les pays et le taux de chômage correspondant.\n \n2) Afficher les pays dont le taux de chômage est inférieur à 5%.\n \n3) Afficher le nom du pays ayant le taux de chômage le plus faible.\n \nOu entrez Q pour quitter.\n \n";
    $question = readline();
    echo "\n";

    switch ($question){
        case 1:
            echo "Le taux de chomage pour chaque pays : \n \n";

            foreach ($chomage as $pays => $value){
                echo "Le taux de chomage du pays " . $pays . " est de " . $value . "%\n \n";
            }
            break;
        case 2:
            echo "Le chomage de chaque pays en dessous de 5% : \n \n";

            foreach ($chomage as $pays => $value){
                if ($value<=5){
                    echo "Le taux de chomage du pays " . $pays . " est de " . $value . "%\n \n";
                }
            }    
            break;
        case 3:
            $min = $chomage["Autriche"];
            $paysMin = "";

            foreach ($chomage as $pays => $value){
                if ($value<=$min){
                    $min = $value;
                    $paysMin = $pays;
                }
            }

            echo "Le pays avec le plus petit taux de chommage est le pays " . $paysMin . ".\n \n";
            break;
        case $question=="Q" or $question=="q":
            exit("A bientôt");
        default:
            echo "Choix invalide.";
    }
    

    

    

    
}
elseif ($question==2){

    $tabNotes = array( "boucher"=>16, "bourdette"=>13, "declerck"=>2, "porto"=>17, "ordon"=>11 );
    $total = 0;

    foreach ($tabNotes as $nom => $note){
        $total += $note;
        echo "La note de $nom est de $note. \n \n";
    }

    echo "La moyenne de classe est de " . ($total / count($tabNotes)) . ".\n \n";

}
elseif ($question==3){
    
    $tabNotes = array("prenot" => array (2,10,14), "perthuis" => array (10,18,12), "hale"=> array(18,19,17), "garcia"=>array(4,8,11), "cervantes"=>array(12,14,16), "parker"=>array(14,12,19,), "sheppard"=>array(15,9,13));
    $totalEl = 0;
    $moyEl = 0;
    $totalCl = 0;

    echo "Entrez le numéro de la question que vous souhaitez voir : \n \n1) Afficher le nom et les notes de chaque élève.\n \n2) Afficher les notes et la moyenne de chaque élève.\n \n3) Afficher les notes et la moyenne d'un élève dont le nom sera saisi au clavier.\n \nOu entrez Q pour quitter le menu.\n \n";
    $question = readline();
    

    if ($question==1){

        foreach ($tabNotes as $nom => $notes){
            echo "Les notes de $nom sont " . implode(", ", $notes) . ".\n \n";
        }

    }
    elseif ($question==2){

        foreach ($tabNotes as $nom => $notes){
            $totalEl = 0;
            foreach ($notes as $note){
                $totalEl += $note;
            }
            echo "Les notes de $nom sont de " . implode(", ", $notes) . " et sa moyenne est de " . round(($totalEl/count($notes)), $precision=1) . ".\n \n";
        }

    }
    elseif ($question==3){

        $nomChoisi = readline("Entrez le nom de l'élève pour avoir sa moyenne : ");
        $nomExiste = true;
        
        foreach ($tabNotes as $nom => $notes){
            if ($nomChoisi==$nom){
                foreach ($notes as $note){
                    $totalEl += $note;
                }
                echo "Les notes de $nom sont " . implode(", ", $notes) . " et sa moyenne est de " . round(($totalEl/count($notes)), $precison=1) . ".\n \n";
                $nomExiste = true;
                break;
            }
            else{
                $nomExiste = false;
            }
        }

        if ($nomExiste==false)
            echo "Cet élève n'existe pas.";
    }
    elseif ($question=="Q" or $question=="q"){
        exit("A bientôt !");
    }
    
}
