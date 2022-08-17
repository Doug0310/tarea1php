<?php
//En un hospital existen tres áreas: Pediatría, Oncología y Traumatología. El presupuesto anual del hospital se
//reparte conforme a la siguiente tabla:

$pediatria = 0;
$oncologia = 0;
$traumatologia = 0;

$pediatria = readline ("Ingrese el presupuerto para pediatria: ");
$pediatria = $pediatria*0.003;
$oncologia = readline ("Ingrese el presupuerto para oncologia: ");
$oncologia = $oncologia*0.004;
$traumatologia = readline ("Ingrese el presupuerto para traumatologia: ");
$traumatologia = $traumatologia*0.003;

echo "El presupuesto de pediatria es de: " . $pediatria . "%" . "\n";
echo "El presupuesto de oncologia es de: " . $oncologia . "%" . "\n";
echo "El presupuesto de traumatologia es de: " . $traumatologia . "%";



?>