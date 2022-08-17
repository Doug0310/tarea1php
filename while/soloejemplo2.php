<?php
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