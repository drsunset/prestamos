<?php

if($_POST){
$cantidad = $_POST['cantidad'];
$montoint = $_POST['interes'] / 100;
$meses = $_POST['tiempoTotal'];
$semanas = $meses * 4 ;
$quincenas = $meses * 2;
$interes = $montoint * $meses;
$cuotas = $montoTotal / $semanas;
$tiempoPagoSemanal;
}
  function contarMeses($meses)
  {
        while($a < $meses)
        {

            $a += 1;
            echo "<li>Mes $a :". date('Y-m-d',  strtotime("+ $a month "))."</li>";
        }
  }

  function contarQuincenas($quincenas)
  {
      while($a < $quincenas)
        {
            $i += 15;
            $a += 1;
            echo "<li>Quincena $a :". date('Y-m-d',  strtotime("+ $i days "))."</li>";
        }
  }

  function contar($semanas)
  {

      while ($a < $semanas)
      {
            $a += 1;
            echo "<li>Semana $a :". date('Y-m-d',  strtotime("+ $a week"));
            echo "</li>". "<input type=\"checkbox\" class=\"checkbox\"  />";
      }

  }

  function ejecutar($semanas, $quincenas, $meses)
  {

    if(isset($_POST['seleccion'])){
      $seleccion = $_POST['seleccion'];
      switch($seleccion){
        case '1':
        contar($semanas);
        $tiempoPagoSemanal = $semanas;
        break;
        case '2':
        contarQuincenas($quincenas);
        $tiempoPagoSemanal = $quincenas;
        break;
        case '3':
        contarMeses($meses);
        $tiempoPagoSemanal = $meses;
        break;
        default:
        contar($semanas);
        $tiempoPagoSemanal = $semanas;
        break;
      }
    }
  }

  function prestamo($cantidad, $montoint, $meses, $semanas, $tiempoPagoSemanal, $interes, $quincenas)
  {
    $seleccion = $_POST['seleccion'];
    switch($seleccion){
      case '1':
      $tiempoPagoSemanal = $semanas;
      break;
      case '2':
      $tiempoPagoSemanal = $quincenas;
      break;
      case '3':
      $tiempoPagoSemanal = $meses;
      break;
      default:
      $tiempoPagoSemanal = $semanas;
      break;
    }


        error_reporting(E_ERROR | E_PARSE);
        $mostrarInteres = $cantidad * $interes;
        $montoTotal = $cantidad * $interes + $cantidad;
        $cuotas = $montoTotal / $tiempoPagoSemanal;
        echo " Monto Total: $montoTotal RD$ <br><br />";
        echo " Meses: $meses <br><br />";
        echo "  Cantidad de Cuotas:  $tiempoPagoSemanal <br><br />";
        // echo " Cuotas mes:  $meses <br><br />";
        // echo " Cuotas quincenas:  $quincenas <br><br />";
        echo "Intereses Totales:  $mostrarInteres <br><br />" ;
        echo "Porcentaje de Interes:  " . ($montoint * 100) . "% <br><br />";
        echo "Pago Por Cuota: " . ceil($cuotas)." RD$" ;
  }





require 'index.view.php';
?>
 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>

       <style media="screen">
            *{
              font-family: sans-serif;
            }
           .semana{

             margin-bottom:25px ;
             float: left;
            }
          .contarQuincenas{
               float: right;
            }

       </style>
 </head>

 <body>
       <div class="semanas">
               <ol>
                 <?php contar($semanas) ?>
               </ol>

               <ol>
                 <?php contarQuincenas($quincenas) ?>
               </ol>

               <ol>
                 <?php contarMeses($meses) ?>
               </ol>
       </div>
 </body>
 </html> -->
