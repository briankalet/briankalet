<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Regar las plantas</title>
</head>
<body>
    <h1>Regar las plantas</h1>
    <?php
    $plantas = 5;
    $i = 1;

    do {
        echo "Regue la planta $i <br>";
        $i++;
    } while ($i <= $plantas);

    echo "<br>Ya se regaron todas las plantas";
    ?>
</body>
</html>
