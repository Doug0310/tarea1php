<?php
//En un supermercado se hace una promoción mediante la cual el cliente obtiene un descuento dependiendo de 
//un número que escoge al azar. Si el número escogido es menor a 74 el descuento es del 15% sobre el total de la 
//compra y si es mayor o igual a 74 es de 20%. Obtener cuánto dinero se le descuenta y el pago final.

$compra = 0;

$compra = readline ("Ingrese monto de la compra: ");
$numero = readline ("Ingrese el numero al Azar: ");

if ($numero <74 ){
    $descuento = $compra * 0.15;
    echo "total a pagar: " . $compra - $descuento;

}
else if ($numero >=74){
    $descuento = $compra * 0.20;
    echo "total a pagar: " . $compra - $descuento;
}


?>