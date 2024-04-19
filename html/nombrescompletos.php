<?php

$nombres = array("Juan", "Maria", "Pedro", "Ana", "Luis", "Laura", "Carlos", "Sofia", "Miguel", "Elena");
$apellidos = array("Gomez", "Rodriguez", "Lopez", "Fernandez", "Martinez", "Perez", "Gonzales", "Sanchez", "Santiesteban", "Elena");

function nombres_aleatorios($n_elementos) {
    global $nombres, $apellidos;
    $num_nombres = count($nombres);
    $num_apellidos = count($apellidos);
    for ($i = 0; $i < $n_elementos; $i++) {
        $nombre_aleatorio = $nombres[rand(0, $num_nombres - 1)];
        $apellido_aleatorio = $apellidos[rand(0, $num_apellidos - 1)];
        echo $nombre_aleatorio . " " . $apellido_aleatorio . "<br>";
    }
}

function nombres_completos($n_elementos) {
    global $nombres, $apellidos;
   $nom_completos=array();
    for ($i = 0; $i < $n_elementos; $i++) {
        $nombre= $nombres[array_rand($nombres)];
        $apellido= $apellidos[array_rand($apellidos)];
        $nom_completos[]=$nombre. " ". $apellido;
        }
        return $nom_completos;
}
print_r(nombres_completos(15));
nombres_aleatorios(10);
?>


