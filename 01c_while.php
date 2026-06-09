<?php


$iterador = 10;
while ($iterador <= 5) {
    echo $iterador . "<br>";
    $iterador++;
}

echo "============================";
echo "<br>";
$iterador = 10;
do {
    echo $iterador . "<br>";
    $iterador++;
} while ($iterador <= 5);

echo "============================";
echo "<br>";

$tiempo = "lluvioso";

if ($tiempo == "soleado") {
    echo "Me voy de paseo";
} elseif ($tiempo == "lluvioso") {
    echo "A programar con PHP";
} else {
    echo "Me voy al cine";
}
