<?php
include "function2.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo longitud("hola", "adios");
    echo "<br>";
    echo longitud("hola", "adios");
    echo "<br>";
    echo longitud("hola", "adios");
    echo "<br>";

    $cadena = "hola";
    for($i = 0; $i <strlen($cadena); $i++){
        var_dump($cadena[$i]);
    }

    ?>
</body>
</html>