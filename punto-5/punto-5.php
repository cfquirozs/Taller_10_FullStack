<?php
//Punto 4 taller 10 
//Dado el tipo de afiliación y el número de personas digitados por el usuario generar el valor de las entradas a la bolera teniendo en cuenta que si el tipo de afiliación  es ‘A’ o ‘B’ tendrá un descuento del  30% del total y el valor es de $25.000 por persona.
//____________________________________________________
//Declaración de variables
$Affiliation=0;
$Tickets=0;
const TICKETPRICE=25000;
$FinalPrice=0;
//____________________________________________________
//Proceso
echo "Seleccione su tipo de afiliación: 
1) Afiliación tipo A
2) Afiliación tipo B
3) No afiliad@ \n";
fscanf(STDIN,"%d",$Affiliation);
echo "Ingrese el numero de boletos que desea: \n";
fscanf(STDIN,"%d",$Tickets);

if ($Affiliation==1 || $Affiliation==2) {
  $FinalPrice=0.7*TICKETPRICE*$Tickets;
  echo "Sus boletos cuestan: " . " $" . $FinalPrice;
}
else{
    $FinalPrice=TICKETPRICE*$Tickets;
    echo "Sus boletos cuestan: " . " $" . $FinalPrice;
}
?>
