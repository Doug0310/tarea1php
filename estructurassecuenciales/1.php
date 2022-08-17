<?php
$nombre = "";
$apellido = "";
$dui = 0;
$edad = 0;
$telefono = 0;
$direccion = "";

$nombre = readline ("Digite su nombre: ");
$apellido = readline ("Digite su apellido: ");
$dui = readline ("Digite su DUI: ");
$edad = readline ("Digite su edad: ");
$telefono = readline ("Digite su # de telefono: ");
$direccion = readline ("Digite su direccion: ");


echo "su nombre es: " . $nombre . "\n" . $apellido . "\n";
echo "su DUI es: " . $dui . "\n";
echo "su edad es: " . $edad . "\n";
echo "su # de telefono es: " . $telefono . "\n";
echo "su direccion es: " . $direccion . "\n";

?>