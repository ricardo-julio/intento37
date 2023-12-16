<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costo de Llamada Telefónica</title>
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
    <h2>Costo de Llamada Telefónica</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="duracion">Ingrese la duración de la llamada (en minutos):</label>
        <input type="text" name="duracion" id="duracion" required><br>

        <input type="submit" value="Calcular Costo">
    </form>

    <?php
    // Verificar si se han enviado datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la duración desde el formulario
        $duracion = $_POST["duracion"];

        // Verificar si el valor ingresado es numérico
        if (is_numeric($duracion) && $duracion >= 0) {
            // Calcular el costo de la llamada
            if ($duracion <= 3) {
                $costo = 200;
            } else {
                $costo = 200 + ($duracion - 3) * 30;
            }

            // Mostrar el resultado
            echo "<p>El costo de la llamada telefónica es: $costo</p>";
        } else {
            echo "<p>Por favor, ingrese una duración válida en minutos.</p>";
        }
    }
    ?>
</body>
</html>
