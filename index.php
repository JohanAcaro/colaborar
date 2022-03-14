<?php
//1. obtener el factorial de un número

function obtieneFactorial($numero){
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++){
        $factorial = $factorial * $i;
    }
    echo "el factorial de ".$numero." es ".$factorial;
}

//2. resolución de una ecuacion de segundo grado

function ecSegundoGrado($num1,$num2,$num3)
{
    $a = $num1;
    $b = $num2;
    $c = $num3;

    $neg = -1;

    $menosb = $b * $neg;
    $oper1 = pow($b,2);
    $oper2 = 4*$a*$c;
    $resta = $oper1-$oper2;
    $raiz = pow($resta,(1/2));
    $dosa = 2*$a;

    $result1 = ($menosb + $raiz)/$dosa;
    $result2 = ($menosb - $raiz)/$dosa;

    echo"X<sub>1</sub> = $result1<br>";
    echo"X<sub>2</sub> = $result2";
}

//3. contar el número de "a" en una cadena de texto

function contarVocales($cadena){
    $vocalesEncontradas = 0;


    $cadena = strtolower($cadena);


    $longitud = strlen($cadena);

    for ($indice = 0; $indice < $longitud; $indice++) {


        if ($cadena[$indice] == "a") {
            $vocalesEncontradas++;
        }
    }
    echo "en la cadena ".$cadena." hay ".$vocalesEncontradas." letras 'a'.";
}
//4. número aleatorio entre 1 y 10 incluidos
function aleatorio()
{
    $num=rand(1,10);
    echo $num;
}

// obtener el número mayor dentro de un array
function mayor(array $array)
{
    echo "el mayor del array es ".max($array);
}

