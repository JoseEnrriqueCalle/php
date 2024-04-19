<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if (isset($_GET['texto'])){
        $texto=$_GET['texto'];
      
        
    }
    else
    echo '
    <form method="GET" action="">
    <label for ="texto"> Introduce tu texto.</label>
    <input type="text" id="texto" name="texto">
    <button type ="submit" >enviar</button>
    </label>

    </form>';
   ?>
</body>
</html>