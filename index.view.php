<?php

$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$montoint = $_POST['interes'] / 100;
$tiempoPago = $_POST['tiempo'];
$interes = $montoint * $meses;

function prestamo1($cantidad, $interes, $tiempoPago){
  $meses = $_POST['tiempoTotal'];
  $tiempo = $_POST['tiempo'];
  $montoTotal = $cantidad * $interes;
  echo $montoTotal;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>

<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">
<link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calcular Prestamo</title>

</head>

<body>
<div class="container">
  <!--formulario para enviar la informacion del prestamo-->
  <form class="" action="<?php echo $_SERVER['$PHP_SELF'];?>" method="post">
    <input class="checkbox" type="checkbox" name="" id="">
    <!-- <input type="tel" pattern="[0-9]{3}[0-9]{7}[0-9]{1}" name="cedula" value="" id="cedula" placeholder="cedula" required><br>
    <input type="text" name="nombre"   value="" id="nombre" placeholder="nombre" required><br>
    <input type="text" name="apellido" value="" id="apellido" placeholder="apellido" required><br>
    <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="telefono" value="" id="telefono" placeholder="telefono" required><br>
    <input type="email" name="correo" id="correo" placeholder="correo" required><br> -->
    <input type="number" name="cantidad" id="cantidad" placeholder="Monto a prestar" min="2000" max="50000" required><br>
    <input type="number" name="interes" id="interes" placeholder="interes" min="2" max="20" required><br>
    <select name="seleccion">
      <option value="1">Semanal</option>
      <option value="2">Quincenal</option>
      <option value="3">Mensual</option>
    </select>
    <input type="number" name="tiempoTotal" placeholder="tiempo total en meses">

    <button type="submit" onclick="">check output</button><br>

    <input type="text" name="" value="<?php echo $_POST['cedula']; ?>" readonly>
    <input type="text" name="" value="<?php echo $_POST['nombre'] ?>" readonly>
    <input type="text" name="" value="<?php echo $_POST['apellido'] ?>" readonly>
    <input type="text" name="" value="<?php echo $_POST['telefono'] ?>" readonly>
    <input type="text" name="" value="<?php echo $_POST['correo'] ?>" readonly>

  </form>
  <div><?php prestamo($cantidad, $montoint, $meses, $semanas, $tiempoPagoSemanal, $interes, $quincenas); ?></div>

  <ol>
    <?php ejecutar($semanas, $quincenas, $meses) ?>
  </ol>


</body>
</div>
</html>
