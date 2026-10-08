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
    <p>3. Muestra cuántos ejemplares hay en la sede "Norte" del libro "Fundación"</p>
    <?php
    echo $biblioteca["Ciencia Ficción"][0]["ejemplares"]["Norte"];
    ?>
    <hr>
    <p>4. Muestra la nota que puso el usuario "pedro22" en su reseña de "Sapiens" (accede directamente por posición dentro del array de reseñas).</p>
    <?php
    echo $biblioteca["Historia"][0]["resenas"][1]["nota"];
    ?>
    <hr>
    <p>5. Comprueba si "Neuromante" tiene la clave "resenas" definida. Muestra un mensaje distinto según el resultado.</p>
    <?php
    if(isset($biblioteca["Ciencia Ficcion"][1]["resenas"])){
        echo "Tiene reseñas";
    }else{
        echo "No tiene reseñas";
    }
    ?>
    <p>6. Comprueba si "Veinte poemas de amor" tiene la clave "ejemplares". Si no la tiene, añádele una con 0 ejemplares en "Central".</p>
    <?php
    if(!isset($biblioteca["Poesía"][0]["ejemplares"])){
        $biblioteca["Poesía"][0]["ejemplares"] = ["Central" => 0];
    }

    echo $biblioteca["Poesía"][0]["ejemplares"]["Central"];
    ?>
    <hr>
    <p>7. Cambia el año de publicación de "Neuromante" a 1984 → 1985  (modifica directamente el array $biblioteca).</p>
    <?php
    $biblioteca["Ciencia Ficción"][1]["anio"] = 1985;
    echo $biblioteca["Ciencia Ficción"][1]["anio"];
    ?>
    <hr>
    <h2>EJERCICIOS DE RECORRIDO (BUCLES) Recorre $biblioteca con foreach (anidando tantos bucles como necesites según la profundidad del dato).</h2>
    <p>8. Recorre todas las categorías y, dentro de cada una, muestra el título de cada libro, con el formato: "Ciencia Ficción -> Fundación"</p>
    <?php
    foreach ($biblioteca as $categoria => $libros){
        foreach($libros as $libro){
            echo $categoria . "->" . $libro["titulo"] . "<br>";
        }
    }
    ?>
    <hr>
    <p>9. Recorre todo el array y muestra únicamente los libros publicados ANTES del año 1980, junto con su categoría.</p>
    <?php
    foreach($biblioteca as $categoria => $libros){
        foreach($libros as $libro){
            if($libro["anio"] < 1980 ){
                echo $categoria . "->" . $libro["titulo"];
                echo "<br>";
            }
        }

    }
    ?>
    <hr>
    <p>10.  Recorre todos los libros y, para los que tengan "ejemplares", suma el total de ejemplares en todas las sedes y muéstralo así: "Sapiens: 15 ejemplares en total"</p>
    <?php
    foreach($biblioteca as $categoria => $libros ){
        foreach($libros as $libro){
            if(isset($libro["ejemplares"])){
                $total = 0;
                foreach($libro ["ejemplares"] as $sede => $cantidad){
                    $total += $cantidad;
                }
                echo $libro["titulo"] . ": " . $total . "en total";
                echo "<br>";
            }
        }
    }
    ?>
    <hr>
    <p>11.  Recorre todos los libros y detecta si alguna sede tiene 0 ejemplares de algún libro. Muestra avisos con el formato: "Fundación no tiene ejemplares en Sur"</p>
    <?php
    foreach ($biblioteca as $categoria => $libros) {
    foreach ($libros as $libro) {
        if (isset($libro["ejemplares"])) {
            foreach ($libro["ejemplares"] as $sede => $cantidad) {
                if ($cantidad == 0) {
                    echo $libro["titulo"] . " no tiene ejemplares en " . $sede;
                    echo "<br>";
                }
            }
        }
    }
}
    ?>
    <hr>
    <p>Recorre todos los libros que tengan "resenas" y calcula la nota media de cada uno (redondeada a 1 decimal). Muestra: "Sapiens - nota media: 4.0"</p>
    <?php
    foreach ($biblioteca as $categoria => $libros) {
    foreach ($libros as $libro) {
        if (isset($libro["resenas"])) {
            $suma = 0;

            foreach ($libro["resenas"] as $resena) {
                $suma += $resena["nota"];
            }

            $media = $suma / count($libro["resenas"]);

            echo $libro["titulo"] . " - nota media: " . number_format($media, 1);
            echo "<br>";
        }
    }
}
    ?>
    <hr>
    <p>Recorre TODO el array (categorías, libros y reseñas) y cuenta cuántas reseñas en total tienen nota igual o superior a 4 ,mostrando el total al final junto con el título del libro que acumula más reseñas de ese tipo.</p>
    <?php
    $total = 0;
    $max = 0;
    $libroMax = "";

    foreach ($biblioteca as $categoria => $libros) {
        foreach ($libros as $libro) {

            $contador = 0;

            if (isset($libro["resenas"])) {
                foreach ($libro["resenas"] as $resena) {

                    if ($resena["nota"] >= 4) {
                        $total++;
                        $contador++;
                    }
                }
            }

            if  ($contador > $max) {
                $max = $contador;
                $libroMax = $libro["titulo"];
            }
        }
    }

    echo "Total de reseñas con nota igual o superior a 4: " . $total;
    echo "<br>";
    echo "Libro que acumula más reseñas de este tipo: " . $libroMax;
    ?>
    <hr>
    <p>Recorre las categorías y muestra cuántos libros hay en cada una, ordenando el resultado de mayor a menor número de libros (pista: guarda los totales en un array nuevo y ordénalo con arsort() antes de recorrerlo para mostrarlo).</p>
    <?php
    $totales = [];

    foreach ($biblioteca as $categoria => $libros) {
        $totales[$categoria] = count($libros);
    }

    arsort($totales);

    foreach ($totales as $categoria => $cantidad) {
        echo $categoria . ": " . $cantidad . " libros";
        echo "<br>";
    }
    ?>
</body>
</html>