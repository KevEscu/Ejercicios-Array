<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcfiones</title>
</head>
<body>
    <h1>Funciones </h1>
    <?php
    //funcion que reciba un array de notas y devuelve la cantidad de personas aprobadas
    //public int aprobadas(notas[]){}
    function aprobadas($notas):int{
        $contador = 0;
        foreach($notas as $n){
            if($n>=5){
                $contador++;
            }
            return $contador;
        }
    }
    echo aprobadas([9.0, 4, 2, 9]);
    //echo aprobadas("hola");
    //funcion que reciba 2 string y devuelva la union de los dos 

    function joinString(string $s1,string $s2): string{
        return $s1 . $s2;
    }
    echo "<br>";
    echo joinString("hola" . "adios");
    
    //Parametros con valores por defecto
    //saludar: si reciben un parametro (el nombre: xxxxxxx), que devuelva(hola xxxxxxxxxx)
    //si recibe dos parametros, que devuleva YYYYYYYYY, XXXXXXXXX

    function saludar($nombre, $saludo = "Hola"){
        echo "<br>";
        echo saludar("Juan");
        echo "<br>";
        echo saludar("Juan", "Buenos dias");
    }

    //funcion que reciba un array indexado de numero, y un segundo parametro tipo bool
    // si es true, que lo devuelva ordenado de mayor a menor
    //si es falso o no existe, que devuelva ordenado de menor a mayor

    function ordenar($numeros, $ord = false): int{
        if($ord == true){
            rsort($numeros);
        }
        else{
            sort($numeros);
        }
        return $numeros;
        }
        $resultado = ordenar([8,8,2,4,6,8,32,2,4], true);
        foreach($resultado as $numero){
            echo $numero . " ";
        };
        var_dump(ordenar([2,2,3,4,67,1,2,9,54,23,31,2,1,], true));
        echo "<br>";; echo "<br>";

        function suma(... $num){
            return array_sum($num);
            
        };
        echo suma(32,1,5,212,321,64,21,231,12,897,421);

        echo "<hr>";
        
    ?>
</body>
</html>