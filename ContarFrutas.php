<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contar frutas en la canasta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff3e0;
            margin: 0;
            padding: 40px;
        }
        .contenedor {
            background-color: white;
            width: 450px;
            margin: auto;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }
        h1 {
            color: #e65100;
            text-align: center;
            border-bottom: 2px solid #e65100;
            padding-bottom: 10px;
        }
        .item {
            background-color: #fff3e0;
            border-left: 4px solid #e65100;
            padding: 8px 12px;
            margin: 8px 0;
            font-size: 17px;
        }
        .total {
            text-align: center;
            font-weight: bold;
            color: #e65100;
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Contar frutas en la canasta</h1>
        <?php
        $frutas = 6;
        $contador = 1;

        do {
            echo "<div class='item'>Fruta numero $contador</div>";
            $contador++;
        } while ($contador <= $frutas);

        echo "<p class='total'>Total de frutas: $frutas</p>";
        ?>
    </div>
</body>
</html>
