<?php

function factorial($numero){
    if($numero <=1){
        return 1;
    }

    $resultado = 1;
    for ($i = 2; $i <= $numero; $i++){
            $resultado *= $i;
    }

    return $resultado;
}

$factorial = factorial(10);

echo "el factorial es: " . $factorial;
