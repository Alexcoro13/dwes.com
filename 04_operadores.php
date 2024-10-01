<?php 
    $SALTO = "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h2>Expresion, operador y operadores</h2>
    <p>Una expresión es una combinacion de operandos y operadores que arroja
        un resultado. Tiene tipo de datos, que depende del tipo de datos de sus
        operandos y de la operacion realizada<br>
        Un operador es un simbolo formando por uno, dos o tres caracteres que denota
        una operacion<br>
        Los operadores pueden ser:<br>
        - Unarios. Solo necesitan un operando.
        - Binarios. Utilizan tres operandos.
        - Ternarios. Utilizan tres operandos.
        Un operando es una expresión en si misma, siendo la más simple un literal o
        una variable, pero también puede ser un valor devuelto por una función o
        el resultado de otra expresión.<br>
        Las operaciones de una expresión no se ejecutan a la vez, sino en orden según
        la precedencia y asociatividad de los operadores. Esta puede alterar a conveniencia.
    </p>
    <h2>Operadores</h2>
    <h3>Asignación</h3>
<?php
    // El operador de asignacion es =
    $numero = 45;
    $resultado = $numero + 5 - 29;

    $sin_valor = NULL;



?>
    <h3>Operadores aritmetricos</h3>
<?php
    /*
        Binarios:
        + Suma
        - Resta
        * Multiplicación
        / Division
        % Módulo o Resto
        ** Exponenciación


        Unarios:
        + Conversion a entero
        - El opuesto
    */

    $numero1 = 15;
    $numero2 = 18;

    $suma = $numero + 10;
    $resta = 25 - $numero2;
    $opuesto = -$numero1;
    $multplicacion = $numero1 * 3;
    $modulo = $numero1 % 4;
    $division = $numero2 / 3;
    $modulo = $numero1 % 4;
    $potencia = $numero1 ** 2;

    echo "$numero1 y $numero2" . $SALTO;
    echo "$suma $resta $opuesto $multiplicacion $division $modulo $potencia" . $SALTO;

    $numero3 = "35";
    $numero4 = +$numero3;

    echo "El \$numero4 es $numero4 y su tipo es " . gettype($numero4) . $SALTO;

    // No lo hace con float
    $numero5 = PI;
    $numero6 = +$numero5;
    echo "El \$numero6 es $numero6 y su tipo es ". gettype($numero6) . SALTO;

    // El casting
    $numero1 = 35;
    $numero7 = 15;
    $resultado_entero = (int)($numero1 / $numero7);

    echo "El resultado de la division es $resultado_entero";
?>

    <h2>Asignación aumentada</h2>
<?php
    /* Operadores de asignación aumentada
    ++ Incremento
    -- Decremento
    += 
    -=   
    *=
    /=
    %=
    */

    $numero = 4;
    $numero++;  // Equivalente a $numero = $numero + 1;
    echo "Antes el numero era 4 ahora es $numero<br>";
    // 
    ++$numero; // Equivalente a $numero = $numero + 1;
    echo "Antes numero era 5 ahora es $numero<br>";

    $numero = 10;
    $resultado = $numero++ * 2; // Equivale a $resultado = $numero * 2; $numero = $numero + 1;
    echo  "El resultado es $resultado y el numero es $numero<br>";

    $numero = 10;
    $resultado = ++$numero * 2; //Equivale a $numero = $numero + 1; $resultado = $numero * 2;
    echo "El resultado es $resultado y el numeros es $numero<br>"; 

    $numero += 5; // Equivale a $numero = $numero + 5
    echo "El numero es $numero<br>";

    $numero -= 3;// Equivale a $numero = $numero - 5
    echo "El número es $numero<br>";

    $numero *= 3; //Equivale a $numero = $numero * 3;
    echo "El numero es $numero<br>";

    $numero %= 7; //Equivale a $numero = $numero % 7;
    echo "El numero $numero<br>";
?>
    <h2>Operadores Relacionales</h2>
<?php
    /*
        == Igual a
        === Idéntico a
        != Disntito
        !== Distinto valor o distinto tipo
        > Mayor que
        < Menor que
        >= Mayor o igual
        <= Menor o igual
        <=> Nave espacial
    */

    $n1 = 5;
    $cadena = "5";
    $n2 = 8;

    $resultado = $n1 == $n2;
    echo "Es n1 igual que n2:" . (int)$resultado . "<br>";

    $resultado = $n1 == $cadena;
    echo "Es n1 igual que cadena: " . (int)$resultado . "<br>";

    // Operador ===. Es True si los valores de los operandos son iguales y del mismo tipo.
    $resultado = $n1 === $cadena;
    echo "Es n1 igual que cadena: " . (int)$resultado . "<br>";

    // Operador !==. Es True si son distintos o de diferente tipo, false en caso contrario
    $resultado = $n1 != $cadena;
    echo "Es n1 distinto de cadena: " . (int)$resultado . "<br>";
   
    $resultado = $n1 !== $cadena;
    echo "Es n1 distinto que cadena " . (int)$resultado . "<br>";

    // Nave espacial
    // Si n1 es mayor que n2 -> 1
    // Si n1 es igual que n2 -> 0
    // Si n1 es menor que n2 -> 1
    // Se emplea para evitar esto:
    // if ($n1 < $n2) {
    // 
    // }
    // elsif ($n1 > $n2){
    //
    //}
    //else{
    //
    //}

    $resultado = $n1 <=> $n2;
    echo "Es n1 menor, igual o mayor que n2: $resultado<br>";

    $nombre1 = "1";
    $nombre2 = "a1depalas";
    $resultado = $nombre1 > $nombre2;
    echo "El resultado es " . (int)$resultado . "<br>";

    $nombre1 = "MariO";
    $nombre2 = "Maria";
    $resultado = $nombre1 < $nombre2;
    echo "El resultado es " . (int)$resultado . "<br>";
    

    $nombre1 = "maria";
    $nombre2 = "Maria";
    $resultado = $nombre1 === strtolower($nombre2);
    echo "El resultado es " . (int)$resultado . "<br>";
?>

    <h2>Operadores lógicos</h2>
<?php
    // AND  AND lógico o conjuncion logica
    // OR   Or logico o disyuncion logica
    // XOR  Or exclusivo
    // !    Not
    // &&   AND Logico
    // ||   Or logico

    $n1 = 9;
    $n2 = 5;
    $n3 = 10;
    $resultado = $n1 == $n2 OR $n2 > $n3;
    $resultado = $n1 == $n2 AND $n2 < $n3;

    echo "El resultado es " . (int)$resultado . "<br>";

    $resultado = $n1 == 9 OR $n2 < $n1 AND $n3 > 10; // Sale verdadero porque AND tiene preferencia sobre OR

    echo "El resultado es " . (int)$resultado . "<br>";

    $resultado1 = ($n1 == 9 OR $n2 < $n1) ? "True" : "False";
    $resultado = ($resultado1 and $n3 > 10) ? "True" : "False";

    echo "El resultado es ->:" . $resultado . " y " . $resultado1 . "<br>";
    
    $n1 = 9;
    $n2 = 5;
    $n3 = 10;
    $resultado = $n1 == 9 || $n2 < $n1 AND $n3 > 10;

    $resultado = $n1 + 5 / $n3 < $n1 ** 3 AND $n3 / 5 + $n2 * 2 >= $n1 * $n2 / $n3 OR
                $n1 - 3 % 2 == $n3 - 7;

    echo "El resultado de la expresion grande es: " . (int)$resultado . "<br>";
?>
</body>
</html>