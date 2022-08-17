<?php
//Se pide crear un programa que calcule el porcentaje de alumnos y alumnas de un salón de clase
$alumnos = 0;
$alumnas = 0;
$total = 0;

$alumnas = readline ("Ingrese el numero de alumnas: ");
$alumnos = readline ("Ingrese el numero de alumnos: ");
$total = $alumnas+$alumnos;

echo "El porcentaje de alumnas es: " . ($alumnas*100)/$total . "%" . "\n";
echo "El porcentaje de alumnos es: " . ($alumnos*100)/$total . "%";




?>