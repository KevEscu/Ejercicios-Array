<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $students = [
        ["nombre" => "Ana Garcia", "matematicas" => 8.5, "historia" => 7.0, "Programacion" => 9.0],
        ["nombre" => "Luis Martinez", "matematicas" => 6.0, "historia" => 8.5, "Programacion" => 7.5],
        ["nombre" => "Marta Rodriguez", "matematicas" => 9.0, "historia" => 6.5, "Programacion" => 8.0],
        ["nombre" => "Carlos Lopez", "matematicas" => 7.5, "historia" => 9.0, "Programacion" => 6.5],
        ["nombre" => "Elena Torres", "matematicas" => 8.0, "historia" => 7.5, "Programacion" => 9.5]
    ]
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Matematicas</th>
                <th>Historia</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($students as $student):
            ?>
            <tr>
                <td>
                    <?= $student['nombre'] ?>
                </td>
                <td class="<?php
                if($student['matematicas'] >= 8){
                    echo "green ";
                }else{
                    echo "";
                }
                if($student['matematicas'] >= 9){
                    echo "negrita ";
                }
                ?>
                ">
                    <?= $student['matematicas'] ?>
                </td>
                <td class="
                <?= $student['historia'] >= 8 ? "greenlist ": " " ?>
                <?= $student['historia'] >= 8.5 ? "negrita ": " " ?>
                <?= $student['historia'] >= 9 ? "cursiva ": " " ?>
                <?= $student['historia'] <= 7 ? "peque " : "" ?>
                ">
                <?= $student['historia'] ?>
                </td>
            <!-- <td class ="greeHist negrita ">......... </td>-->
            </tr>

            <?php 
            endforeach;
            
            ?>
        </tbody>
    </table>
</body>
</html>