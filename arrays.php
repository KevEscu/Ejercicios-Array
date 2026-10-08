<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Arrays</h1>
    <?php
    $cars = array("Seat", "Audi", "BMW");
    $food = ["tomatoes", "avoados", "carrots"];


    //Quiero añadir otra comida: berenjena

    $food[3] = "aubergines";
    $food[3] = "eggplants"; // sobreescribe el valor
    //Quiero añadir calabcin

    $food[] ="Zucchini"; 

    foreach($food as $f){
        echo "$f<br>";
    }
    echo"<br>";
    ?>
    <h2>Arrays asociativos</h2>
    <?php
    $capitales = [
        "Ecuador" => "Quito",
        "Spain"  => "Madrid",
        "Norway" => "Oslo"
    ];
    echo "<p> La capital de Noruega es " . $capitales["Norway"] . "</p>";
    echo count($capitales);
    //Meter en el Array
    $capitales["Colombia"] = "Bogota";
    $capitales["Portugal"] = 49;
    $capitales["Georgia"] = "Tbilisi";
    echo "<br>";
    echo $capitales["Georgia"];
    echo "<br>";
    //Recorrer el array con un foreach
    foreach($capitales as $c){
        echo "$c<br>";
    }
    //Recorrer claves y Valores
    foreach($capitales as $country => $capital){
        echo "La capital de $country es $capital<br>";
    }
    //Eliminar un elemento de un array asiociativo
    unset($capitales['Portugal']);
    var_dump($capitales);

    if (isset($capitales['Portugal'])){
        echo"La capital de Portugal es ". $capitales['Portugal'] . "<br>";
    }else{
        echo "No tengo la capital de portugal<br>";
    }
    ?>
    <h2>Funciones con array</h2>
    <?php
        $notas = [9.0, 6.9, 7.5, 8.2];
        
        //suma de valores
        $suma = array_sum($notas);
        //Longitud
        $numerodeNotas = count ($notas);
        $media = $suma / $numerodeNotas;
        //Equivale: $media =array_sum($notas)  /  count($notas)
        var_dump($media);

        //Ordenar de menor a mayor;
        sort($notas);
        var_dump($notas);
        //De mayor a menor
        rsort($notas);
        var_dump($notas);

        //Revolver
        shuffle($notas);
        var_dump($notas);

        //Nota mas alta
        sort($notas);
        echo "La nota mas alta ". $notas[count($notas) - 1] . "<br>";

        //buscar
        var_dump(in_array(9.0, $notas));
        var_dump(in_array(9.01, $notas));

        //implode: separa cada elemento del array por un deliminatador
        echo implode(", ", $notas);


        $nombres = "Juan,Alberto,Maria";
        $arrayNombres = explode(",", $nombres);
        var_dump($arrayNombres);

        //Array asociativo
        //politicos y cargos
        $p = [
            "Pedro" => "Presidente",
            "Pilar" => "Educacion",
            "Oscar" => "Transporte",
            "Fernando" => "Interior"
        ];
        var_dump($p);

        //sort($p); si hago esto en un asiociativo, elimino las claves y lo convierto en indexeado
        var_dump($p);

        //por valos ascendente;
        asort($p);
        var_dump($p);
        //por valor descendentes(reversa)
        arsort($p);
        var_dump($p);

        //por clave ascendente;
        ksort($p);
        var_dump($p);
        //por clave descendentes;   
        krsort($p);
        var_dump($p);
        foreach($p as $puestos){
        echo $puestos;
    }
    //var_dump("," . $p); imprime los valores, no las claves
        foreach($p as $k => $v){
            echo "$k<br";
        }

        //funcion que me devuelve las claves de un array
        $claves = array_keys($p);
        var_dump($claves);
        echo implode(", ", array_keys($p));

        //en que posicion esta un elemento
        $resultado = array_search ("Presidente". $p);
        var_dump($resultado);
    ?>
</body>
</html>