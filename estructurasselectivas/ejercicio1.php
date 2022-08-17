<?php
//Dado como dato el sueldo de un trabajador, aplique un aumento del 
// 15% si su sueldo es mayor o igual a $550. 
//Imprimir en ese caso el nuevo sueldo del trabajador.
$sueldo = 0;
$aumento = 0;

$sueldo = readline ("Digite el sueldo del trabajador: ");
$aumento = $sueldo*0.15;

if ($sueldo >= 550){
    echo "usted tiene un aumento del 15% ";
    echo "sueldo total es de: " . $sueldo + $aumento;
}

else {
    echo "no tiene aumento " . "" . $sueldo;
    
}




?>