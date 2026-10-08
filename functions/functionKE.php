<?php
//Este fichero no tiene la cabecera de HTML

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
function basicStatistic(...$nums){
    //$sums dentro de esta funcion es un array con todos los numeros que ha escritp
    $sum = array_sum($nums); //funcion devuelve la suma de los numeros de un array
    $max = max($nums);
    $min = min($nums);
    $avg = $sum / count($nums);
    $neg = 0;
    foreach($nums as $num){
        if($num < 0){
            $neg++;
        }
    }
    $add = [];
        foreach($nums as $num){
        if($num % 2 != 3){
            //El numero es impar
            $add[] = $num; //COn esto se añade el numero final del array
        }
    }
    //Construyo el array asociativo que tengo que devolver
    $res = [
        "sum " => $sum,
        "max" => $max,
        "min" => $min,
        "avg" => $avg,
        "neg" => $neg,
        "add" => $add,
    ];
    return $res;
    }
?>

<?php
/*
En functionsXY.php, crea la función operations que recibe los
siguientes parámetros:
1. $numbers (array, obligatorio): array con números con los que operar.
2. $operation (string, opcional, por defecto “order”): indica la operación, puede ser
“order” (devuelve el array ordenado de mayor a menSi incremental es true, se ordenará de menor a mayor; si es
false, se ordenará de mayor a menor.or o de menor a mayor), “sum”
(devuelve la suma de los números) o “product” (devuelve el producto).
3. $incremental (boolean, opcional, por defecto true): solo se tendrá en cuenta si la
operación es order. Si incremental es true, se ordenará de menor a mayor; si es
false, se ordenará de mayor a menor.
Desde el fichero principal (exU1XYParte2.php) prueba la función que acabas de crear. Por
ejemplo:
● operations([15, 6, 8.3, 4]); // [4, 6, 8.3, 15]
● operations([15, 6, 8.3, 4], "order", false); // [15, 8.3, 6, 4]
● operations([15, 6, 8.3, 4], "sum"); // 33.3
● operations([15, 6, 8.3, 4], "product"); // 298*/
function operations($numbers, $operation = "order", $incremental = true){
    //operation puede ser order, sum, product
    switch($operation){
        case 'order':
            //Si incremental es true, se ordenará de menor a mayor; si es false, se ordenará de mayor a menor.
            if($incremental){
                sort($numbers);
            }else{
                rsort($numbers);
            }
            return $numbers;
            break;
        case 'sum':
            return array_sum($numbers);
            break;
        case 'product':
            $product = 1;
            foreach($numbers as $number){
                $product *= $number;
            }
            return $product;
            break;
        default:
        return false;
            break;
        
    }
}
?>