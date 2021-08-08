<?php
$limit = 20;

for ($i = 0; $i <= $limit; $i++) {
    echo 'El conteo va en' . $i . '<br>';
}

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo 'Este numero es par: ' . $i . '<br>';
    } else {
        echo 'Este numero es impar: ' . $i . '<br>';
    }
}

$a = 2;
while ($a <= $limit) {
    $a = $a * 2;
    echo "a es $a <br>";
}
$inc = 0;
while ($inc <= 100) {
    $num = "El numero $inc es";

    if ($inc % 2 === 0) {
        echo "$num par";
    } else {
        echo "$num impar";
    }
    echo '<br>';
    $inc++;
}

$motos = [
    'Vstrom 650xt',
    'Akt 125',
    'CBR 250R',
    'R1M',
];

foreach ($motos as $key => $value) {
    echo "Lllave: $key y valor: $value <br>";
}

$autos = [
    'Mazda' => [
        'CX5',
        '323',
        'CX7',
        '2',
    ],
    'BMW' => [
        'Serie 2',
        'Z4',
        'M1',
    ]
];
foreach ($autos as $marca => $modelos){
    echo " En la Marca $marca tenemos los modelos: ";

    foreach ($modelos as $key => $modelo){
        echo "$modelo, ";
    }
    echo '<br>';
}