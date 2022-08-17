<?php
/* En una tienda de descuento, las personas que van a pagar el importe de su compra llegan a la caja y sacan una 
olita de color, que les dirá qué descuento tendrán sobre el total de su compra. Determinar la cantidad que 
pagará cada cliente desde que la tienda abre hasta que cierra. Se sabe que, si el color de la bolita es roja, el 
cliente tendrá un 40% de descuento; si es amarilla, un 25% y si es blanca no tendrá descuento.  */

$venta = 0;
$compra = 0;
$bola = 0;

while ($venta >= 0) {
    $compra = readline ("Digite el monto de su compra: ");
    echo "Bola Roja=1" . "\n" . "Bola Amarilla = 2" . "\n" . "Bola Blanca = 3" . "\n";
    $bola = readline ("Digite el color de bola de descuento: "). "\n";

    if ($bola=="1") {
    $descuento = $compra * 0.40;
    echo "total a pagar: " . $compra - $descuento . "\n";
} else if ($bola =="2"){
    $descuento = $compra * 0.25;
    echo "total a pagar: " . $compra - $descuento . "\n";
} else if ($bola =="3"){
    $descuento = $compra;
    echo "total a pagar: " . $compra . "\n";
}
}


?>