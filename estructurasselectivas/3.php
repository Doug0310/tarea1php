<?php
//En un hospital se ingresa un paciente cobrándole $25 diarios por hospitalización. Si el paciente es operado 
//deberá además cancelar $1000 por los gastos más 20% del pago total por honorarios del doctor. Dados n días 
//que estuvo el paciente, escriba el nombre, número de días que estuvo ingresado y el detalle de todos los pagos 
//hechos.

$nombre = "";
$dias = 0;
$operacion = 0;

$nombre = readline("Ingrese el nombre del paciente: ");
$dias = readline ("Ingrese el numero de dias: ");
$dias = $dias*25;


if ($operacion = 1){
    $operacion = readline ("presione 1 si necesita operacion, sino necesita presione 2: ");
    echo "El Paciente: " . $nombre ."\n" . ($dias + 1000) * 0.20 + $dias + 1000 . "\n";
} else if ($operacion = 2) {
    echo $nombre . ($dias*0.20) . "\n";

}

?>