<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>La siguiente linea esta hecha con PHP</p>
    <?php
        echo "<p> hello world: </p>" ;
    ?>

    <p>Esta linea tambien:</p>
    <p>
        <?php
            echo "Hola Mundo:";
            echo "<br>";
            print "otra cosa";
            echo ("otra mas");

            //VARIABLES:
            /*comentarios de varias lineas*/
            //String name = "asdfg";
            $name = "asdf";
            $surname = 'ruiz';
            echo "<br>";
            echo $name;
            //concatenar strings:
            echo "<br>";
            //El "." es el signo de concatenar
            echo $name . " " . $surname ;
            echo "<br>";
            echo "$name $surname"; //Si interpretA las variables
            echo "<br>";
            echo '$name $surname'; //Asi no interpreta las variables
            echo "<br>";

            //numericas
            $age = 21;
            echo "<p>Tengo $age años</p>";
            var_dump($age); 
            $age = 2.3;
            var_dump($age);
            $age = null;
            var_dump($age);

            //CONSTANTES
            define("IVA_GENERAL" , 0.21);
            const IVA_REDUCIDO = 0.08;
            $precio = 20.3;
            echo "<p> El p IVA es:" . $precio *  IVA_GENERAL . "</p>" ;
            echo "<p> El precio final con IVA es: " . $precio + $precio *IVA_GENERAL . "</p>" ;
            echo "<p> El precio final con Iva reducido es:" . $precio + $precio *   IVA_REDUCIDO . "</p>" ;

            var_dump(PHP_VERSION);
            var_dump(__FILE__);
            var_dump(__LINE__);


            $price =29.3;

            //OPERADORES (nuevos)
            $a = 5;
            $b = $a ** 10; //5 elavado a 10(Exponente)
            var_dump($b);
            $a = 7;
            $mod = $a % 2; //1 (El restante de la division entera)
            $a = 11;
            $mod = $a % 4; //3
            
            //Operadores de Incremento
            $a = 1;
            $a++; //$a = $a + 1

            $a += 4; // $a = $a + 4



            echo"<br><br>************<br><br><br>" ;
            $b = 10;
            $b + 1;
            var_dump ($b);
            

            $b = 5;
            $b++;
            echo $b;

            $b = 5;
            $suma = $b++ + 2;
            echo "<br> La variable suma es: $suma";

            $b = 5;
            $suma = ++$b + 2;
            echo "<br> La variable suma es: $suma";


            $a = 5;
            $b = "5";
            $bool = $a == $b;
            var_dump($bool); //true



            $a = 5;
            $b = "5";
            $bool = $a ===  $b;
            var_dump($bool); //false

            $a = 5;
            $b = "5";
            $bool = $a !=  $b;
            var_dump($bool); //false

            $a = 5;
            $b = "5";
            $bool = $a !==  $b;
            var_dump($bool); //true

            $a = 5;
            $b = 5;
            $bool = $a <=>  $b;
            var_dump($bool);

            
        ?>
    </p>
</body>
</html>