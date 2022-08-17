<?php
/* Elaborar un sistema de facturación que pida el nombre del vendedor, nombre del cliente, fecha de factura, 
número de factura y suma de ventas realizadas. A la suma de ventas realizadas, se les hará un descuento según 
la siguiente tabla:
   */


$vendedor = "";
$vendedor = readline ("Digite el nombre del vendedor: ");
$cliente = "";
$cliente = readline ("Digite el nombre del cliente: ");
$fecha = 0;
$fecha = readline ("Digite la fecha de su compra: ");
$factura = 0;
$factura = readline ("Digite el numero de factura: ");
$venta = 0;
$venta = readline ("Digite el monto de la venta: ");
$descuento = 0;
$pago = 0;
echo "Nombre del Vendedor: " . $vendedor . "\n";
echo "Nombre del Cliente: " . $cliente . "\n";
echo "Fecha de compra: " . $fecha . "\n";
echo "Numero de factura: " . $factura . "\n";
echo "su venta es de: " . $venta . "\n";


if (($venta > 0) && ($venta < 100)) {
    echo "No tiene descuento ";
    }
    
    else if (($venta >100) && ($venta <=500)) {
        $descuento = $venta * 0.15;
        $pago = $venta - $descuento;
        echo "Tiene descuento de 15%: " . $descuento . "\n" . "total a pagar " . $pago;
    }

    else if (($venta >500) && ($venta <=1000)) {
        $descuento = $venta * 0.20;
        $pago = $venta - $descuento;
        echo "Tiene descuento de 20%: " . $descuento . "\n" . "total a pagar " . $pago;
    }

    else if ($venta > 1000) {
        $descuento = $venta * 0.30;
        $pago = $venta - $descuento;
        echo "Tiene descuento de 30%: " . $descuento . "\n" . "total a pagar " . $pago;
    }





?>





