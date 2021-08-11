<?php
$x = 10;
$y = '10';

if ($x == $y) {
    echo 'Son Iguales';
}
if ($x === $y) {
    echo 'Son Identicos';
} else {
    echo 'No son identicos';
}
if ($x != $y) {
    echo 'Si son diferentes';
}
if ($x !== $y) {
    echo 'Si son diferentes de identicos';
}
if ($x > $y) {
    echo "$x es mayor que $y";
} else if ($x < $y) {
    echo "$x es menor que $y";
} else if ($x == $y) {
    echo "$x es igual que $y";
} else {
    echo "Ninguna de las anteriores";
}

if (($x == $y) && ($x > 0)) {
    echo "$x es igual a $y y $x es mayor que 0";
}
if (($x == $y) || ($x === $y)) {
    echo "$x es igual a $y o $x es identico que $y";
}

switch ($x) {
    case '10';
        echo 'Es un 10';
        break;

    case '20';
        echo 'Es un 20';
        break;

    default;
        echo 'Nada';
        break;
}
