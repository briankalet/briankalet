<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2: Contar frutas en la canasta</title>
    <style>
        body { font-family: Arial, sans-serif; background: #fff8e1; padding: 20px; }
        h1 { color: #e65100; }
        .fruta { background: #fff; border-left: 5px solid #fb8c00; margin: 6px 0; padding: 8px 12px; }
        .fin { font-weight: bold; color: #bf360c; margin-top: 12px; }
    </style>
</head>
<body>
    <h1>🧺 Ejercicio 2: Contar frutas en la canasta</h1>
    <p>Situación: Tomo una fruta, la cuento y luego miro si hay más.</p>
    <?php
    $canasta = ["Manzana", "Plátano", "Naranja", "Pera", "Uva", "Mango"];
    $contador = 0;   // Frutas contadas

    // do while: toma y cuenta una fruta, DESPUÉS revisa si quedan más
    do {
        $fruta = $canasta[$contador];
        $contador++;
        echo "<div class='fruta'>🍎 Tomé la fruta $contador: $fruta</div>";
    } while ($contador < count($canasta));

    echo "<p class='fin'>✅ En total hay $contador frutas en la canasta.</p>";
    ?>
</body>
</html>
