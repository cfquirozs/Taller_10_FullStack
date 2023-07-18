<?php
//Punto 1 taller 10 
//Mostrar en consola algunas constantes y variables cambiando el valor de las variables
//____________________________________________________
//Declaración de Constantes
const PI=3.1415;
const NAME="Cristian";
//Declaracion de Variables
$SecondName="Fabian";
$LastName="Quiroz";
//____________________________________________________
//Proceso
echo "Acá se muestran las constantes:\n".PI . "\n" . NAME."\n";
echo "Acá se muestran las variables originales:\n".$SecondName . "\n" . $LastName."\n";
$SecondName="Armando";
$LastName="Guerra";
echo "Acá se muestran las variables modificadas:\n".$SecondName . "\n" . $LastName;
?>

