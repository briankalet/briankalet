<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1: Regar las plantas</title>
    <style>
        body { font-family: Arial, sans-serif; background: #eef7ee; padding: 20px; }
        h1 { color: #2e7d32; }
        .planta { background: #fff; border-left: 5px solid #43a047; margin: 6px 0; padding: 8px 12px; }
        .fin { font-weight: bold; color: #1b5e20; margin-top: 12px; }
    </style>
</head>
<body>
    <h1>🌱 Ejercicio 1: Regar las plantas</h1>
    <p>Situación: Primero riego una planta y luego reviso si faltan más por regar.</p>
    <?php
    $totalPlantas = 5;   // Plantas que tengo
    $regadas = 0;        // Plantas regadas hasta ahora

    // do while: riega al menos una planta y DESPUÉS revisa la condición
    do {
        $regadas++;
        $faltan = $totalPlantas - $regadas;
        echo "<div class='planta'>💧 Regué la planta número $regadas. Faltan $faltan por regar.</div>";
    } while ($regadas < $totalPlantas);

    echo "<p class='fin'>✅ ¡Todas las $totalPlantas plantas están regadas!</p>";
    ?>
</body>
</html>
