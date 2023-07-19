<?php
//Punto 3 taller 10 
//Generar la suma de dos números ingresados por el usuario
//____________________________________________________
//Declaración de variables
$FirstNumber=0;
$SecondNumber=0;
//____________________________________________________
//Proceso
echo "Ingrese el primer numero a sumar: \n";
fscanf(STDIN, "%f", $FirstNumber);
echo "Segunda suma: \n";
fscanf(STDIN, "%f", $SecondNumber);
$Suma=$FirstNumber + $SecondNumber;
echo "La suma de los numeros es: " . $Suma;
?>