<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos</title>
</head>
<body> 
    <h1>Tipos de datos 02tipos_datos.php</h1>
    <p>Tipos de datos escalares (primitivos)</p>
    <ul>
        <li>Booleanos</li>
        <li>Numero entero</li>
        <li>En coma flotante</li>
        <li>Cadena de caracteres</li>
    </ul>
    <p>Datos compuestos</p>
    <ul>
        <li>Array</li>
        <li>Objetos</li>
        <li>Callable</li>
        <li>Iterable</li> <!--Elemento que se puede recorrer-->
    </ul>
    <p>Tipos especiales</p>
    <ul>
        <li>Resource</li>
        <li>NULL</li>
    </ul>

    <h2>Boolean</h2>
    <p>Inicialmente las constantes True y False. Sin embargo, otros tipos
        de datos tienen conversión implicita al tipo booleano</p>

    <ul>
        <li>Numérico entero: 0 y el -0 es false cualquier otra cosa es true</li>
        <li>Númerico en coma flotatne: 0.0 y -0.0 es False, otro valore es True</li>
        <li>Un array con 0 elementos es False, con elementos es True</li>
        <li>El tipo especial NULL</li>
        <li>El tipo especial NULL es False, otro valor distinto de NULL es True</li>
        <li>Una variable no definida es False</li>
    </ul>

<?php
    $valor_booleano = True;
    $edad = 20;
    $mayor_edad = $edad > 18;

    echo "Mayor de edad es booleano: " .is_bool($mayor_edad);

    $dinero = 10;
    //Equivalente a $dinero != 0
    if ($dinero) echo "<br>Soy rico<br>";
    else echo "<br>Estoy arruinado<br>";

    $mi_nombre = "";
    if ($mi_nombre) echo "Me llamo $mi_nombre<br>";
    else echo "No tengo nombre";


?>

    <h2>Enteros</h2>
    <p>Numeros enteros en PHP son de 32 bits (depende de la plataforma). Pueden expresarse
        en diferentes notaciones</p>
<?php
    $numero_entero = 1234;
    echo "Él nuero entero es $numero_entero<br>";

    $numero_negativo = -123;
    echo "Un número negativo con - delante: $numero_negativo<br>";

    // Si quiero expresar un número entero en octal
    $numero_octal = 0123;
    echo "El numero 0123 en octal es en decimal: $numero_octal<br>";

    //Puedo mostrar un numero entero en octal
    echo "El numero $numero_octal es en octal " . decoct($numero_octal) . "<br>";

    //Número entero en hexadecimal
    $numero_hex = 0x8BAE;
    echo "El numero 0x8BAE en Hexadecimal es en decimal: $numero_hex<br>";

    //Mostrar un numero expresado en hexadecimal
    echo "El numero $numero_hex en hexadecimal es " . dechex($numero_hex) . "<br>";
    
    //Un numero entero en binario
    $numero_binario = 0b110101101;
    echo "El numero 110101101 es en decimal $numero_binario<br>";

    //Mostrar un numero expresado en binario
    echo "El numero $numero_binario en binario es " . decbin($numero_binario) . "<br>";

?>

    <h2>Numeros en punto flotante</h2>
    <p>El separador decimal es el punto . y se pueden expresar números muy grandes
        nuy pequeños mediante la notacion cientifica con base 10</p>

<?php
    $pi = 3.14159;
    echo "El numero PI es $pi<br>";
    echo "El pi con 2 decimales es" . round($pi, 4) . "<br>";

    $inf_int = 7.9e13;
    echo "Informacion que circula en Internet en un dia $inf_int<br>";


    $tamaño_virus = 0.2e-9;
    echo "Un virus tiene un tamaño de $tamaño_virus<br>";
?>
    <h2>Cadenas de caracteres</h2>
    <p>Un string o cadena es una serie de caracteres donde cada caracter equivale a un byte.
        Esto signifca que php solo admite 256 y por ello no ofrece soporte nativo a utf8.
        Un literal de tipo string  se expresa de 4 formas:</p>

    <ul>
        <li>Comillas Simpes</li>
        <li>Comillas dobles</li>
        <li>Heredoc</li>
        <li>Nowdoc</li>
    </ul>

    <h3>Comillas simpes</h3>
<?php
    // Una cadena encerrada entre comillas simples
    // Solo admite el caracter escape \' \\

    echo 'Esto es una cadena sencilla <br>';
    echo "Puedo poner una cadena
    en varaias lineas
    por que la sentencia
    no acaba hasta
    el punto y coma<br>";

    // No se reconocen caracteres de escape excepto ' y el \
    echo 'El mejor de la ciudad es 0\'Donnel<br>';
    echo 'La raiz del disco duro es C:\\<br>s';

    // El salto de linea no se expande
    echo 'Esta cadena tiene \nmás de una linea<br>';

    // No interpola variables
    $mi_nombre = "Manuel";

    echo 'Hola, $mi_nombre, ¿Como estas?';
?>
    <h3>Comillas dobles</h3>
    <p>La forma habitual de expresar cadenas de caracteres ya que  expande los caracteres
        de escape y las variables.</p>

<?php
    $cadena = "Esto es una cadena con comillas dobles";

    echo "Es cadena un objeto? " . is_object($cadena) . "<br>";

    if (is_object($cadena)) echo "Las cadenas en PHP son objeto";
    else echo "LAS CADENAS EN PHP NO SON OBJETO<br>";

    $con_secuencias_esc = "\t\El simbolo \$ se emplea para las variables \n y 
    si lo quieres en una cadena hay que escaparlo con ºº. Es mejor usar \" para
    delimitar las cadenas en lugar de ' <br>";

    echo $con_secuencias_esc;
?>

    <h3>Cadenas HEREDOC</h3>
    <p>Es una cadena muy larga que comienzan con <<< le sigue un identificador y justo
    despues un salto de linea. A continuacion se escribe la cadena, con los saltos de linea
    que necesitamos, podemos interpolar variables y poner caracteres de escape. Para finalizar
    hay que hacer un salto de linea y volver a poner el identificador</p>

<?php
    $cadena_hf = <<<HD
    Esto es una cadena
    heredoc que respeta los 
    saltos de lineal, le puedo
    poner variables como $mi_nombre y
    ademas secuencias de escape. El
    identificador no necesita \$ y tampoco
    usamos  \", simplemente la escribimos y
    acabamos con un salto de linea
    mas el identificador<br>
    HD;

    echo $cadena_hf;
?>

    <h3>Cadena NOWDOW</h3>
    <p>La cadena Nowdoc es como Heredoc con comillas simples. No se interpolan variables
        ni se reconocen secuencias de escapa mas alla de  \ y '. No se respetan los saltos de 
        lineas</p>

<?php 
    $cadena_nd = <<<'ND'
    Esto es una cadena nowdoc
    y el salto de linea no lo respeta
    no puedo meter variables
    y solo reconoce \\ y \' <br>
    ND;

    echo $cadena_nd;
?>

    <h2>Conversion de tipos de datos</h2>
    <p>Hay dos de conversiones: implicitas y explicitas. Las primeras ocurren cuando
        en una expresion hay operandos de diferente tipo. PHP convierte algunos
        de ellos para evaluar la expresion.</p>

<?php
    $cadena = '25';
    $numero = 8;
    $boolenao = True;
    $resultado = $cadena + $numero + $boolenao;

    echo "El resultado es $resultado";
?>

    <p>¡¡¡Importante!!!. Cuando se hace una conversion implicita solo afecta
        al operando, pero no a la variable. Es decir, la conversion de $cadena a entero
        solamente para evaluar la expresion, pero $cadena sigue siendo de tipo string</p>
    
<?php 
    $flotante = 3.5;

    $resultado = $cadena + $flotante + $numero + $boolenao;

    echo "El resultado ahora es $resultado<br>";

    $cadena = "25 marranos dan para mucho provecho";
    $resultado = $numero + $cadena;

    echo "El resultado es $resultado<br>";
    echo "Despues de la ultima conversacion<br>";
?>
    <p>Conversiones explicitas se conocen como casting o moldeo y se hacen
        precediendo la expresion con el tipo de datos a convertir entero
        paerenteis</p>

<?php
    // Si quiero convertir a un -> (int)expresion
    // Si quiero convertir a float -> (float)expresion
    // Si quiero convertir a string -> (String)expresion

    echo "Conversiones a entero<br>";

    $valor_booleano = True;
    $valor_convertido = (int)$valor_booleano;

    echo "El valor convertido a entero es $valor_convertido<br>";

    $valor_float = 3.14159;
    $valor_convertido = (int)$valor_float;
    echo "El valor convertido a entero es $valor_convertido<br>";
    $valor_redondeado = round($valor_float, 0);

    $valor_cadena = "123";
    $valor_convertido = (int)$valor_cadena;

    echo "El valor convertido a entero es $valor_convertido<br>";

?>
</body>
</html>