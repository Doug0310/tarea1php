<?php

//para n empleados, realice una aplicaion que calcule el salario neto a pagar los
//empleados de una empresa. dicha empresa realiza los siguientes descuentos.
// isss (9%)
//afp (7%)
//renta(10%)
//la aplicacion debe pedir el salario base del empleado, mostrar el salario neto y los descuentos respectivos.


$numempleado = 0;
$salario = 0;
$salarioMenosdescuentos = 0;

//$numempleado = readline ("ESCRIBA LA CANTIDAD DE EMPLEADOS A CONSULTAR: ");

for ($numempleado=1; $numempleado <=5; $numempleado++){

    $salario = readline ("Ingrese el salario a consultar: ");
    $salarioMenosdescuentos = (($salario*0.09)+($salario*0.07)+($salario*0.10));


echo "El descuento por ISSS es: " . ($salario * 0.09) . "\n";
echo "El descuento por AFP es: " . ($salario * 0.07). "\n";
echo "El descuento por RENTA es: " . ($salario * 0.10). "\n";
echo "El total a pagar es: " . ($salario - $salarioMenosdescuentos). "\n";

}


?>