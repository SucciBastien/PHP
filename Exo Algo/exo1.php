<?php

echo "Question 1 :" . "\n";

$A1 = 1;
$B1 = $A1 + 3;
$A1 = 3;

echo "La valeur de A est : " . $A1 . "\n";
echo "La valeur de B est : " . $B1 . "\n";

echo "Question 2 :" . "\n";

$A2 = 5;
$B2 = 3;
$C2 = $A2 + $B2;
$A2 = 2;
$C2 = $B2 - $A2;

echo "La valeur de A est : " . $A2 . "\n";
echo "La valeur de B est : " . $B2 . "\n";
echo "La valeur de C est : " . $C2 . "\n";


echo "Question 3 :" . "\n";

$A3 = 3;
$B3 = 10;
$C3 = $A3 + $B3;
$B3 = $A3 + $B3;
$A3 = $C3;

echo "La valeur de A est : " . $A3 . "\n";
echo "La valeur de B est : " . $B3 . "\n";
echo "La valeur de C est : " . $C3 . "\n";

echo "Question 4 :" . "\n";

$X = 54;
$Y = 102;

echo "La valeur de X est : " . $X . "\n";
echo "La valeur de Y est : " . $Y . "\n";

$x = $X;
$X = $Y;
$Y = $x;

echo "Les valeurs de X et Y s'inverse :" . "\n";
echo "La valeur de X est : " . $X . "\n";
echo "La valeur de Y est : " . $Y . "\n";

echo "Question 5 :" . "\n";

$A5 = 1;
$B5 = 2;
$C5 = 3;

echo "La valeur de A est : " . $A5 . "\n";
echo "La valeur de B est : " . $B5 . "\n";
echo "La valeur de C est : " . $C5 . "\n";

$a5 = $A5;
$A5 = $C5;
$C5 = $B5;
$B5 = $a5;

echo "Les valeurs de A, B et C s'interchangent :" . "\n";
echo "La valeur de A est : " . $A5 . "\n";
echo "La valeur de B est : " . $B5 . "\n";
echo "La valeur de C est : " . $C5 . "\n";

echo "Question 6 :" . "\n";

$A6 = "423";
$B6 = "12";
$C6 = $A6 . $B6;

echo "La valeur de A est : " . $A6 . "\n";
echo "La valeur de B est : " . $B6 . "\n";
echo "La valeur de C est : " . $C6 . "\n";
