<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contar frutas</title>
</head>
<body>
    <h1>Contar frutas en la canasta</h1>
    <?php
    $frutas = 6;
    $contador = 1;

    do {
        echo "Fruta numero $contador <br>";
        $contador++;
    } while ($contador <= $frutas);

    echo "<br>Total de frutas: $frutas";
    ?>
</body>
</html>
