<?php
require_once('funciones.php');

$num1 = $_GET['n1'] ?? 0; //Get se utiliza para recibir datos por url con el comando (?variable=valor)y lo ?? se utilizan para dejar un valor por defecto
$num2 = $_GET['n2'] ?? 0;
$opc = $_GET['opc'] ?? 0;
function calculadora(int $n1, int $n2, string $opc)
{
    $res = '';
    switch ($opc) {
        case '+';
            $res = suma($n1, $n2);
            break;
        case '-';
            $res = resta($n1, $n2);
            break;
        case '*';
            $res = multiplicacion($n1, $n2);
            break;
        case '/';
            $res = division($n1, $n2);
            break;
    }
    return "$n1 $opc $n2 = $res";
}
echo calculadora($num1, $num2, $opc);
