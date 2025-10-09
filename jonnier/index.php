<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola PHP</h1>

    <?php

    $nombre = "Jonnier";
    $edad = 19;

    const pais = "Colombia";
    define("ciudad", "medellin");

    echo "<h3> Hola Mi nombre es $nombre, tengo $edad años y soy de: " . pais . " y vivo en " . ciudad .". </h3>";


    ?>
    


    <?php

    //TIPOS DE DATOS

    $texto = "Hola Mundo"; //String
    $numero = 4;           //Entero
    $decimal = 9.5;        //Decimales
    $activar = true;       //Booleano
    $nulo = null;         //NULL

    echo "<p>Tipo de dato Texto:  $texto </p>";
    echo "<p>Tipo de dato Numerico:  $numero </p>";
    echo "<p>Tipo de dato Decimal:  $decimal </p>";
    echo "<p>Tipo de dato Booleano:  $activar </p>";
    echo "<p>Tipo de dato Nulo:  $nulo </p>";


    ?>

    <?php

    //Operaciones Aritmeticas

    $num1 = 7;
    $num2 = 4;

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $muliplicacion = $num1 * $num2;
    $division = $num1 / $num2;

    echo "<h3>La suma es: $suma. </h3>";

    echo "<h3>La resta es: $resta. </h3>";

    echo "<h3>La multiplicacion es: $muliplicacion. </h3>";

    echo "<h3>La division es: $division. </h3>";

    
    ?>
</body>
</html>