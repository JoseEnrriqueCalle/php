<?php
// Definir un array con las rutas de las imágenes
$imagenes = array("img/cara.svg", "img/escudo.svg");

// Generar un número aleatorio entre 0 y 1 para seleccionar la imagen
$randomIndex = rand(0, 1);

// Obtener la ruta de la imagen seleccionada
$imagenMostrada = $imagenes[$randomIndex];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador Random</title>
</head>
<body>
    <h1>Resultado:</h1>
    <img src="<?php echo $imagenMostrada; ?>" alt="Cara o Escudo">
    <p>Actualiza la página para ver otro resultado.</p>
</body>
</html>
