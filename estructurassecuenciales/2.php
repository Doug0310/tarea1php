<?php

//Calcular el perímetro y área de un rectángulo dada su base y su altura.

$base = 0;
$altura = 0;

$base = readline ("Ingrese la base del rectangulo: ");

$altura = readline ("Ingrese la altura del rectangulo: ");

echo "El Area del Rectangulo es: " . $base * $altura . "\n";
echo "El Perimetro del Rectangulo es: " . ($base + $altura) + ($base + $altura);

?>

