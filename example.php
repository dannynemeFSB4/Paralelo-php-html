<?php

echo "<h1>Importante PHP: </h1><br>";
echo "<h2>Variables (Varian su valor) inician con el simbolo $ </h2><br>";
echo "<h2>Finalizar sentencias de ejecución con el simbolo ; </h2><br>";
echo "Hola mundo PHP....!!!";

//Constantes
const miConstante = "Información";
echo "<br>";
echo miConstante;

//Variables
$miVariable = 1000;
//ó
$miVariable = 300;
echo "<br>";
echo $miVariable;

//Condicionales

$abc = true;
if ($abc) {
    echo "<br>";
    echo $abc;
}

$abc = false;
if ($abc) {
    echo "<br>";
    echo "True = ".$abc;
}else{
    echo "<br>";
    echo "False = ".$abc;
}

$abc = true;
if ($abc == true) {
    echo "<br>";
    echo "== ".$abc;
}

for ($i=0; $i < 10; $i++) { 
    echo "<br>";
    echo $i;
}

$a = 100;
while ($a <= 110) {
    echo "<br>";
    echo $a;
    $a++;
}

$b = 1000;

do {
    echo "<br>";
    echo $b;
    $b++;
} while ($b <= 1010);

$cajero = "Opción 1";
$cajero = "Otra cosa";
switch ($cajero) {
    case "Opción 1":
        echo "<br>";
        echo $cajero;
        break;
    
    default:
        echo "<br>";
        echo $cajero;
        break;
}

function miFuncion(){
    echo "<br>";
    echo "Ejecutando miFuncion()!!";
}
miFuncion();


?>