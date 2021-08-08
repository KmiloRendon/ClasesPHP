<?php
require_once ('../funciones.php');
$salario = $_REQUEST['salario'] ?? '';
$salario = intval($salario);
$cedula = $_REQUEST['cedula'] ?? '';
$salud = $pension = $arl = $fps = 0;
/* $porcentajeSalud = 0.04;
$porcentajePension = 0.04;
$porcentajeArl = 0.005;
$porcentajeFp = 0.01;
$smlv = 1014980; */
$errorSalario = '';


if ($salario && $cedula) {
    $salud = deducible($salario, 'salud');
    $pension = deducible($salario, 'pension');
    $arl = deducible($salario, 'arl');
    $fps = deducible($salario, 'fps');
}

if(isset($_REQUEST['salario']) && !$_REQUEST['salario']){
    $errorSalario = 'Debe ingresar un salario';
}
if(isset($_REQUEST['salario']) && !$_REQUEST['salario'] && !$salario){
    $errorSalario = 'Debe ingresar un numero mayor a 0';
}
$apathOrigin = explode ('?',$_SERVER['HTTP_REFERER']);
$pathOrigin = $apathOrigin [0];
var_dump($pathOrigin);

header("Location: $pathOrigin?salud=$salud");
?>