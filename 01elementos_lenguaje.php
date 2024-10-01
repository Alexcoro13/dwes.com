<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Elementos del lenguaje</h1>
<?php
    # Script: 01elementos_lenguaje.php

?>
    <h2>Entrada y Salida</h2>
    <p>La entrada de datos en PHP es con un formulario o con un enlace. La salida 
        de datos se produce con la función echo, y su fomra abreviada, y la funcion print.
        Además, para la salida de datos con formato tenemos printf.
    </p>
    <h3>Funciónn echo</h3>
<?php
    echo "<p>La función echo emeite el resultado de una expresión a la salida. Se puede
    usar como función o como construcción del lenguaje (sin paréntesis)</p>";

    echo "<p>Esto es un párrafo HTML enviado por echo</p>";

    $nombre = "Juan";
    echo "Hola ", $nombre, " como estas?<br>";

    //echo("Hola", $nombre, "como estas?");
    echo("Hola, juan, cómo estas?<br>");

    //Quiero un salto de línea al final de la línea
    # Solo sirve para el codigo fuente
    echo "Hola, esta línea acaba en un salto\n";
    echo "Supuestamente esta línea es la siguiente a la anterior\n y esta va después";

    $nombre = "Jose";
    $apellidos = "Gomez";

    echo "<br>Mi nombre es $nombre y mi apellidos es $apellidos<br>";

    echo "Mi nombre es " . $nombre . " y mi apellido es " . $apellidos . "<br>";

    echo "<br>Uno más dos son ", 1 + 2, " y tiene que haber salido 3<br>";

    //El operador . tiene precendian sobre el operador +

    echo "<br>Uno más dos son" . 1 + 2 . " y tiene que haber salido 3<br>";

    echo "<h4>Forma abreviada de echo</h4>";    
    echo "<p>Cuando hay que enviar a la salida el resultado de una expresión pequeña disponemos
    de la forma abreviada de echo que permite intercalarse en el codigo
    HTML con menos esfuerzo</p>";

    $tiene_portatil = true;
?>
    <!-- La forma abreviada de echo va dentro de HTML -->
     <!-- &lt;?= expresion &gt; equivale a &lt?php echo expresion ?&gt;-->
    <p>Mi nombre es <?= $nombre . " " . $apellidos?></p>

    <!-- Uso muy habitual. Valores por defecto en controles de formulario -->
    <input type="text" name='nombre' size="15" value='<?=$nombre?>'><br>
    <input type="checkbox" name='portatil' <?= $tiene_portatil ? 'checked' : ''?>>Tienes portatil?

    <!--Consejo: Las cadenas en PHP con " y en HTML ' -->

<?php
    echo "<br><input type='text' name='apellidos' size='50'>";
?>

    <h3>Función print</h3>
    <p>Funciona igual que echo</p>
<?php
    print "<p>Esto es una cadena\n que tiene mas de una linea\n y se envian a la salida</p>";
    print "<p>Mi nombre es $nombre $apellidos</p><br>";

?>

    <h3>Función printf</h3>

<?php
    $pi = 3.14159;
    $radio = 3;
    $circunferencia = 2 * $pi * $radio;
    
    printf("<br>La circunfernecia de radio %d es %5.2f", $radio, $circunferencia);
?>
</body>
</html>