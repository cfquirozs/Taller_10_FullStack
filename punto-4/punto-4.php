<?php
//Punto 4 taller 10 
//Mostrar en consola el nombre y apellido ingresado por el usuario
//____________________________________________________
//Declaración de variables
$FirstName="";
$LastName="";
//____________________________________________________
//Proceso
echo "Ingrese su nombre: \n";
fscanf(STDIN, "%s", $FirstName);
echo "Ingrese su apellido: \n";
fscanf(STDIN, "%s", $LastName);
echo "El nombre ingresado es ". $FirstName ." ". $LastName;
?>