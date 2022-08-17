<?php
//Un obrero necesita calcular su salario semanal, el cual se obtiene de la siguiente manera:
//Si trabaja 40 horas o menos se le paga $4 por hora.
//Si trabaja más de 40 horas se le paga $4 por cada una de las primeras 40 horas y $6 por cada hora extra.
//Calcule el nuevo salario del obrero.
//declaracion de variables
$horastrabajadas = 0;
$total=0;
$horasex =0;

$horastrabajadas = readline ("Ingrese el número de horas trabajadas: ");


if($horastrabajadas <= 40){
    $total= $horastrabajadas*4;
   
    echo "Su sueldo es de $:" . $total;
}else{
    $horasex=$horastrabajadas-40;
    $total=($horasex*6)+(40*4);
    echo "Su sueldo es de $: " . $total;
}


?>