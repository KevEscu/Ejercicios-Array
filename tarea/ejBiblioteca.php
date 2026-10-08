<?php
include "ejercicioArrays.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicios de Array</h1>
    <p>1.Muestra el título del segundo libro de la categoría "Ciencia Ficción".</p>
    <?php
    echo $biblioteca["Ciencia Ficción"][1]["titulo"];
    ?>
    <hr>
    <p>2 .Muestra el autor de "Sapiens" (recuerda que "autores" es un array, aunque en este caso solo tenga un elemento).</p>
    <?php
    echo $biblioteca["Historia"][0]["autores"][0];
    ?>
    <hr>
    <p></p>
</body>
</html>