<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/styleXY.css">
</head>
<body>
    <?php
    $nombre = ord('C') .  ord('A')  + 1;
    $app = ord('H') . ord('A') + 1;
    var_dump($nombre);
    var_dump($app);
    $rows = $nombre % 8 + 4;
    $cols = $app % 6 + 5;
    var_dump($rows);
    var_dump($cols);
    
    ?>

    <?php
    for($i = 0; $i <= $cols; $i++){
        echo("<br>");
        for($j = 0; $j <= $rows; $j++){
            echo("*");
        }
    }
    ?>
    <hr>
    <code>
    <?php
        for($i = 0; $i <= $cols; $i++){
        echo("<br>");
        for($j = 0; $j <= $rows; $j++){
            
            if($i == 0 || $i== $cols || $j == 0 ||  $j == $rows){
            echo("*");
            }else{
                echo("&nbsp;");
            }
        }
    }
    
    
    ?>
    </code>
    <hr>
    <code>
    <?php
        for($i = 0; $i <= $rows ; $i++){
            for($j = 0; $j <= $cols; $j++){
                if(($i + $j )% 2 == 0){
                    echo("*");
                }else{
                    echo("&nbsp;&nbsp;&nbsp;");
                }
            }
            echo "<br>";
        }
    
    
    ?>
    </code>
<hr>
    <?php
    $temperaturas = [];
    $ciudadBaja = 0;
    $ciudadAlta = 0;
    $mayorVariacion = 0;
    $diaVariacion = 0;

    for ($dia = 0; $dia < 7; $dia++) {
        for ($ciudad = 0; $ciudad < 6; $ciudad++) {
            $temperaturas[$dia][$ciudad] = rand(-10, 45);
        }
        }
        $baja = $temperaturas[0][0];
        $alto = $temperaturas[0][0];
        for($i = 0; $i < 7; $i++){
            for($j = 0; $j <6; $j++){
                if($temperaturas[$i][$j] < $baja){
                    $baja = $temperaturas[$i][$j];
                    $ciudadBaja = $j;
                    $diaBaja = $i;
                }if($temperaturas[$i][$j] > $alto){
                    $alto = $temperaturas[$i][$j];
                    $ciudadAlta = $j;
                    $diaAlta = $i;
                }
            }
        }
        for($dia= 0; $dia <7 ; $dia++){
                $minima = $temperaturas[$dia][0];
                $maxima = $temperaturas[$dia][0];

            for($ciudad = 0 ;$ciudad <6; $ciudad++){
                if($temperaturas[$dia][$ciudad] < $minima){
                    $minima = $temperaturas[$dia][$ciudad];
                    $ciudadbajavariacion = $ciudad;
                }
                if($temperaturas[$dia][$ciudad] > $maxima){
                    $maxima = $temperaturas[$dia][$ciudad];
                    $ciudadaltavariacion = $ciudad;
                }
            }
            $variacion = $maxima - $minima;
            if($variacion > $mayorVariacion){
                $mayorVariacion = $variacion;
                $diaVariacion = $dia;
                $ciudadminima = $ciudadbajavariacion;
                $ciudadmaxima = $ciudadaltavariacion;
            }
        }
        $mediaAlta = 0;
        for($i = 0; $i < 6; $i++){
            $suma = 0;
            for($j = 0; $j < 7; $j++){
                $suma+= $temperaturas[$j][$i];
            }
            $media = $suma/7;
            if( $media > $mediaAlta){
                $mediaAlta = $media;
                $mediaCiuda = $i;
            }
            var_dump($media);
        }
        var_dump($temperaturas);
        var_dump($baja);
        var_dump($alto);

    ?>
    <table border="1">
        <thead>
            <tr>
                <th class="encabezado">Ciudad/Dia</th>
                <th class="encabezado">Dia 1</th>
                <th class="encabezado">Dia 2</th>
                <th class="encabezado">Dia 3</th>
                <th class="encabezado">Dia 4</th>
                <th class="encabezado">Dia 5</th>
                <th class = "finde" >Dia 6</th>
                <th class = "finde">Dia 7</th>
                <th class="encabezado">Media</th>
        </tr>
        </thead>
        <tbody>
            <?php
            for($i = 0; $i < 6; $i++){
            ?>
            <tr>
                <td class="ciudad"> Ciudad <?= $i + 1?></td>
                <?php
                $suma = 0;
                for($j = 0; $j < 7; $j++){
                    $suma += $temperaturas[$j][$i];
                    $clase = "";
                    if( $temperaturas[$j][$i] < 0){ 
                        $clase = "frio";
                    }if($temperaturas[$j][$i] > 35){
                        $clase = "calor";
                    }
                    if($i == $mediaCiuda){
                        $clase = $clase . " " . "mediaAlta";
                    }
                    if($j == 5 || $j == 6){
                        $clase = $clase . " " . "finde";    
                    }
                    if($temperaturas[$j][$i] == $alto){
                        $clase = $clase . " " . "maxima";
                    }
                    if($temperaturas[$j][$i] == $baja){
                        $clase = $clase . " " . "minima";
                    }
                ?>
                
                <td class="<?= $clase ?>">
                    <?= $temperaturas[$j][$i]?>
                </td>
            <?php
                }   
                $media = round($suma/7);
            ?>
                <td class="media">
                    <?= $media ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
<table border="1">
    <tr>
        <th>Estadística</th>
    </tr>

    <tr>
        <td>Temperatura mínima: <?= $baja ?> ºC (Día <?= $diaBaja + 1 ?>, Ciudad <?= $ciudadBaja + 1 ?>)</td>
    </tr>

    <tr>
        <td>Temperatura máxima: <?= $alto ?> ºC (Día <?= $diaAlta + 1 ?>, Ciudad <?= $ciudadAlta + 1 ?>)</td>
    </tr>

    <tr>
        <td>Mayor variación: <?= $mayorVariacion ?> ºC (Día <?= $diaVariacion + 1 ?>, Ciudad <?= $ciudadminima + 1 ?> - Ciudad <?= $ciudadmaxima + 1 ?>)</td>
    </tr>
</table>
</body>
</html>