<?php

echo "Question 1 : \n";
echo " \n";

$nb = random_int(1,9);

echo "Le nombre aléatoire est $nb.\n";
echo " \n";

for ($i=1; $i<=10; $i++)
    echo "$i x $nb =" . ($nb*$i) . "\n";

echo " \n";
echo "Question 2 : \n";
echo " \n";


$nb = readline("Entrez un nombre : ");

echo " \n";
echo "Les 5 nombres suivants sont : \n";
for ($i=1; $i<=5;$i++)
    echo ($nb-$i . "\n");
    echo " \n";

echo " \n";
echo "Les 5 nombres précédents sont : \n";
for ($i=1; $i<=5;$i++)
    echo ($nb+$i . "\n");
    echo " \n";


echo "Question 3 : \n";
echo " \n";


$nb = readline("Entrez un nombre : ");
$resultat = 1;

for ($i=1; $i<=$nb; $i++)
    $resultat = $i * $resultat;

echo " \n";
echo "La factorielle de $nb est de $resultat.\n";
echo " \n";

echo "Question 4 : \n";
echo " \n";

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

echo " \n";
echo "Le plus grand nombre parmis ceux entrés est : $nbGrand.\n";
echo " \n";
echo "Le plus petit nombre parmis ceux entrés est : $nbPetit.\n";
echo " \n";