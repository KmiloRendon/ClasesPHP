<?php
$salario = $_GET['salario'] ?? '';
$cedula = $_GET['cedula'] ?? '';
$salud = $_GET['salud'] ?? '';
$pension = $_GET['pension'] ?? '';
$arl = $_GET['arl'] ?? '';
$fp = $_GET['fp'] ?? '';

if ($salario) {

    $salud = $salario * 0.04;
    $pension = $salario * 0.04;
    $arl = $salario * 0.005;

    if ($salario > 4059920) {
        $fp = $salario * 0.01;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquidacion</title>
</head>
<body>
    <form action="">
        <label for="">Salario</label>
        <input type="number" name="salario">
        <br> <br>
        <label for="">Cédula</label>
        <input type="number" name="cedula">
        <br> <br>
        <input type="submit" value="Enviar">
        <br>
    </form>
    <br>
    <table border="1">
        <tr>
            <th>Cédula</th>
            <th>Salario</th>
            <th>Salud (4%)</th>
            <th>Pension (4%)</th>
            <th>ARL (0.5%)</th>
            <th>Fondo de pensiones (1% > 4 SMLV)</th>
        </tr>

        <tr>
            <td><?php echo $cedula ?></td>
            <td><?php echo $salario ?></td>
            <td><?php echo $salud ?></td>
            <td><?php echo $pension ?></td>
            <td><?php echo $arl ?></td>
            <td><?php echo $fp ?></td>

        </tr>

    </table>
</body>

</html>