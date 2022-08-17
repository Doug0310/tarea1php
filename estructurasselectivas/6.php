<?php
/*En una tienda de descuento se efectúa una promoción en la cual se hace un descuento sobre el valor de la 
//compra total según el color de la bolita que el cliente saque al pagar en caja. Si la bolita es blanca no se le hará 
//descuento alguno, si es verde se le hará un 10% de descuento, si es amarilla un 25%, si es azul un 50% y si es roja 
//un 100%. Determinar la cantidad final que un cliente deberá pagar por su compra. Se sabe que sólo hay bolitas 
//de los colores mencionados*/

$compra = 0;
$descuento = 0;
$bola = 0;
/*$bolablanca = 0;
$bolaverde = 1;
$bolaamarilla = 2;
$bolaazul = 3;
$bolaroja = 4;*/

$compra = readline ("Digite el monto de su compra: ");
$bola = readline ("Digite el numero de bola escogida: ");

if ($bola == 0){
    echo "No tiene descuento. Pagará " . $compra;
} 
else if ($bola == 1){
    $descuento = $compra * 0.10;
    echo "tiene un descuento del 10%: " ."En total pagará " . ($compra - $descuento);
}
else if ($bola == 2){
    $descuento = $compra * 0.25;
    echo "tiene un descuento del 25%: " . "En total pagará " . ($compra - $descuento);
}
else if ($bola == 3){
    $descuento = $compra * 0.50;
    echo "tiene un descuento del 50%: " . "En total pagará " . ($compra - $descuento);
}
else if ($bola == 4){
    
    echo "tiene un descuento del 100%: " ;
}

?>