<?php
$sueldo = 0;
$aumento= 0;

for ($i = 0; $i <5; $i++){
    $aumento = 0;
    $sueldo = readline("ESCRIBA EL PRIMER SUELDO: ");
    if ($sueldo < 1000){
        $aumento = $sueldo * 0.15;
    } else if (($sueldo = 1000) && ($sueldo <25000)){
        $aumento = $sueldo * 0.10;
} else if ($sueldo > 25000){
    $aumento = $sueldo * 0.08;
}
echo "El sueldo es: " . $sueldo . "\n";
echo "Aumento: " . $aumento . "\n";
echo "Total a Pagar: " . ($sueldo + $aumento) . "\n"; 

}


?>