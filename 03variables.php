<?php
    define("SALTO", "<br>");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <h1>Variables: 03variables.php</h1>

<?php
    // Las variables se definen con $identificador
    $nombre_vairable = "Valor de la variable";

    //variables que no se han definido
    $resultado = $numero + 25;
    echo "El valor de sin definir es $sin_definir y el resultado es $resultado<br>";

    // Si la variable esta en un contexto logico su valor
    // logico asume por defecto False
?>
    <h2>Analisis de variables</h2>
    <h3>Analisis simple</h3>
<?php
    // Consiste en introducir una variable en una cadena " o heredoc
    // para incrustar su valor dentro de la cadena.

    echo "El resultaddo es $resultado<br>";
?>

    <h3>Ánalisis complejo</h3>

<?php
    // En algunas situaciones nos encontramos ambigüedad en
    // una variable interpolada. Para ello usamos las llaves
    // y se elmina la ambigüedad

    $calle = "Trafalgar SQ";
    $numero = "3";
    $poblacion = "London";
    $distrito = "50000";

    echo "Mi direccion en Londres es $numeroth";
?>
<h2>Constantes</h2>
<p>Una constante es un valor con nombre que no puede cambiar de valor en el programa.
    Se le asigna
</p>
<?php
    define("PI", 3.14159);
    define("PRECIO_BASE", 1500);
    define("DIRECTORIO_SUBIDAS", "/uploads/archivos");

    echo "El número PI es " . PI . "<br>";
    $area_circulo = PI * PI * 5;
    echo "El área del círculo de radio 5 es $area_circulo<br>";

    $path_archivo = DIRECTORIO_SUBIDAS . "/archivo.pdf";
    echo "El archivo subido es $path_archivo";

    $precio_rebajado = PRECIO_BASE - PRECIO_BASE * 0.25;
    echo "El precio rebajado es $precio_rebajado";

    const SESION_USUARIO = 600;
    echo "La sesión de usuario finaliza en" . SESION_USUARIO . "segundos<br>";


    // Constantes predefinidas por PHP
    echo "El script es " . __FILE__ . " y la linea es " . __LINE__ . "<br>";

?>
</body>
</html>