<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Promedio</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nota1">Nota 1:</label>
        <input type="text" name="nota1" required><br>

        <label for="nota2">Nota 2:</label>
        <input type="text" name="nota2" required><br>

        <label for="nota3">Nota 3:</label>
        <input type="text" name="nota3" required><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // Verificar si se han enviado datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener las notas desde el formulario
        $Nota1 = $_POST["nota1"];
        $Nota2 = $_POST["nota2"];
        $Nota3 = $_POST["nota3"];

        // Ponderaciones fijas
        $Ponderacion1 = 40;
        $Ponderacion2 = 30;
        $Ponderacion3 = 30;

        // Calculando el promedio ponderado
        $Resultado = ($Nota1 * $Ponderacion1 / 100) + ($Nota2 * $Ponderacion2 / 100) + ($Nota3 * $Ponderacion3 / 100);

        // Imprimir el resultado con un tamaño de fuente más grande
        echo '<div style="font-size: 20px;">El resultado es: ' . $Resultado . '</div>';
    }
    ?>
</body>
</html>

