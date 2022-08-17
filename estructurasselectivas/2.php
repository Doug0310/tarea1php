<?php
//Dado el sueldo de un empleado, encontrar el nuevo sueldo si 
//obtiene un aumento del 10% si su sueldo es 
//inferior a $600, en caso contrario no tendrá aumento.
$sueldo = 0;
$aumento = 0;

$sueldo = readline ("Digite el sueldo del trabajador: ");
$aumento = $sueldo*0.10;

if ($sueldo < 600){
    echo "usted tiene un aumento del 10% ";
    echo "sueldo total es de: " . $sueldo + $aumento;
}

else {
    echo "no tiene aumento " . "" . $sueldo;
}

?>