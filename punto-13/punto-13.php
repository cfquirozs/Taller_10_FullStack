<?php
//Punto 13 taller 10 
//Dado un arreglo numérico de 5 posiciones generar la suma de los numeros (for)
//____________________________________________________
//Declaración de variables
$Array=[];
$suma=0;
//____________________________________________________
//Proceso
for($i=0;$i<5;$i++){
    echo "Ingresa el número de la posicion [". $i+1 . "] \n" ;
    fscanf(STDIN,"%d",$Array[$i]);
}
echo "El arreglo es [ \n";
for($i=0;$i<5;$i++){
    echo $Array[$i]. "\n";
    $suma=$suma+$Array[$i];
}

echo "] \nLa suma de los numeros del arreglo es: ". $suma;
?>