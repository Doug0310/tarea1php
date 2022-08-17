<?php
/* Calcule el aumento de sueldos para 50 empleados de una empresa, bajo el siguiente criterio:
a. Si el sueldo es menor a $1000: aumento 12%
b. Si el sueldo está comprendido entre $1000 y $25000: aumento 10%
c. Si el sueldo es mayor a $25000: aumento 8%
d. Imprima el nuevo sueldo del trabajador y el monto total de la nómina considerando el aumento.  */
$empleado = "";
$sueldo = 0;
$aumento = 0;



for ($i = 1; $i < 8;){
    
$sueldo = readline ("Ingrese el sueldo del empleado: ");


    if ($sueldo<1000){
        $aumento = $sueldo*0.12;
echo "Su aumento es de: " . $aumento . "\n";
echo "Su pago total es de: " . ($sueldo+$aumento) . "\n";


    }
    else if (($sueldo>=1000) && ($sueldo <2500)) {
        $aumento = $sueldo*0.10;
echo "Su aumento es de: " . $aumento . "\n";
echo "Su pago total es de: " . ($sueldo+$aumento) . "\n";

    }
    else if ($sueldo>=2500){
        $aumento = $sueldo*0.08;
echo "Su aumento es de: " . $aumento . "\n";
echo "Su pago total es de: " . ($sueldo+$aumento) . "\n";

    }
}


?>