<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $edades = array("Juan" => "0",
                        "María" => "0", 
                        "Paco" => "0",
                        "Pedro" => "0",
                        "Jose" => "0"
                        );
        //ingresar edades impares al array de edades
        foreach ($edades as $nombre => $valor) {
            do {
                $numeroAleatorio = rand(20, 80);
            } while ($numeroAleatorio % 2 == 0); 

            $edades[$nombre] = $numeroAleatorio;
        }

        foreach ($edades as $clave => $valor) {
            echo "Clave: " . $clave . " - Valor: " . $valor . "<br>";
        }
     ?>
</body>
</html>