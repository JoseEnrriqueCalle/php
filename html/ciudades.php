<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   $paises= array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "
    Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "
    Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "
    Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "
    Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United
    Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
    Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"
    Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
    

    ksort($paises);
    foreach($paises as $pais => $capital)
    {
        echo "La capital de ".strtoupper($pais). " es ".strtoupper ($capital). "<br>";
    }

    $aleatorio= array_rand($paises);
    
    echo "La capital Randomica es ". $paises[$aleatorio]. " es ".$aleatorio. "<br>";

    ?>    




</body>
</html>