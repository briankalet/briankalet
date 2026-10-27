<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contar frutas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff3e0;
            margin: 30px;
        }
        h1 {
            color: darkorange;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Contar frutas en la canasta</h1>
    <p>
    <?php
    $frutas = 6;
    $contador = 1;

    do {
        echo "Fruta numero $contador <br>";
        $contador++;
    } while ($contador <= $frutas);

    echo "<br>Total de frutas: $frutas";
    ?>
    </p>
</body>
</html>
