<?php

function sumarPares($numeros){
    $sumar_pares = 0;

    for($i=0; $i < count($numeros); $i++){
        if ($numeros[$i] % 2 == 0){
            $sumar_pares += $numeros[$i];
        }
    }

    return $sumar_pares;
}

$numeros = [10,29,8,1,2,15,99];

$pares = sumarPares($numeros);

echo "la suma de los números pares es: " . $pares;