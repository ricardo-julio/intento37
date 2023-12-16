<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Determinar Grupo de Edad</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="edad">Ingrese la edad:</label>
        <input type="text" name="edad" required>
        <input type="submit" value="Determinar">
    </form>

    <?php
    // Verificar si se han enviado datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la edad desde el formulario
        $edad = $_POST["edad"];

        // Determinar el grupo de edad
        if ($edad < 18) {
            echo "Es menor de edad.";
        } elseif ($edad >= 18 && $edad < 60) {
            echo "Es adulto.";
        } else {
            echo "Es adulto mayor.";
        }

        // Mensaje adicional para personas mayores o iguales a 18 años
        if ($edad >= 18) {
            echo " Además, es mayor o igual a 18 años.";
        }
    }
    ?>
</body>
</html>
