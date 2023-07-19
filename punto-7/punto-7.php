<?php
//Punto 7 taller 10 
//Generar la operación de dos números digitados por el usuario pudiendo el usuario sumar, restar, multiplicar o dividir

//____________________________________________________
//Declaración de variables
$FirstNumber=0;
$SecondNumber=0;
$Selection=0;
//____________________________________________________
//Proceso
echo "Seleccione el tipo de operacion que quiere realizar: 
1) Suma.
2) Resta.
3) Multiplicación.
4) División. \n";
fscanf(STDIN,"%d",$Selection);

echo "Por favor ingrese el primer número: ";
fscanf(STDIN,"%f",$FirstNumber);
echo "Por favor ingrese el segundo número: ";
fscanf(STDIN,"%f",$SecondNumber);
if ($Selection == 1) {
    $suma=$FirstNumber+$SecondNumber;
    echo "El resultado de la suma es: ". $suma;
}
elseif($Selection == 2){
    $multiplicacion=$FirstNumber-$SecondNumber;
    echo "El resultado de la resta es: ". $resta;
}
elseif($Selection == 3){
    $multiplicacion=$FirstNumber*$SecondNumber;
    echo "El resultado de la multiplicación es: ". $multiplicacion;
}
elseif($Selection == 4){
    if($SecondNumber==0){
        echo "La operacion no se puede realizar.";
    }
    $division=$FirstNumber/$SecondNumber;
    echo "El resultado de la división es: ". $division;
}

?>