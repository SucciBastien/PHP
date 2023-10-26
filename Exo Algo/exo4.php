<?php

echo "Question 1 :\n";

$nb = 10;
while ($nb<1 or $nb>3)
    $nb = readline("Entrez un nombre entre 1 et 3 : ");

echo "Question 2 :\n";

$nb = 100;
while ($nb<10 or $nb>20){
    $nb = readline("Entrez un nombre entre 10 et 20 : ");
    if ($nb<10)
        echo "Plus Grand !\n";
    elseif ($nb>20)
        echo "Plus Petit !\n";
}    

echo "Question 3 :\n";

$nb = readline("Entrez un nombre : ");
$i = 0;

while ($i<10){
    $i++;
    echo ($nb + $i) . "\n";
}

echo "Question 4 :\n";

$nb1 = readline("Entrez un premier nombre : ");
$nb2 = readline("Entrez un second nombre : ");
$reste = 1;
$PGCD = min($nb1, $nb2);

while ($reste!=0){
    $reste = fmod($nb1, $PGCD) + fmod($nb2, $PGCD);
    $PGCD--;
}
echo "Le PGCD de ces deux chiffres est : " . ($PGCD +1) . "\n";

echo "Question 5 :\n";

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
echo $PGCD . "\n";

$PPCM = ($nb1 * $nb2)/$PGCD . "\n";
echo "Le PPCM de ces deux nombre est : $PPCM.\n";