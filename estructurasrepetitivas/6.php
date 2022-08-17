<?php
/* Una compañía de seguros tiene contratados a 30 vendedores. Cada uno hace tres ventas a la semana. Su política 
de pagos es que un vendedor recibe un sueldo base y 10% extra por comisiones de sus ventas. El gerente de su 
compañía desea saber cuánto dinero obtendrá en la semana cada vendedor por concepto de comisiones por las 
tres ventas realizadas y cuánto tomando en cuenta su sueldo base y sus comisiones.  */
$vendedor = 0;
$sueldo = 0;
$ventas = 3;





for ($i=1; $i<=30; $i++){
    $vendedor = readline ("Ingrese el nombre del vendedor: ");
    $sueldo = readline ("Ingrese el sueldo: ");
    $comision = $sueldo*0.10;
    
    echo " Sueldo de Vendedor es: " . ($comision*$ventas) + $sueldo . "\n";
}
?>