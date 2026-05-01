<?php

$texto = "desarrollo";
$cantidad_letras = strlen($texto);
echo $cantidad_letras . "<br>";

$texto2 = "desarrollo web";
$texto_reemplazado = str_replace("web", "hola", $texto2);
echo $texto_reemplazado . "<br>";

$mayuscula = strtoupper($texto2);
echo $mayuscula . "<br>";

$texto3 = " desarollo web";
$texto_s_espacios = trim($texto3);
echo $texto3;

$texto4 = "Hola,Chau,No sé";
$array= explode(",", $texto4);
/*var_dump($array);*/


$numeros = array(1,2,3);
array_push($numeros,10);
/*var_dump($numeros);*/

$array3 = array_merge($array,$numeros);
var_dump($array3);

in_array(1, $numeros);