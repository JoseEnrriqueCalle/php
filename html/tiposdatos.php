<?php
$nombre = "Pepe";
$edad = 30;
$nota=7.5;

//imprimir mostrando ejemplo
//varibale nombre=(string4)
var_dump($nombre);
var_dump($nota);
var_dump($edad);


$output_nombre = "string(" . strlen($nombre) . ") " . $nombre;
$output_edad = "int " . $edad;
$output_nota = "float " . $nota;

echo "muestras ejemplos concatenar \n";
echo $output_nombre , ",";
echo $output_edad , ",";
echo $output_nota , "\n";


ob_start();
var_dump($nombre);
$tiponombre=ob_get_clean();
echo"variable de nombres es :$tiponombre";
ob_start();
var_dump($nota);
$tiponota=ob_get_clean();
echo"variable de nombres es :$tiponota";
ob_start();
var_dump($edad);
$tipoedad=ob_get_clean();
echo"variable de nombres es :$tipoedad";







?>