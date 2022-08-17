<?php
//Una tienda ofrece un descuento del 15% sobre el total de la compra y un cliente desea saber cuánto deberá 
//pagar finalmente por su compra.

$compra = 0;
$descuento = 0;

$compra = readline (" Ingrese el monto de su compra: "); 

$descuento = $compra * 0.15;

echo "Su compra es de : " . $compra . "\n";
echo "Su descuento es de : " . $descuento. "\n";
echo "Total a pagar con descuento aplicado: " . ($compra-$descuento);




?>