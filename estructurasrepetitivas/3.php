<?php
/* Leer 100 números enteros y contar cuántos de ellos son positivos, negativos o nulos.
     */
for ($i = 0; $i < 5; $i++){
    $numero = readline ("Digite el numero: " . $i + 1) ;
    if ($numero == 0) {
        $contadornulo++;
    } else if ($numero < 0) {
        $contadorNeg++;
    } else {
        $contadorPos++;
    }
}

echo "\n";
echo "_________________________________\n";
echo "Numeros Nulos: " . $contadornulo . "\n";
echo "Numeros Positivos: " . $contadorPos . "\n";
echo "Numeros Negativos: " . $contadorNeg . "\n";

?>