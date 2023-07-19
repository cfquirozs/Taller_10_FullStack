<?php
//Punto 2 taller 10 
//Generar la suma de dos números dentro de una constante y una variable y luego cambiar el valor de la variables para sumarlas de nuevo 
//____________________________________________________
//Declaración de variables
const SUMA=2+7;
$FirstNumber=4;
$Suma=$FirstNumber + SUMA;
$SecondNumber=3.5;
//____________________________________________________
//Proceso
echo "Primera suma: \n" . $Suma . "\n";
$SecondNumber=3.5;
$Suma=SUMA + $SecondNumber;
echo "Segunda suma: \n" . $Suma. "\n";
?>