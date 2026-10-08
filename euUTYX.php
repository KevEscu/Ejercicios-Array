<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Ejercicios</h1>
    </header>
    <main>
        <article>
            <h2>Ejercicio 1</h2>
            <?php
            $bid = [];
            for($i = 0; $i < 4; $i++){
                for($j = 0; $j <5; $j++){
                    if(($i + $j) % 2 == 0){
                        //si es par
                        $bid[$i][$j] ="par";
                    }else{
                        //impar
                        $bid[$i][$j] = "impar";
                    }
                }
            }
            //En cada iteracion de este bucle, $value es cada una de las filas es decir un array
            foreach ($bid as $value){
                echo implode(", ", $value) . "<br>";
            }
            for($i = 0; $i < sizeof($bid); $i++){
                for($j = 0; $j <sizeof($bid[$i]); $j++){
                    echo $bid[$i][$j] . ", ";
                }
                echo "<br>";
            }
            ?>
        </article>
        <article>
            <h2>Ejercicio 2</h2>
            <?php
                /*
                En functionsXY.php, crea la unción basicStatistics. Recibe
                entre 0 y n parámetros. Devuelve un array asociativo con las siguientes claves:
                ● sum: la suma de todos los números
                ● max: el máximo
                ● min: el mínimo
                1
                Desarrollo Web en Entorno Servidor SIMULACRO - Examen Unidad 1
                ● avg: la media
                ● neg: la cantidad de números negativos
                ● odd: un array con todos los números impares
                Si ha recibido 0 parámetros, devuelve false.
                Desde el fichero principal (exU1XYParte2.php) llama a la función e imprime los resultados
                en una lista no ordenada (<ul>).
                */
                include "./functions/functionKE.php";
                $bs = basicStatistic(1,2,3,-2,9,-3);
                //lo voy a imprimir fuera del php(porque quiero)
                // echo gettype([2,2,2]);
            ?>
            <ul>
                <?php foreach($bs as $key => $value){
                    //cuado la clave es "odd" el calor es un array: y no puedo imprimirlo con un echo si no  con un
                    if($key == "add"){
                        echo"<li>$key: ". implode(", ", $value) . "</li>";
                    }else{
                        echo "<li>$key: $value <li>";
                    }
                    
                }    
                ?>
            </ul>
        </article>
        <article>
            <h2>Ejercicio 3</h2>

            <?php
            var_dump (operations([15, 6, 8.3, 4])); // [4, 6, 8.3, 15]
            var_dump (operations([15, 6, 8.3, 4], "order", false)); // [15, 8.3, 6, 4]
            var_dump (operations([15, 6, 8.3, 4], "sum")); // 33.3
            var_dump (operations([15, 6, 8.3, 4], "product")); // 2988
            ?>
        </article>
        <article>
            <h2>Ejercicio 4</h2>
            <?php
            /*
            Realiza las siguientes operaciones con el array $employees:
            1. (0,5 puntos) Recorre el array con un bucle e imprime en una lista ordenada <ol> el
            nombre y el salario de les empleades del departamento Sales:
            2. (0,7 puntos) Calcula el salario medio por departamento, e imprime cada uno en un
            párrafo <p>:
            3. (0,8 puntos) Recorre el array con un bucle e imprime en una lista no ordenada los
            nombres de les empleades del departamento de IT ordenados alfabéticamente.
            */
            include "employees.php";
            echo "<ol>";
            foreach($employees as $employee){
                if($employee["department"] == "Sales")
                    {
                        echo "<li> Nombre: {$employee['name']}. Salario: {$employee['salary']} </li>";
                        echo "<li>Nombre: ". $employee['name'] . ". Salario: " . $employee['salary'] . "</li>";
                    }
            }
            echo "</ol>";
            //apartado B
            $sumIT = 0;
            $cantidadIT = 0;
            $sumSales = 0;
            $cantidadSales = 0;
            foreach ($employees as $employee) {
                if($employee["department"] === "Sales"){
                    $cantidadSales++;
                    $sumSales += $employee["salary"];
                }else{
                    $cantidadIT++;
                    $sumIT += $employee["salary"];
                }
            }
            ?>
            <p>El salario medio de IT es <?= $sumIT / $cantidadIT?></p>
            <p>El salario medio de Sales es <?= $sumSales / $cantidadSales?></p>

            <?php
            $it = [];
            foreach($employees as $employee){
                if($employee['department'] == "IT"){
                    $it[] = $employee["name"];
                }
            }
            //Ordeno Alfabeticamente
            sort($it);
            ?>
            <ul>
                <?php foreach($it as $employee) :  ?>
                    <li><?= $employee?></li>
                <?php endforeach;?>
            </ul>

        </article>
    </main>
</body>
</html>