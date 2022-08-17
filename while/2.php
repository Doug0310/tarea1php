<?php
/*En un supermercado una señora pone en su carrito los artículos que va tomando de los estantes. La señora 
quiere asegurarse de que el cajero le cobre bien lo que ella ha comprado, por lo que cada vez que toma un 
artículo anota su precio junto con la cantidad de artículos iguales que ha tomado y determina cuánto dinero 
gastará en ese artículo; a esto le suma lo que irá gastando en los demás artículos, hasta que decide que ya tomó 
todo lo que necesitaba. Ayúdale a esta señora a obtener el total de sus compras.   */
$precio = 0;
$cantidad = 0;

$total=0;
$totalporproducto=0;
$cont = 0;
$respuesta = "SI";
echo "\n\nBIENVENID@S! \n\n";


while($respuesta=="SI"){
  $cont++;
  echo "--------------------------------\n";
  echo "---------ARTÍCULO N° " . $cont . "-----------\n";
  
  
  $precio = readline("PRECIO:$ \n");
  $cantidad = readline("CANTIDAD: \n");
  //Procesos
$totalporproducto = ($precio*$cantidad);
  $total +=$totalporproducto; 

  echo "SUB-TOTAL: $ " . number_format($totalporproducto ,2) ."\n\n";
  
  $respuesta = readline("DESEA CONTINUAR COMPRANDO. SI/NO: \n\n");
  $respuesta =strtoupper($respuesta);
  
}
  echo "\n--------------------------------\n";
echo "\nTOTAL A PAGAR: $ " . number_format($total,2) . "\n\n";
echo "GRACIAS POR VISITARNOS!";





?>