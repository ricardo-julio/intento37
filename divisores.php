<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Determinar Divisores</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero">Ingrese un número:</label>
        <input type="text" name="numero" required>
        <input type="submit" value="Determinar Divisores">
    </form>

    <?php
    // Verificar si se han enviado datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el número desde el formulario
        $numero = $_POST["numero"];

        // Verificar si el número ingresado es válido
        if (!is_numeric($numero) || $numero <= 0) {
            echo "Por favor, ingrese un número entero positivo válido.";
        } else {
            // Determinar los divisores del número
            echo "Los divisores de $numero son: ";
            for ($i = 1; $i <= $numero; $i++) {
                if ($numero % $i == 0) {
                    echo $i . " ";
                }
            }
        }
    }
    ?>
</body>
</html>
