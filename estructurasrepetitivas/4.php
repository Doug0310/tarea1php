<?php
/* Dados como datos 300 números enteros, obtener la suma de los números impares y el promedio de los números 
pares. */
$numero = 0;
$par = 0;
$impar = 0;



for ($i=1; $i<=300;  $i++){
    $numero = readline ("Escriba el numero: ");
    if (($numero % 2) == 0){
        $par = $par + $i/2;
        echo "Es numero par y su promedio es: " . $par . "\n";
    } else {
        $impar=$impar+$i;

        echo "Es numero impar y la suma es: " . $impar . "\n";
    }
}



?>