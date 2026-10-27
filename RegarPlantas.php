<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Regar las plantas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f5e9;
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
            color: #2e7d32;
            text-align: center;
            border-bottom: 2px solid #2e7d32;
            padding-bottom: 10px;
        }
        .item {
            background-color: #e8f5e9;
            border-left: 4px solid #2e7d32;
            padding: 8px 12px;
            margin: 8px 0;
            font-size: 17px;
        }
        .total {
            text-align: center;
            font-weight: bold;
            color: #2e7d32;
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Regar las plantas</h1>
        <?php
        $plantas = 5;
        $i = 1;

        do {
            echo "<div class='item'>Regue la planta $i</div>";
            $i++;
        } while ($i <= $plantas);

        echo "<p class='total'>Ya se regaron todas las plantas</p>";
        ?>
    </div>
</body>
</html>
