<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
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

        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Tabla de Multiplicar</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero">Ingrese un número:</label>
        <input type="text" name="numero" id="numero" required><br>

        <input type="submit" value="Generar Tabla">
    </form>

    <?php
    // Verificar si se han enviado datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el número desde el formulario
        $numero = $_POST["numero"];

        // Verificar si el valor ingresado es numérico
        if (is_numeric($numero)) {
            // Imprimir la tabla de multiplicar
            echo "<h3>Tabla de Multiplicar del $numero:</h3>";
            echo "<table>";
            echo "<tr><th>Multiplicador</th><th>Resultado</th></tr>";

            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$i</td><td>$resultado</td></tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Por favor, ingrese un valor numérico válido.</p>";
        }
    }
    ?>
</body>
</html>
