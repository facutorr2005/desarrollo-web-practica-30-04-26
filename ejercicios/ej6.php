<?php

function potencia($base, $exponente){
    $total = 1;

    for ($i = 1; $i <= $exponente; $i++){
        $total *= $base;
    }

    return $total;
}

$potencia = potencia(3, 7);

echo "La Potencia de los números ingresados es: " . $potencia;