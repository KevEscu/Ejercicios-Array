<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <table border="1">
        <thead>
            <tr>
                <th>A</th>
                <th>B</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            for($i = 0; $i <= 10; $i++){
            ?>
            <tr>
                <td>
                    7
                </td>
                <td>
                    <?= $i ?>
                </td>
                <td>
                    <?= $i*7?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <hr>
    <h2>Ejercicio 2</h2>
    <?php
    $numero1 = 0;
    $numero2 = 1;
    for($contador= 0; $contador <= 20; $contador++){
        $siguiente = $numero1 + $numero2;
        $numero1 = $numero2;
        $numero2 = $siguiente;
        
        echo "$siguiente, ";
    }
    ?>
    <hr>
    <h2>Ejercicio 3</h2>
    <?php
    for($i = 0; $i < 3; $i++){
        echo("<br>");
        for ($j=0; $j < 5 ; $j++) { 
            echo("*");
        }
    }
    ?>
    <hr>
    <h2>Ejercicio 4</h2>
    <?php
    $number = 7 ;
    for($i = 0; $i < $number; $i++){
        echo("<br>");
        for ($j=0; $j < $i + 1 ; $j++) { 
            echo($j + 1 );
        }
    }
    ?>
    <hr>
    <h2>Ejercicio 6</h2>
</body>
</html>