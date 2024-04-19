
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto Recibido</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Recibe el texto enviado por GET
        if (isset($_GET['texto'])) {
            $texto = $_GET['texto'];
            echo "El texto recibido es: " . htmlspecialchars($texto, ENT_QUOTES, 'UTF-8') . "<br>";
        }
    }

    // Agrega un botón para volver al formulario anterior
    echo '<form method="POST" action="form01.php">
            <button type="submit">Volver al formulario anterior</button>
          </form>';
    ?>
</body>
</html>
