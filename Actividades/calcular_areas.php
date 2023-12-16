<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Áreas</title>
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
    <h2>Calculadora de Áreas</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="radio">Ingrese el radio del círculo:</label>
        <input type="text" name="radio" id="radio"><br>

        <label for="lado">Ingrese el lado del cuadrado:</label>
        <input type="text" name="lado" id="lado"><br>

        <label for="base">Ingrese la base del triángulo:</label>
        <input type="text" name="base" id="base"><br>

        <label for="altura">Ingrese la altura del triángulo:</label>
        <input type="text" name="altura" id="altura"><br>

        <input type="submit" value="Calcular Áreas">
    </form>

    <?php
    // Definir funciones para calcular áreas
    function calcularAreaCirculo($radio) {
        return M_PI * pow($radio, 2);
    }

    function calcularAreaCuadrado($lado) {
        return pow($lado, 2);
    }

    function calcularAreaTriangulo($base, $altura) {
        return ($base * $altura) / 2;
    }

    // Verificar si se han enviado datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores desde el formulario
        $radio = $_POST["radio"];
        $lado = $_POST["lado"];
        $base = $_POST["base"];
        $altura = $_POST["altura"];

        // Verificar si los valores ingresados son numéricos y no negativos
        if (is_numeric($radio) && $radio >= 0 &&
            is_numeric($lado) && $lado >= 0 &&
            is_numeric($base) && $base >= 0 &&
            is_numeric($altura) && $altura >= 0) {

            // Calcular y mostrar las áreas
            echo "<p>Área del círculo: " . calcularAreaCirculo($radio) . "</p>";
            echo "<p>Área del cuadrado: " . calcularAreaCuadrado($lado) . "</p>";
            echo "<p>Área del triángulo: " . calcularAreaTriangulo($base, $altura) . "</p>";

        } else {
            echo "<p>Por favor, ingrese valores numéricos válidos y no negativos.</p>";
        }
    }
    ?>
</body>
</html>
