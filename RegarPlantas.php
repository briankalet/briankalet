<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Regar las plantas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f5e9;
            margin: 30px;
        }
        h1 {
            color: green;
        }
        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Regar las plantas</h1>
    <p>
    <?php
    $plantas = 5;
    $i = 1;

    do {
        echo "Regue la planta $i <br>";
        $i++;
    } while ($i <= $plantas);

    echo "<br>Ya se regaron todas las plantas";
    ?>
    </p>
</body>
</html>
