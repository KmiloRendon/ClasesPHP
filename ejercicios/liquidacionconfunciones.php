<?php
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
    <form action="liquidacionActions.php" method="POST">
        <label for="">Salario</label>
        <input type="number" name="salario">
        <label style="color: red"><?php echo $errorSalario ?></label>
        <br> <br>
        <label for="">Cédula</label>
        <input type="number" name="cedula">
        <?php
        if(isset($_GET['cedula']) && !$_GET['cedula']){
            echo '<label style="color: red"> Debe ingresar la cedula </label>';
        }
    ?>

        <br> <br>
        <input type="submit" value="Enviar">
        <br>
    </form>
    <br>
  <?php

  if ($salario && $cedula){
      ?>
  
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
            <td><?php echo $fps ?></td>

        </tr>
        
    </table>
    <?php
    }
    ?>
</body>

</html>