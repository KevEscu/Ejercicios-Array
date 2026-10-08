<?php
//biblioteca de funciones



//compara palabras a y b. Si longitud de a > b, devuelve un numero positivo.


//si a<b, devielve un numero negativo
//si son iguales devuelve 0

function longitud($a, $b){
    $longA = strlen($a);
    $loungB = strlen ($b);
    return 0;

    //return strln($a) - strlen($b);
};

//CuentaLetras: recibe la palabra a y la letra x, Cuenta cuantas letras hay en esa palabra

//si no se indica la letra, devuelve el numero vocales

//Ej: cuentaLetras("hola que tal", "l");  //2 (hay 2 l)

function contar($palabras, $letra = "a"): int{
    $count = 0;
    for($i = 0; $i < srtlen($palabras); $i++){
        if($palabras[$i] == $letra) {
            $count++;
        }
    }
    return $count;

}

?>