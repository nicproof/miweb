<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Este código es HTML...</h1>
    <?php
    echo "<h2>...y este código es PHP </h2>";
    echo "<p style='color: red;'>esto es una prueba</p>";

    for ($i = 1; $i <= 10; $i++) {
        echo "8 x $i = " . (8 * $i) . "<br>";
    }

    // Dibuja un rombo de asteriscos de 8 de diagonal vertical y 10 de diagonal horizontal
    $altura = 8;
    $anchura = 10;
    for ($i = 0; $i < $altura; $i++) {
        for ($j = 0; $j < $anchura; $j++) {
            if ($j == $anchura / 2 - abs($altura / 2 - $i) || $j == $anchura / 2 + abs($altura / 2 - $i)) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }
                            // CAMBIO DE USUARIO
                            // A ver si ahora funciona
    ?>



</body>

</html>