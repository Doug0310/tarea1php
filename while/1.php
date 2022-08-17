<?php
//Obtener suma de los términos de la serie: 2, 5, 7, 10, 12, 15, 17, .... 1800.
$i=1;
$n=2;
$suma=0;

while($n <=1800){
    $n= readline ("escribir n: ");
   // echo ("%d ", $n);
    $suma= $suma + $n;

    if ($i % 2 == 0){
        $n= $n + 2;
    }
    else {
        $n = $n + 3;
    }
    $i++;
}
echo "La suma total es de: \n" . $suma;


?>