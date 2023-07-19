<?php
// Punto 15 taller 10
// Generar la operación de dos números digitados por el usuario pudiendo el usuario sumar, restar, multiplicar o dividir

//_________________________________________________________
//Declaracion de funciones

function suma($num1, $num2) {
    return $num1 + $num2;
}
function resta($num1, $num2) {
    return $num1 - $num2;
}
function multiplicar($num1, $num2) {
    return $num1 * $num2;
}
function dividir($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Error: No es posible dividir entre cero.";
    }
}
//_________________________________________________________
//Declaracion de variables
$Selection=0;
$FirstNumber=0.0;
$SecondNumber=0.0;
//_________________________________________________________
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
switch ($Selection){
    case 1:
        $Total=suma($FirstNumber,$SecondNumber);
        echo "El resultado de la operación es " . $Total;
        break;
    case 2:
        $Total=resta($FirstNumber,$SecondNumber);
        echo "El resultado de la operación es " . $Total;
        break;
    case 3:
        $Total= multiplicar($FirstNumber,$SecondNumber);
        echo "El resultado de la operación es " . $Total;
        break;
    case 4:
        $Total= dividir ($FirstNumber,$SecondNumber);
        echo "El resultado de la operación es " . $Total;
        break;
}
?>