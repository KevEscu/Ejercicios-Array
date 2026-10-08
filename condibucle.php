<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <h2>Condicionales</h2>
    <?php
    // Si la edad es menor a 18 que muestre "Eres menor de edad " y si no "Eres mayor de edad"
    $age = 17;

    if($age >= 18){
        echo "Eres mayor de edad";

    }else{
        echo "Eres menor de edad";
    }

    //Ternario (comparacion) ? true : false
    $mensaje = $age <= 18 ?"Eres mayor": "Eres menor";
    echo "<br>";
    echo $mensaje;

    //switch : si $dia = 1 entonces lunes y asi sucesivamente hasta el domingo, si no que diga "otros"
    echo "<hr>";
    $dia = "4";
    switch($dia){
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miercoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sabado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "Otros";
            break;
    }
    echo "<br>";
    $dia = 6;
    echo match($dia){
        1 => "Lunes",
        2 => "Martes",
        3 => "Miercoles",
        4 => "Jueves",
        5 => "Viernes",
        6 => "Sabado",
        7 => "VIernes",
        default => "Otros"
    };

    echo "<hr>";
    ?>
    <h2>Bucles</h2>
    <?php
    //haz un bucle del 1 al 10 que impima los numero separados por comas.
    //1, 2, 3, 4, 5, 6, 7, 8, 9, 10.
    //for(Declaracion;COndicion;Incremento)

    for($i = 1; $i <=10; $i++ ){
        echo "$i";
        if($i < 10){
            echo ", ";
        }
    }
    echo "<br>";
    //cada bloque del for puede tener varias operaciones
    for($i = 1, $x = 9; $i <=10; $i++, $x++ ){
        echo "$i / $x";
        if($i < 10){
            echo ", ";
        }
    }

    echo"<br>";

    //recorre con for del 1 al 100 e impreme solamente multiplos de 5 y de 7

    for($i= 1; $i <= 100 ;$i++){
        if($i % 5 == 0 && $i % 7 == 0){
            echo "$i, ";
        }
    }

    //traduce el for de arriba while
    // while(condicion)(......)
    echo "<hr>";
    $numero = 1;
    while($numero <= 100){
        $numero++;
        if($numero % 5 == 0 && $numero % 7 == 0){
            echo "$numero, ";
        }
    }

    ?>
</body>
</html>