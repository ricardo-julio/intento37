<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar e Imprimir Vectores y Matrices</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin-bottom: 20px;
        }

        li {
            display: inline-block;
            margin-right: 20px;
        }

        a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #f0f0f0;
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
    <h2>Opciones:</h2>
    <ul>
        <li><a href="?opcion=1">Cargar e Imprimir Vector</a></li>
        <li><a href="?opcion=2">Cargar e Imprimir Matriz</a></li>
    </ul>

    <?php
    // Función para cargar e imprimir un vector
    function cargarImprimirVector() {
        $vector = array(); // Vector vacío

        // Solicitar al usuario ingresar los números para el vector
        for ($i = 0; $i < 5; $i++) {
            echo "<label for='vector$i'>Ingrese el valor para la posición $i:</label>";
            echo "<input type='text' name='vector$i' id='vector$i'><br>";
        }

        // Imprimir el vector
        echo "Vector: ";
        foreach ($vector as $valor) {
            echo "$valor ";
        }
    }

    // Función para cargar e imprimir una matriz
    function cargarImprimirMatriz() {
        $matriz = array(); // Matriz vacía

        // Solicitar al usuario ingresar los números para la matriz
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo "<label for='matriz$i$j'>Ingrese el valor para la posición [$i][$j]:</label>";
                echo "<input type='text' name='matriz$i$j' id='matriz$i$j'><br>";
            }
        }

        // Imprimir la matriz
        echo "Matriz:<br>";
        foreach ($matriz as $fila) {
            foreach ($fila as $valor) {
                echo "$valor ";
            }
            echo "<br>";
        }
    }

    // Verificar la opción seleccionada
    if (isset($_GET['opcion'])) {
        $opcion = $_GET['opcion'];

        // Ejecutar la función correspondiente según la opción seleccionada
        switch ($opcion) {
            case 1:
                cargarImprimirVector();
                break;
            case 2:
                cargarImprimirMatriz();
                break;
            default:
                echo "Opción no válida.";
                break;
        }
    }
    ?>
</body>
</html>

