<?php
//Un vendedor recibe un sueldo base más un 10% extra por comisión de sus ventas, el vendedor desea saber 
//cuánto dinero obtendrá por concepto de comisiones por las tres ventas que realiza en el mes y el total que 
//recibirá en el mes tomando en cuenta su sueldo base y comisiones.

$sueldobase = 0;
$comision = 0;
$ventas = 0;

$sueldobase = readline ("Ingrese el sueldo base del vendedor: ");
$ventas = readline ("Ingrese la cantidad de ventas: ");
$comision = ($sueldobase*0.10);
//$ventas = ($ventas * $comision);

echo "Su sueldo es de: " . $sueldobase . "\n";
echo "su comision por ventas es de: " . $ventas*$comision . "\n";
echo "Total a Pagar: " . (($ventas*$comision) + $sueldobase). "\n"; 

?>
