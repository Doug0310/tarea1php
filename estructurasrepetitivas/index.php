<?php

$sueldo = 0;
$aumento = 0;

for ($i = 0; $i <3; $i++) {
    $aumento = 0;
    $sueldo = readline ("ESCRIBA EL PRIMER SUELDO: ");
    if ($sueldo < 800) {
        $aumento = $sueldo * 0.15;
    }
    echo "El sueldo es: " . $sueldo . "<br>";
    echo "Aumento: " . $aumento . "<br>";
    echo "Total a Pagar: " . ($sueldo + $aumento) . "<br>"; 
}
?>