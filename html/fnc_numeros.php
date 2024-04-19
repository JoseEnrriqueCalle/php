
<?php 
$numeros=array();


$min_global = 1;
$max_global= 100;
$n_elementos_global = 100;


print_r($numeros);
function inicializar_array($min, $max, $numero_de_elementos) {
    for ($i = 0; $i < $numero_de_elementos; $i++) {
        $numero = rand($min, $max);
        echo "<p>$numero</p>";
    }
}

// Llamada al procedimiento
echo "Números generados:";
echo "<br>";
inicializar_array($min_global, $max_global, $n_elementos_global);







function inicializar_array2($n_elementos, $min, $max)
{
    global $numeros;
    for($i=0; $i<$n_elementos;$i++)
    {
        $numeros[]=rand($min,$max);
    }
}
inicializar_array2(10,5,50);

?>