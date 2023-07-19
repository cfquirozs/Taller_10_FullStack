<?php
//Punto 9 taller 10 
//Dado un número digitado por el usuario generar la tabla de multiplicar de del 0 hasta el 30;(While)
//____________________________________________________
//Declaración de variables
$Number=0;
$i=0;
//____________________________________________________
//Proceso
echo "Este programa entrega la tabla de un número desde 0 hasta el 30 
por favor ingresa un número: \n";
fscanf(STDIN,"%d",$Number);

echo "La tabla del número ". $Number . " es: \n";

while ($i <= 30) {
    $mult=$Number*$i;
    echo $Number . " X " . $i . " = " . $mult. "\n"; 
    $i++;
}
?>