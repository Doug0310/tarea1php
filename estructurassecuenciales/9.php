<?php
//Un alumno desea saber cuál será su calificación final en la materia de lógica de programación. Dicha calificación 
//se compone de los siguientes porcentajes:
//55% del promedio de sus tres calificaciones parciales.
//30% de la calificación del examen final.
//15% de la calificación de un trabajo final.
$parcial1 = 0;
$parcial2 = 0;
$parcial3 = 0;
$examenfinal = 0;
$trabajofinal = 0;

$parcial1 = readline ("Ingrese la nota de parcial 1: ");
$parcial1 = $parcial1*0.1833;
$parcial2 = readline ("Ingrese la nota de parcial 2: ");
$parcial2 = $parcial2*0.1833;
$parcial3 = readline ("Ingrese la nota de parcial 3: ");
$parcial3 = $parcial3*0.1834;
$examenfinal = readline ("Ingrese la nota de examen final: ");
$examenfinal = $examenfinal*0.3;
$trabajofinal = readline ("Ingrese la nota de trabajo final: ");
$trabajofinal = $trabajofinal*0.15;

echo "Su promedio final es: " . (($parcial1+$parcial2+$parcial3)+$examenfinal+$trabajofinal);


?>