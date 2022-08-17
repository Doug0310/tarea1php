<?php
//Dado el sueldo de 20 trabajadores, considere un aumento del 15% a cada uno de ellos, si su sueldo es inferior a 
//$800. Imprima el sueldo con el aumento incorporado.
$nombre = "";
$sueldo = 0;
$aumento = 0;



for ($i = 1; $i <3; $i++){
    $nombre = readline ("Ingrese el nombre del empleado: ");
$sueldo = readline ("Ingrese el sueldo del empleado: ");
$aumento = $sueldo*0.15;

    if ($sueldo<800){
echo "Su aumento es de: " . $aumento . "\n";
echo "Su pago total es de: " . ($sueldo+$aumento) . "\n";

    }
    else {
        echo " No tiene aumento: " . $sueldo;
    }
}

?>