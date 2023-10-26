<?php

echo "Question 1 :" . "\n";

$A = 1;
$B = $A + 3;
$A = 3;

echo "La valeur de A est : " . $A . "\n";
echo "La valeur de B est : " . $B . "\n";

echo "Question 2 :" . "\n";

$A = 5;
$B = 3;
$C = $A + $B;
$A = 2;
$C = $B - $A;

echo "La valeur de A est : " . $A . "\n";
echo "La valeur de B est : " . $B . "\n";
echo "La valeur de C est : " . $C . "\n";


echo "Question 3 :" . "\n";

$A = 3;
$B = 10;
$C = $A + $B;
$B = $A + $B;
$A = $C;

echo "La valeur de A est : " . $A . "\n";
echo "La valeur de B est : " . $B . "\n";
echo "La valeur de C est : " . $C . "\n";

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

$A = 1;
$B = 2;
$C = 3;

echo "La valeur de A est : " . $A . "\n";
echo "La valeur de B est : " . $B . "\n";
echo "La valeur de C est : " . $C . "\n";

$a = $A;
$A = $C;
$C = $B;
$B = $a;

echo "Les valeurs de A, B et C s'interchangent :" . "\n";
echo "La valeur de A est : " . $A . "\n";
echo "La valeur de B est : " . $B . "\n";
echo "La valeur de C est : " . $C . "\n";

echo "Question 6 :" . "\n";

$A = "423";
$B = "12";
$C = $A . $B;

echo "La valeur de A est : " . $A . "\n";
echo "La valeur de B est : " . $B . "\n";
echo "La valeur de C est : " . $C . "\n";
