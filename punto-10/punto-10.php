<?php
//Punto 10 taller 10 
//Generar un programa que muestre los números pares del 1 al 100 (while)
//____________________________________________________
//Declaración de variables
$i=0;
//____________________________________________________
//Proceso
echo "Este programa entrega los números pares del 1 al 100: \n";

while ($i <= 100) {
    if ($i % 2 == 0){
        echo $i . "\n";
    }
    $i++;
}
?>