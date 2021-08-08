<?php
function concatenar ($txt1, $txt2){
    return $txt1 . ' ' . $txt2;

}
echo concatenar('Hola','Mundo');

function suma ($num1, $num2){
    return $num1 + $num2;
}

function resta ($num1, $num2){
    return $num1 - $num2;
}

function multiplicacion ($num1, $num2){
    return $num1 * $num2;
}

function division ($num1, $num2){
    return $num1 / $num2;
}

function deducible (int $salario, $tipo){
    $smlv = 1014980; 
    $porcentaje = 0;
    switch($tipo){
        case 'salud':
        $porcentaje = 0.04;
        break;
        case 'pension':
            $porcentaje = 0.04;
            break;
            case 'arl':
                $porcentaje = 0.005;
                break;
                case 'fps':
                    $porcentaje = 0.0;
                    if ($salario > 4059920) {
                        $porcentaje = 0.01;
                    }
                                        
                    break;
    }
    return $salario * $porcentaje;
}
/* echo suma(4,5 );
echo "<br>";
echo resta(4,5 );
echo "<br>";
echo multiplicacion(4,5 );
echo "<br>";
echo division(4,5 );
echo "<br>"; */