<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos Aleatorios</title>
</head>
<body>
    <?php
    function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['elementos']) && is_numeric($_POST['elementos']) && $_POST['elementos'] > 0) {
            $elementos = $_POST['elementos'];
            $primosEncontrados = 0;
            $numerosGenerados = array();
            echo "<p>Números primos generados aleatoriamente:</p>";
            while ($primosEncontrados < $elementos) {
                $numero = rand(1, 100);
                if (esPrimo($numero)) {
                    echo $numero . " ";
                    $primosEncontrados++;
                }
                $numerosGenerados[] = $numero; 
            }
            echo "<p>Lista completa de números generados:</p>";
            foreach ($numerosGenerados as $num) {
                echo $num . " ";
            }

            echo '<br><a href="numerosprimos.php">Retornar al formulario</a>';
        } else {
            echo '<p>Por favor, ingresa un número válido de elementos.</p>';
        }
    } 
    else 
    {
        echo '<form method="POST" action="">
            <label for="elementos">Ingresa el número de elementos:</label>
            <input type="number" id="elementos" name="elementos" required>
            <button type="submit">Generar numeros primos</button>
        </form>';
    }
    ?>
</body>
</html>
