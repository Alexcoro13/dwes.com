<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control</title>
</head>
<body>
    <h1>Estructuras de control</h1>

    <h2>Sentencias</h2>
    <p>La sentencias simples acaban en ;, puediendo haber más de un
        en la misma línea</p>

<?php
    $numero = 3; echo "El numero es $numero<br>"; $numero += 3; print "Ahora es $numero<br>";
?>
    <p>Un bloque de sentencias es un conjunto de sentencias encerrados entre llaves. No
        suelen ir solas, sino formar parte de una estructura de control. Además, se pueden
        anidar.</p>

<?php
    {   
        $numero = 5;
        echo "El número es $numero<br>";
        $numero -= 2;
        echo "Ahora es $numero<br>";
        {
            $numero = 8;
            $numero *= 2;
            echo "El resultado es $numero<br>";
        }
        echo "Ahora numero es $numero<br>";
    }
?>
    <h2>Estructuras de control simple</h2>

<?php
    // if (expresión) sentencia;
    $numero = 4;
    if($numero >= 4) echo "El número mayor o igual a 4<br>";

    if($numero === 4 AND $numero % 2 == 0)
        echo "El nuemero es igual a 4 y su resto al dividir por es 0 <br>";

?>
</body>
</html>