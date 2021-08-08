<?php


$miVariable = 'Esta es mi primera variable'; // con el signo peso se designa la variables
$miNumero = 10;
$miDecimal = 50.4;
$miBoolean= true;
$miNull = null;
$miVacio = '';

echo $miVariable . '<br>'; // echo se usa para imprimir


var_dump($miVariable); // aca permite conocer caracteristicas de las variables
echo '<br>';
var_dump($miDecimal);
echo '<br>';
var_dump($miNumero);
echo '<br>';
var_dump($miBoolean);
echo '<br>';
var_dump($miNull);
echo '<br>';
var_dump($miVacio);
echo '<br>';

echo $miDecimal + $miNumero; // Suma
echo '<br>';
echo $miDecimal - $miNumero; // Resta
echo '<br>';
echo $miDecimal * $miNumero; // mult
echo '<br>';
echo $miDecimal / $miNumero; // Div
echo '<br>';