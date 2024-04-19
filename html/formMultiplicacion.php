<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = ". $numero*$i. "<br>";
            
        }
        echo '<a href="formMultiplicacion.php"> retornar formulario </a>';
    } else {
        echo '<form method="POST" action="">
            <label for="numero">Introduce un número:</label>
            <input type="number" id="numero" name="numero" required>
            <button type="submit">Mostrar Tabla de Multiplicar</button>
        </form>';
    }
    ?>
</body>
</html>