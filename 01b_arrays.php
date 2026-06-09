<?php


$array_indexado = ['1', 2, true, [4, 5, 6]];
var_dump($array_indexado);
echo "<br>";
print_r($array_indexado);
echo "<br>";

echo $array_indexado[3][1]; // Imprime el número 5
echo "<br>";
$array_asociativo = ["nombre" => "Pepe", "edad" => 30];
var_dump($array_asociativo);   

echo "<br>";
echo $array_asociativo['nombre']; // Imprime "Pepe"
echo "<br>";
$array_asociativo['nombre'] = "Maria";
echo $array_asociativo['nombre']; // Imprime "Maria"
echo "<br>";

$array_asociativo['edad'] = 25;
echo "<br>";
var_dump($array_asociativo);
echo "<br>";


foreach ($array_asociativo as $item) {
    echo $item . "<br>";
}   

$arrayColores = ['rojo', 'verde', "azul"];
for ($i = 0; $i < count($arrayColores); $i++) {
    echo $arrayColores[$i] . "<br>";
}


echo "============================";


// MÉTODOS DE ARRAYS
print_r($arrayColores);
echo "<br>";
// array_push() es una función que añade un elemento al final de un array
array_push($arrayColores, "blanco");
print_r($arrayColores);
// También se puede añadir un elemento al final de un array con la sintaxis $array[] = "valor";
$arrayColores[] = "amarillo";
echo "<br>";
// array_unshift() es una función que añade un elemento al principio de un array
array_unshift($arrayColores, "negro");
print_r($arrayColores);
echo "<br>";
// array_pop() es una función que elimina el último elemento de un array
array_pop($arrayColores);
print_r($arrayColores);
echo "<br>";
// array_shift() es una función que elimina el primer elemento de un array
array_shift($arrayColores);
print_r($arrayColores);
echo "<br>";
// unset() es una función que elimina un elemento de un array por su índice o clave
unset($arrayColores[1]);
print_r($arrayColores);
echo "<br>";
// delete() no es una función de PHP, es un error escribir delete() para eliminar un elemento de un array. 
// La función correcta es unset(). Por lo tanto, la línea de código delete($arrayColores[2]); 
// es incorrecta y debería ser reemplazada por unset($arrayColores[2]);
// delete($arrayColores[2]);


$datosAlumno = ["nombre" => "Jordi", "edad" => 30, "poblacion" => "BCN"];
unset($datosAlumno['poblacion']);
$datosAlumno['ciudad'] = "Cornellà";
$datosAlumno['nombre'] = "Juan";
print_r($datosAlumno);

$nombre = $datosAlumno['nombre'];
echo "Nombre: $nombre <br>";
echo 'Nombre: ' . $nombre . '<br>';

// extract() es una función que convierte las claves de un array asociativo en variables
extract($datosAlumno);
echo "Nombre: $nombre <br>"; // Imprime "Nombre: Juan"
echo "Edad: $edad <br>"; // Imprime 30

// list() es una función que asigna los valores de un array a variables
list($poblacion) = $datosAlumno;
echo "Población: $poblacion <br>"; // Imprime "Población: BCN"

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
