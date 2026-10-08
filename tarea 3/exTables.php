<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="exTablesStyle.css">
</head>
<body>
    <?php
    $multiplicacion = 15;
    ?>
    <table class="fondo">
        <thead>
            <tr>
                <th class="celeste">X</th>
                <?php
                for($i = 0; $i <= $multiplicacion; $i++){
                ?>
                <th class="green">
                    <?= $i ?>
                </th>
                <?php
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php 
            for($i = 0; $i <= $multiplicacion; $i++){
            ?>
            <tr>
                <td class="greenclaro"><?= $i ?></td>
                <?php
                for($j = 0; $j <= $multiplicacion; $j++ ){
                ?>
                <td class="texto">
                    <?= $i * $j?>
                </td>
            <?php
            }
            ?>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>