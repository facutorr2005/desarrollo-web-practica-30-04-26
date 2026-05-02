<?php

function numeroMaximo($numeros){
    $valorMaximo = $numeros[0];

    for ($i=0; $i < count($numeros) ;$i++){
        if($numeros[$i] > $valorMaximo){
            $valorMaximo = $numeros[$i];
        }
    }

    return $valorMaximo;
}

$numeros = [10,50,39,182,49,0];
$mayor = numeroMaximo($numeros);

echo "El número mayor es: " .  $mayor;