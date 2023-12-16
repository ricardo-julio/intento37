<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Ecuación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Calculadora de Ecuación</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="valorX">Ingrese el valor de X:</label>
        <input type="text" name="valorX" id="valorX" required><br>

        <label for="valorZ">Ingrese el valor de Z:</label>
        <input type="text" name="valorZ" id="valorZ" required><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // Verificar si se han enviado datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores de X y Z desde el formulario
        $valorX = $_POST["valorX"];
        $valorZ = $_POST["valorZ"];

        // Verificar si los valores ingresados son numéricos
        if (is_numeric($valorX) && is_numeric($valorZ)) {
            // Calcular la ecuación
            $resultado = $valorX * $valorZ + $valorZ + $valorX;

            // Mostrar el resultado
            echo "<p>El resultado de la ecuación Y = X * Z + Z + X es: $resultado</p>";
        } else {
            echo "<p>Por favor, ingrese valores numéricos válidos.</p>";
        }
    }
    ?>
</body>
</html>
