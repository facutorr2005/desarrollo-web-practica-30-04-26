<?php

function numeroMenor($numeros){
    $valorMenor = $numeros[0];

    for ($i=0; $i < count($numeros) ;$i++){
        if($numeros[$i] < $valorMenor){
            $valorMenor = $numeros[$i];
        }
    }

    return $valorMenor;
}

$numeros = [10,50,39,182,49,0];
$menor = numeroMenor($numeros);

echo "El número menor es: " .  $menor;