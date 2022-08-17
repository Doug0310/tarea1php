<?php

//Escribir un programa que convierta un valor dado en grados Fahrenheit a grados Celsius. Recordar que la 
//fórmula para la conversión es: C = (F-32) *5/9

$gradosFahr = 0;
$gradosCels = 0;

$gradosFahr = readline ("Digite los grados Fahrenheit: ");

$gradosCels = ($gradosFahr - 32) * 5 /9;

echo "los grados celsius son: " . $gradosCels;

?>