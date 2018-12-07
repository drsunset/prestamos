<?php
date_default_timezone_set("America/Santo_Domingo");
$pags = array(
'semana1'=>true,
'semana2'=>false,
'semana3'=>false
 );
 $array = array("hola","adios","continua");
$cantidad = count($pags);
foreach ($pags as $key => $key_value) {
  echo $key . "  " . $key_value;
}

echo $jason;

if (!is_dir('prestamos'))
{
mkdir('prestamos');
}
$json = json_encode($pags);

$date = date("d-m-Y");
$time = date("h-i-s");
echo $time;
file_put_contents('prestamos/'. $date ."_". $time . "_" ."{$_POST['archivo']}.json", $json);

// ------------------ EVALUANDO LA FUNCION QUE NOS METERÁ LOS VALORES DENTRO DEL ARRAY  ------------------------------------------------

// function meterArray(){
// $unArray = array(
// for ($i=0; $i < 10; $i++) {
//  array("semana$i"=>$_POST["semana$i"]; );
// };
// );
//     }
// ------------------------------------------------ FIN DE EVALUACION --------------------------------------------------------------------
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="pruebas.php" method="post">
       <input type="text" name="archivo" value="">
       <input type="checkbox" name="semana1" id="">
       <input type="checkbox" name="semana2" id="">
       <input type="checkbox" name="semana3" id="">
       <input type="checkbox" name="semana4" id="">
       <input type="checkbox" name="semana5" id="">
       <input type="checkbox" name="semana6" id="">
       <input type="checkbox" name="semana7" id="">
       <input type="checkbox" name="semana8" id="">
       <input type="checkbox" name="semana9" id="">
       <input type="checkbox" name="semana10" id="">
       <input type="submit" value="submit">

     </form>
     <h1>       <?php $echo = $_POST['semana1']; echo $echo; $on = "on" ?></h1>
     <br>
     <h1>       <?php echo str_count_word("hola amiwis jeje")?></h1>
   </body>
 </html>
