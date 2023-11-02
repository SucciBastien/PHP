<?php

require "fonctions.php";

// On demande à l'utilisateur quel chaine de caractère il souhaite analyser.
$chaine = readline("Entrez une chaîne de caractères : ") ;

// On renvoie les résultats de chaque analyse:

// strlen renvoie la longeur de la chaine de caractère mais compte les lettres avec accent comme 2 caractère au lieu d'un
echo "Nombre de caractères : " . strlen($chaine) . "\n";

// J'ai créer une fonction qui compte les voyelles, les consonnes, les chiffres et les caractères spéciaux grâce a des listes contenant chacun de ces eléments. ****A voir dans le fichier fonctions.php**** 
echo "Nombre de voyelles : " . Voyelles($chaine) . "\n";
echo "Nombre de consonnes : " . Consonnes($chaine) . "\n";
echo "Nombre de chiffres : " . Chiffres($chaine) . "\n";
// Le nombre de caractères alphabétique est simplement l'addition des voyelles et des consonnes.
echo "Nombre de caractères alphabétiques : " . Voyelles($chaine)+Consonnes($chaine) . "\n";
echo "Nombre de caractères spéciaux : " . CaracSpecial($chaine) . "\n";