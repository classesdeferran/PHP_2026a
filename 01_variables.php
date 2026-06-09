<?php

/* Soy un
comentario
multilinea
*/

// Soy un comentario de una linea
# Yo también soy un comentario de una linea

$variable1 = "Soy un string";
$variable1 = "He cambiado de valor";

$VARIABLE1 = "SOY UN TEXTO EN MAYÚSCULAS";

echo $variable1 . "<br>";
print($VARIABLE1);

$yo = "Ferran";
$saludo = "Hola" . " " . $yo;
echo "<br>" . $saludo;

$variable1 = 1;

$variable1 = True;
$variable1 = true;

const PI1 = 3.14;
define("PI2", 3.14);
// PI1 = 6.28; // Es un error porque PI1 es una constante

echo "<br>";
$num1 = 1;
$num2 = 2;
echo "Suma de dos números: " . ($num1 + $num2);

echo "<br>";

echo gettype($variable1);
echo "<br>";
echo gettype(PI1);
echo "<br>";

echo "============================";


echo "<br>";


echo "<br>";

// echo ("1" === 1);

$num = 10.5;
echo gettype($num);
echo "<br>";
$num = (string)$num;
echo gettype($num);
echo "<br>";
$num = (int)$num;
echo gettype($num);
echo "<br>";

echo 'El número es $num';
echo "<br>";
echo "El número es $num"; // Similar a `${num}`
echo "<br>";
