<?php

// echo "Question 1 : \n \n";

// $dimension = readline("Entrez le nombre d'éléments du tableau à trier : ");
// $tab = [];
// $cons = 0;

// $tab[0] = readline("Entrez la valeur de l'élément du tableau : ");

// for ($i=1; $i<$dimension; $i++){
//     $tab[$i] = readline("Entrez la valeur de l'élément du tableau : ");
//     if ($tab[$i]<=$tab[$i-1]){
//         $cons++;
//     }
// }
// if ($cons!=0){
//     echo "Les valeurs de ce tableau ne sont pas consécutives.\n \n";
// }
// else{
//     echo "Les valeurs de ce tableau sont consécutives.\n \n";
// }

// echo "Question 2 : \n \n";

// Méthode de tri par sélection

// $dimension = readline("Entrez le nombre d'éléments du tableau à trier : ");
// $tab = [];
// $tempPos = 0;
// $tempVal = 0;

// for ($i=0; $i<$dimension; $i++){
//     $tab[$i] = readline("Entrez la valeur de l'élément du tableau : ");
// }
// for ($i=0; $i<$dimension-1; $i++){
//     $tempPos = $i;
//     for ($j=$i+1; $j<$dimension; $j++){
//         if ($tab[$j]>$tab[$tempPos]){
//             $tempPos = $j;
//         }
//     }
//     $tempVal = $tab[$tempPos];
//     $tab[$tempPos] = $tab[$i];
//     $tab[$i] = $tempVal;
//     echo implode(", ", $tab) . "\n \n";
// }

// echo "Votre tableau trié dans l'ordre décroisant : \n";
// echo implode(", ", $tab) . "\n \n";

// Méthode de tri à bulles

// $dimension = readline("Entrez le nombre d'éléments du tableau à trier : ");
// $tab = [];
// $tempPos = 0;
// $tempVal = 0;

// for ($i=0; $i<$dimension; $i++){
//     $tab[$i] = readline("Entrez la valeur de l'élément du tableau : ");
// }
// for ($i=1; $i<$dimension; $i++){
//     for ($j=0; $j<$dimension-$i; $j++){
//         if ($tab[$j]<$tab[$j+1]){
//             $tempVal = $tab[$j];
//             $tab[$j] = $tab[$j+1];
//             $tab[$j+1] =$tempVal;
//         }
//     }
// }

// echo "Votre tableau trié dans l'ordre décroisant : \n";
// echo implode(", ", $tab) . "\n \n";

// echo "Question 3 : \n \n";

// $dimension = readline("Entrez le nombre d'éléments du tableau à trier : ");
// $tab = [];
// $tempVal = 0;

// for ($i=0; $i<$dimension; $i++){
//     $tab[$i] = readline("Entrez la valeur de l'élément du tableau : ");
// }

// for ($i=0; $i<round((count($tab)/2) ,$precision = 0, $mode = PHP_ROUND_HALF_DOWN); $i++){
//     $tempVal = $tab[$i];
//     $tab[$i] = $tab[count($tab)-1-$i];
//     $tab[count($tab)-1-$i] = $tempVal;
// }

// echo "Votre tableau inversé : \n";
// echo implode(", ", $tab) . "\n \n";

echo "Question 4 : \n \n";

$dimension = readline("Entrez le nombre d'éléments du tableau à trier : ");
$tab = [];
$pos = 0;
$present = 0;

for ($i=0; $i<$dimension; $i++){
    $tab[$i] = (string)readline("Entrez le mot à mettre dans le tableau : ");
}

while (true){
    $motCherche = readline("Entrez le mot que vous recherchez : ");
    for ($i=0; $i<$dimension; $i++){
        if ($tab[$i]==$motCherche){
            echo "Le mot que vous recherchez est présent est de trouve à la ligne " . $i+1 . ".\n \n"; 
            $present++;
        }
    }
    if ($present!=0){
        break;
    }
    else{
        echo "Le mot que vous recherchez n'est pas présent.\n \n";
    }
}

echo "Question 5 : \n \n";



echo "Question 6 : \n \n";