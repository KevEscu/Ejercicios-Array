<?php
include "infoarrays/restaurants.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array de restaurantes</h1>
    <p>La direccion de capaccio es:</p>
    <?php
    echo $p[0]["adddress"];
    ?>
    <p>El numero de camareros de Luigi</p>
    <?php
    echo $p[1]["employees"][1];
    ?>
    <p>El numero de bebidas de carpaccio es:</p>
    <?php
    echo $p[0]["quantity"]["drinks"];
    ?>
    <p>El nombre de los dos restaruantes obtenidos con un bucle es</p>
    <?php

    //For
    for($i = 0; $i < count($p); $i++){
        echo $p[$i]["name"] . " ,";
    }

    //Foreach
    foreach($p as $pe){
        echo $pe["name"] . " ,";
    }
    ?>
    <p>Los restaurantes son:</p>
    <?php
    $x = 1;
    foreach($p  as $r){
        echo "<li>".$x . $r["name"] . "</li>";
        $x++;
    }
    ?>
    <p>Los empleado de ambos restaurantes:</p>
    <?php
    foreach($p as $s){
        echo "{$s['name']}: ";
        if(isset($s['employees'])){ 
        foreach($s['employees'] as $e){
            echo "$e, ";
        }
        }else{
            echo "No hay empleados";
        }
        echo "<br>";
        
    }
    //Hacer una tabla de html
    ?>
    <p>Tabla</p>
    <table border ="1">
        <tr>
            <th>Nombre</th>
            <th>Cocina</th>
            <th>Camarero</th>
            <th>Otros</th>
        </tr>
            <?php
            /*foreach($p as $a){
                echo "<tr>";
                echo "<td>";
                echo $a['name'];
                echo "</td>";
                foreach($a['employees']as $c){
                    echo "<td>";
                    echo $c;
                    echo "</td>";
                }
             
                echo "</tr>";
                
            }*/
                foreach($p as $r){
                    echo "<tr>";
                    echo "<td>{$r['name']}</td>";
                    if (isset($r['employees'])){
                        foreach($r['employees'] as $number){
                            echo "<td>$number</td>";
                        }
                    }else{
                        echo"<td></td><td></td><td></td>";
                    }
                    echo "</tr>";
                }
                ?>
                </tr>
     </table>
     
     <?php
     //funcion que reciba un array asociativo, e imprima en una tabla las claves y el tipo del valor que tiene
                //por ejemplo
                /*
                clave | tipo
                name | string
                address | string
                employees | array
                quanty | array
                */
                function clavesYtipos($array): string{
                    $ret ='<table border="1">'; // $ret = "<table border=/"1/">"
                    $ret .= "<tr>
                    <th>Nombre</th>
                    <th>Tipo</th></tr>";
                    foreach ($array as $restaurant){
                        foreach($restaurant as $key => $value){
                            $ret .= "<tr>
                            <td>$key</td>
                            <td>" . gettype($value) ."</td>
                            </tr>";
                        }

                    }        



                    $ret .="</table>"; //$ret = $ret . "</table>";
                    return $ret;
                }
                echo clavesYtipos($p);
        ?>
</body>
</html>