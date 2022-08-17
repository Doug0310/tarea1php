<?php
/* Determinar la media de ventas de X empleados. Cada empleado hace N ventas, el proceso se debe repetir si el 
usuario lo requiere   */

$venta = 0;
$acum = 0;
$acumventa=0;

do {
    //$venta++;
$venta = readline ("Ingrese su nueva venta: ");
$acumventa = ($acumventa + $venta);

$acum++;



$pregunta = readline ("Desea Ingresa otra venta? si/no ");
$pregunta = strtoupper($pregunta);
} while ($pregunta=="SI");

echo "TOTAL DE VENTAS " . $acum . "\n";
echo "TOTAL EN DOLARES  " . $acumventa . "\n";
echo "La Media de Ventas es: " . ($acumventa/$acum);

?>