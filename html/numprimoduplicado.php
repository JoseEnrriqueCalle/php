<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos Aleatorios</title>
</head>
<body>
    <?php
    function generarNumerosUnicos($cantidad) {
        $numerosGenerados = array();
        while (count($numerosGenerados) < $cantidad) {
            $numero = rand(1, 1000);
            if (!in_array($numero, $numerosGenerados)) {
                $numerosGenerados[] = $numero;
            }
        }
        return $numerosGenerados;
    }

   
    function esPrimo($numero) {
        if ($numero<=1)return false;
        if ($numero<=3)return true;
        for ($i=4; $i<=$numero;$i++)
        {
            if ($numero%$i==0)return false;
        }
        return true;
    }

    
    function imprimirPrimos($numeros) {
        echo "<p>Números primos generados aleatoriamente:</p>";
        foreach ($numeros as $numero) {
            if (esPrimo($numero)) {
                echo $numero . " ";
            }
        }
    }

   
    function imprimirListaCompleta($numeros) {
        echo "<p>Lista completa de números generados:</p>";
        foreach ($numeros as $numero) {
            echo $numero . " ";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['elementos']) && is_numeric($_POST['elementos']) && $_POST['elementos'] > 0) {
            $elementos = $_POST['elementos'];
            $numerosGenerados = generarNumerosUnicos($elementos);

            imprimirPrimos($numerosGenerados);
            echo "<br>";
            imprimirListaCompleta($numerosGenerados);

            echo '<br><a href="numprimosduplicado.php">Retornar al formulario</a>';
        } else {
            echo '<p>Por favor, ingresa un número válido de elementos.</p>';
        }
    } else 
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
