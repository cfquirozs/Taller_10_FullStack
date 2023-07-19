<?php
//Punto 6 taller 10 
//Dado el nombre y la edad del usuario, generar un mensaje que incluya el nombre del usuario e indique si es mayor de edad o no.
//____________________________________________________
//Declaración de variables
$Name="";
$Age=0;
//____________________________________________________
//Proceso
echo "Por favor ingrese su nombre: \n";
fscanf(STDIN,"%s",$Name);
echo "Por favor ingrese su edad: \n";
fscanf(STDIN,"%d",$Age);
if ($Age >= 18) {
  echo "Felicitaciones ". $Name . ", eres mayor de edad, puedes continuar.";
}
else{
    echo "Lo siento ". $Name . ", eres menor  de edad, no puedes continuar.";
}
?>